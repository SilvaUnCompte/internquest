<?php
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/user.php');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/internship.php');


// Securité
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION['id'])) {
    echo json_encode(['error' => 'Not logged']);
    exit;
}


$currentUser = new User($_SESSION['id']);
$curentPage = $_GET['page'] ?? 0;

for ($i = 0; $i < 5; $i++) {
    echo $currentUser->get_wishlist()[5*$curentPage + $i]['id_internship'];
    $curentIntern = new Internship($currentUser->get_wishlist()[5*$curentPage + $i]['id_internship']);
    
    $wishlist[] = [
        'id' => $curentIntern->get_id(),
        'title' => $curentIntern->get_title(),
        'lvl' => $curentIntern->get_lvl(),
        'desc' => $curentIntern->get_desc(),
        'contactEmail' => $curentIntern->get_contactEmail(),
        'remuneration' => $curentIntern->get_remuneration(),
        'duration' => $curentIntern->get_duration(),
        'location' => $curentIntern->get_location(),
        'companyName' => $curentIntern->get_companyName(),
        'applyCount' => $curentIntern->get_applyCount(),
        'enable' => $curentIntern->get_enable()
    ];
}

echo json_encode($wishlist);

$result[0] = ['wishCount' => count($currentUser->get_wishlist())];
$result[1] = ['wishlist' => array_slice($wishlist, $curentPage * 5, 5)];

echo json_encode($result);
