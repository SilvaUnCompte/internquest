<?php

require($_SERVER['DOCUMENT_ROOT'] . "/controler/template_engine.php");

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

if (!isset($_SESSION["id"])) {
    header("Location: /controler/pages/login.php");
    exit();
} elseif(!isset($_GET['pw']) || $_GET['ps'] || !isset($_GET['pp'])) {
    header("Location: ?pw=0&ps=0&pp=0");
    exit();
}
else {
    $smarty->assign("title", "InternQuest - Page Personnel");
    $smarty->display("personal_page/personal_page.tpl");
}