$('body').ready(function(){	
	var h= $(window).height() - 80;
	$('#contents').css('height',h+'px');	
	$('.ytvideo').attr('height',$(window).height()+'px');
	
});

$( window ).resize(function() {
	var h= $(window).height() - 80;
	$('#contents').css('height',h+'px');
		
		
		//console.log($(window).width());
		$('.ytvideo').attr('height',$(window).height()+'px');
});