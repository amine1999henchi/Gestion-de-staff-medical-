<?php
require_once('session.php');
require_once('connect.php');
if (isset($_POST['dateseance'])) {
    $dateseance = $_POST['dateseance'];
} else {
    $dateseance = "";
}
if (isset($_POST['heuredebut'])) {
    $heuredebut = $_POST['heuredebut'];
} else {
    $heuredebut = "";
}
if (isset($_POST['heurefin'])) {
    $heurefin = $_POST['heurefin'];
} else {
    $heurefin = "";
}
if (isset($_POST['idpersonnel'])) {
    $idper = $_POST['idpersonnel'];
} else {
    $idper = 0;
}

$requette1 = "INSERT INTO seance (dateseance,heuredebut,heurefin,idStaff) VALUES (?,?,?,?) ";
$paramt = array($dateseance, $heuredebut, $heurefin, $idper);
$resul = $db->prepare($requette1);
$resul->execute($paramt);
header("location:seance.php");
