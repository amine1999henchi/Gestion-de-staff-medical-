<?php
session_start();
if (isset($_SESSION['utilisateur'])) {
    require_once('connect.php');
    if (isset($_GET['idseance'])) {
        $idseance = $_GET['idseance'];
    } else {
        $idseance = 0;
    }
    $reqt = "select count(*) countseance from seance where idseance=$idseance ";
    $rest = $db->query($reqt);
    $tab = $rest->fetch();
    $nbrseance = $tab['countseance'];
    if ($nbrseance == 0) {
        $requetese = "DELETE FROM seance WHERE idseance=? ";
        $paramse = array($idseance);
        $resse = $db->prepare($requetese);
        $resse->execute($paramse);
        header("location:seance.php");
    } else {
        $msg = "Suppression impossible: Vous devez supprimer tous les staffs qui ont des seances";
        header("location:alerte.php?message=$msg");
    }
    /*
    $requetese = "DELETE FROM seance WHERE idseance=? ";
    $paramse = array($idseance);
    $resse = $db->prepare($requetese);
    $resse->execute($paramse);
    header("location:seance.php");*/
} else {
    header("location:login.php");
}
