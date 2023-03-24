<?php
/* Smarty version 4.2.1, created on 2023-03-24 15:33:05
  from 'C:\xampp\htdocs\www\internquest\public\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641db4a149a870_48654904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a6a5919e15821c81f839e99a9c54b20e35c31d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\login.tpl',
      1 => 1679668379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641db4a149a870_48654904 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/images/book.png" />

    <link href="/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendors/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/styles/generics/header/header.css">
    <link rel="stylesheet" href="/public/styles/generics/footer/footer.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<link rel="stylesheet" href="/public/styles/login/login.css">


<a id="home" href="/controler/pages/index.php">
    <ion-icon name="home-outline" id="home-outline"></ion-icon>
    <ion-icon name="home" id="home-full"></ion-icon>
</a>

<section id="section-core">
    <div class="form-box">
        <div class="form-value">
            <form action="/controler/login.php" method="post">
                <h2>Login</h2>
                <div class="input-box">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input id="email_id" type="email" name="input_email" required placeholder=" ">
                    <label for="email_id">Email</label>
                </div>
                <div class="input-box">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input id="password_id" type="password" name="input_password" required placeholder=" ">
                    <label for="password_id">Password</label>
                </div>
                <div class="forget">
                    <a href="#">Forget Password?</a>
                </div>
                <input type="submit" value="Login">
                <div class="register">
                    <p>Don't have an account? <a href="#">Call your pilot</a></p>
                    <p class="error">
                        <?php if ($_smarty_tpl->tpl_vars['state']->value == (1)) {?>
                        Ce mail n'existe pas
                        <?php } elseif ($_smarty_tpl->tpl_vars['state']->value == (2)) {?>
                        Mot de passe incorrect
                        <?php }?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php echo '<script'; ?>
 type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
