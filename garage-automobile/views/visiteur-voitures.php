<?php
$voiture = new VoitureController();
$voitures = $voiture->readVoituresByFilters();
?>
<div class="container">
    <form method="POST" class="form-horizontal">
        <div class="row mt-2">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body bg-dark">
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="filterKilometrageMin" class="control-label">Kilometrage min:</label>
                                <input type="number" name="filtreKilometrageMin" id="filtreKilometrageMin" min="10" class="form-control">
                            </div>

                            <div class="col-sm-2">
                                <label for="filtreKilometrageMax" class="control-label">Kilometrage max:</label>
                                <input type="number" name="filtreKilometrageMax" id="filtreKilometrageMax" min="10" class="form-control">
                            </div>

                            <div class="col-sm-2">
                                <label for="filtreAnneeMin" class="control-label">Annee min:</label>
                                <input type="number" name="filtreAnneeMin" id="filtreAnneeMin" min="1900" max="2023" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <label for="filtreAnneeMax" class="control-label">Annee max:</label>
                                <input type="number" name="filtreAnneeMax" id="filtreAnneeMax" min="1900" max="2023" class="form-control">
                            </div>

                            <div class="col-sm-2">
                                <label for="filtrePrixMin" class="control-label">Prix min:</label>
                                <input type="number" name="filtrePrixMin" id="filtrePrixMin" min="0" class="form-control">
                            </div>

                            <div class="col-sm-2">
                                <label for="filtrePrixMax" class="control-label">Prix max:</label>
                                <input type="number" name="filtrePrixMax" id="filtrePrixMax" min="0" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <button type="submit" name="submit" class="btn btn-light">Filtrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row mt-4">
        <?php foreach ($voitures as $voiture) {
            $liens = explode(",", $voiture['images_liens']);
        ?>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark">
                    <img src="<?= $liens[0]; ?>" class="card-img-top image" alt="<?= $voiture['nom']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $voiture['nom']; ?></h5>
                        <p class="card-text">Année: <?= $voiture['annee']; ?></p>
                        <p class="card-text">Moteur: <?= $voiture['moteur']; ?></p>
                        <p class="card-text">Kilométrage: <?= $voiture['kilometrage']; ?></p>
                        <p class="card-text">Prix: $<?= $voiture['prix']; ?></p>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $voiture['id']; ?>">
                            <button type="submit" formaction="http://localhost/garage-automobile/voiture-details" class="btn btn-outline-light">Détails</button>
                            <button type="submit" formaction="http://localhost/garage-automobile/atelier-contact" class="btn btn-light">Canctacter l'atelier</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>

