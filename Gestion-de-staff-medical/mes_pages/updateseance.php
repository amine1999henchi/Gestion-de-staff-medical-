<?php
require_once('session.php');
require_once('connect.php');

if (isset($_POST['idseance'])) {
    $idseance = $_POST['idseance'];
} else {
    $idseance = "";
}
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
if (isset($_POST['idStaff'])) {
    $idpers = $_POST['idStaff'];
} else {
    $idpers = 0;
}


$requete = "UPDATE seance SET dateseance=? , heuredebut=?, heurefin=? , idStaff=? WHERE idseance=? ";
$paramts = array($dateseance, $heuredebut, $heurefin, $idpers, $idseance);
$resul = $db->prepare($requete);
$resul->execute($paramts);
header("location:seance.php");
