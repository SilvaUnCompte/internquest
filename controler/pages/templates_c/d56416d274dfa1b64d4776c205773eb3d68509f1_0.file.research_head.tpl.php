<?php
/* Smarty version 4.2.1, created on 2023-03-28 15:02:43
  from 'C:\xampp\htdocs\www\internquest\public\templates\research_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422e573ebbde6_35090524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56416d274dfa1b64d4776c205773eb3d68509f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\research_head.tpl',
      1 => 1680008563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
  ),
),false)) {
function content_6422e573ebbde6_35090524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="/public/styles/generics/commons/commons.css" rel="stylesheet">
<link href="/public/styles/research/research_style.css" rel="stylesheet">
<link href="/public/styles/cards/style.css" rel="stylesheet">

<main>
    <div id="first_row" class="row">
        <form id="filters_column" method="get">
            <div class="filter">
                <div class="filter-title first">
                    <h1>Type de recherche</h1>
                    <a id="close-filters-button">✖</a>
                </div>
                <div id="radio-type" class="filters">
                    <div>
                        <input type="radio" name="st" value="0" <?php if ($_GET['st'] == (0)) {?> checked <?php }?>>
                        <label>Offre de stage</label>
                    </div>
                    <div>
                        <input type="radio" name="st" value="1" <?php if ($_GET['st'] == (1)) {?> checked <?php }?>>
                        <label>Entreprise</label>
                    </div>
                    </a>
                </div>
            </div>
                        <div class="button-research-type">
                <button type="button" class="btn_model_animated" onclick="search()">Confirmer</button>
                <button type="reset" class="btn_model_animated">Réinitialiser</button>
            </div>
        </form>
        <div id="search_and_results_column">
            <div>
                <div id="search_row">
                    <form id="search_bar" action="/controler/pages/research.php" method="get">
                        <button id="show_filters_button" class="btn_model_animated" type="button">Filtres</button>
                        <input id="search-bar" type="search" placeholder="Search" name="sc" value=<?php echo $_GET['sc'];?>
>
                        <button type="button" class="btn_model_animated" onclick="search()">Search</button>
                    </form>
                </div>
                <div id="results_row" class="row">
            <div id="card_list"><?php }
}
