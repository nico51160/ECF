<?php
include('./views/includes/Header.php');
include('./Autoload.php');
include('./views/includes/NavBar.php');
$pages = [
    'gestion-voitures',
    'gestion-employes','employe-create', 'employe-delete', 'employe-profile', 'employe-change-password', 'employe-logout',
    'gestion-services',
];
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "true") {
    if (isset($_GET['page'])) {
        if (in_array($_GET['page'], $pages)) {
            include('views/'.$_GET['page'].'.php');
        } else {
            include('views/includes/404.php');
        }
    } else {
        include('views/gestion-voitures.php');
    }
    include('./views/includes/Footer.php');
} else {
    include('views/employe-login.php');
}
