<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


<div class="wrapper d-flex align-items-stretch" >
    <nav id="sidebar" style="background-color: #1C7469;">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary" style="background-color: #1C7469;">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4 pt-5" >
            <h1><a href="dashbord.php" class="logo">MEDICA</a></h1>
            <ul class="list-unstyled components mb-5" >
                <li>
                    <a href="dashbord.php"><i class="fas fa-fw fa-tachometer-alt m-2"></i> Accueil</a>
                </li>
                <li>
                    <a href="#personnelSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user-md m-2"></i>Personnels</a>
                    <ul class="collapse list-unstyled" id="personnelSubmenu">
                        <li>
                            <a href="staff.php">Liste du Personnel</a>
                        </li>
                        <li>
                            <a href="#">Ajouter Personnel</a>
                        </li>
                        <li>
                            <a href="#">Gestion des Abscences</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#patientSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-medkit m-2"></i> Patients</a>
                    <ul class="collapse list-unstyled" id="patientSubmenu">
                        <li>
                            <a href="patients.php"> Liste des Patients</a>
                        </li>
                        <li>
                            <a href="#">Ajouter Patient</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#specialiteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-stethoscope m-2"></i> Spécialités</a>
                    <ul class="collapse list-unstyled" id="specialiteSubmenu">
                        <li>
                            <a href="specialites.php">Liste des Spécialités</a>
                        </li>
                        <li>
                            <a href="#">Ajouter une Spécialité</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="calendrier.php"> <i class="fa fa-calendar-alt m-2"></i> Calendrier</a>
                </li>
                <li>
                    <a href="seance.php"><i class="fa fa-calendar-edit m-2"></i> Séances</a>
                </li>
                <li>
                    <a href="statistiques.php"> <i class="fas fa-fw fa-chart-area m-2"></i>Statistiques</a>
                </li>

            </ul>

            <div class="footer">
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#comptesubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user m-2"></i>Compte</a>
                        <ul class="collapse list-unstyled" id="comptesubmenu">
                            <li>
                                <a href="profil.php"><i class="fas fa-user-edit m-2"></i>Profil</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sign-out-alt m-2"></i>Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                     </script> 
                     <br>
                     All rights reserved | Projet d'été 2021 - ENSI
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
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
					<button onclick="window.location.href='sedeconnecter.php'" type="button" class="btn btn-danger">Déconnexion</button>
				</div>
			</div>
		</div>
	</div>
    </nav>
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">