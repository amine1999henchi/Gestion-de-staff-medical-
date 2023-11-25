<?php
require_once('session.php');
if (!(isset($_GET['message']))) {
    $message = "ERREUR";
} else {
    $message = $_GET['message'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>page Alert</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card margintop ">
            <div class="card-header bg-danger text-light">
                ERREUR
            </div>
            <div class="card-body ">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="fa fa-exclamation-triangle" style="font-size:25px"></i>&nbsp;
                    <h4><?php echo $message  ?></h4>
                    <br />
                </div>
                <div class="row justify-content-end">
                    <div class="col-7">
                        <a style="float:center" href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="btn btn-danger" role="button" data-bs-toggle="button">>>Retour!!</a>
                    </div>
                </div>
            </div>



</body>

</html>