$(document).on("ready" , function(){
	//se agrega y remueve clase para el menu
	$(".panel .panel-heading a").on("click" , function(){
		$('.panel-heading').removeClass('selectPanel');
		$(this).parent().parent().addClass('selectPanel');
		console.log($(this))
	})
})