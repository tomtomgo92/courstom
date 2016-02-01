$(function(){
	$('.img1').mouseover(function(){
		$(this).attr('src','../img/00.jpg').css('cursor','pointer');
	});

	$('.img1').mouseout(function(){
		$(this).attr('src','../img/01.jpg');
	});

});