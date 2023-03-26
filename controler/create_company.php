<?php
require($_SERVER['DOCUMENT_ROOT'].'/database/tables/company.php');
require($_SERVER['DOCUMENT_ROOT'].'/controler/data.php');

if(!isset($_POST['input_name'])){
    echo "Missing data ";
    echo "<a href='/controler/pages/index.php'>Back</a>";
    exit();
}

$firstname = $_POST['input_firstname'];
$lastname = $_POST['input_lastname'];
$email = $_POST['input_email'];
$password = Data::createPassword($_POST['input_password']);
$campus = $_POST['input_campus'];
$promo = $_POST['input_promotion'];
$type = $_POST['input_type'];

//Création de l'utilisateur
User::createUser($firstname, $lastname, $email, $password, $campus, $promo, $type);

header("Location: /controler/pages/personal_page.php");