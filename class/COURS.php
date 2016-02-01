<?php 

//class> propriété> méthode 

class PDO{
	var $dsn = "aaaa";
	var $user = "1"; // Un scaler ne neccessite pas de calcul
	var $pass = 1 + 1; // Pas scaler
	function query ( $sql ){

	}
}

Exemple :

class humain{
	var $dateDeNaissance;
    var $sexe;
    var $poids;
    var $taille;
function marcher ( $destination ) {

  }
function dormir ( $duree ) {

  }
function manger ( $nourriture ) {

  }
function conduire ( $vehicule, $destination ){

  }
}



class PDO{
	var $dsn, $user, $pass;

	function __contruct ( $dsn, $user, $pass ) {
           $this -> dsn = $dsn;
            $this -> user = $user;
             $this -> pass = $pass;
	}
}
new PDO('a', 'b', 'c');

------------------------------------------

class PDO0{
	var $dsn, $user, $pass;

	function __contruct ( $dsn, $user, $pass ) {
           $this->dsn = $dsn;
            $this->user = $user;
             $this->pass = $pass;
             // dsn / user / pass = var $dsn, $user, $pass;
	}
}

$objet = new PDO0("$dsn", "user", "pass");
$objeta = new PDO0 ("dsna", "usera", "passa");

echo $objet->dsn;
echo $objeta->dsn;

/*
print_r($objet);
print_r($objeta); */

-----------------------------------------------------
ICI C EST IMPORTANT MA GUEULE ET CA RENVOIE AU COURS 2 DONC NE L OUBLIE PAS FDP

class Forum {

	var $pdo;

	function __contruct ( $pdo ){

		$this->pdo = $pdo;


	}
	function creerTopic ( $userId, $title, $description ){

    $this->pdo->query(
		'INSERT INTO topics (creation, creatorId, title, description) VALUES (' .
		'"' . date('Y-m-d H:i:s') . '", "' . $userId . '", "' . $title . '", "' . $description . '");'
	);

	}
	function creerMessage ( $utilisateur, $topic, $message ){

	}
	function listeTopics () { 
	}
	function getTopic ( $topicId ){ //prendre Topic

	}
	function getProfil ( $userId ){ // prendre profil

	}
	function listeMessage ( $topicId ){

	}
}
