<?php
require_once('connect.php');

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
    $idsp = $_POST['idspecialite'];
} else {
    $idsp = 0;
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
    $tel = 0;
}
/*if (isset($_FILES['photo']['name'])) {
    $nom_photo = $_FILES['photo']['name'];
} else {
    $nom_photo = "";
}
$image_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($image_tmp, "../images/" . $nom_photo);
*/
$requete = "INSERT INTO staff (nom,prenom,genre,idspecialite,login,email,role,tel) VALUES(?,?,?,?,?,?,?,?)";
$params = array($nom, $prenom, $genre, $idsp, $login, $email, $role, $tel);
$res = $db->prepare($requete);
$res->execute($params);
header("location:staff.php");
