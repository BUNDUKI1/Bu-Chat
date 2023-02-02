<?php
require('actions/Database.php');
if (isset($_POST['Validate'])) {
    if (!empty($_POST['Prenom']) and !empty($_POST['Nom']) and !empty($_POST['Mail']) and !empty($_POST['Password'])) {


    } else {
        $errorMsg = "Des champs sont vides, tenez a les remplir tous pour continuer";

    }
}