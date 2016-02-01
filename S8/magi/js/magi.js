$(function(){
	$('#affiche').click(function(){
		$('img').first().show('slow', function showNextOne(){
			$(this).next('img').show('slow', showNextOne);
	});		
		});	

	$('#cache').click(function(){
		$('img').first().hide('slow', function showNextOne(){
			$(this).next('img').hide('slow', showNextOne);
	});
});
});