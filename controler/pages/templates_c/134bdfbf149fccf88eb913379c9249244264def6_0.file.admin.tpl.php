<?php
/* Smarty version 4.2.1, created on 2023-03-26 21:33:02
  from 'C:\xampp\htdocs\www\internquest\public\templates\personal_page\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64209deebb2548_43957471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '134bdfbf149fccf88eb913379c9249244264def6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\personal_page\\admin.tpl',
      1 => 1679859122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64209deebb2548_43957471 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-row">
    <div class="form-col">
        <div class="research-account-div">
            <label>Pilote de mon centre : </label>
            <input type="text" placeholder="Rechercher un pilote...">
        </div>
        <div class="account-list">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <div class="account-example" id="student-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                    <p class="account-title"><b>Lastname</b></p>
                    <a class="account-company" href='#'>Firstname</a>
                </div>
            <?php }
}
?>
        </div>
    </div>
</div><?php }
}
