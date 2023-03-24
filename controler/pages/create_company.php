<?php

require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

$smarty->assign("title", "InternQuest - Ajout d'une entreprise");
$smarty->display("create_company.tpl");
