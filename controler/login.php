<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');
require($_SERVER['DOCUMENT_ROOT'] . '/controler/data.php');

if (isset($_POST['input_email']) && isset($_POST['input_password'])) {
    $email = $_POST['input_email'];
    $password = $_POST['input_password'];

    switch (Data::checkLogin($email, $password)) {
        case -1:
            echo "Erreur d'authentification, email inconnu";
            exit();
        case -2:
            echo "Erreur d'authentification, mot de passe incorrect";
            exit();
        case 0:
            session_start();
            echo "Connexion réussie";
    }
} else {
    echo "Erreur d'authentification, champs incomplets";
    exit();
}

require('pages/index.php');