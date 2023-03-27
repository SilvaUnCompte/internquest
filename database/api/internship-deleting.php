<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/tables/internship.php');

Internship::deleteInternship($_GET['id']);

header("Location: /public/pages_temporaires/research.php?typeRecherche=".$_GET['typeRecherche']);   