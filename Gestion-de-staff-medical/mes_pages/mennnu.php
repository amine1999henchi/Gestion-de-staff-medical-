<!-------------------------------------------------------------------->
<?php
require_once('session.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Website menu 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../nav/css/style.css">

    <script src="../nav/js/jquery.min.js"></script>
    <script src="../nav/js/popper.js"></script>
    <script src="../nav/js/bootstrap.min.js"></script>
    <script src="../nav/js/main.js"></script>

</head>

<body>
    <section class="ftco-section" style="padding-top:2em 0;">
        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="../index.php">LE MEDICAL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto mr-md-3">
                            <li class="nav-item active"><a href="dashbord.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="staff.php" class="nav-link">Personnels</a></li>
                            <li class="nav-item"><a href="patients.php" class="nav-link">Patients</a></li>
                            <li class="nav-item"><a href="specialites.php" class="nav-link">Spécialités</a></li>
                            <li class="nav-item"><a href="statistiques.php" class="nav-link">Statistiques</a></li>
                            <li class="dropdown nav-item d-md-flex align-items-center">
                                <a href="#" class="dropdown-toggle nav-link d-flex align-items-center justify-content-center icon-cart p-0" id="dropdown04" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="dropdown04">
                                    <div>
                                        <p>Compte:</p>
                                        <button type="button" class="btn btn-dark">
                                            <?php
                                            echo $_SESSION['utilisateur']['email'];
                                            ?>
                                        </button>
                                    </div>
                                    <a type="button" class="btn btn-warning p-2 mt-2" href="editprofil.php?idst=<?php echo $_SESSION['utilisateur']['idStaff'] ?>">Edit Profil</a>
                                    <!-- Button trigger modal -->
                                    <br>
                                    <button type="button" class="btn btn-danger p-2 mt-2" data-toggle="modal" data-target="#exampleModal">
                                        Log out
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END nav -->
        </div>

    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Déconnexion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Voulez-vous vraiment vous déconnecter?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button onclick="window.location.href='sedeconnecter.php'" type="button" class="btn btn-danger">Déconnexion</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<?php
require_once('session.php');
require_once('connect.php');
if (isset($_POST['idst'])) {
    $idst = $_POST['idst'];
} else {
    $idst = 0;
}

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
} else {
    $nom = "";
}
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
} else {
    $prenom = "";
}
if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
} else {
    $genre = "";
}
if (isset($_POST['idspecialite'])) {
    $idspecialite = $_POST['idspecialite'];
} else {
    $idspecialite = 0;
}
if (isset($_POST['login'])) {
    $login = $_POST['login'];
} else {
    $login = "";
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = "";
}
if (isset($_POST['role'])) {
    $role = $_POST['role'];
} else {
    $role = "";
}

if (isset($_FILES['photo']['name'])) {
    $nom_photo = $_FILES['photo']['name'];
} else {
    $nom_photo = "";
}
$image_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($image_tmp, "../images/" . $nom_photo);
if (!empty($nom_photo)) {
    $requete = "UPDATE staff SET nom=? , prenom=? , genre=?, idspecialite=?, photo=?, login=? , email=? , role=?
     WHERE idStaff=? ";
    $params = array($nom, $prenom, $genre, $idspecialite, $nom_photo, $login, $email, $role, $idst);
} else {
    $requete = "UPDATE staff SET nom=? , prenom=? , genre=?, idspecialite=?  ,login=? , email=? , role=? 
    WHERE idStaff=? ";
    $params = $params = array($nom, $prenom, $genre, $idspecialite, $login, $email, $role, $idst);
}

