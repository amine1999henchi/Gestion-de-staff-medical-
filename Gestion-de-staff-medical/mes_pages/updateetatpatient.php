<?php
require_once('session.php');
require_once('connect.php');
if (isset($_POST['idpatient'])) {
    $idpatient = $_POST['idpatient'];
} else {
    $idpatient = 0;
}
echo $idpatient;
if (isset($_POST['present'])) {
    $present = $_POST['present'];
} else {
    $present = "Present";
}


$requete = "UPDATE patients SET etatPatient=? 
    WHERE idPatient=? ";
$params = array($present, $idpatient);

$res = $db->prepare($requete);
$res->execute($params);
