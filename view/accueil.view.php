<?php
require_once('header.view.php'); 
$infoUser= new DBAccess();
$database=$infoUser->dbConnection();
$utilisateurs=$infoUser->afficherUsers($database)

?>

<h1>Tous les utilisateurs </h1>
<?php if (empty($_SESSION)) { ?>
                <h4>Veuillez vous connecter :)</h4>
                <?php } else {?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
       
            <?php foreach ($utilisateurs as $ligneUtilisateur) : 
                ?>
                <tr>
                    <?php foreach($ligneUtilisateur as $dataUtilisateur) :?>
                    <td><?php echo $dataUtilisateur; ?></td>
                    <?php endforeach; ?>
                    <td>
                        <a class="btn btn-primary" href="index.php?page=modifier&id=<?php echo $ligneUtilisateur['id'];?>" role="button">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a class="btn btn-danger" href="controller/action.php?action=supprimer&id=<?php echo $ligneUtilisateur['id'];?>" role="button" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ?'));">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary validation" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'un utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="controller/action.php?action=ajout">
                <div class="modal-body">

                    <div class="mb-3 row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="prenom" class="col-sm-2 col-form-label">Prénom </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Age </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success validation">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>

<?php require_once('footer.view.php'); ?>