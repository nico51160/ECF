<?php
$voiture = new VoitureController();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $data = $voiture->readVoiture($id);
}
if (isset($_POST['submit'])) {
    $voiture->updateVoiture();
}
?>
<div class="container">
    <div class="row mb-4 mt-4">
        <div class="col-md-8  mx-auto">
            <div class="card">
                <div class="card card-header bg-dark">
                    <h5><label>Modifier une voiture</label></h5>
                </div>
                <div class="card-body bg-dark"  id="box">
                    <a href="http://localhost/garage-automobile/gestion-voitures" class="btn btn-light mb-2"><i class="fa fa-home"></i></a>
                    <form method="post" >
                    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom*</label>
                            <input type="text" class="form-control" value="<?= $data['nom'] ?? '' ?>" name="nom">
                            <span id="controleNom"></span>
                            <strong id="explicationNom"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="caracteristiques">Caracteristiques*</label>
                            <textarea class="form-control" value="" name="caracteristiques"><?= $data['caracteristiques'] ?? '' ?></textarea>
                            <span id="controleCaracteristiques"></span>
                            <strong id="explicationCaracteristiques"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="moteur">Moteur*</label>
                            <input type="text" class="form-control" value="<?= $data['moteur'] ?? '' ?>" name="moteur">
                            <span id="controleMoteur"></span>
                            <strong id="explicationMoteur"></strong>

                        </div>
                        <div class="form-group">
                            <label class="control-label" for="annee">Annee de mise en circulation*</label>
                            <input type="number" class="form-control" value="<?= $data['annee'] ?? '' ?>" name="annee">
                            <span id="controleAnnee"></span>
                            <strong id="explicationAnnee"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="kilometrage">Kilometrage*</label>
                            <input type="number" class="form-control" value="<?= $data['kilometrage'] ?? '' ?>" name="kilometrage">
                            <span id="controleKm"></span>
                            <strong id="explicationKm"></strong>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prix">Prix($)*</label>
                            <input type="number" class="form-control" value="<?= $data['prix'] ?? '' ?>" name="prix">
                            <span id="controlePrix"></span>
                            <strong id="explicationPrix"></strong>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-light">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/garage-automobile/public/js/voiture-modification-validate.js"></script>