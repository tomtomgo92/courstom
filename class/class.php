<?php 

/**
* 
*/
class Humain {

	var $dateDeNaissance;
	var $sexe;
	var $poids;
	var $taille;

	function __construct($dateDeNaissance, $sexe, $poids, $taille){
		$this-> dateDeNaissance = $dateDeNaissance;
		$this-> sexe = $sexe;
		$this-> poids = $poids;
		$this-> taille = $taille;
	}

	function manger ($quantite){
		$this->poids += $quantite;
	}

		function grandir ($tailleAnnee){
		$this->taille += 10 * $tailleAnnee;
	}
		function dodo($dormir){
			$this->poids -= $dormir;
		}
}
$h = new Humain('01/01/1971', 0, 80, 170);
$h ->manger(10);
$h ->grandir(10);
$h ->dodo(10);

print_r($h);