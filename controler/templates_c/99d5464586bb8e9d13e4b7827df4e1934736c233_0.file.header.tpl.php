<?php
/* Smarty version 4.2.1, created on 2023-03-24 11:18:10
  from 'C:\xampp\htdocs\www\internquest\public\templates\helpers\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641d78e28cb331_94401107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d5464586bb8e9d13e4b7827df4e1934736c233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\helpers\\header.tpl',
      1 => 1679650209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d78e28cb331_94401107 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/assets/images/book.png" />
  <link rel="manifest" href="/public/manifest.json">
  <meta name="theme-color" content="#424549"/>
  
  <link href="/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendors/fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/styles/generics/header/header.css">
  <link rel="stylesheet" href="/public/styles/generics/footer/footer.css">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>

  <header id="native-header">
    <nav aria-label="first_header" class="navbar navbar-dark bg-dark">
      <a href="/controler/pages/index.php"><img id="company_name" src="/assets/images/logo.webp" alt="InternQuest logo" loading="lazy"
          width="300" height="77.2"></a>
      <div id="button_div_header">
        <!--<button id="register_button" type="button" class="btn btn-primary" href="javascript:void(0)"><span>S'inscrire</span></button>-->
        <a id="login_button" class="btn btn-primary" href="login.php">Se connecter</a>

        <img id="account_avatar" src="/assets/images/avatar.svg" alt="Avatar image" width="50" height="50" loading="lazy">
      </div>
    </nav>

    <nav id="second_header">
      <ul class="navbar-nav me-auto mb-2 mb-xl-0">
        <li class="nav-item">
          <a id="nav-accueil" class="nav-link active" aria-current="page" href="/controler/pages/index.php">Accueil</a>
        </li>
        <li id="nav-recherche" class="nav-item">
          <a class="nav-link" href="/controler/pages/research.php">Rechercher</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-xl-0">
        <li class="nav-item">
          <a id="nav-tech" class="nav-link" href="#">Support technique ➔</a>
        </li>
      </ul>
    </nav>
</header><?php }
}
