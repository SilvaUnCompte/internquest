<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InterQuest - Login");
$smarty->display("login.tpl");