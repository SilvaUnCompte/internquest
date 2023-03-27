<?php
/* Smarty version 4.2.1, created on 2023-03-27 15:48:03
  from 'C:\xampp\htdocs\www\internquest\public\templates\edit_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64219e933af155_33111573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5aec7b6e44d45c3147122b45c0297b0a4d737cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\edit_account.tpl',
      1 => 1679924879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_64219e933af155_33111573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">


<main id="basic-core">
    <div class="form-box">
        <h2>Edition de <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
</h1>
            <form action="/controler/edit_account.php" method="post">
                <div class="form-row">
                    <div class="form-col">
                        <label>Informations de connexion</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_email" name="input_email"
                                placeholder="Email" required pattern="[^@\s]+@[^@\s]+.[^@\s]" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
                            <input type="password" class="form-control" id="input_password" name="input_password"
                                placeholder="Mot de passe">
                        </div>
                        <label>Nom prenom</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_lastname" name="input_lastname"
                                placeholder="Nom" required pattern="^[a-zA-Z\s]+$" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
">
                            <input type="text" class="form-control" id="input_firstname" name="input_firstname"
                                placeholder="Prenom" required pattern="^[a-zA-Z\s]+$" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
">
                        </div>
                        <label>Informations d'école</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_campus" name="input_campus"
                                placeholder="Campus" required pattern="^[a-zA-Z\s]+$" value="<?php echo $_smarty_tpl->tpl_vars['campus']->value;?>
">
                            <input type="text" class="form-control" id="input_promotion" name="input_promotion"
                                placeholder="Promotion" required pattern="^[a-zA-Z0-9\s]+$" value="<?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
">
                        </div>
                    </div>
                    <img src="/assets/images/default.png" alt="add user" id="avatar">
                </div>
                <input type="submit" value="Valider"><a href="/controler/pages/personal_page.php"> <input type="button" value="Annuler"> </a>
                <input type="text" class="hide" name="id_" value="<?php echo $_smarty_tpl->tpl_vars['id_']->value;?>
">
            </form>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
