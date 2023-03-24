<?php
    require('../model/tables/user.php');
    require('../controller/Data.php');
    //initialisation des variables
    $firstname = "William";
    $lastname = "Morhedec";
    $email = "william.morhedec@viacesi.fr";
    $password = Data::createPassword('wmorhedec56');
    $campus = 'Caen';
    $promo = 'CPIA2';
    $type = '0';
    //Création de l'utilisateur
    User::createUser($firstname,$lastname,$email,$password,$campus,$promo,$type);
    //Création de l'instance en testant grace à l'email
    $user = new User(Data::verifyEmailExist($email));
    //test si les mots de passe existent
    var_dump(Data::checkPassword('wmorhedec22', $user->get_password()['salt'], $user->get_password()['hash']));
    var_dump(Data::checkPassword('wmorhedec56', $user->get_password()['salt'], $user->get_password()['hash']));
    echo User::deleteUser($user->get_id());
    echo User::deleteUser(Data::verifyEmailExist($email));
?>