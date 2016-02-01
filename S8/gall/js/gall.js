$(function(){
	$('.miniature').css('border','1px white solid').css('cursor','pointer');
	$('img:first').css('border','1px black solid');
	$('.miniature').click(function(){
		$('img').css('border','1px white solid');
		$(this).css('border','1px black solid');
		var nom= $(this).attr('id');
		$('#grand').attr('src',nom);
	});

});