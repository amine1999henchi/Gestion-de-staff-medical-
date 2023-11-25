<?php
require_once('session.php');
require_once('connect.php');
$req2 = "SELECT * FROM specialites";
$res2 = $db->query($req2);

?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalstaff">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span></i>&nbsp;&nbsp;Ajouter Utilisateur

</button>

<!-- Modal1 -->
<div class="modal fade" id="exampleModalstaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" value="<?php echo $staff["idStaff"] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter Utlisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- editer profil -->
            <div class="modal-body">
                <!-- Form Start -->
                <form method="POST" action="insertestaff.php" class="form" enctype="multipart/from-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
                            <label for="login">Login</label>
                            <input type="text" name="login" class="form-control" id="login" aria-describedby="login" placeholder="Login">
                        </div>
                        <div class="col">
                            <label for="idspecialite">Specialite</label>
                            <select id="idspecialite" name="idspecialite" class="form-control">
                                <?php while ($specialite = $res2->fetch()) { ?>
                                    <option value="<?php echo $specialite['idspecialite'] ?>">
                                        <?php echo $specialite['nomspecialite'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="genre">Genre</label><br />
                            <label><input type="radio" name="genre" value="homme">Homme</label>
                            <label><input type="radio" name="genre" value="femme">Femme</label>
                        </div>
                        <div class="col">
                            <label for="numerotel">Numéro de Téléphone</label>
                            <input type="text" name="tel" class="form-control" id="numerotel" placeholder="Numéro de Téléphone">
                        </div>
                    </div>
                    <?php if ($_SESSION["utilisateur"]["role"] == "admin") { ?>
                        <div class="row">
                            <div class="col">
                                <label for="jourssdetravail">Jours de travail</label>
                                <input type="date" class="form-control" id="jourssdetravail" placeholder="Jours de travail">
                            </div>
                            <?php if ($_SESSION["utilisateur"]["role"] == "admin") { ?>
                                <div class="col">
                                    <label for="role">Status</label>
                                    <select id="role" name="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="visiteur">Visiteur</option>
                                    </select>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
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