$res = $db->prepare($requete);
$res->execute($params);
header("location:login.php");
---------------
<?php
require_once('session.php');
require_once('connect.php');
if (isset($_POST['idst'])) {
    $idst = $_POST['idst'];
} else {
    $idst = 0;
}

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
} else {
    $nom = "";
}
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
} else {
    $prenom = "";
}
if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
} else {
    $genre = "";
}
if (isset($_POST['idspecialite'])) {
    $idspecialite = $_POST['idspecialite'];
} else {
    $idspecialite = 0;
}
if (isset($_POST['login'])) {
    $login = $_POST['login'];
} else {
    $login = "";
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = "";
}
if (isset($_POST['role'])) {
    $role = $_POST['role'];
} else {
    $role = "";
}
if (isset($_POST['tel'])) {
    $tel = $_POST['tel'];
} else {
    $tel = 0;
}
/*if (isset($_FILES['photo']['name'])) {
    $nom_photo = $_FILES['photo']['name'];
} else {
    $nom_photo = "";
}
$image_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($image_tmp, "../images/" . $nom_photo);
if (!empty($nom_photo)) {
    $requete = "UPDATE staff SET nom=? , prenom=? , genre=?, idspecialite=?, photo=?, login=? , email=? , role=?
     WHERE idStaff=? ";
    $params = array($nom, $prenom, $genre, $idspecialite, $nom_photo, $login, $email, $role, $idst);
} else {
    $requete = "UPDATE staff SET nom=? , prenom=? , genre=?, idspecialite=?  ,login=? , email=? , role=? 
    WHERE idStaff=? ";
    $params = $params = array($nom, $prenom, $genre, $idspecialite, $login, $email, $role, $idst);
}
*/
$requete1 = "UPDATE staff SET nom=? , prenom=? , genre=?, idspecialite=? ,login=? , email=? , role=?, $tel=?  
WHERE idStaff=? ";
$params = array($nom, $prenom, $genre, $idspecialite, $login, $email, $role, $tel, $idst);
$resultat = $db->prepare($requete1);
$resultat->execute($params);
header("location:login.php");
--
<?php
require_once('session.php');
require_once("connect.php");
if (isset($_GET['nomstaff'])) {
    $nomstaff = $_GET['nomstaff'];
} else {
    $nomstaff = "";
}
if (isset($_GET['idspecialite'])) {
    $idspecialite = $_GET['idspecialite'];
} else {
    $idspecialite = 0;
}
//pagination
if (isset($_GET['size'])) {
    $size = $_GET['size'];
} else {
    $size = 5;
}
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1) * ($size);

$reqspecialite = "SELECT * FROM specialites";
$resspecialite = $db->query($reqspecialite);

if ($idspecialite == 0) {
    $req = "select *
              from specialites as s ,staff as f
              where s.idspecialite=f.idspecialite
              and nom like '%$nomstaff%'
              limit $size
              offset $offset";
    $req1 = "select idStaff  from staff
             where nom like '%$nomstaff%' ";
} else {
    $req = "select *
        from specialites as s ,staff as f
        where s.idspecialite=f.idspecialite
        and nom like '%$nomstaff%'
        and s.idspecialite=$idspecialite
        limit $size
        offset $offset";
    $req1 = "select idStaff  from staff
            where nom like '%$nomstaff%'
            and idspecialite=$idspecialite";
}

