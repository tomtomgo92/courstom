$(function(){
	$('#ajouter').click(){
		$(#bon).toggle(5000)
			   .queue(function(){
			   	$('#mauvais')animate({left: '+=200'}, 'slow')
			   	.animate({top: '-=200', slow})
.animate({top: '+=200', 'left': '-=200'},slow)
.animate({top: '-=200', slow})
$(this).dequeue();
	});
			   $('#retour').click(function(){
			   	$('img').queue(function(){
});