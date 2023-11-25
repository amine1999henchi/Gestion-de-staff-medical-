<?php
require_once('session.php');
require_once("connect.php");
if (isset($_GET['dateseance'])) {
    $dateseance = $_GET['dateseance'];
} else {
    $dateseance = "";
}
if (isset($_GET['reset'])) {
    $dateseance = "";
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
if ($dateseance == "") {
    $reqstafff = " SELECT * FROM staff as st ,specialites as sp ,seance as se 
                  where ((st.idspecialite=sp.idspecialite)and (st.idStaff=se.idStaff)) 
                  ORDER BY dateseance
                  limit $size
                  offset $offset";
    $req1 = "SELECT *  from seance ";
} else {
    $reqstafff = " SELECT * FROM staff as st ,specialites as sp ,seance as se 
                  where ((st.idspecialite=sp.idspecialite)and(dateseance='$dateseance')and (st.idStaff=se.idStaff))
                  ORDER BY dateseance
                  limit $size
                  offset $offset";
    $req1 = "SELECT *  from seance
            where dateseance='$dateseance'";
}
$res = $db->query($reqstafff);

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script language="javascript" src="../js/teste.js"></script>
</head>

<body>
<?php include_once('sidebar.php')?>

    <div class="container " style="font-family: Poppins;">
        <div class="card margintop shadow">
            <div class="card-header" style="
                color: #fff;
                background-color: #1C7469;">
                <h2 style="color: white;">
                    Chercher la data de la seance:
                </h2>
            </div>
            <div class="card-body">
                <form action="seance.php" method="Get" class="form-inline">
                    <div class="form-groupe">
                        <input type="date" name="dateseance" placeholder="tapez la date" class="form-control" value="<?php echo $dateseance ?>">&nbsp;
                    </div>
                    &nbsp; <button type="submit" class="btn btn-success">
                        <span class="fa fa-search"></span> Search
                    </button>&nbsp;
                    <div class="form-groupe">
                        <button type="text" name="reset" class="btn btn-danger" value="">RESET</button>&nbsp;
                    </div>

                </form>
            </div>
        </div>
        <div class="card margintop1 float-center">
            <div class="card-header" style="
                color: #fff;
                background-color: #1C7469;">
                <h2 style="color: white;">Info Sur les seances</h2>
                <?php if ($nbr == 1) {
                    echo '(' . $nbr . ' seance)';
                } else if ($nbr == 0) {
                    echo 'Pas de seances !';
                } else {
                    echo '(' . $nbr . ' seances)';
                } ?>
            </div>
            <div class="card-body">
                <div class="pagination">
                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                        <?php include("nouvelleseance.php") ?>
                    <?php } ?>
                </div>
                </br>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Date Seance</th>
                            <th scope="col">Heure Debut</th>
                            <th scope="col">Heure Fin</th>
                            <th scope="col">Personnel</th>
                            <th scope="col">Speacilite</th>
                            <th scope="col">Presence</th>
                            <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                <th scope="col">Action </th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($seance = $res->fetch()) { ?>

                            <tr class="<?php if ($seance['presence'] == 0) echo "bg-secondary" ?>">
                                <td><?php echo $seance['dateseance'] ?></td>
                                <td><?php echo $seance['heuredebut'] ?></td>
                                <td><?php echo $seance['heurefin'] ?></td>
                                <td><?php echo $seance['nom'] . " " . $seance['prenom'] ?></td>
                                <td><?php echo $seance['nomspecialite'] ?></td>

                                <td>
                                    <a class="text-light " href="activerseance.php?idse=<?php echo $seance['idseance'] ?>&presence=<?php echo $seance['presence'] ?>">
                                        <?php
                                        if ($seance['presence'] == 1) {
                                            if ($seance['genre'] == "homme") {
                                                echo '<button class="btn btn-success">PRESENT</button>';
                                            } else {
                                                echo '<button class="btn btn-success">PRESENTE</button>';
                                            }
                                        } else {
                                            if ($seance['genre'] == "homme") {
                                                echo '<button class="btn btn-danger">ABSENT</button>';
                                            } else {
                                                echo '<button class="btn btn-danger">ABSENTE</button>';
                                            }
                                        }
                                        ?>
                                    </a>
                                </td>
                                <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                    <td>
                                        <?php include("editseance.php") ?> &nbsp;&nbsp;
                                        <?php include("supprimerseance.php") ?>
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
                                <a class="page-link" href="seance.php?page=<?php echo $i; ?>">
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