<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InternQuest - Recherche");
$smarty->assign("perm_lv", 0);
$smarty->display("research.tpl");