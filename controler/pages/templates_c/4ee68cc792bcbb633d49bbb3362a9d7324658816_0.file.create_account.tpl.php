<?php
/* Smarty version 4.2.1, created on 2023-03-24 13:00:49
  from 'C:\xampp\htdocs\www\internquest\public\templates\create_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641d90f1393499_04592744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee68cc792bcbb633d49bbb3362a9d7324658816' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\create_account.tpl',
      1 => 1679650769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_641d90f1393499_04592744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">


<main id="basic-core">
    <div class="form-box">
        <h2>Ajouter un <?php echo $_smarty_tpl->tpl_vars['account_type']->value == 1 ? 'pilote' : 'etudiant';?>
</h1>
            <form action="/controler/create_account.php" method="post">
                <div class="form-row">
                    <div class="form-col">
                        <label>Informations de connexion</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_email" name="input_email" placeholder="Email" required
                                pattern="[^@\s]+@[^@\s]+.[^@\s]">
                            <input type="password" class="form-control" id="input_password" name="input_password" placeholder="Mot de passe"
                                required>
                        </div>
                        <label>Nom prenom</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_lastname" name="input_lastname" placeholder="Nom" required
                                pattern="^[a-zA-Z\s]+$">
                            <input type="text" class="form-control" id="input_firstname" name="input_firstname" placeholder="Prenom" required
                                pattern="^[a-zA-Z\s]+$">
                        </div>
                        <label>Informations d'école</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_campus" name="input_campus" placeholder="Campus" required
                                pattern="^[a-zA-Z\s]+$">
                            <input type="text" class="form-control" id="input_promotion" name="input_promotion" placeholder="Promotion"
                                required pattern="^[a-zA-Z0-9\s]+$">
                        </div>
                    </div>
                    <img src="/assets/images/default.png" alt="add user" id="avatar">
                </div>
                <input type="submit" value="Valider"><input type="reset">
                <input type="text" class="hide" name="input_type" value="<?php echo $_smarty_tpl->tpl_vars['account_type']->value;?>
">
            </form>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="../public/js/create.js"><?php echo '</script'; ?>
><?php }
}
