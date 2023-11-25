<?php
require_once('session.php');
$requette12 = "SELECT * FROM  staff";
$resultatt = $db->query($requette12);

/*$requette3 = "SELECT * FROM  staff as st,seance as s
where st.idStaff=s.idStaff";
$resultat3 = $db->query($requette3);*/
?>
<button type="button" class="btn btn-warning btn-circle float-left ml-2" data-toggle="modal" data-target="#exampleModalseance<?php echo $seance['idseance'] ?>">
    <i class="fas fa-edit"></i>
</button>
<!-- Modal1 -->
<div class="modal fade" id="exampleModalseance<?php echo $seance['idseance']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form method="POST" action="updateseance.php" class="form" enctype="multipart/from-data">
                    <div class="form-group">
                        <label for="idse">ID :<?php echo $seance['idseance']  ?></label>
                        <input type="hidden" name="idseance" class="form-control" id="idse" aria-describedby="stf" value=<?php echo $seance['idseance']  ?>>
                    </div>
                    <div class="form-groupe">
                        <label for="datese">Date Seance </label>
                        <input id="datese" type="date" name="dateseance" class="form-control" value="<?php echo $seance['dateseance'] ?>">
                    </div>
                    <div class="form-groupe">
                        <label for="hd">Heure debut </label>
                        <input id="hd" type="time" name="heuredebut" class="form-control" value="<?php echo $seance['heuredebut'] ?>">
                    </div>
                    <div class="form-groupe">
                        <label for="sp">Heure Fin </label>
                        <input id="sp" type="time" name="heurefin" class="form-control" value="<?php echo $seance['heurefin'] ?>">
                    </div>
                    <div class="form-groupe">
                        <div class="form-groupe">
                            <label for="personnel">Personnel</label>
                            <select id="personnel" name="idStaff" class="form-control">
                                <?php while ($personne = $resultatt->fetch()) { ?>
                                    <option value="<?php echo $personne['idStaff'] ?>" <?php if ($seance['idStaff'] == $personne['idStaff']) echo "selected" ?>>
                                        <?php echo $personne['nom'] . " " . $personne['prenom'] ?></option>
                                <?php } ?>
                            </select>


                        </div>


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