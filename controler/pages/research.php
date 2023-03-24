<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InternQuest - Recherche");
$smarty->display("research.tpl");