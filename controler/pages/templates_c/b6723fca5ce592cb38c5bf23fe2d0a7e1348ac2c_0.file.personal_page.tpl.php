<?php
/* Smarty version 4.2.1, created on 2023-03-26 11:15:15
  from 'C:\xampp\htdocs\www\internquest\public\templates\personal_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64200d238749c4_88997445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6723fca5ce592cb38c5bf23fe2d0a7e1348ac2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\personal_page.tpl',
      1 => 1679822114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/profile-menu.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_64200d238749c4_88997445 (Smarty_Internal_Template $_smarty_tpl) {
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
                    </div>
                    <!--<img src="/assets/images/default.png" alt="user" id="avatar">-->
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:helpers/profile-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="form-row wishlist">
            <div class="form-col">
                <label>Votre liste de souhaits : </label>
                <div class="offer-example">
                    <p class="offer-title"><b>Stage ingénieur en couscous</b></p>
                    <a class="offer-company" href='#'>CESI</a>
                    <!--Link to the company linked to the offer-->
                    <a class="offer-company" href='mailto:'>example.example@example.example</a>
                    <!--Link to the contact email of the offer-->
                    <p class="offer-date">24/03/2023</p>
                    <!--Time when bookmarked-->
                </div>
                <div class="offer-example">
                    <p class="offer-title"><b>Stage ingénieur en couscous</b></p>
                    <a class="offer-company" href='#'>CESI</a>
                    <!--Link to the company linked to the offer-->
                    <a class="offer-company" href='mailto:'>example.example@example.example</a>
                    <!--Link to the contact email of the offer-->
                    <p class="offer-date">24/03/2023</p>
                    <!--Time when bookmarked-->
                </div>
                <div class="offer-example">
                    <p class="offer-title"><b>Stage ingénieur en couscous</b></p>
                    <a class="offer-company" href='#'>CESI</a>
                    <!--Link to the company linked to the offer-->
                    <a class="offer-company" href='mailto:'>example.example@example.example</a>
                    <!--Link to the contact email of the offer-->
                    <p class="offer-date">24/03/2023</p>
                    <!--Time when bookmarked-->
                </div>
                <div class="offer-example">
                    <p class="offer-title"><b>Stage ingénieur en couscous</b></p>
                    <a class="offer-company" href='#'>CESI</a>
                    <!--Link to the company linked to the offer-->
                    <a class="offer-company" href='mailto:'>example.example@example.example</a>
                    <!--Link to the contact email of the offer-->
                    <p class="offer-date">24/03/2023</p>
                    <!--Time when bookmarked-->
                </div>
                <div class="offer-example">
                    <p class="offer-title"><b>Stage ingénieur en couscous</b></p>
                    <a class="offer-company" href='#'>CESI</a>
                    <!--Link to the company linked to the offer-->
                    <a class="offer-company" href='mailto:'>example.example@example.example</a>
                    <!--Link to the contact email of the offer-->
                    <p class="offer-date">24/03/2023</p>
                    <!--Time when bookmarked-->
                </div>
                <div class="pagination-div">
                    <a id="previous-link" href="#">Previous</a>
                    <a id="next-link" href="#">Next</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
