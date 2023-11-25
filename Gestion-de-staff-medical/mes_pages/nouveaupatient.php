<?php
require_once('session.php');
require_once('connect.php');
$req2 = "SELECT * FROM specialites";
$res2 = $db->query($req2);

?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalpatient">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span></i>&nbsp;&nbsp;Ajouter Patient

</button>

<!-- Modal1 -->
<div class="modal fade" id="exampleModalpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" value="<?php echo $staff["idStaff"] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- editer profil -->
            <div class="modal-body">
                <!-- Form Start -->
                <form method="POST" action="insertpatient.php" class="form" enctype="multipart/from-data">
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" placeholder="Nom">
                        </div>
                        <div class="col">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tel">Telephone</label>
                            <input type="text" name="tel" class="form-control" id="tel" aria-describedby="tel" placeholder="Numéro de Téléphone">
                        </div>
                        <div class="col">
                            <label for="jourssderdv">Jours du RDV</label>
                            <input name="rdv" type="date" class="form-control" id="jourssderdv" placeholder="Jours de RDV">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" name="envoye" class="btn btn-primary">Sauvegarder</button>
                    </div>

                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>