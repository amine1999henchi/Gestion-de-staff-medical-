<button type="button" class="btn btn-danger btn-circle float-center ml-2" data-toggle="modal" data-target="#exampleModalseanc<?php echo $seance['idseance'] ?>">
    <i class="fas fa-trash"></i>
</button>
<div class="modal fade" id="exampleModalseanc<?php echo $seance['idseance'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment vous supprimer la seance du staff
                <?php echo $seance['nom'] . " " . $seance['prenom'] ?> de <?php echo $seance['heuredebut'] ?> jusqu'a <?php echo $seance['heurefin'] ?>?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button onclick="window.location.href='staff.php'" type="button" class="btn btn-danger">
                    <a class="text-light " type="button" href="updatedeleteseance.php?idseance=<?php echo $seance['idseance']  ?>">Delete</a></button>
            </div>

        </div>
    </div>
</div>