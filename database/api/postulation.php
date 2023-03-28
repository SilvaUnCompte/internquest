<?php
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/internship.php');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');

session_start();
$_SESSION['type'] = 0;
$_SESSION['id'] = 0;

$currentUser = new User($_SESSION['id']);
$currentInternship = new Internship($_GET['id']);

$currentUser->add_apply_count();
$currentUser->addWishList($currentInternship->get_id());
$currentUser->updateUser();
$currentInternship->set_applyCount();
$currentInternship->updateInternship();
