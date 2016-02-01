<?php
$dsn='mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass ='';


$pdo = new PDO(
$dsn,
$user,
$pass 
);

$request=$pdo->query('SELECT * FROM user');
$result=$request->fetchAll();
$ligne = count($result);
	?>