<?php
$dsn = 'mysql:host=localhost;dbname=gestion_staff_medical'; //connect source name
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $db = new PDO($dsn, $user, $pass, $options); //start a new connection with pdo class
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    die('Erreur de connection' . $e->getMessage());
}
