<?php
function puissance($chiffre, $nbre){
 
        if($nbre >0){
                return $chiffre*$chiffre*($nbre - 1);
        }
}

	echo puissance ($_GET['a'], $_GET['b']);