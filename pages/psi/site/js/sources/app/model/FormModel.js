app.data.models.FormModel = app.models.Model.extend({
		name: 'campPopupModel',
		camp:null,

    	getCamp : function(obj){
    		var $self = this;
    		this.url.camp.getCamp(obj,function(data){
    			//$self.set('camp',data.camp);
    			/*
    			if(analytics && data.camp){
    				woopra.identify({
    				    source: data.camp.owner.nombre,
    				}).push();

    				woopra.track('camp', {
    				    id: data.camp.idCamp,
    				    email:  data.camp.email,
    				    type: data.camp.evento.tipo.nombre,
    				    ownerId:data.camp.owner.idOwner,
    				    ownerName:data.camp.owner.nombre,
    				    sourcer:data.camp.source.nombre
    				});
    			}
 				*/
    		});
    	},
    	send : function(params){
    		//var camp = this.get('camp');
    		var self = this;

    		//IDENTYFY
    		/*if(analytics && camp){
				woopra.identify({
				    nombre: params.nombre + " " + params.apellido,
				    email: params.email
				}).push();
    		}*/

    		this.url.camp.insertCamp({params:params,evento:evento,owner:owner,source:source},function(data){
    			//mandar mensaje a pantalla
    			//if(data.email == true){
    			//console.log(camp);
    				self.showTrueAlert(tipo==1);
    				//$('body').find('.loading-form').hide();
    				$('body').find('form').find('button').hide();
    				//Url.setHash(camp.redirec);
    			//}

    		});
    	},
    	showTrueAlert:function(isReserva){
    		toastr.options = {
    	    		  "closeButton": false,
    	    		  "debug": false,
    	    		  "positionClass": "toast-bottom-right",
    	    		  "onclick": null,
    	    		  "showDuration": "1000",
    	    		  "hideDuration": "1000",
    	    		  "timeOut": "15000",
    	    		  "extendedTimeOut": "15000",
    	    		  "showEasing": "swing",
    	    		  "hideEasing": "linear",
    	    		  "showMethod": "fadeIn",
    	    		  "hideMethod": "fadeOut"
    	    		}

    		//var camp = this.get('camp');
    		if(isReserva) toastr.success("Nos comunicaremos con usted a la brevedad.","Su reserva fue concretada");
    		else toastr.success("Nos comunicaremos con usted a la brevedad.", "Su consulta fue enviada");
    	},
		onModalClosed : function(){
			//Url.setHash('#/home');
		}

});