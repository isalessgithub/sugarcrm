({
    extendsFrom: 'FlexListView',

    initialize: function(options) {
        this.plugins = _.union(this.plugins || [], ['MassCollection']);
        this._super('initialize', [options]);
        this.type = 'flex-list';
    }
})