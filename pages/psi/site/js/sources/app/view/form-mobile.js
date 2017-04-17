app.view.FormMobile = app.View.extend({
	el:'div.form-mobile',
	opened:false,
	initialize: function() {
		var ui = $(this.el);

		
		this.onLoaded();
	},

	onLoaded:function(){		
		
		var self = this;
		var ui = $(this.el);
		ui.find("form").validate(Validation.validate(ui.find("form"),function(form){

			self.model.send(form);
			return false;

		}));				
	}

});
