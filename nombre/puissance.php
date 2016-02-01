<?php
function puissance ($base, $exp){
	 return $base**$exp;
}
echo puissance($_GET['a'], $_GET['b']);
?>