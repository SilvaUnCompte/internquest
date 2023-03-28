<?php
/* Smarty version 4.2.1, created on 2023-03-28 11:56:20
  from 'C:\xampp\htdocs\www\internquest\controler\research_engine.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422b9c4b97544_24013923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0eea4a45388ac6fca8d31596d38365a3d0909a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\controler\\research_engine.php',
      1 => 1679996358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422b9c4b97544_24013923 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


require($_SERVER['DOCUMENT_ROOT'] . '/database/connexion.php');
class Search
{
    public static function researchCompany($text)
    {
        global $company;
        $resultsTab = $company->find([], ['projection' => ['_id' => 1, 'name' => 1, 'visible' => 1, 'pilot_trust' => 1, 'grades' => 1]]);
        foreach ($resultsTab as $doc) {
            $averageGrade = 0;
            foreach ($doc['grades'] as $grade) {
                $averageGrade += $grade['grade'];
            }
            if (str_contains(strtolower($doc['name']), strtolower($text)) && $doc['visible']) {
                echo '<div class="wrapper" value="' . $doc['_id'] . '">';
                echo '<div class="header header_home unselectable">' . $doc['name'] . '</div>';
                echo '<div class="content content_home">';
                echo '<p class="unselectable">Note du pilote : ' . $doc['pilot_trust'] . '</p>';
                echo '<p class="unselectable">' . (count($doc['grades']) != 0 ? $averageGrade / count($doc['grades']) : $averageGrade) . '/5</p>';
                echo '</div>';
                echo '</div>';
            }
        }
    }
    public static function researchOffer($text)
    {
        global $internship;
        $resultsTab = $internship->find([], ['projection' => ['_id' => 1, 'title' => 1, 'lvl' => 1, 'duration' => 1, 'company_name' => 1, 'location' => 1, 'contactEmail' => 1, 'apply_count' => 1, 'enable' => 1]]);
        foreach ($resultsTab as $doc) {
            if (str_contains(strtolower($doc['title']), strtolower($text)) && $doc['enable']) {
                echo '<div class="wrapper" value="' . $doc['_id'] . '">';
                echo '<div class="header header_home unselectable">' . $doc['title'] . '</div>';
                echo '<div class="content content_home">';
                echo '<p class="unselectable">' . $doc['lvl'] . '</p>';
                echo '<p class="unselectable">' . $doc['duration'] . ' semaines </p>';
                echo '<p class="unselectable">' . $doc['location']['city'] . '</p>';
                echo '<p class="unselectable"><a href="mailto:' . $doc['contactEmail'] . '">' . $doc['contactEmail'] . '</a></p><br>';
                echo '<p class="unselectable">✉︎ ' . $doc['apply_count'] . '</p>';
                echo '</div>';
                echo '<img class="image" src="/assets/images/corner.png" alt=\'corner-image\'>';
                echo '</div>';
            }
        }
    }
}
<?php }
}
