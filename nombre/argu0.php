<?php
function arguZero ($nombre){

	for($i=0; $i<=$nombre; $i++){
		echo $i*$i;
}
}
echo arguZero ($_GET['a']);