<?php
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/company.php');

$currentCompany = new Company($_GET['id']);

$result = array();
$result['name'] = $currentCompany->get_name();
$result['desc'] = $currentCompany->get_desc();
$result['visible'] = $currentCompany->get_visible();
$result['desc'] = $currentCompany->get_desc();
$result['pilot_trust'] = $currentCompany->get_pilotTrust();
$result['internships'] = $currentCompany->get_internships();
$result['locations'] = $currentCompany->get_locations();
$result['grades'] = json_encode($currentCompany->get_grades());
$result['sectors'] = $currentCompany->get_sectors();

echo json_encode($result);