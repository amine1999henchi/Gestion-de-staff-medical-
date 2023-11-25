<?php
require_once('session.php');
require_once("connect.php");

$reqspecialite = "SELECT * FROM patients";
$resspecialite = $db->query($reqspecialite);
$nbrstaff = $resspecialite->rowCount();



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


            </div>
        </div>
        <div class="card margintop1 float-center">

            <div class="card-body">

                </br>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Patient1</th>
                            <th scope="col">Patient2</th>
                            <th scope="col">Patient3</th>
                            <th scope="col">Patient4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($staff = $resspecialite->fetch()) { ?>
                            <tr>
                                <td></td>

                                <td>
                                    <select name="amine">

                                        <option value="<?php echo $staff['nomPatient'] ?>"><?php echo $staff['nomPatient'] ?></option>

                                    </select>
                                </td>
                                <td>
                                    <select name="amine">

                                        <option value="<?php echo $staff['nomPatient'] ?>"><?php echo $staff['nomPatient'] ?></option>

                                    </select>
                                </td>





                            </tr>

                        <?php } ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</body>