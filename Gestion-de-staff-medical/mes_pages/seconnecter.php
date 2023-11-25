<?php
SESSION_start();
require_once('connect.php');
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = "";
}
if (isset($_POST['pwd'])) {
    $pwd = $_POST['pwd'];
} else {
    $pwd = "";
}

$requete = "SELECT * FROM staff WHERE email='$email' AND password=MD5('$pwd')";
$res = $db->query($requete);
//tester au moins qaund un utilisateur
if ($staff = $res->fetch()) {
    if ($staff['etat'] == 1) {
        $_SESSION['utilisateur'] = $staff;
        header("location:../index.php");
    } else {
        $_SESSION['erreur_login'] = "Erreur votre compte est desactive Veuiller contacter l'admidministrateur!";
        header('location:login.php');
    }
} else {
    $_SESSION['erreur_login'] = "verifier votre email ou votre mot de passe!";
    header('location:login.php');
}
