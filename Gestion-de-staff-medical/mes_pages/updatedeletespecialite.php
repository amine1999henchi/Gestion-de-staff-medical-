<?php
session_start();
if (isset($_SESSION['utilisateur'])) {
    require_once('connect.php');
    if (isset($_GET['idsp'])) {
        $idsp = $_GET['idsp'];
    } else {
        $idsp = 0;
    }
    $req1 = "select count(*) countstag from staff where idspecialite=$idsp ";
    $res1 = $db->query($req1);
    $tab = $res1->fetch();
    $nbr1 = $tab['countstag'];
    if ($nbr1 == 0) {
        $requete = "DELETE FROM specialites WHERE idspecialite=? ";
        $param = array($idsp);
        $res = $db->prepare($requete);
        $res->execute($param);
        header("location:specialites.php");
    } else {
        $msg = "Suppression impossible: Vous devez supprimer tous les staffs inscris dans cette specialite";
        header("location:alerte.php?message=$msg");
    }
} else {
    header("location:login.php");
}
