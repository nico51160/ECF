<?php
$service = new ServiceController();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $data = $service->readService($id);
}
if (isset($_POST['submit'])) {
    $service->updateService();
}
?>
<div class="container">
    <div class="row mb-4 mt-4">
        <div class="col-md-8  mx-auto">
            <div class="card">
                <div class="card card-header bg-dark">
                    <h5><label>Modifier une service</label></h5>
                </div>
                <div class="card-body bg-dark" id="box">
                    <a href="http://localhost/garage-automobile/gestion-services" class="btn btn-light mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                            <label class="control-label" for="nom">Nom*</label>
                            <input type="text" class="form-control" value="<?= $data['nom'] ?? '' ?>" name="nom">
                            <span id="controleNom"></span>
                            <strong id="explicationNom"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description">Caracteristiques*</label>
                            <textarea class="form-control" value="" name="description"><?= $data['description'] ?? '' ?></textarea>
                            <span id="controleDescription"></span>
                            <strong id="explicationDescription"></strong>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-light" disabled>Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/garage-automobile/public/js/service-modification-validate.js"></script>