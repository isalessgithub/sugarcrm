({
    className: 'action-disposition-drawer',

    html: '',

    field_controller: {},

    element: '',

    _htmleditor: null,

    events: {
        'click a[name="close_button"]': 'closeDispositionDrawer',
        'click #show_reminder_time_checkbox': 'showReminderTimeField'
    },

    initialize: function (options) {

        // invoke parent init
        this._super('initialize', [options]);

        this.html = options.context.get('button_data');

        this.field_controller = options.context.get('field_controller');

        this.element = options.context.get('element');
    },

    /**
     * Loads data for view
     */
    loadData: function () {

        // render
        this._render();

        var self = this;

        setTimeout(function () {
            if (self.field_controller.html_element.attr('data-type') == 'edit')
                self.initTinyMCEEditor();
        }, 1000);

        // remove processing msg
        app.alert.dismiss('loading');
    },

    _render: function () {

        this._super('_render');
    },

    /**
     * Closes the action disposition drawer
     */
    closeDispositionDrawer: function () {
        // close drawer
        app.drawer.close();
    },

    /**
     * Shows/hides reminder time drop down
     */
    showReminderTimeField: function () {

        $('#reminder_time_wrapper').toggle();
    },

    /**
     * Build tinyMCE config
     *
     * @returns {{script_url: string, theme: string, skin: string, plugins: string, entity_encoding: string, browser_spellcheck: boolean, theme_advanced_toolbar_location: string, theme_advanced_toolbar_align: string, theme_advanced_statusbar_location: string, theme_advanced_resizing: boolean, schema: string, template_external_list_url: string, external_link_list_url: string, external_image_list_url: string, media_external_list_url: string, theme_advanced_path: boolean, theme_advanced_source_editor_width: number, theme_advanced_source_editor_height: number, inlinepopups_skin: string, relative_urls: boolean, remove_script_host: boolean, width: number}}
     */
    getTinyMCEConfig: function () {
        return {
            script_url: 'include/javascript/tiny_mce/tiny_mce.js',
            theme: "advanced",
            skin: "sugar7",
            plugins: "style,table,advhr,advimage,advlink,iespell,inlinepopups,media,searchreplace,print,contextmenu,paste,noneditable,visualchars,nonbreaking,xhtmlxtras",
            entity_encoding: "raw",
            browser_spellcheck: true,
            // theme_advanced_buttons1: "code,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,fontsizeselect,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,iespell,media,advhr,|,print,|",
            // theme_advanced_buttons2: "cut,copy,paste,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,|,forecolor,backcolor,tablecontrols,|,",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "none",
            theme_advanced_resizing: true,
            schema: "html5",
            template_external_list_url: "lists/template_list.js",
            external_link_list_url: "lists/link_list.js",
            external_image_list_url: "lists/image_list.js",
            media_external_list_url: "lists/media_list.js",
            theme_advanced_path: false,
            theme_advanced_source_editor_width: 450,
            theme_advanced_source_editor_height: 400,
            inlinepopups_skin: "sugar7modal",
            relative_urls: false,
            remove_script_host: false,
            width: 450
        };
    },

    /**
     * Initialize tinyMCE
     */
    initTinyMCEEditor: function () {
        var self = this;
        if (_.isEmpty(this._htmleditor)) {
            var config = this.getTinyMCEConfig();
            var __superSetup__ = config.setup;
            config.setup = function (editor) {
                if (_.isFunction(__superSetup__)) {
                    __superSetup__.call(this, editor);
                }
                self._htmleditor = editor;
                self._htmleditor.onInit.add(function (ed) {
                    // self.setEditorContent(self.getFormattedValue());
                    $(ed.getWin()).blur(function (e) {

                    });
                });
                self._htmleditor.onDeactivate.add(function (ed) {

                });
                self._htmleditor.onSetContent.add(function (ed) {

                    self._saveOnSetContent = true;
                });
                self._htmleditor.onChange.add(function (ed, l) {
                    self._isDirty = true;
                });
            };
            config.oninit = function (inst) {
                self.context.trigger('tinymce:oninit', inst);
            };

            var ed_modal = $('.custom-edit').find('table').last().find('tr').first().find('td');

            ed_modal.tinymce(config);

        }
    },
})