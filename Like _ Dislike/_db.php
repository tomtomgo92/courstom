<?php
session_start();
if(isset($_GET['user'])){
    $_SESSION['user_id'] = $_GET['user'];
}
$pdo = new PDO('mysql:host=localhost;dbname=blog2', 'root', 'root', [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
