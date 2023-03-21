<?php

require("../assets/vendors/smarty/libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->setTemplateDir('../public/templates/');

$smarty->assign("title", "Home");
$smarty->display("index.tpl");
