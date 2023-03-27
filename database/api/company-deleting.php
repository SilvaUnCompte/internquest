<?php
header("Location: /public/pages_temporaires/research.php?typeRecherche=".$_GET['typeRecherche']);
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/company.php');

Company::deleteCompany($_GET['id']);