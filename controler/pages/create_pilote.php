<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InternQuest - Ajout d'un pilote");
$smarty->assign("account_type", 1);
$smarty->display("create_account.tpl");
