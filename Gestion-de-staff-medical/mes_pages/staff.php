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
        <!-- Elements de la SideBar : -->
        <link rel="stylesheet" href="../sidebar/css/style.css">

    <!-- FIN Elements de la SideBar : -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
        <div class="card margintop1 float-center shadow">
            <div class="card-header" style="
                color: #fff;
                background-color: #1C7469;">
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
                        <?php include("nouveaustaff.php") ?>
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
                                        <?php include("editstaff.php") ?> &nbsp;&nbsp;
                                        <?php include("supprimerstaff.php") ?> &nbsp;&nbsp;
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
<script src="../sidebar/js/jquery.min.js"></script>
    <script src="../sidebar/js/popper.js"></script>
    <script src="../sidebar/js/bootstrap.min.js"></script>
    <script src="../sidebar/js/main.js"></script>