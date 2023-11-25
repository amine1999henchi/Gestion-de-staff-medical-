<?php if ($patient['etatPatient'] == "Absent") {
    echo '<button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter1">Absent </button>';
} else if ($patient['etatPatient'] == "Present") {
    echo '<button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter2">Présent </button>';
} else {
    echo '<button class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter3">En cours</button>';
} ?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Choisisser l'etat de votre patient:
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="updateetatpatient.php" class="form" enctype="multipart/from-data">
                    <?php
                    echo '<input name="idpatient" type="hidden" value=<?php echo $patient["idPatient"] ?> > </input>';
                    echo '<button name="present" class="btn btn-info" value="Present">Présent </button>';
                    echo '<br/>';
                    echo '<br/>';
                    echo '<button name="absent" value="Absent"class="btn btn-info">Absent </button>';
                    echo '<br/>';
                    echo '<br/>';
                    echo '<button class="btn btn-info">Reprogrammer le RDV </button>';
                    ?>


                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Choisisser l'etat de votre patient:
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="updateetatpatient.php" class="form" enctype="multipart/from-data">
                    <?php
                    echo '<input name="idpatient" type="hidden" value="<?php echo $patient["idPatient"] ?>" > </input>';
                    echo '<button name="present" class="btn btn-info" value="Present">Présent </button>';
                    echo '<br/>';
                    echo '<br/>';
                    echo '<button name="absent" value="Absent"class="btn btn-info">Absent </button>';
                    echo '<br/>';
                    echo '<br/>';
                    echo '<button class="btn btn-info">Reprogrammer le RDV </button>';
                    ?>


                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Choisisser l'etat de votre patient:
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="updateetatpatient.php" class="form" enctype="multipart/from-data">
                    <?php
                    echo '<input name="idpatient" type="hidden" value="<?php echo $patient["idPatient"] ?>" > </input>';
                    echo '<button name="present" class="btn btn-info" value="Present">Présent </button>';
                    echo '<br/>';
                    echo '<br/>';
                    echo '<button name="absent" value="Absent"class="btn btn-info">Absent </button>';
                    echo '<br/>';
                    echo '<br/>';
                    echo '<button class="btn btn-info">Reprogrammer le RDV </button>';
                    ?>


                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>