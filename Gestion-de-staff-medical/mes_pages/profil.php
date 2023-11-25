<?php
require_once('session.php');
require_once('connect.php');

$idspecialite = $_SESSION['utilisateur']['idspecialite'];
$req = "SELECT * FROM specialites AS s ,staff AS st WHERE (st.idspecialite=$idspecialite And s.idspecialite=$idspecialite) ";
$res = $db->query($req);
$tab = $res->fetch();

$idStaf = $tab['idStaff'];
$nom = $tab['nom'];
$prenom = $tab['prenom'];
$login = $tab['login'];
$tel = $tab['tel'];
$nomspecialite = $tab['nomspecialite'];
$email = $tab['email'];
$genre = $tab['genre'];
//
$req1 = "SELECT * FROM specialites ";
$res1 = $db->query($req1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Elements de la SideBar : -->
    <link rel="stylesheet" href="../sidebar/css/style.css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>

</head>

<body> <?php include("sidebar.php");        ?>


    <div class="container pb-4">
        <!------ Include the above in your HEAD tag ---------->

        <div class="container emp-profile shadow mt-4 mb-4 mr-4 ml-4 pt-4 pb-4" ">
    <h1>Editez votre profil</h1>

      <form method=" post">
            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" style="max-width:200px;" class=" rounded-circle img-thumbnail">

            <div class="row mt-4">

                <div class="col-md-6 mb-6">
                    <div class=" profile-head">
                        <h3>
                            <?php echo $nom . " " . $prenom ?>
                        </h3>
                        <h5><i>
                                <?php echo $nomspecialite; ?></i>
                        </h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-8 mt-4">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Login</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $login; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $nom . " " . $prenom ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $email; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $tel; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $nomspecialite; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Experience</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col-md-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6">
                                    <p>6 months</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br />
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                <button type="button" class="btn btn-warning m-2" data-toggle="modal" data-target="#exampleModal1">
                    <span class="icon text-white-50 mr-2">
                        <i class="fas fa-edit"></i>
                    </span>
                    Modifier Personnel
                </button>
                <button type="button" class="btn btn-danger  m-2" data-toggle="modal" data-target="#exampleModal2">
                    <span class="icon text-white-50 mr-2">
                        <i class="fas fa-plus"></i>
                    </span>
                    Supprimer Personnel
                </button>
            </div>
            </form>
        </div>
    </div>

    <!--  FINLISTE DU PERSONNELS -->
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
                    <form method="POST" action="updateprofil.php" class="form" enctype="multipart/from-data">
                        <div class="form-group">
                            <label for="idst">ID :<?php echo $idStaf; ?></label>
                            <input type="hidden" name="idst" class="form-control" id="idst" aria-describedby="stf" placeholder="idst" value=<?php echo $idStaf; ?>>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" placeholder="Nom" value=<?php echo $nom; ?>>
                            </div>
                            <div class="col">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" placeholder="Prénom" value=<?php echo $prenom; ?>>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="login">Login</label>
                                <input type="text" name="login" class="form-control" id="login" aria-describedby="login" placeholder="Login" value=<?php echo $login; ?>>
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
                            <label><input type="radio" name="genre" value="homme" <?php if (strtolower($genre) == "homme") echo "checked" ?>>Homme</label>
                            <label><input type="radio" name="genre" value="femme" <?php if (strtolower($genre) == "femme") echo "checked" ?>>Femme</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail" value=<?php echo $tab['email']; ?>>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="numerotel">Numéro de Téléphone</label>
                            <input type="text" name="tel" class="form-control" id="numerotel" placeholder="Numéro de Téléphone" value=<?php echo $tab['tel']; ?>>
                        </div>
                        <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                            <div class="row">
                                <div class="col">
                                    <label for="jourssdetravail">Jours de travail</label>
                                    <input type="date" class="form-control" id="jourssdetravail" placeholder="Jours de travail" value=<?php echo $tab['Jours_de_travail']; ?>>
                                </div>
                                <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                    <div class="col">
                                        <label for="role">Status</label>
                                        <select id="role" name="role" class="form-control">
                                            <option value="admin" <?php if ($tab['role'] == "admin") echo "selected" ?>>Admin</option>
                                            <option value="visiteur" <?php if ($tab['role'] == "visiteur") echo "selected" ?>>Visiteur</option>
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


    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verification suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Voulez-vous vraiment supprimer cet utilisateur !
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
<script src="../sidebar/js/jquery.min.js"></script>
    <script src="../sidebar/js/popper.js"></script>
    <script src="../sidebar/js/bootstrap.min.js"></script>
    <script src="../sidebar/js/main.js"></script>
    <!-- FIN Elements de la SideBar : -->


</html>