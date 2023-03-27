<?php
/* Smarty version 4.2.1, created on 2023-03-27 14:20:33
  from 'C:\xampp\htdocs\www\internquest\public\templates\create_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64218a1198b612_35284820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dec00ce71162382671c5b1ec7628e7063d3e653' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\create_company.tpl',
      1 => 1679909180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_64218a1198b612_35284820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">

<main id="basic-core">
    <div class="form-box">
        <h2>Ajouter une entreprise</h2>
        <form action="/controler/create_company.php" method="post">
            <div class="form-row">
                <div class="form-line">
                    <label for="input-name">Nom</label>
                    <div class="form-group">
                    <input type="text" class="form-control" id="input-name" name="input_name" placeholder="Nom de l'entreprise" required
                        >
                    </div>
                    <label for="input-desc">Description</label>
                    <div class="form-group">
                    <input type="textarea" class="form-control" id="input-desc" name="input_desc" placeholder="Description..." required
                        >
                    </div>
                    <label for="input_localisation">Localisations</label>
                    <div class="form-group">
                        <input type="text" class="form-control localisation-input" id="input_street" name="input_street" placeholder="Numéro de rue" required
                           >
                        <input type="text" class="form-control localisation-input" id="input_city" name="input_city" placeholder="Nom de la ville" required
                            >
                        <input type="text" class="form-control localisation-input" id="input_postal" name="input_postal" placeholder="Code postal" required
                            >
                        <button type="button" onclick="add_location()">+</button>
                    </div>
                    <div id="entry-address" class="entry-box"></div>
                    <label for="input_localisation">Secteur d'activité</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input_sector" name="input_sector" placeholder="Secteur d'activité" required>
                        <button type="button" onclick="add_sector()">+</button>
                    </div>
                    <div id="entry-sector" class="entry-box"></div>
                    <label for="input-desc">Niveau de confiance</label>
                    <div class="form-group">
                    <input type="number" min="1" max="5" class="form-control" id="input-trust" name="input_trust" placeholder="/5" required>
                    </div>
                </div>
                <img src="/assets/images/default.png" alt="add user" id="avatar">
            </div>
            <nav id="form-button"><input type="submit" value="Valider" onclick="confirm()"><input type="reset" onclick="clear_field()"></nav>

        </form>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/public/js/add_field/company.js"><?php echo '</script'; ?>
><?php }
}
