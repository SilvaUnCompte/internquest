<?php


require("../assets/vendors/smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->setTemplateDir('../public/templates/');


$smarty->assign("title", "InternQuest - Ajout d'un pilote");
$smarty->assign("account_type", 1);
$smarty->display("create_account.tpl");
