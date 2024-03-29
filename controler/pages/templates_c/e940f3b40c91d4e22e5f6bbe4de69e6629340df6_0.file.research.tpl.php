<?php
/* Smarty version 4.2.1, created on 2023-03-28 11:34:07
  from 'C:\xampp\htdocs\www\internquest\public\templates\research.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422b48fa72182_45329205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e940f3b40c91d4e22e5f6bbe4de69e6629340df6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\research.tpl',
      1 => 1679996045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_6422b48fa72182_45329205 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="filters">
                    <div>
                        <input type="radio" name="st" value="0" <?php if ($_GET['st'] == (0)) {?> checked <?php }?>>
                        <label>Offre de stage</label>
                    </div>
                    <div>
                        <input type="radio" name="st" value="1" <?php if ($_GET['st'] == (1)) {?> checked <?php }?>>
                        <label>Entreprise</label>
                    </div>
                </div>
            </div>
                        <div class="button-research-type">
                <button type="submit" class="btn_model_animated">Confirmer</button>
                <button type="reset" class="btn_model_animated">Réinitialiser</button>
            </div>
        </form>
        <div id="search_and_results_column">
            <div>
                <div id="search_row">
                    <form id="search_bar" method="post">
                        <button id="show_filters_button" class="btn_model_animated" type="button">Filtres</button>
                        <input type="search" placeholder="Search" name="sc">
                        <button type="submit" class="btn_model_animated">Search</button>
                    </form>
                </div>
                <div id="results_row" class="row">
                    <div id="card_list">
                        <?php if ($_GET['st'] == (0)) {?>
                            <?php $_smarty_tpl->_subTemplateRender(('../../controler/research_engine.php'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    <?php } else { ?>
                                                    <?php }?>
                    </div>
                    <div id="card_info_showing">
                        <div id="card_infos">

                        </div>
                                            </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/public/js/research.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/add_field/show_offer_data.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/add_field/show_company_data.js"><?php echo '</script'; ?>
><?php }
}
