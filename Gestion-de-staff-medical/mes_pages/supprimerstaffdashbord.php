<button type="button" class="btn btn-danger btn-circle float-center ml-2" data-toggle="modal" data-target="#exampleModal<?php echo $specialite['idStaff'] ?>">
    <i class="fas fa-trash"></i>
</button>
<div class="modal fade" id="exampleModal<?php echo $specialite['idStaff'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment vous supprimer le staff <?php echo $specialite['nom'] . " " . $specialite['prenom'] ?>?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button onclick="window.location.href='dashbord.php'" type="button" class="btn btn-danger">
                    <a class="text-light " type="button" href="updatedeletedashbordstaff.php?idst=<?php echo $specialite['idStaff']  ?>">Delete</a></button>
            </div>

        </div>
    </div>
</div>