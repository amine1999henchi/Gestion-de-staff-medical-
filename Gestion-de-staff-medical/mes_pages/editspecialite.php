<?php
require_once('session.php');
?>
<button type="button" class="btn btn-warning btn-circle float-left ml-2" data-toggle="modal" data-target="#exampleModal1<?php echo $specialite['idspecialite'] ?>">
    <i class="fas fa-edit"></i>
</button>
<!-- Modal1 -->
<div class="modal fade" id="exampleModal1<?php echo $specialite['idspecialite'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel<?php echo $specialite['idspecialite'] ?>">Ajouter Specialite</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Start -->
                <form method="POST" action="updatespecialite.php" class="form" enctype="multipart/from-data">
                    <div class="form-group">
                        <label for="idsp">ID :<?php echo $specialite['idspecialite'] ?></label>
                        <input type="hidden" name="idsp" class="form-control" id="idsp" aria-describedby="stf" placeholder="idsp" value=<?php echo $specialite['idspecialite'] ?>>
                    </div>
                    <div class="form-groupe">
                        <label for="sp">nouvelle specialite</label>
                        <input id="sp" type="text" name="nomsp" placeholder="tapez une specialite" class="form-control" value="<?php echo $specialite['nomspecialite'] ?>">
                    </div>
                    <br />
                    <div class="form-groupe">
                        <label for="niveau">Niveau</label>
                        <select id="niveau" name="listniveau" class="form-control">
                            <option value="Médecin" <?php if ($specialite['niveau'] === "Médecin") echo "selected" ?>>Médecin</option>
                            <option value="Administration" <?php if ($specialite['niveau'] === "Administration") echo "selected" ?>>Administration</option>

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