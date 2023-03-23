<?php


require("../assets/vendors/smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->setTemplateDir('../public/templates/');


$smarty->assign("title", "InternQuest - Ajout d'une entreprise");
$smarty->display("create_company.tpl");
