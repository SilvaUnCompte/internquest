<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/company.php');

$currentCompany = new Company($_GET['id']);
$currentCompany->addGrades($_SESSION['id'], $_GET['grade']);
$currentCompany->updateCompany();


