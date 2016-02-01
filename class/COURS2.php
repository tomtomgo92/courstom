<?php


if ( empty($_SESSION['user']) ) {
	header('Location: login.php');
	die();
}


if ( !empty($_POST) ) {

	$forum = new Forum( $pdo );
	$forum->creerTopic(		
		$_SESSION['user']['id'],
		$_POST['title'],
		$_POST['description']
		);


	header('Location: ./');
	die();
}