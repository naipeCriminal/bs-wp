$(document).on("ready" , function(){
	$(".panel .panel-heading a").on("click" , function(){
		$('.panel-heading').removeClass('selectPanel');
		$(this).parent().parent().addClass('selectPanel');
		console.log($(this))
	})
})