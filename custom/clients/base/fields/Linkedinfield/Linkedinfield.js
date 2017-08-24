 ({ direction: 'ltr', plugins: ['EllipsisInline'], initialize: function (options) { this._super("initialize", arguments);
if (app.utils.isTruthy(this.def.gen)) { this.def.readonly = true; } }, format: function (value) {
 if (value && !value.match(/^([a-zA-Z]+):\/\//)) { value = "http://" + value; } return value; }, unformat: function (value) {
 value = (value != '' && value != 'http://') ? value.trim() : ""; return value; }, getFieldElement: function () {
 return this.$('a'); }, _render: function () { this.def.link_target = _.isUndefined(this.def.link_target) ? '_blank' : this.def.link_target;
app.view.Field.prototype._render.call(this); } }) 