<?php
/* Smarty version 4.2.1, created on 2023-03-26 21:05:48
  from 'C:\xampp\htdocs\www\internquest\public\templates\personal_page\personal_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6420978c3fb6f9_51835802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef64f629f06f4b9467df363e6abe37c56638daa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\personal_page\\personal_page.tpl',
      1 => 1679857536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:personal_page/student.tpl' => 1,
    'file:personal_page/pilote.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_6420978c3fb6f9_51835802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/create/create.css">
<link rel="stylesheet" href="/public/styles/profile/profile.css">

<main id="basic-core">
    <div class="form-box">
        <div class="form-row informations">
            <div class="form-col">
                <label>Vos informations : </label>
                <div class="text-row">
                    <div class="informations-div space">
                        <div class="form-col">
                            <div class="form-col info-col">
                                <div class='info-div'>
                                    <p class="text-data"><b>Nom :</b></p>
                                    <p class="text-data"><b>Prénom :</b></p>
                                    <p class="text-data"><b>Rôle :</b></p>
                                </div>
                                <div class='info-div'>
                                    <p class="text-data"><?php echo $_SESSION['lastname'];?>
</p>
                                    <p class="text-data"><?php echo $_SESSION['firstname'];?>
</p>
                                    <p class="text-data">
                                        <?php if ($_SESSION['type'] == (0)) {?>
                                            Etudiant
                                        <?php } elseif ($_SESSION['type'] == (1)) {?>
                                            Pilote
                                        <?php } else { ?>
                                            Administrateur
                                        <?php }?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-col info-col">
                                <div class='info-div'>
                                    <p class="text-data"><b>Campus :</b></p>
                                    <p class="text-data"><b>Promotion :</b></p>
                                </div>
                                <div class='info-div'>
                                    <p class="text-data"><?php echo $_SESSION['campus'];?>
</p>
                                    <p class="text-data"><?php echo $_SESSION['promo'];?>
</p>
                                </div>
                            </div>
                        </div>
                        <a href="/controler/logout.php" id="logout-btn"> <button> Déconnexion </button></a>
                    </div>
                    <!--<img src="/assets/images/default.png" alt="user" id="avatar">-->
                </div>
            </div>
        </div>

        <?php if ($_SESSION['type'] == (0)) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:personal_page/student.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:personal_page/pilote.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
