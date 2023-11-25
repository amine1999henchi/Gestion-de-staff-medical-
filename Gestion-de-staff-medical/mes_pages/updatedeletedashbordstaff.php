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
    $res = $db->prepare($requete);
    $res->execute($param);
    header("location:dashbord.php");
} else {
    header("location:login.php");
}
