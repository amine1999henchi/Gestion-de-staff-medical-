<?php
require_once('session.php');
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalsp">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span></i>&nbsp;&nbsp;Ajouter Specialite

</button>

<!-- Modal1 -->
<div class="modal fade" id="exampleModalsp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" value="<?php echo $staff['idStaff'] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter Specialite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Start -->
                <form method="POST" action="insertspecialite.php" class="form" enctype="multipart/from-data">
                    <div class="form-groupe">
                        <label for="sp">Nouvelle Specialite</label>
                        <input id="sp" type="text" name="nomsp" placeholder="tapez une specialite" class="form-control">
                    </div>
                    <br />
                    <div class="form-groupe">
                        <label for="niveau">Responsable</label>
                        <select id="niveau" name="listniveau" class="form-control">
                            <option value="Médecin">Médecin</option>
                            <option value="Administration" selected>Administration</option>
                        </select>
                        </br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" name="envoye" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>