<?php
require($_SERVER['DOCUMENT_ROOT'].'/database/tables/user.php');
require($_SERVER['DOCUMENT_ROOT'].'/controler/data.php');

$test = $_POST['input_email'];
$firstname = $_POST['input_firstname'];
$lastname = $_POST['input_lastname'];
$email = $_POST['input_email'];
$password = Data::createPassword($_POST['input_password']);
$campus = $_POST['input_campus'];
$promo = $_POST['input_promotion'];
$type = $_POST['input_type'];

//Création de l'utilisateur
User::createUser($firstname, $lastname, $email, $password, $campus, $promo, $type);

require('pages/index.php');