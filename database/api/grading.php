<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/company.php');

session_start();
$_SESSION['type'] = 0;
$_SESSION['id'] = 0;

$currentCompany = new Company($_GET['id']);
$currentCompany->addGrades($_SESSION['id'], $_GET['grade']);
$currentCompany->updateCompany();


