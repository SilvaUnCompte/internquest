<?php
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/internship.php');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');


$currentUser = new User($_SESSION['id']);
$currentInternship = new Internship($_GET['id']);

$currentUser->add_apply_count();
$currentUser->addWishList($currentInternship->get_id());
$currentInternship->set_applyCount();
