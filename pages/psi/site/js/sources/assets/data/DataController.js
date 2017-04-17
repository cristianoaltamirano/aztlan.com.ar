(function(app) {

	app.data.DataController = {
		
	camp: {
		getCamp : function(parametros,callback){		
			var params = {
					url : '../../services/camp/getCamp/index.php',
					data: parametros,
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},
		insertCamp : function(parametros,callback){		
			var params = {
					url : '../../services/camp/insertCamp/index.php',
					data: parametros,
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		}
	}

};

})(window.app);