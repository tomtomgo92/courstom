<?php

function fact ($n){

if($n===0){ //ou if($n < 2)
	return 1;
}else{
	return $n*fact($n-1);
}
}
echo fact ($_GET['a']);
?>