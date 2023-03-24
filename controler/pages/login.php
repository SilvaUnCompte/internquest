<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InternQuest - Login");
$smarty->assign("state", 0);
$smarty->display("login.tpl");