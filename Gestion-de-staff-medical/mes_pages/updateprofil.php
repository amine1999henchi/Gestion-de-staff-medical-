<?php
require_once('session.php');
require_once('connect.php');
if (isset($_POST['idst'])) {
    $idst = $_POST['idst'];
} else {
    $idst = 0;
}

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
} else {
    $nom = "";
}
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
} else {
    $prenom = "";
}
if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
} else {
    $genre = "";
}
if (isset($_POST['idspecialite'])) {
    $idspecialite = $_POST['idspecialite'];
} else {
    $idspecialite = 0;
}
if (isset($_POST['login'])) {
    $login = $_POST['login'];
} else {
    $login = "";
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = "";
}
if (isset($_POST['role'])) {
    $role = $_POST['role'];
} else {
    $role = "";
}
if (isset($_POST['tel'])) {
    $tel = $_POST['tel'];
} else {
    $tel = "";
}

$requete = "UPDATE staff SET nom=? , prenom=? , genre=?, idspecialite=?  ,login=? , email=? , role=? , tel=?
    WHERE idStaff=? ";
$params = $params = array($nom, $prenom, $genre, $idspecialite, $login, $email, $role, $tel, $idst);

$res = $db->prepare($requete);
$res->execute($params);
header("location:profil.php");
