<?php
require_once('session.php');
require_once('connect.php');
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

$requete = "INSERT INTO specialites (nomspecialite,niveau) VALUES (?,?) ";
$param = array($nomsp, $niveau);
$res = $db->prepare($requete);
$res->execute($param);
header("location:specialites.php");
