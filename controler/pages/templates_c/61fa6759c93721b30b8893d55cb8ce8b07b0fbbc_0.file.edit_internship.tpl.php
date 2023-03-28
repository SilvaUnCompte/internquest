<?php
/* Smarty version 4.2.1, created on 2023-03-28 17:52:26
  from 'C:\xampp\htdocs\www\internquest\public\templates\edit_internship.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64230d3a5ff116_78882995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61fa6759c93721b30b8893d55cb8ce8b07b0fbbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\edit_internship.tpl',
      1 => 1680018725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_64230d3a5ff116_78882995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">

<main id="basic-core">
    <div class="form-box">
        <h2>Modifier une offre de stage</h2>
        <form action="/controler/edit_internship.php" method="post">
            <div class="form-row">
                <div class="form-line">
                    <label for="input-title">Intitulé</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input-name" name="input_title"
                            placeholder="Nom du stage.." value="<?php echo $_smarty_tpl->tpl_vars['title_']->value;?>
" required>
                    </div>
                    <label for="input-desc">Description</label>
                    <div class="form-group">
                        <input type="textarea" class="form-control" id="input-desc" name="input_desc"
                            placeholder="Description..." value="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" required>
                    </div>
                    <label for="input-company-name">Nom de l'entreprise hôte</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input-company-name" name="input_company_name"
                            placeholder="Nom de l'entreprise hôte" value="<?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
" required>
                    </div>
                    <label for="input_localisation">Localisations</label>
                    <div class="form-group">
                        <input type="text" class="form-control localisation-input" id="input_street" name="input_street"
                            placeholder="Numéro de rue" value="<?php echo $_smarty_tpl->tpl_vars['location']->value['street_address'];?>
" required>
                        <input type="text" class="form-control localisation-input" id="input_city" name="input_city"
                            placeholder="Nom de la ville" value="<?php echo $_smarty_tpl->tpl_vars['location']->value['city'];?>
" required>
                        <input type="text" class="form-control localisation-input" id="input_postal" name="input_postal"
                            placeholder="Code postal" value="<?php echo $_smarty_tpl->tpl_vars['location']->value['postal_code'];?>
" required>
                    </div>
                    <label for="input-lv">Niveau d'étude recherché</label>
                    <div class="form-group">
                        <input type="textarea" class="form-control" id="input-lv" name="input_lv"
                            placeholder="Niveau d'étude recherché" value="<?php echo $_smarty_tpl->tpl_vars['lvl']->value;?>
" required>
                    </div>
                    <label for="input-mail">Mail de contact</label>
                    <div class="form-group">
                        <input type="email" class="form-control" id="input-mail" name="input_mail"
                            placeholder="Mail de contact" value="<?php echo $_smarty_tpl->tpl_vars['contactEmail']->value;?>
" required>
                    </div>
                    <label for="input-remun">Rémunération mensuel (€)</label>
                    <div class="form-group">
                        <input type="number" min="0" class="form-control" id="input-remun" name="input_remun"
                            placeholder="Rémunération mensuel (€)" value="<?php echo $_smarty_tpl->tpl_vars['remuneration']->value;?>
" required>
                    </div>
                    <label for="input-duration">Durée (en semaine)</label>
                    <div class="form-group">
                        <input type="number" min="2" max="26" class="form-control" id="input-duration"
                            name="input_duration" placeholder="Durée (en semaine)" value="<?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
" required>
                    </div>
                </div>
            </div>
            <input type="submit" value="Valider"><a href="/controler/pages/research.php"> <input type="button" value="Annuler"> </a>
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
