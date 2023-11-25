<?php
require_once('session.php');
if (isset($_SESSION['utilisateur'])) {
    require_once('connect.php');
    if (isset($_GET['idst'])) {
        $idst = $_GET['idst'];
    } else {
        $idst = 0;
    }
    if (isset($_GET['etat'])) {
        $etat = $_GET['etat'];
    } else {
        $etat = 0;
    }
    if ($etat == 0) {
        $etat = 1;
    } else {
        $etat = 0;
    }
    $requete = "UPDATE staff SET etat=? WHERE idStaff=? ";
    $params = array($etat, $idst);

    $res = $db->prepare($requete);
    $res->execute($params);
    header("location:staff.php");
} else {
    header("location:login.php");
}
