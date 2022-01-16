<?php
require_once('header.view.php');

$user = $_GET['id'];

$infoUser= new DBAccess();
$database=$infoUser->dbConnection();
$result = $infoUser->afficherUser($database,$user);

foreach($result as $dataUtilisateur){
    




?>
<div class="ajout">
    <h1>Modification de l'utilisateur <?php echo $dataUtilisateur['nom']; ?></h1>
    <form method="POST" action="controller/action.php?action=modifier&id=<?php echo $dataUtilisateur['id']; ?>">
        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $dataUtilisateur['nom']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="prenom" class="col-sm-2 col-form-label">Prénom : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $dataUtilisateur['prenom']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Age : </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $dataUtilisateur['age']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email : </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $dataUtilisateur['email']; ?>" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success validation">Submit</button>
    </form>
</div>

<?php
} 
require_once('footer.view.php'); ?>