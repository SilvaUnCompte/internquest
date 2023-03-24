<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InternQuest - Ajout d'un étudiant");
$smarty->assign("account_type", 0);
$smarty->display("create_account.tpl");
