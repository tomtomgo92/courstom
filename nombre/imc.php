<?php
function imc ( $taille ,$poids ){

	$imc = $poids / ($taille * $taille);
	echo $imc . "\n";

if($imc < 18.5){
	return "Sous poids";
}
elseif($imc < 30){
	return "OK";
}
else{
	return "C'est cuit";
}

}
echo imc($_GET['a'], $_GET['b']);
?>