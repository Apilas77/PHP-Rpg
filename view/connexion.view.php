<?php
require_once('header.view.php');
?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="controller/action.php?action=connexion">
                <div class="modal-body">

                    <div class="mb-3 row">
                        <label for="nom" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" required><br>
                        </div>
                        <button type="submit" class="btn btn-success validation">Connexion</button>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>
