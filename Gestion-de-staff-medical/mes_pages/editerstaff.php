<?php
require_once('connect.php');
$req2 = "SELECT * FROM specialites";
$res2 = $db->query($req2);

?>
<button type="button" class="btn btn-warning btn-circle float-left ml-2" data-toggle="modal" data-target="#exampleModal1<?php echo $staff['idStaff'] ?>">
    <i class="fas fa-edit"></i>
</button>
<!-- Modal1 -->
<div class="modal fade" id="exampleModal1<?php echo $staff['idStaff'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" value="<?php echo $staff['idStaff'] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier l'utlisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- editer profil -->
            <div class="modal-body">
                <!-- Form Start -->
                <form method="POST" action="updateprofil.php" class="form" enctype="multipart/from-data">
                    <div class="form-group">
                        <label for="idst">ID :<?php echo $staff['idStaff'] ?></label>
                        <input type="hidden" name="idst" class="form-control" id="idst" aria-describedby="stf" placeholder="idst" value=<?php echo $staff['idStaff'] ?>>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" placeholder="Nom" value=<?php echo $staff['nom'];  ?>>
                        </div>
                        <div class="col">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" placeholder="Prénom" value=<?php echo $staff['prenom']; ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="login">Login</label>
                            <input type="text" name="login" class="form-control" id="login" aria-describedby="login" placeholder="Login" value=<?php echo $staff['login'];; ?>>
                        </div>
                        <div class="col">
                            <div class="col">
                                <label for="idspecialite">Specialite</label>
                                <select id="idspecialite" name="idspecialite" class="form-control">
                                    <?php while ($specialite = $res2->fetch()) { ?>
                                        <option value="<?php echo $specialite['idspecialite'] ?>" <?php if ($staff['idspecialite'] == $specialite['idspecialite']) echo "selected" ?>>
                                            <?php echo $specialite['nomspecialite'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-groupe">
                        <label for="genre">Genre</label><br />
                        <label><input type="radio" name="genre" value="homme" <?php if (strtolower($staff['genre']) == "homme") echo "checked" ?>>Homme</label>
                        <label><input type="radio" name="genre" value="femme" <?php if (strtolower($staff['genre']) == "femme") echo "checked" ?>>Femme</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail" value=<?php echo $staff['email']; ?>>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="numerotel">Numéro de Téléphone</label>
                        <input type="text" name="tel" class="form-control" id="numerotel" placeholder="Numéro de Téléphone" value=<?php echo $staff['tel']; ?>>
                    </div>
                    <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                        <div class="row">
                            <div class="col">
                                <label for="jourssdetravail">Jours de travail</label>
                                <input type="date" class="form-control" id="jourssdetravail" placeholder="Jours de travail" value=<?php echo $staff['Jours_de_travail']; ?>>
                            </div>
                            <?php if ($_SESSION['utilisateur']['role'] == 'admin') { ?>
                                <div class="col">
                                    <label for="role">Status</label>
                                    <select id="role" name="role" class="form-control">
                                        <option value="admin" <?php if ($staff['role'] == "admin") echo "selected" ?>>Admin</option>
                                        <option value="visiteur" <?php if ($staff['role'] == "visiteur") echo "selected" ?>>Visiteur</option>
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