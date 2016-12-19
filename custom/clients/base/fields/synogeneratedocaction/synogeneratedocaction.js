({
    extendsFrom: 'RowactionField',
    events: {
        'click [data-action=link]': 'linkClicked',
        'click [data-action=download]': 'downloadClicked',
        'click [data-action=email]': 'emailClicked'
    },

    /**
     * SynoGenerateDoc Template collection.
     *
     * @type {Data.BeanCollection}
     */
    templateCollection: null,

    /**
     * Visibility property for available template links.
     *
     * @property {Boolean}
     */
    fetchCalled: false,

    /**
     * {@inheritDoc}
     * Create Document Template collection in order to get available template list.
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.templateCollection = app.data.createBeanCollection('Documents',null,{fields:['id','name']});
    },

    /**
     * {@inheritDoc}
     *
     * Prevents the "Email Documents" button from rendering if the user
     * doesn't have a valid email configuration or the user chooses to use an
     * external email client. RFC 2368 suggests only the "subject" and "body"
     * headers are safe headers and that other, unsafe headers do not need to
     * be supported by the "mailto" implementation. We cannot guarantee that
     * the "mailto" implementation for the user will allow for adding a Documents
     * attachment. To be consistent with existing application behavior, the
     * "Email Doc" option should be hidden for users when they cannot use the
     * internal email client.
     *
     * @private
     */
    _render: function() {
        var emailClientPreference = app.user.getPreference('email_client_preference');
        if (this.def.action === 'email' && emailClientPreference.type !== 'sugar') {
            this.hide();
        } else {
            this._super('_render');
        }
    },

    /**
     * Define proper filter for Documents template list.
     * Fetch the collection to get available template list.
     * @private
     */
    _fetchTemplate: function() {
        this.fetchCalled = true;
        var collection = this.templateCollection;
        collection.filterDef = {
                                'syno_doc_template_c': 'syno_generate_doc_' + this.module.toLowerCase(),
                                'status_id' : { "$not_in" : ["Draft", "Expired"] }
                                };
        collection.fetch({fields:['id','name']});
    },

    /**
     * Build download link url.
     *
     * @param {String} templateId Document Template id.
     * @return {string} Link url.
     * @private
     */
    _buildDownloadLink: function(templateId) {
        var urlParams = $.param({
            'module': this.module,
            'record': this.model.id,
            'entryPoint': 'dlSynoGenerateDoc',
            'syno_generate_doc_id': templateId
        });
        return '?' + urlParams;
    },

    /**
     * Build email doc link url.
     *
     * @param {String} templateId Document id.
     * @return {string} Email doc url.
     * @private
     */
    _buildEmailLink: function(templateId) {
        var urlParams = $.param({
            'module': this.module,
            'record': this.model.id,
            'entryPoint': 'dlSynoGenerateDoc',
            'syno_generate_doc_id': templateId,
            'email_action': 'EmailLayout'
        });
        return 'bwc/index.php?' + urlParams;
    },

    /**
     * Handle the button click event.
     * Stop event propagation in order to keep the dropdown box.
     *
     * @param {Event} evt Mouse event.
     */
    linkClicked: function(evt) {
        evt.preventDefault();
        evt.stopPropagation();
        if (this.templateCollection.dataFetched) {
            this.fetchCalled = !this.fetchCalled;
        } else {
            this._fetchTemplate();
        }
        this.render();
    },

    /**
     * Handles email doc link.
     *
     * @param {Event} evt Mouse event.
     */
    emailClicked: function(evt) {
        var templateId = this.$(evt.currentTarget).data('id');
        app.router.navigate(this._buildEmailLink(templateId), {
            trigger: true
        });
    },

    /**
     * Handles download doc link.
     *
     * Authenticate in bwc mode before triggering the download.
     *
     * @param {Event} evt The `click` event.
     */
    downloadClicked: function(evt) {
        var templateId = this.$(evt.currentTarget).data('id');

        app.bwc.login(null, _.bind(function() {
            this._triggerDownload(this._buildDownloadLink(templateId));
        }, this));
    },

    /**
     * Download the file once authenticated in bwc mode.
     *
     * @param {String} url The file download url.
     * @protected
     */
    _triggerDownload: function(url) {
        app.api.fileDownload(url, {
            error: function(data) {
                // refresh token if it has expired
                app.error.handleHttpError(data, {});
            }
        }, {iframe: this.$el});
    },

    /**
     * {@inheritDoc}
     * Bind listener for template collection.
     */
    bindDataChange: function() {
        this.templateCollection.on('reset', this.render, this);
        this._super('bindDataChange');
    },

    /**
     * {@inheritDoc}
     * Dispose safe for templateCollection listeners.
     */
    unbindData: function() {
        this.templateCollection.off(null, null, this);
        this.templateCollection = null;
        this._super('unbindData');
    },

    /**
     * {@inheritDoc}
     * Check additional access for Document Module.
     */
    hasAccess: function() {
        var synoGeneradeDocAccess = app.acl.hasAccess('view', 'Documents');
        return synoGeneradeDocAccess && this._super('hasAccess');
    }
})
