<?php
function plusZero ($nombre){

	for($i=0; $i<=$nombre; $i++){
		echo $i;
}
}
echo plusZero ($_GET['a']);