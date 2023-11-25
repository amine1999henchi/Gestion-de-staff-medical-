<?php

require_once('connect.php');


$req3 = "SELECT * 
        from specialites as s, staff as t
        WHERE s.idspecialite = t.idspecialite
        ORDER BY RAND() 
        LIMIT 4
        ";

$result2 = $db->query($req3);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../sidebar/css/style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!--<script language="javascript" src="../js/teste.js"></script>-->
</head>

<body>

    <?php //require_once('../navbar/nav.php');
    ?>

    <?php //include("menu.php") 
    ?>


        <?php include_once('sidebar.php')?>
    

            <div class="container">
                <!-- ----------------------------- START STAT CARD ------------------------------------------------ -->

                <div class="container-fluid pt-3 pb-5 mb-5" style="font-family: Poppins;">
                    <div class="container">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1>Statistiques</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    NOMBRE TOTALE DU PERSONNEL</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                    $sth = $db->prepare('SELECT count(*) as total from staff');
                                                    $sth->execute();
                                                    print_r($sth->fetchColumn());
                                                    ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-md fa-2x "></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    NOMBRE D'ABSCENCES</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                    $req4 = "SELECT * FROM seance WHERE presence=0";
                                                    $result4 = $db->query($req4);
                                                    $nbrabsence = $result4->rowCount();
                                                    echo $nbrabsence;
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-alt-slash fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body float-center">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre de Spécialités
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <?php
                                                            $sth = $db->prepare('SELECT count(*)  from specialites ');
                                                            $sth->execute();
                                                            print_r($sth->fetchColumn());
                                                            ?></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Pending Requests</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ----------------------------- END STAT CARD ------------------------------------------------ -->
                        <!-- ----------------------------- START Personnel CARD ------------------------------------------------ -->


                        <div>
                            <div class="row">
                                <h1>Listes du Personnels:</h1>
                            </div>
                            <div class="row">
                                <?php
                                while ($specialite = $result2->fetch()) { ?>
                                    <div class='col-md-6 col-xl-3 mb-2'>

                                        <div class='card m-b-30 my-2 mb-2'>

                                            <div class='card-body col-sm pt-4'>
                                                

                                                <div class='col-14 card-title align-self-center mb-2'>

                                                    <h4><?php echo $specialite["nom"] . ' ' . $specialite["prenom"] ?> </h4>
                                                </div>
                                                <div class='col-12 card-title align-self-center mb-2'>

                                                    <p><?php echo $specialite["nomspecialite"] ?> </p>
                                                </div>
                                            </div>
                                            <ul class='list-group list-group-flush'>
                                                <li class='list-group-item'><i class='fa fa-envelope float-right'></i>Email : <a href='#'><?php echo $specialite["email"] ?></a></li>
                                                <li class='list-group-item'><i class='fa fa-phone float-right'></i>Tel : <?php echo $specialite["tel"] ?> </li>
                                            </ul>
                                            <div class='card-body'>
                                                <div class='float-right btn-group btn-group-sm'>
                                                    <?php include("editstaffdashbord.php") ?> &nbsp;&nbsp;
                                                    <?php include("supprimerstaffdashbord.php") ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                                <div>
                                    <button onclick="window.location.href='staff.php'" type='button' class='btn btn-primary btn-block mt-4 mb-4'>Load more</button>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- ----------------------------- END Personnel CARD ------------------------------------------------ -->



                </div>


            </div>
            <!-- Footer -->
            <footer class="text-center text-lg-start bg-light text-muted mt-2 pt-1 ">
                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-gem me-3"></i>Le Medical
                                </h6>
                                <p>
                                    Logiciel de gestion hospitalière automatise
                                    les rendez-vous, la planification, la conformité réglementaire
                                    .
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Pages
                                </h6>
                                <p>
                                    <a href="./index.php" class="text-reset">Accueil</a>
                                </p>
                                <p>
                                    <a href="./personnel.php" class="text-reset">Personnels</a>
                                </p>
                                <p>
                                    <a href="./patients.php" class="text-reset">Patients</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Contact
                                </h6>
                                <p><i class="fas fa-home me-3"></i> Tunis, Tunisie</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    LeMedical@gestion.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i> + 216 55 123 123</p>
                                <p><i class="fas fa-print me-3"></i> + 216 55 123 123</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                    © 2021 Copyright | <span class="text-reset fw-bold">Projet d'été 2021</span>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
    </div>
</body>
<script src="../sidebar/js/jquery.min.js"></script>
    <script src="../sidebar/js/popper.js"></script>
    <script src="../sidebar/js/bootstrap.min.js"></script>
    <script src="../sidebar/js/main.js"></script>
</html>