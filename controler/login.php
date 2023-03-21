<?php


require("../assets/vendors/smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->setTemplateDir('../public/templates/');


$smarty->assign("title", "InterQuest - Login");
$smarty->display("login.tpl");