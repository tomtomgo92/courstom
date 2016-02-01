$(function(){

$('#imageLittle').mouseover(function(){	
$(this).fadeOut(1000);	
$('#imageBig').fadeIn(1000).css('cursor', 'pointer');
});

$('#imageBig').mouseout(function(){
$(this).fadeOut(1000);	
$('#imageLittle').fadeIn(1000).css('cursor', 'pointer');
});

});