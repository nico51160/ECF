<?php
if (isset($_POST['submit'])) {
    $user = new UserController();
    $result = $user->login();
}
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 mx-auto login">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="card-title text-center">Connexion</h3>
                </div>
                <?php echo isset($result) ?  $result : ''; ?>
                <div class="card-body bg-dark">
                    <form method="POST" class="mr-1">
                        <div class="form-group">
                            <label for="login" class="form-label">Login*</label>
                            <input type="text" class="form-control" name="login">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe*</label>
                            <input type="password" placeholder="Veuillez inserer votre mot de passe à 8 chiffre" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="captcha">
                                <label class="form-check-label" for="captcha">Je ne suis pas un robot</label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-light">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/garage-automobile/public/js/case.capcha.js"></script>

