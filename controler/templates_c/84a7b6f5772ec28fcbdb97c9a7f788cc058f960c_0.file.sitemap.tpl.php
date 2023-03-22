<?php
/* Smarty version 4.2.1, created on 2023-03-22 16:37:43
  from 'C:\xampp\htdocs\www\internquest\public\templates\sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641b20c72dc1f0_59315474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a7b6f5772ec28fcbdb97c9a7f788cc058f960c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\sitemap.tpl',
      1 => 1679499462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/header.tpl' => 1,
    'file:helpers/footer.tpl' => 1,
  ),
),false)) {
function content_641b20c72dc1f0_59315474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:helpers/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="/public/styles/sitemap/sitemap.css">


<div id="basic-core">
    <h2>Site Map</h2>
    <ul>
        <li><a href="/controler/index.php">Home</a></li>
        <li><a href="/controler/#about.html">About</a></li>
        <li><a href="/controler/sitemap.html">Site Map</a></li>
        <li><a href="/controler/login.html">Connexion</a></li>
        <li><a href="/controler/register.html">Account creation page</a></li>
        <li><a href="#personal-page.html">Personal page</a></li>
        <li><a href="/controler/search.html">Search page</a></li>
    </ul>
    <h2>Student area</h2>
    <ul>
        <li><a href="/controler/#wish-list.html">Wish list page</a></li>
        <li><a href="/controler/#follow-apply.html">Follow-up application page</a></li>
    </ul>
    <h2>Tutor area</h2>
    <ul>
        <li><a href="#create-company.html">Create a company</a></li>
        <li><a href="#create-offer.html">Create an offer</a></li>
        <li><a href="#my-offers.html">My offers page</a></li>
    </ul>
    <h2>Soon...</h2>
    <ul>
        <li><a href="#">Company News</a></li>
        <li><a href="#">Inter Learn</a></li>
        <li><a href="#">Interview</a></li>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:helpers/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
