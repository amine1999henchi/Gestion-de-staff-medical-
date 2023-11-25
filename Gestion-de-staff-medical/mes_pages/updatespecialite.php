<?php
require_once('session.php');
require_once('connect.php');
if (isset($_POST['idsp'])) {
    $idsp = $_POST['idsp'];
} else {
    $idsp = 0;
}
if (isset($_POST['nomsp'])) {
    $nomsp = $_POST['nomsp'];
} else {
    $nomsp = "";
}
if (isset($_POST['listniveau'])) {
    $niveau = $_POST['listniveau'];
} else {
    $niveau = "";
}


$requete = "UPDATE specialites SET nomspecialite=? , niveau=? WHERE idspecialite=? ";
$params = array($nomsp, $niveau, $idsp);
$res = $db->prepare($requete);
$res->execute($params);
header("location:specialites.php");
