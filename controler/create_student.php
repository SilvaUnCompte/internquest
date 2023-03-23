<?php


require("../assets/vendors/smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->setTemplateDir('../public/templates/');


$smarty->assign("title", "InternQuest - Ajout d'un étudiant");
$smarty->assign("account_type", 0);
$smarty->display("create_account.tpl");
