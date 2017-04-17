
app.Router = Backbone.Router.extend({

	routes : {
		":query(/*params)" : "hashChange", // #search/kiwis/p7
		"" : "hashChange"
	},

	hashChange : function(section, url) {
/*
		var route = [];
		var params;// = {};
		var hash;
		if (url)hash= url.split('?');

		if(hash && hash.length>1){
			eval('params={'
					+ hash[1].replace(/=/g, ':\'').replace(/&/g, '\',')
					+ '\'}');
		}

		if (hash)route = hash[0].split('/');
		*/
		
		var model = new app.data.models.FormModel();
		var form = new app.view.Form({model:model});
		var formMobile = new app.view.FormMobile({model:model});
		//form.model.set('query',{route:route,params:params});
		//console.log(section);
		//model.getCamp({cid:idCamp,so:source});
	}

});

var analytics = true;

$(function() {
	//log('start');
	if(isMobile.any())$('body').addClass('mobile');

	app.router = new app.Router();

	Backbone.history.start();	
});