$res = $db->query($req);
$res1 = $db->query($req1);
$nbrstaff = $res1->rowCount();
if (($nbrstaff % $size) === 0) {
    $nbrpage = ($nbrstaff / $size);
} else {
    $nbrpage = (int) ($nbrstaff / $size) + 1;
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Gestion des Staffs</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script language="javascript" src="../js/teste.js"></script>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="container " style="font-family: Poppins;">
        <div class="card margintop shadow">
            <div class="card-header" style="
                color: #fff;
                background-color: #087ee1;">
                <h2 style="color: white;">
                    Chercher un compte:
                </h2>
            </div>
            <div class="card-body">
                <form action="staff.php" method="Get" class="form-inline">
                    <div class="form-groupe">
                        <input type="text" name="nomstaff" placeholder="Cherchez un Utilisateur " class="form-control" value="<?php echo $nomstaff ?>">&nbsp;
                    </div>
                    <label for="idspecialite" class="mr-2">Specialite</label>
                    <select id="idspecialite" name="idspecialite" class="form-control" onchange="this.form.submit()">
                        <option value=0>Toutes les specialites</option>
                        <?php while ($specialite = $resspecialite->fetch()) { ?>
                            <option value="<?php echo $specialite['idspecialite'] ?>" <?php if ($specialite['idspecialite'] == $idspecialite) echo "selected" ?>>
                                <?php echo $specialite['nomspecialite'] ?></option>
                        <?php } ?>
                    </select>
                    &nbsp; <button type="submit" class="btn btn-light mr-2">
                        <span class="fa fa-search"></span>
                    </button>

                </form>

            </div>
        </div>
        <div class="card margintop1 float-center">
            <div class="card-header" style="
                color: #fff;
                background-color: #087ee1;">
                <h2 style="color: white;">Liste du Personnels:</h2>
                <?php if ($nbrstaff == 1) {
                    echo '(' . $nbrstaff . ' Personnel)';
                } else if ($nbrstaff == 0) {
                    echo 'Pas de personnels !';
                } else {
                    echo '(' . $nbrstaff . ' Personnels)';
                } ?>
            </div>
            <div class="card-body">
                <div class="pagination">
                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                        <button type="button" class="btn btn-primary">
                            <a class="text-light" href="nouveaustaff.php">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span></i>&nbsp;&nbsp;Ajouter Utilisateur
                            </a>
                        </button>
                    <?php } ?>
                </div>
                </br>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Spécialité</th>
                            <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                <th scope="col">Action</th>
                            <?php } ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($staff = $res->fetch()) { ?>
                            <tr>
                                <td><?php echo $staff['idStaff'] ?></td>
                                <td><?php echo $staff['nom'] ?></td>
                                <td><?php echo $staff['prenom'] ?></td>
                                <td><?php echo $staff['login'] ?></td>
                                <td><?php echo $staff['email'] ?></td>
                                <td><?php echo $staff['role'] ?></td>
                                <td><?php echo $staff['nomspecialite'] ?></td>
                                <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-circle float-left ml-2" data-toggle="modal" data-target="#exampleModal1">
                                            <i class="fas fa-edit"></i>
                                        </button>
<!-- Modal1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier l'utlisateur</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- editer profil -->
                                                    <div class="modal-body">
                                                        <!-- Form Start -->
                                                        <form method="POST" action=".php" class="form" enctype="multipart/from-data">
                                                            <div class="form-group">
                                                                <label for="idst">ID :</label>
                                                                <input type="hidden" name="idst" class="form-control" id="idst" aria-describedby="stf" placeholder="idst" value=<?php ?>>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="nom">Nom</label>
                                                                    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" placeholder="Nom" value=<?php echo $staff['nom'];  ?>>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="prenom">Prénom</label>
                                                                    <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" placeholder="Prénom" value=<?php echo $staff['prenom']; ?>>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="login">Login</label>
                                                                    <input type="text" name="login" class="form-control" id="login" aria-describedby="login" placeholder="Login" value=<?php echo $staff['login'];; ?>>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="col">
                                                                        <label for="idspecialite">Specialite</label>
                                                                        <select id="idspecialite" name="idspecialite" class="form-control">
                                                                            <?php while ($specialite = $res1->fetch()) { ?>
                                                                                <option value="<?php echo $specialite['idspecialite'] ?>" <?php if ($idspecialite == $specialite['idspecialite']) echo "selected" ?>>
                                                                                    <?php echo $specialite['nomspecialite'] ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-groupe">
                                                                <label for="genre">Genre</label><br />
                                                                <label><input type="radio" name="genre" value="homme" <?php if (strtolower($staff['genre']) == "homme") echo "checked" ?>>Homme</label>
                                                                <label><input type="radio" name="genre" value="femme" <?php if (strtolower($staff['genre']) == "femme") echo "checked" ?>>Femme</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail" value=<?php echo $staff['email']; ?>>
                                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="numerotel">Numéro de Téléphone</label>
                                                                <input type="text" name="tel" class="form-control" id="numerotel" placeholder="Numéro de Téléphone" value=<?php echo $staff['tel']; ?>>
                                                            </div>
                                                            <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="jourssdetravail">Jours de travail</label>
                                                                        <input type="date" class="form-control" id="jourssdetravail" placeholder="Jours de travail" value=<?php echo $staff['Jours_de_travail']; ?>>
                                                                    </div>
                                                                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                                                        <div class="col">
                                                                            <label for="role">Status</label>
                                                                            <select id="role" name="role" class="form-control">
                                                                                <option value="admin" <?php if ($staff['role'] == "admin") echo "selected" ?>>Admin</option>
                                                                                <option value="visiteur" <?php if ($staff['role'] == "visiteur") echo "selected" ?>>Visiteur</option>
                                                                            </select>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            <?php } ?>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                                <button type="submit" name="envoye" class="btn btn-primary">Sauvegarder</button>
                                                            </div>

                                                        </form>
                                                        <!-- Form End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;&nbsp;
                                        <a type="button" onclick="return confirm('Etes-vous sûr de vouloir supprimer cette entrée?')" href="supprimerstaff.php?idst=<?php echo $staff['idStaff']  ?>">
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                        &nbsp;&nbsp;
                                        <a class="text-light " href="activerstaff.php?idst=<?php echo $staff['idStaff'] ?>&etat=<?php echo $staff['etat'] ?>">
                                            <?php
                                            if ($staff['etat'] == 1) {
                                                echo '<button class="btn btn-danger">Inactif </button>';
                                            } else {
                                                echo '<button class="btn btn-success">Active</button>';
                                            }
                                            ?>
                                        </a>
                                    </td>
                                <?php } ?>
                            </tr>

                        <?php  } ?>
                        
                    </tbody>
                </table>
                <div>
                    <ul class="pagination pagination-md justify-content-center">
                        <?php for ($i = 1; $i <= $nbrpage; $i++) { ?>
                            <li class="page-item <?php if ($i == $page) echo 'active' ?>" aria-current="page">
                                <a class="page-link" href="staff.php?page=<?php echo $i ?>&nomstaff=<?php echo $nomstaff ?>&idspecialite=<?php echo $idspecialite ?>"><?php echo $i ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>