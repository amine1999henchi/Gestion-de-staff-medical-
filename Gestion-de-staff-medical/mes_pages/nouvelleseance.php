<?php
require_once('session.php');
$requette = "SELECT * FROM  staff";
$resultatse = $db->query($requette);


?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalsen">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span></i>&nbsp;&nbsp;Ajouter Seance

</button>

<!-- Modal1 -->
<div class="modal fade" id="exampleModalsen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" value="<?php echo $seance['idStaff'] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter Seance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Start -->
                <form method="POST" action="insertseance.php" class="form" enctype="multipart/from-data">
                    <div class="form-groupe">
                        <label for="se">Date Seance</label>
                        <input id="se" type="date" name="dateseance" class="form-control">
                    </div>
                    <br />
                    <div class="form-groupe">
                        <label for="hd">Heure Debut</label>
                        <input id="hd" type="time" name="heuredebut" class="form-control">
                    </div>
                    <div class="form-groupe">
                        <label for="hf">Heure Fin</label>
                        <input id="hf" type="time" name="heurefin" class="form-control">
                    </div>
                    <div class="form-groupe">
                        <label for="personnel">Personnel</label>
                        <select id="personnel" name="idpersonnel" class="form-control">
                            <?php while ($personne = $resultatse->fetch()) { ?>
                                <option value="<?php echo $personne['idStaff'] ?>"><?php echo $personne['nom'] . " " . $personne['prenom'] ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" name="envoye" class="btn btn-primary">Sauvegarder</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>