<?php

require($_SERVER['DOCUMENT_ROOT'] . "/controler/template_engine.php");

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION["id"])) {
    header("Location: /controler/pages/login.php");
    exit();
} else if ($_SESSION['type'] >= 1) {
    $smarty->assign("title", "InternQuest - Ajout d'un étudiant");
    $smarty->assign("account_type", 0);
    $smarty->display("create_account.tpl");
} else {
    header("HTTP/1.1 403 Unauthorized");
    exit;
}