<?php
/* Smarty version 4.2.1, created on 2023-03-28 21:33:16
  from 'C:\xampp\htdocs\www\internquest\public\templates\create_internship.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642340fc4b4770_54992894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5c5c23b3167e7445110bf5cc5d4db2e8b0acd8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\create_internship.tpl',
      1 => 1680031992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_642340fc4b4770_54992894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">

<main id="basic-core">
    <div class="form-box">
        <h2>Ajouter une offre de stage</h2>
        <form action="/controler/create_internship.php" method="post">
            <div class="form-row">
                <div class="form-line">
                    <label for="input-title">Intitulé</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input-name" name="input_title"
                            placeholder="Nom du stage.." required>
                    </div>
                    <label for="input-desc">Description</label>
                    <div class="form-group">
                        <input type="textarea" class="form-control" id="input-desc" name="input_desc"
                            placeholder="Description..." required>
                    </div>
                    <label for="input-company-name">Nom de l'entreprise hôte</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input-company-name" name="input_company_name"
                            placeholder="Nom de l'entreprise hôte" required>
                    </div>
                    <label for="input_localisation">Localisations</label>
                    <div class="form-group">
                        <input type="text" class="form-control localisation-input" id="input_street" name="input_street"
                            placeholder="Numéro de rue" required>
                        <input type="text" class="form-control localisation-input" id="input_city" name="input_city"
                            placeholder="Nom de la ville" required>
                        <input type="text" class="form-control localisation-input" id="input_postal" name="input_postal"
                            placeholder="Code postal" required>
                        <button type="button" onclick="add_location()">+</button>
                    </div>
                    <div id="entry-address" class="entry-box"></div>
                    <label for="input-skills">Compétences</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input-skills" name="input_skills"
                            placeholder="Compétences" required>
                        <button type="button" onclick="add_sector()">+</button>
                    </div>
                    <div id="entry-sector" class="entry-box"></div>
                    <label for="input-lv">Niveau d'étude recherché</label>
                    <div class="form-group">
                        <input type="textarea" class="form-control" id="input-lv" name="input_lv"
                            placeholder="Niveau d'étude recherché" required>
                    </div>
                    <label for="input-mail">Mail de contact</label>
                    <div class="form-group">
                        <input type="email" class="form-control" id="input-mail" name="input_mail"
                            placeholder="Mail de contact" required>
                    </div>
                    <label for="input-remun">Rémunération mensuel (€)</label>
                    <div class="form-group">
                        <input type="number" min="0" class="form-control" id="input-remun" name="input_remun"
                            placeholder="Rémunération mensuel (€)" required>
                    </div>
                    <label for="input-duration">Durée (en semaine)</label>
                    <div class="form-group">
                        <input type="number" min="2" max="26" class="form-control" id="input-duration" name="input_duration"
                            placeholder="Durée (en semaine)" required>
                    </div>
                    <label for="input-nb_ap">Nombre de place disponible</label>
                    <div class="form-group">
                        <input type="number" min="0" class="form-control" id="input-nb_ap" name="input_nb_ap"
                            placeholder="42" required>
                    </div>
                </div>
            </div>
            <nav id="form-button"><input type="submit" value="Valider" onclick="confirm()"><input type="reset"
                    onclick="clear_field()"></nav>

        </form>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/public/js/add_field/company.js"><?php echo '</script'; ?>
><?php }
}
