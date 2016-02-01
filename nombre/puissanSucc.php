<?php
function puissSucc ($nombre, $puissance){

	for($i=0; $i<=$puissance; $i++){
		echo $nombre**$i . "<br>";
}
}
echo puissSucc ($_GET['a'],$_GET['b']);