<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bienvenue</title>
</head>
<body>
<h1>Bienvenue </h1>



<?php

session_start();

$dsn='mysql:host=localhost;dbname=blog';
$user= 'root';
$pass='';

$pdo=new PDO(
$dsn,
$user,
$pass
);

$verify=$pdo->query(
'SELECT * FROM users WHERE pseudo="'.$_POST['pseudo'].'"'
);

$result=$verify->fetchAll();


if((count($result)>0) || $_POST['password']!=$_POST['password2']) {
header('Location: form-register.html');


}

else {
$request=$pdo->query(
'INSERT INTO users (prenom,nom,email,pseudo,password) VALUES ("'.$_POST['prenom'].'","'.$_POST['nom'].'" ,"'.$_POST['email'].'" ,"'.$_POST['pseudo'].'","'.$_POST['password'].'")');

header('Location: bienvenue.php');

}













/*

if (){
$_SESSION ['users']=$result[0];
header('Location: bienvenue.php');
}

else{
header('Location: inscription.html');
}
*/

?>
</body>
</html>

/*$result=$request->fetchAll();

if ( count ($result) > 0) {
	$_SESSION['users']= $result[0];
	header('Location: bienvenue.php');
} else {
	header('location: form-register.html');
}*/