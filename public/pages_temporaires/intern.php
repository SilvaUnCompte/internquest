<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/internship.php');

Internship::createInternship("Ingenieur informatique C# 1", [0 => "C#", 1 =>"C++"], "Bac+3", "Super stage trop cool", 
"bob.leponge@mail.com",548.5, 12, ["street_address"=>"Paris","city"=>"Caen","postal_code"=>14000], "CGI",true);
