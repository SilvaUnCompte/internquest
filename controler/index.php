<?php

# Ne pas toucher stp :)
require("../assets/vendors/smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->setTemplateDir('../public/templates/');

# William tu peux modif ici
$smarty->assign("title", "InternQuest");
$smarty->display("index.tpl");