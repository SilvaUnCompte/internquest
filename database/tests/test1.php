<?php
    require('../model/tables/internship.php');
    require('../controller/Data.php');
    //initialisation des variables
    $title = 'président de mes couilles';
    $skills = ['0' => 'couscous'];
    $lvl = 'ramadan';
    $desc = "j'aime probablement pas les noires.";
    $remuneration = 750.0;
    $duration = 21;
    $location = [
        'street_address' => '12 rue Jean Bernard',
        'city' => 'Moncul',
        'postal_code' => '69420'
    ];
    $enable = 'true';
    //Création de l'utilisateur
    Internship::createInternship($title, $skills, $lvl, $desc, $remuneration, $duration, $location, $enable);
    //Création de l'instance en testant grace à l'email
    $internship = new Internship();
    //test si les mots de passe existent
    var_dump(Data::checkPassword('wmorhedec22', $user->get_password()['salt'], $user->get_password()['hash']));
    var_dump(Data::checkPassword('wmorhedec56', $user->get_password()['salt'], $user->get_password()['hash']));
    echo User::deleteUser($user->get_id());
    echo User::deleteUser(Data::verifyEmailExist($email));
?>