<?php
/* Smarty version 4.2.1, created on 2023-03-26 16:16:13
  from 'C:\xampp\htdocs\www\internquest\public\templates\personal_page\student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642053ad5e8bd3_80186468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29b8d7b3eb72cbe2c11a9a09fcb70cd4e11dc4dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\personal_page\\student.tpl',
      1 => 1679840172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642053ad5e8bd3_80186468 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-row wishlist">
    <div class="form-col">
        <label>Votre liste de souhaits : </label>
        </br></br>

        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <div class="offer-example" id="offer-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                <p class="offer-title"><b>Title</b></p>
                <a class="offer-company" href='#'>Company</a>
                <!--Link to the company linked to the offer-->
                <a class="offer-company" href='mailto:'>Mail</a>
                <!--Link to the contact email of the offer-->
                <p class="offer-date">Date</p>
                <!--Time when bookmarked-->
            </div>
        <?php }
}
?>

        <div class="pagination-div">
            <button id="previous-link" onclick="changeWishPage(-1)">&lt</button>
            <p id="nb-page"></p>
            <button id="next-link" onclick="changeWishPage(1)">&gt</button>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="/public/js/add_field/show_wish.js"><?php echo '</script'; ?>
><?php }
}
