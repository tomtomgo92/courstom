<?php

session_start();

if ( empty($_SESSION['users']) ) {
	header('Location: form-register.html');
	die();
}

echo "Bonjour " . $_SESSION['users']$_POST['email'];