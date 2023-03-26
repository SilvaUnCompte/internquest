<?php
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');


if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['id'])) {
    echo json_encode(['error' => 'Not logged']);
    exit;
}

$currentUser = new User($_SESSION['id']);
$curentPage = $_GET['page'] ?? 0;

// echo Count($currentUser->get_wishlist());
// echo json_encode($currentUser->get_wishlist());


for ($i = 0; $i < count($currentUser->get_wishlist()); $i++) {
    $wishlist[] = $currentUser->get_wishlist()[$i];
}

$result[0] = ['wishCount' => count($currentUser->get_wishlist())];
$result[1] = ['wishlist' => array_slice($wishlist, $curentPage * 5, 5)];

echo json_encode($result);