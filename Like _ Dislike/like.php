<?php
require '_db.php';

// On veut appeller ce fichier en POST
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    http_response_code(403);
    die();
}

// On peut voter pour ce type de contenu
$accepted_refs = ['articles'];
if(!in_array($_POST['ref'], $accepted_refs)){
    http_response_code(403);
    die();
}

if(!isset($_SESSION['user_id'])){
    http_response_code(403);
    die('Vous devez être connecté pour voter');
}

// On déclenche le vote
require 'class/Vote.php';
$vote = new Vote($pdo);
if($_POST['vote'] == 1){
    $success = $vote->like($_POST['ref'], $_POST['ref_id'], $_SESSION['user_id']);
}else{
    $success = $vote->dislike($_POST['ref'], $_POST['ref_id'], $_SESSION['user_id']);
}

$req = $pdo->prepare("SELECT like_count, dislike_count FROM {$_POST['ref']} WHERE id = ?");
$req->execute([$_POST['ref_id']]);
header('Content-type: application/json');
$record = $req->fetch(PDO::FETCH_ASSOC);
$record['success'] = $success;
die(json_encode($record));