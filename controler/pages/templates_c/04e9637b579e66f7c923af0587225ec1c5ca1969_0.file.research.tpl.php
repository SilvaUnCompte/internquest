<?php
/* Smarty version 4.2.1, created on 2023-03-24 15:34:56
  from 'C:\wamp64\www\others\internquest_1\internquest\public\templates\research.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641dc3207ed694_55503255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e9637b579e66f7c923af0587225ec1c5ca1969' => 
    array (
      0 => 'C:\\wamp64\\www\\others\\internquest_1\\internquest\\public\\templates\\research.tpl',
      1 => 1679647166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:card.tpl' => 5,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_641dc3207ed694_55503255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="/public/styles/generics/commons/commons.css" rel="stylesheet">
<link href="/public/styles/research/research_style.css" rel="stylesheet">
<link href="/public/styles/cards/style.css" rel="stylesheet">


<main>
<div id="first_row" class="row">
    <div id="filters_column">
        <div id="top_div">
            <h2>Filters</h2>
            <a id="filter_closing_link" href="#" >
                <img src="/assets/images/43165.webp" width="25px" height="25px">
            </a>
        </div>
        <form method="get">
            <div class="accordion" id="accordionBasic">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Type de recherche
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                    <div class="first_filter accordion-body">
                        <form id="first_filter">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioChoice" id="formRadioChecked">
                                <label class="form-check-label" for="formRadioChecked">Offres de stage</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Entreprise</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Etudiant</label>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Niveau(x) d'étude
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
                    <div class="second_filter accordion-body">
                        <form id="second_filter">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="radioChoice" id="formRadioChecked">
                                <label class="form-check-label" for="formRadioChecked">Bac</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="radioChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Bac +2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="radioChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Bac +3</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="radioChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Bac +4</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="radioChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Bac +5</label>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Secteur d'activité
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionBasic">
                    <div class="third_filter accordion-body">
                        <form id="third_filter">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioChecked">
                                <label class="form-check-label" for="formRadioChecked">Enseignement et formation</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Informatique</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Assurance</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Juridique</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">BTP</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Aérospatial et défense</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Santé</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Télécommunication</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Immobilier</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Restauration</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkboxChoice" id="formRadioDefault">
                                <label class="form-check-label" for="formRadioDefault">Agriculture</label>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Durée du stage
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionBasic">
                <div class="fourth_filter accordion-body">
                    <form id="fourth_filter">
                        <div id="min_div">
                            <label for="min_duration">Min : </label>
                            <input id="min_duration" type="number" min="0" max="28" value=>
                        </div>
                        <div id="max_div">
                            <label for="max_duration">Max : </label>
                            <input id="max_duration" type="number"min="0" max="28">
                        </div>
                    </form>
                </div>
                </div>
                </div>
            </div>
            <div id="bottom_div">
                <button type="reset" class="btn_model_animated">Réinitialiser</button>
                <button type="submit" class="btn_model_animated">Confirm</button>
            </div>
        </form>
    </div>
    <div id="search_and_results_column">
        <div>
            <div id="search_row" class="row">
                <form id="search_bar" class="d-flex">
                    <button id="show_filters_button" class="btn_model_animated" type="button">Filtres</button>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="submit" class="btn_model_animated">Search</button>
                </form>
            </div>
            <div id="results_row" class="row">
                <div id="card_list">
                    <?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>                     <?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <div id="card_info_showing">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="list_div">

</div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/public/js/research.js"><?php echo '</script'; ?>
><?php }
}
