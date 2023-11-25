<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Personnel</title>
    <?php include('script.php'); ?>

</head>


<body>
    <div class="container ">
        <div class="shadow pr-4 pl-4 pt-4 pb-4">
            <h1>Liste du personnel:</h1>
            <div class="row mr-4 ml-4 mt-4 mb-4">
                <div class="col-sm mb-4">
                    <div class="card1">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://picsum.photos/300/300" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm mb-4">
                    <div class="card2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://picsum.photos/300/300" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm mb-4">
                    <div class="card3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://picsum.photos/300/300" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-lg ">Load more</button>
        </div>

        <div class="shadow pr-4 pl-4 pt-4 pb-4 mt-4">
            <div class="mb-4 mt-4">
                <h1>Liste du personnel:</h1>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CIN</th>
                            <th scope="col">Nom et Prénom</th>
                            <th scope="col">Adresse Mail</th>
                            <th scope="col">Spécialité</th>
                            <th scope="col">Jours de travail</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Status</th>
                            <th scope="col">Salaire</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-warning btn-circle float-left ml-2" data-toggle="modal" data-target="#exampleModal1">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle float-center ml-2" data-toggle="modal" data-target="#exampleModal2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-warning btn-circle float-left ml-2" data-toggle="modal" data-target="#exampleModal1">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle float-center ml-2" data-toggle="modal" data-target="#exampleModal2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-warning btn-circle float-left ml-2" data-toggle="modal" data-target="#exampleModal1">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle float-center ml-2" data-toggle="modal" data-target="#exampleModal2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="shadow pr-4 pl-4 pt-4 pb-4 mt-4">
            <div class="mb-4 mt-4">
                <h1>Gestion des Abscences</h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">CIN</th>
                        <th scope="col">Nom et Prénom</th>
                        <th scope="col">Spécialité</th>
                        <th scope="col">Jours d'Abscences</th>
                        <th scope="col">Remplacent(e)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="./index.php">MEDICAL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto mr-md-3">
                            <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
                            <li class="nav-item"><a href="./personnel.php" class="nav-link">Personnels</a></li>
                            <li class="nav-item"><a href="./patients.php" class="nav-link">Patients</a></li>
                            <li class="nav-item"><a href="./statistiques.php" class="nav-link">Statistiques</a></li>
                            <li class="dropdown nav-item d-md-flex align-items-center">
                                <a href="#" class="dropdown-toggle nav-link d-flex align-items-center justify-content-center icon-cart p-0" id="dropdown04" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown04">
                                    <a href="./profil.php" class="nav-item m-4 float-center my-4">Profil</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary ml-4 float-center my-4" data-toggle="modal" data-target="#exampleModal">
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