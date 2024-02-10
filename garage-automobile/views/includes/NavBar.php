<?php if (isset($_SESSION['user'])) {  ?>
    <style>
    .spn {
        color: white;
        transition: color 0.3s; 
    }

    .spn:hover {
        color: black;
    }
</style>

    <nav class="navbar  bg-primary ">
        <a class="navbar-brand" href="http://localhost/garage-automobile/gestion-voitures"><span class="spn"><strong>Garage V. Parrot</strong></span></a>
        <?php if ($_SESSION['user']->role === 'Administrateur') { ?>
            <a class="nav-item nav-link" href="http://localhost/garage-automobile/gestion-employes" ><span class="spn">Gestion des Employes</span></a>
        <?php } ?>
        <a class="nav-item nav-link" href="http://localhost/garage-automobile/gestion-voitures" ><span class="spn">Gestion des Voitures</span></a>
        <a class="nav-item nav-link" href="http://localhost/garage-automobile/gestion-services" ><span class="spn">Gestion des Services</span></a>
        <div class="ml-auto d-flex justify-content-between">
            <a class="nav-item nav-link" href="http://localhost/garage-automobile/employe-profile" >
                <span class="spn"><?php echo $_SESSION['user']->login; ?></span>
            </a>
            <a class="nav-item nav-link" href="http://localhost/garage-automobile/employe-logout" ><span class="spn">Déconnexion</span></a>
        </div>
    </nav>
<?php }  ?>