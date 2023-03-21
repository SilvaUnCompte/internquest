<?php
/* Smarty version 4.2.1, created on 2023-03-21 14:13:15
  from 'C:\xampp\htdocs\www\internquest\public\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6419ad6b8c2dc7_84012648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fb19d7c0b67a30e601fbde41e7e9afa535701df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\index.tpl',
      1 => 1679404394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/theader.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_6419ad6b8c2dc7_84012648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/theader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a id="home" href="index.php">
    <ion-icon name="home-outline" id="home-outline"></ion-icon>
    <ion-icon name="home" id="home-full"></ion-icon>
</a>

<section>
    <div class="form-box">
        <div class="form-value">
            <form action="">
                <h2>Login</h2>
                <div class="input-box">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" required placeholder=" ">
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required placeholder=" ">
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <a href="#">Forget Password?</a>
                </div>
                <input type="submit" value="Login">
                <div class="register">
                    <p>Don't have an account? <a href="register.html">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:helpers/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
