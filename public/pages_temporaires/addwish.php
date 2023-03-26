<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');

session_start();
$currentUser = new User($_SESSION['id']);

$currentUser->addWishList(45);
$currentUser->addWishList(415);

$currentUser->updateUser();