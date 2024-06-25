<?php
if (isset($_POST['submit'])) {
    $newUser = new UserController();
    $newUser->createUser();
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card card-header bg-dark"><h5><label>Ajouter un utilisateur</label></h5></div>
                <div class="card-body bg-dark" id="box">
                    <a href="http://localhost/garage-automobile/gestion-employes" class="btn btn-light mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom*</label>
                            <input type="text" class="form-control" name="nom">
                            <span id="controleNom"></span>
                            <strong id="explicationNom"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom">Prénom*</label>
                            <input type="text" class="form-control" name="prenom">
                            <span id="controlePrenom"></span>
                            <strong id="explicationPrenom"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email*</label>
                            <input type="text" class="form-control" name="email">
                            <span id="controleEmail"></span>
                            <strong id="explicationEmail"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="telephone">Telephone*</label>
                            <input type="text" class="form-control" name="telephone">
                            <span id="controleTelephone"></span>
                            <strong id="explicationTelephone"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="login">Login*</label>
                            <input type="text" class="form-control" name="login">
                            <span id="controleLogin"></span>
                            <strong id="explicationLogin"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password*</label>
                            <input type="password" class="form-control" name="password">
                            <span id="controlePass"></span>
                            <strong id="explicationPass"></strong>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" disabled class="btn btn-light">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/garage-automobile/public/js/employe-create-validate.js"></script>