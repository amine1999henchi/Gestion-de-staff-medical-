<?php
session_start();
if (isset($_SESSION['utilisateur'])) {
    require_once('connect.php');
    if (isset($_GET['idst'])) {
        $idst = $_GET['idst'];
    } else {
        $idst = 0;
    }

    $requete = "DELETE FROM staff WHERE idStaff=? ";
    $param = array($idst);
    $ress = $db->prepare($requete);
    $ress->execute($param);
    header("location:staff.php");
} else {
    header("location:login.php");
}
