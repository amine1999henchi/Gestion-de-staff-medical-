<?php
require_once('session.php');
require_once("connect.php"); //connecter et crer objet $db
//$req = "select * from specialites";
//$res = $db->query($req); //executer requette por select
if (isset($_GET['nomsp'])) {
    $nomsp = $_GET['nomsp'];
} else {
    $nomsp = "";
}
if (isset($_GET['listniveau'])) {
    $niveau = $_GET['listniveau'];
} else {
    $niveau = "tous";
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

if ($niveau == "tous") {
    $req = " select * from specialites
    where nomspecialite like '%$nomsp%'
    limit $size
    offset $offset";
    $req1 = "select nomspecialite  from specialites where nomspecialite like '%$nomsp%'";
} else {
    $req = " select * from specialites
                 where niveau='$niveau'
                 and nomspecialite like '%$nomsp%'
                 limit $size
                 offset $offset";
    $req1 = "select nomspecialite  from specialites
            where niveau='$niveau'
            and nomspecialite like '%$nomsp%'";
}
$res = $db->query($req);
//nbre de specialite
/*1ere methode
$reqcount = "select count(nomspecialite) as total from specialites";
$res1 = $db->query($reqcount);
$tab = $res1->fetch(); //tableau ass num de ligne
$nbr = $tab['total'];

3eme methode
function nbr_ligne($a, $b)
{
    global $db;
    $req1 = "select $a from $b ";
    $res1 = $db->query($req1);
    $nbr1 = $res1->rowCount();
    return $nbr1;
}
$nbr = nbr_ligne("nomspecialite", "specialites");
*/
//2eme methode
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
    <?php
    include("sidebar.php");
    ?>
    <div class="container " style="font-family: Poppins;">
        <div class="card margintop shadow">
            <div class="card-header" style="
                color: #fff;
                background-color: #1C7469;">
                <h2 style="color: white;">
                    Chercher une specialite:
                </h2>
            </div>
            <div class="card-body">
                <form action="specialites.php" method="Get" class="form-inline">
                    <div class="form-groupe">
                        <input type="text" name="nomsp" placeholder="tapez une specialite" class="form-control" value="<?php echo $nomsp ?>">&nbsp;
                    </div>
                    <label for="niveau">Responsable</label>
                    <select id="niveau" name="listniveau" class="form-control" onchange="this.form.submit()">
                        <option value="tous">Tous les niveau</option>
                        <option value="Médecin" <?php if ($niveau === "Médecin") echo "selected" ?>>Médecin</option>
                        <option value="Administration" <?php if ($niveau === "Administration") echo "selected" ?>>Administration</option>
                    </select>
                    &nbsp; <button type="submit" class="btn btn-success">
                        <span class="fa fa-search"></span> Search
                    </button>

                </form>
            </div>
        </div>
        <div class="card margintop1 float-center">
            <div class="card-header" style="
                color: #fff;
                background-color: #1C7469;">
                <h2 style="color: white;">Liste des specialites:</h2>
                <?php if ($nbr == 1) {
                    echo '(' . $nbr . ' specialite)';
                } else if ($nbr == 0) {
                    echo 'Pas de personnels !';
                } else {
                    echo '(' . $nbr . ' specialites)';
                } ?>
            </div>
            <div class="card-body">
                <div class="pagination">
                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                        <?php include("nouvellespecialite.php") ?>
                    <?php } ?>
                </div>
                </br>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">id specialite</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Nom specialite</th>

                            <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                <th scope="col">Action </th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($specialite = $res->fetch()) { ?>
                            <tr>
                                <td><?php echo $specialite['idspecialite'] ?></td>
                                <td><?php echo $specialite['niveau'] ?></td>
                                <td><?php echo $specialite['nomspecialite'] ?></td>

                                <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                    <td>
                                        <?php include("editspecialite.php") ?> &nbsp;&nbsp;
                                        <?php include("supprimerspecialite.php") ?>
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
                                <a class="page-link" href="specialites.php?page=<?php echo $i; ?> &nomsp=<?php echo $nomsp ?>&niveau=<?php echo $niveau ?>">
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