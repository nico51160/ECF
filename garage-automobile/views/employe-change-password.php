<?php
if (isset($_POST['submit'])) {
    $user = new UserController();
    $result = $user->changePasswordUser();
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card card-header bg-dark">
                    <h5><label>Changer le mot de passe</label></h5>
                    <?php echo isset($result) ?  $result : ''; ?>
                </div>
                <div class="card-body bg-dark" id="box">
                    <a href="http://localhost/garage-automobile/gestion-employes" class="btn btn-light mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldPassword" id="oldPassword" required>
                            <input type="hidden" name="id" value="<?php echo  $_SESSION['user']->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="newPassword">Nouveau mot de passe</label>
                            <input type="password" class="form-control" name="newPassword" id="newPassword" required>
                            <input type="hidden" name="id" value="<?php echo  $_SESSION['user']->id; ?>">
                            <span id="controlePass"></span>
                            <strong id="explicationPass"></strong>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirmer le nouveau mot de passe</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                            <input type="hidden" name="id" value="<?php echo  $_SESSION['user']->id; ?>">
                            <span id="controlePassConfirme"></span>
                            <strong id="explicationPassConfirme"></strong>
                        </div>
                        <button type="submit" name="submit" class="btn btn-light" disabled>Changer le mot de passe</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="/garage-automobile/public/js/password-change.js"></script>
