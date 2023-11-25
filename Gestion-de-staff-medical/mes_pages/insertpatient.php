<?php
require_once('session.php');
require_once('connect.php');
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = "";
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
if (isset($_POST['tel'])) {
    $tel = $_POST['tel'];
} else {
    $tel = 0;
}
if (isset($_POST['rdv'])) {
    $rdv = $_POST['rdv'];
} else {
    $rdv = 0;
}
$requette1 = "INSERT INTO patients (nomPatient,prenomPatient,emailPatient,telPatient) VALUES (?,?,?,?) ";
$paramt = array($nom, $prenom, $email, $tel);
$resul = $db->prepare($requette1);
$resul->execute($paramt);
header("location:patients.php");
