<?php
/* Smarty version 4.2.1, created on 2023-03-21 14:15:37
  from 'C:\xampp\htdocs\www\internquest\public\templates\helpers\theader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6419adf998af64_77453381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7bbc1bdc56e0e1af528709a74734f8bf04f067b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\helpers\\theader.tpl',
      1 => 1679403709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419adf998af64_77453381 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../assets/images/book.png" />

  <link href="../../assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendors/fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/home/parallax.css">
  <link rel="stylesheet" href="../styles/home/search.css">
  <link rel="stylesheet" href="../styles/generics/header/header.css">
  <link rel="stylesheet" href="../styles/generics/footer/footer.css">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>

  <header id="native-header">
    <nav aria-label="first_header" class="navbar navbar-dark bg-dark">
      <a href="index.php"><img id="company_name" src="../../assets/images/logo.png" alt="InternQuest logo"
          width="300px"></a>
      <div id="button_div_header">
        <!--<button id="register_button" type="button" class="btn btn-primary" href="javascript:void(0)"><span>S'inscrire</span></button>-->
        <button id="login_button" type="button" class="btn btn-primary" href="javascript:void(0)"><span>Se
            connecter</span></button>

        <img id="account_avatar" src="../../assets/images/avatar.svg" alt="Avatar image" width="50px">
      </div>
    </nav>

    <nav id="second_header" aria-label="second_header" class="navbar navbar-expand-xl navbar-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse show" id="navbarLight">
          <ul class="navbar-nav me-auto mb-2 mb-xl-0">
            <li class="nav-item">
              <a id="nav-accueil" class="nav-link active nav-click" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li id="nav-recherche" class="nav-item nav-click">
              <a class="nav-link" href="research.php">Rechercher</a>
            </li>
          </ul>
          <a id="nav-tech" class="nav-link nav-click" href="#">Support technique ➔</a>
        </div>
      </div>
    </nav>
</header><?php }
}
