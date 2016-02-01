<?php
function pairImp ( $base){

	if($base%2){
		return "1";
	}
	else{
		return "2";
	}
	
	

}
echo pairImp($_GET['a']);
?>