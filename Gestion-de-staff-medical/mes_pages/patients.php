<?php
require_once('session.php');
require_once("connect.php"); //connecter et crer objet $db
//$req = "select * from specialites";
//$res = $db->query($req); //executer requette por select
if (isset($_GET['nompatient'])) {
    $nompatient = $_GET['nompatient'];
} else {
    $nompatient = "";
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

if ($nompatient == "") {
    $req = " SELECT * from patients 
    limit $size
    offset $offset";
    $req1 = "SELECT nomPatient  from patients ";
} else {
    $req = " SELECT * from patients 
              where((nomPatient like '%$nompatient%'))
              limit $size
              offset $offset";
    $req1 = "SELECT nomPatient  from patients 
            where ((nomPatient like '%$nompatient%'))";
}
$res = $db->query($req);

$res1 = $db->query($req1);
$nbr = $res1->rowCount();
if (($nbr % $size) === 0) {
    $nbrpage = ($nbr / $size);
} else {
    $nbrpage = (int) ($nbr / $size) + 1;
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Gestion des specialites</title>
    
    <!-- Elements de la SideBar : -->
    <link rel="stylesheet" href="../sidebar/css/style.css">

    <!-- FIN Elements de la SideBar : -->

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"></head>

<body>
<?php include_once('sidebar.php')?>

    <div class="container " style="font-family: Poppins;">
        <div class="card margintop shadow">
            <div class="card-header" style="
                color: #fff;
                background-color: #1C7469;">
                <h2 style="color: white;">
                    Chercher Patient:
                </h2>
            
                <form action="patients.php" method="Get" class="form-inline">
                    <div class="form-groupe">
                        <input type="text" name="nompatient" placeholder="tapez le de patient" class="form-control" value="<?php echo $nompatient ?>">&nbsp;
                    </div>

                    &nbsp; <button type="submit" class="btn btn-light">
                        <span class="fa fa-search"></span> 
                    </button>

                </form>
            </div>
        </div>
        <div class="card margintop1 float-center">
            <div class="card-header" style="
                color: #fff;
                background-color: #1C7469;">
                <h2 style="color: white;">Liste des Patient:</h2>
                <?php if ($nbr == 1) {
                    echo '(' . $nbr . ' patient)';
                } else if ($nbr == 0) {
                    echo 'Pas de patients !';
                } else {
                    echo '(' . $nbr . ' patients)';
                } ?>
            </div>
            <div class="card-body">
                <div class="pagination">
                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                        <?php include("nouveaupatient.php") ?>
                    <?php } ?>
                </div>
                </br>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Nom </th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Adresse mail</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">RDV</th>
                            <th scope="col">Etat</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($patient = $res->fetch()) { ?>
                            <tr>
                                <td><?php echo $patient["nomPatient"] ?> </td>
                                <td> <?php echo $patient["prenomPatient"] ?> </td>
                                <td> <?php echo $patient["emailPatient"] ?> </td>
                                <td> <?php echo $patient["telPatient"] ?></td>
                                <td> <?php echo $patient["rdv"] ?></td>
                                <td>

                                    <?php
                                    include("etatpatient.php");
                                    ?>

                                </td>
                                <td>
                                    <?php //include("notepatient.php") ?>
                                    <?php //include("editspecialite.php") ?> &nbsp;&nbsp;
                                    <?php //include("supprimerspecialite.php") ?>

                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
                <div>
                    <ul class="pagination pagination-md justify-content-center">
                        <?php for ($i = 1; $i <= $nbrpage; $i++) { ?>
                            <li class="page-item <?php if ($i == $page) echo 'active' ?>" aria-current="page">
                                <a class="page-link" href="patients.php?page=<?php echo $i; ?> &nompatient=<?php echo $nompatient ?>">
                                    <?php echo $i ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="../sidebar/js/jquery.min.js"></script>
    <script src="../sidebar/js/popper.js"></script>
    <script src="../sidebar/js/bootstrap.min.js"></script>
    <script src="../sidebar/js/main.js"></script>