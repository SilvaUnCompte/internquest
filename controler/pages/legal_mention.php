<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InterQuest - Mention Legal");
$smarty->display("legal_mention.tpl");