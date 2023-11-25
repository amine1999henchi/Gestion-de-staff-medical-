<?php
require_once('session.php');
if (isset($_SESSION['utilisateur'])) {
    require_once('connect.php');
    if (isset($_GET['idse'])) {
        $idse = $_GET['idse'];
    } else {
        $idse = 0;
    }
    if (isset($_GET['presence'])) {
        $presence = $_GET['presence'];
    } else {
        $presence = 0;
    }
    if ($presence == 1) {
        $presence = 0;
    } else {
        $presence = 1;
    }

    $requetepre = "UPDATE seance SET presence=? WHERE idseance=? ";
    $par = array($presence, $idse);

    $res = $db->prepare($requetepre);
    $res->execute($par);
    header("location:seance.php");
} else {
    header("location:login.php");
}
