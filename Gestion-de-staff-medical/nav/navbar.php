<?php include_once('connection.php');


?>

<!doctype html>
<html lang="en">

<head>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./nav/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="./index.php">LE MEDICAL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto mr-md-3">
                            <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
                            <li class="nav-item"><a href="./personnel.php" class="nav-link">Personnels</a></li>
                            <li class="nav-item"><a href="./patients.php" class="nav-link">Patients</a></li>
                            <li class="nav-item"><a href="./statistiques.php" class="nav-link">Statistiques</a></li>
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
                                    <a type="button" class="btn btn-warning p-2 mt-2" href="./profil.php">Edit Profil</a>
                                    <!-- Button trigger modal -->
                                    <br>
                                    <button type="button" class="btn btn-danger p-2 mt-2" data-toggle="modal" data-target="#exampleModal">
                                        Log out
                                    </button>
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
                    <button onclick="window.location.href='logout.php'" type="button" class="btn btn-danger">Déconnexion</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>