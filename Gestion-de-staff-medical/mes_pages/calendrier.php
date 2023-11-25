<?php
require_once('session.php');
require_once("connect.php");

$reqseance = "SELECT *  
            from seance as s, staff as st
            where s.idStaff = st.idStaff ";
$resultat = $db->query($reqseance);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Calendrier</title>
    <link rel="stylesheet" href="../sidebar/css/style.css">


    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Calendar Style Sheet -->

    <link rel="stylesheet" href="../calendar/fonts/icomoon/style.css">

    <link href='../calendar/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='../calendar/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../calendar/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../calendar/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- End Calendar Style Sheet -->



</head>

<body>
    <?php include_once('sidebar.php') ?>

    <div class="container " style="font-family: Poppins;">


        <h1>Gestion des RDV:</h1>
        <div class="pagination">
            <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                <?php include("nouvelleseance.php") ?>
            <?php } ?>
        </div>
        <div class="container">
            <div class="calendar mt-2">
                <div class="content">
                    <div id='calendar'></div>

                </div>



                <script src="../calendar/js/jquery-3.3.1.min.js"></script>
                <script src="../calendar/js/popper.min.js"></script>
                <script src="../calendar/js/bootstrap.min.js"></script>
                <script src="../calendar/js/script.js"></script>

                <script src='../calendar/fullcalendar/packages/core/main.js'></script>
                <script src='../calendar/fullcalendar/packages/interaction/main.js'></script>
                <script src='../calendar/fullcalendar/packages/daygrid/main.js'></script>
                <?php
                $data = array();
                $data = array();

                while ($dateseance = $resultat->fetch(PDO::FETCH_ASSOC)) {



                    $data += [strval($dateseance['dateseance']) . 'T' . strval($dateseance['heuredebut']) => strval($dateseance['nom'])];
                };
                echo ('working !! ');

                $myObject = (json_encode($data));
                echo $myObject;


                ?>

                <script>
                    var array = <?php echo json_encode($data); ?>;

                    var tableau = [];
                    for (let i = 0; i < Object.keys(array).length; i++) {
                        tableau.push({
                            "title": '\nDr. ' + array[Object.keys(array)[i]],
                            "start": Object.keys(array)[i]


                        })
                    }
                    console.log(tableau);



                    console.log(array);

                    document.addEventListener('DOMContentLoaded', function() {
                        var calendarEl = document.getElementById('calendar');
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            plugins: ['interaction', 'dayGrid'],
                            defaultDate: '2021-08-12',
                            editable: false,
                            eventLimit: true, // allow "more" link when too many events


                            events: tableau
                        });

                        calendar.render();
                    });
                </script>

                <script src="../calendar/js/main.js"></script>





            </div>


        </div>
    </div>
</body>
<script src="../sidebar/js/jquery.min.js"></script>
<script src="../sidebar/js/popper.js"></script>
<script src="../sidebar/js/bootstrap.min.js"></script>
<script src="../sidebar/js/main.js"></script>