<?php
    require ("/assets/vendors/mongodb/vendor/autoload.php");

    $connection_chain = 'mongodb+srv://WilliamM:bP1j1rvVAGjBoGKQ@unjolienom.43m3hif.mongodb.net/test';
    $client = new MongoDB\Client($connection_chain);
    $account = $client->selectCollection('InternQuest', 'account');
    $internship = $client->selectCollection('InternQuest', 'internship');
    $company = $client->selectCollection('InternQuest', 'company');
?>