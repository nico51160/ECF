<?php
if (isset($_POST['submit'])) {
    $existUser = new UserController();
    $result = $existUser->updateUser();
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card card-header bg-dark">
                    <h5><label>Modifier profil</label></h5>
                    <?php echo isset($result) ?  $result : ''; ?>
                </div>
                <div class="card-body bg-dark" id="box">
                    <a href="http://localhost/garage-automobile/gestion-employes" class="btn btn-outline-light mb-2"><i class="fa fa-home"></i></a>
                    <a href="http://localhost/garage-automobile/employe-change-password" class="btn btn-light mb-2">Change Password</i></a>
                    <form method="post">
                        <div class="form-group">
                            <label for="login" class="form-label">Nom*</label>
                            <input type="text" class="form-control" name="nom" value="<?php echo $_SESSION['user']->nom; ?>">
                            <span id="controleNom"></span>
                            <strong id="explicationNom"></strong>
                        </div>
                        <div class="form-group">
                            <label for="login" class="form-label">Prenom*</label>
                            <input type="text" class="form-control" name="prenom" value="<?php echo $_SESSION['user']->prenom; ?>">
                            <span id="controlePrenom"></span>
                            <strong id="explicationPrenom"></strong>
                        </div>
                        <div class="form-group">
                            <label for="login" class="form-label">Email*</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['user']->email; ?>">
                            <span id="controleEmail"></span>
                            <strong id="explicationEmail"></strong>
                        </div>
                        <div class="form-group">
                            <label for="login" class="form-label">Telephone*</label>
                            <input type="text" class="form-control" name="telephone" value="<?php echo $_SESSION['user']->telephone; ?>">
                            <span id="controleTelephone"></span>
                            <strong id="explicationTelephone"></strong>
                        </div>
                        <div class="form-group">
                            <label for="login" class="form-label">Login*</label>
                            <input type="text" class="form-control" name="login" value="<?php echo $_SESSION['user']->login; ?>">
                            <span id="controleLogin"></span>
                            <strong id="explicationLogin"></strong>
                        </div>
                        <input type="hidden" name="id" value="<?php echo  $_SESSION['user']->id; ?>">
                        <div class="form-group">
                            <button type="submit" name="submit" disabled class="btn btn-light">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/garage-automobile/public/js/employe-modification-validate.js"></script>

