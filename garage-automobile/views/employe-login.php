<?php
if(isset($_POST['submit'])){
$user = new UserController();
$result = $user->login();
}
?>
<div class="container ">
    <div class="row mt-4 ">
        <div class="col-md-6 mx-auto" style="margin-top:70px;" >
            <div class="card ">
                <div class="card-header bg-light"><h3 class="card-title text-center">Connexion</h3></div>
                <?php echo isset($result) ?  $result : ''; ?>
                <div class="card-body bg-light">
                    <form method="POST" class="mr-1">
                        <div class="form-group">
                            <label for="login" class="form-label">Login*</label>
                            <input type="text" class="form-control" name="login"  >
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe*</label>
                            <input type="password" class="form-control" name="password"  >
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>