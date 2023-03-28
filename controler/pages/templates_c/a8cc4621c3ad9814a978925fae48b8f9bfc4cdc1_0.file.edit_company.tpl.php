<?php
/* Smarty version 4.2.1, created on 2023-03-28 19:00:15
  from 'C:\xampp\htdocs\www\internquest\public\templates\edit_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64231d1fd37ac3_64645515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8cc4621c3ad9814a978925fae48b8f9bfc4cdc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\edit_company.tpl',
      1 => 1680022813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_64231d1fd37ac3_64645515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">

<main id="basic-core">
    <div class="form-box">
        <h2>Ajouter une entreprise</h2>
        <form action="/controler/edit_company.php" method="post">
            <div class="form-row">
                <div class="form-line">
                    <label for="input-name">Nom</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input-name" name="input_name"
                            placeholder="Nom de l'entreprise" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" required>
                    </div>
                    <label for="input-desc">Description</label>
                    <div class="form-group">
                        <input type="textarea" class="form-control" id="input-desc" name="input_desc"
                            placeholder="Description..." value="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" required>
                    </div>
                    <label for="input_localisation">Localisations</label>
                    <div class="form-group">
                        <input type="text" class="form-control localisation-input" id="input_street" name="input_street"
                            placeholder="Numéro de rue" value="<?php echo $_smarty_tpl->tpl_vars['location']->value[0]['street_address'];?>
" required>
                        <input type="text" class="form-control localisation-input" id="input_city" name="input_city"
                            placeholder="Nom de la ville" value="<?php echo $_smarty_tpl->tpl_vars['location']->value[0]['city'];?>
" required>
                        <input type="text" class="form-control localisation-input" id="input_postal" name="input_postal"
                            placeholder="Code postal" value="<?php echo $_smarty_tpl->tpl_vars['location']->value[0]['postal_code'];?>
" required>
                    </div>
                    <label for="input-desc">Niveau de confiance</label>
                    <div class="form-group">
                        <input type="number" min="1" max="5" class="form-control" id="input-trust" name="input_trust"
                            placeholder="/5" value="<?php echo $_smarty_tpl->tpl_vars['trust']->value;?>
" required>
                    </div>
                </div>
                <img src="/assets/images/default.png" alt="add user" id="avatar">
            </div>
            <div class="form-group">
                <label for="input-visible">Visible :</label>
                <input type="checkbox" id="input-visible" name="input_visible" <?php if ($_smarty_tpl->tpl_vars['visible']->value == (1)) {?> checked <?php }?>>
            </div>
            <input type="submit" value="Valider"><a href="/controler/pages/research.php"> <input type="button"
                    value="Annuler"> </a>
            <input type="text" class="hide" name="id_" value="<?php echo $_smarty_tpl->tpl_vars['id_']->value;?>
">
        </form>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/public/js/add_field/company.js"><?php echo '</script'; ?>
><?php }
}
