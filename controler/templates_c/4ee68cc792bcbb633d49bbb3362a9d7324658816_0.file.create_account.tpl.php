<?php
/* Smarty version 4.2.1, created on 2023-03-23 21:20:46
  from 'C:\xampp\htdocs\www\internquest\public\templates\create_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641cb49ea5df93_30933990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee68cc792bcbb633d49bbb3362a9d7324658816' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\create_account.tpl',
      1 => 1679578704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_641cb49ea5df93_30933990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">


<main id="basic-core">
    <div class="form-box">
        <h2>Ajouter un <?php echo $_smarty_tpl->tpl_vars['account_type']->value == 1 ? 'pilote' : 'etudiant';?>
</h1>
            <form>
                <div class="form-row">
                    <div class="form-col">
                        <label for="input_email">Informations de connexion</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_email" placeholder="Email" required
                                pattern="[^@\s]+@[^@\s]+.[^@\s]">
                            <input type="text" class="form-control" id="input_password" placeholder="Mot de passe"
                                required pattern="[A-Za-z-]$">
                        </div>
                        <label for="input_email">Nom prenom</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_lastname" placeholder="Nom" required
                                pattern="[A-Za-z-]$">
                            <input type="text" class="form-control" id="input_firstname" placeholder="Prenom" required
                                pattern="[A-Za-z-]$">
                        </div>
                        <label for="input_email">Informations d'école</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_campus" placeholder="Campus" required
                                pattern="[A-Za-z-]$">
                            <input type="text" class="form-control" id="input_promotion" placeholder="Promotion"
                                required pattern="[A-Za-z-]$">
                        </div>
                    </div>
                    <img src="/assets/images/default.png" alt="add user" id="avatar">
                </div>
                <input type="submit" value="Valider"><input type="reset">

            </form>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="../public/js/create.js"><?php echo '</script'; ?>
><?php }
}
