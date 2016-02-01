<?php 

session_start();

if(empty($_SESSION['user']) ){
	header('Location: exemple.php');
	die();
}

echo "Bienvenue " . $_SESSION['user']['email'];