<?php
require_once('session.php');
require_once('connect.php');
if (isset($_GET['idst'])) {
    $idst = $_GET['idst'];
} else {
    $idst = 0;
}


$requete = "SELECT * FROM staff WHERE idStaff=$idst ";
$res = $db->query($requete);
$staff = $res->fetch();

$nom = $staff['nom'];
$prenom = $staff['prenom'];
$genre = $staff['genre'];
$idspecialite = $staff['idspecialite'];
$photo = $staff['photo'];
$login = $staff['login'];
$email = $staff['email'];
$role = strtolower($staff['role']);

$req1 = "SELECT * FROM specialites ";
$res1 = $db->query($req1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>edition d'un staff medical</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <div class="card margintop ">
            <div class="card-header bg-info bg-gradient">
                edition d'un utilisateur </div>
            <div class="card-body">
                <form method="POST" action="updateprofil.php" class="form" enctype="multipart/from-data">
                    <!--enctype envoyer des fichier type binaire-->
                    <div class="form-groupe">
                        <label for="st">id du staff :</label>
                        <input id="st" type="hidden" name="idst" class="form-control" value="<?php echo $idst ?>" />
                        <?php echo $idst ?>
                    </div>
                    <div class="form-groupe">
                        <label for="nom">Nom</label>
                        <input id="nom" type="text" name="nom" placeholder="Nom" class="form-control" value="<?php echo $nom ?>">
                    </div>
                    <br />
                    <div class="form-groupe">
                        <label for="prenom">Prenom</label>
                        <input id="prenom" type="text" name="prenom" placeholder="Prenom" class="form-control" value="<?php echo $prenom ?>">
                    </div>
                    <div class="form-groupe">
                        <label for="genre">Genre:</label><br />
                        <label><input type="radio" name="genre" value="homme" <?php if (strtolower($genre) == "homme") echo "checked" ?>>Homme</label>
                        <label><input type="radio" name="genre" value="femme" <?php if (strtolower($genre) == "femme") echo "checked" ?>>Femme</label>
                    </div>
                    <div class="form-groupe">
                        <label for="login">Login</label>
                        <input id="login" type="text" name="login" placeholder="Login" class="form-control" value="<?php echo $login ?>">
                    </div>
                    <br />
                    <div class="form-groupe">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $email ?>">
                    </div>
                    <br />
                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                        <div class="form-groupe">
                            <label for="role">Role</label>
                            <select id="role" name="role" class="form-control">
                                <option value="admin" <?php if ($role == "admin") echo "selected" ?>>Admin</option>
                                <option value="visiteur" <?php if ($role == "visiteur") echo "selected" ?>>Visiteur</option>
                            </select>

                        </div>
                    <?php } ?>
                    <br />
                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                        <div class="form-groupe">
                            <label for="idspecialite">Specialite</label>
                            <select id="idspecialite" name="idspecialite" class="form-control">
                                <?php while ($specialite = $res1->fetch()) { ?>
                                    <option value="<?php echo $specialite['idspecialite'] ?>" <?php if ($idspecialite == $specialite['idspecialite']) echo "selected" ?>>
                                        <?php echo $specialite['nomspecialite'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            </br>
                        </div>
                    <?php } ?>
                    <div class="form-groupe">
                        <label for="photo">Photo</label><br />
                        <input id="photo" type="file" name="photo" value="<?php echo $photo ?>">
                    </div>
                    <br />
                    <button type="submit" name="envoyer" class="btn btn-success">
                        <span class="fa fa-save"></span> enregistrer
                    </button>
                    &nbsp;&nbsp;
                    <a href="modifierpwd.php?idst=<?php echo $idst ?>"> Modifier le mot de passe</a>
                </form>

                </form>
            </div>
        </div>
    </div>


</body>