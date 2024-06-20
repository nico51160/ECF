<?php
if (isset($_POST['btn-submit'])) {
    $newService = new ServiceController();
    $newService->createService();
}
?>
<div class="container">
    <div class="row mb-4 mt-4">
        <div class="col-md-8  mx-auto">
            <div class="card">
                <div class="card card-header bg-dark">
                    <h5><label>Ajouter une service</label></h5>
                </div>
                <div class="card-body bg-dark" id="box">
                    <a href="http://localhost/garage-automobile/gestion-services" class="btn btn-light mb-2"><i class="fa fa-home"></i></a>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom*</label>
                            <input type="text" class="form-control" name="nom">
                            <span id="controleNom"></span>
                            <strong id="explicationNom"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description">Description*</label>
                            <textarea class="form-control" name="description"></textarea>
                            <span id="controleDescription"></span>
                            <strong id="explicationDescription"></strong>
                        </div>
                        <label for="image">Image :</label>
                        <input type="file" name="image" id="image" required   accept="public/images/services/*" ><br>
                        <div class="form-group">
                            <button type="submit" name="btn-submit" class="btn btn-light" disabled >Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/garage-automobile/public/js/service-create-validate.js"></script>
