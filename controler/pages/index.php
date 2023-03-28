<?php

# Ne pas toucher stp :)
require($_SERVER['DOCUMENT_ROOT']."/controler/template_engine.php");

# William tu peux modif ici
$smarty->assign("title", "InternQuest");
$smarty->display("index.tpl");