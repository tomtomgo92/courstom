<?php

session_start();

$dsn='mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass ='';


$pdo = new PDO(
$dsn,
$user,
$pass 
);

$request=$pdo->query(
'SELECT * FROM user WHERE email="'.$_POST['email'].'" AND mdp="'.$_POST['password'].'"'
	);
$result=$request->fetchAll();

if ( count ($result) > 0) {
	$_SESSION['user']= $result[0];
	header('Location: admin.php');
} else {
	header('location: test.html');
}
