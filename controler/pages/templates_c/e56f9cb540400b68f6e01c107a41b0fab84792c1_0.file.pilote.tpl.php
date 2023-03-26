<?php
/* Smarty version 4.2.1, created on 2023-03-26 21:37:52
  from 'C:\xampp\htdocs\www\internquest\public\templates\personal_page\pilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64209f1034d295_34563212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56f9cb540400b68f6e01c107a41b0fab84792c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\public\\templates\\personal_page\\pilote.tpl',
      1 => 1679859470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:personal_page/admin.tpl' => 1,
  ),
),false)) {
function content_64209f1034d295_34563212 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-row">
    <div class="form-col">
        <div class="research-account-div">
            <label>Etudiants de ma promotion : </label>
            <input type="text" placeholder="Rechercher un étudiant...">
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
                    <p class="account-title"><b>Firstname</b></p>
                    <div>
                        <a class="account-company" href='#'>Editer</a>
                        <a class="account-company" href='#'>Supprimer</a>
                    </div>
                </div>
            <?php }
}
?>
        </div>
        <?php if ($_SESSION['type'] >= (2)) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:personal_page/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>
    <div class="form-col buttons">
        <a class="add" href="/controler/pages/create_student.php"><button class="add">Ajouter un etudiant</button></a>
        <?php if ($_SESSION['type'] >= (2)) {?>
            <a class="add" href="/controler/pages/create_pilote.php"><button class="add">Ajouter un
                    pilote</button></a>
        <?php }?>
        <a class="add" href="/controler/pages/create_company.php"> <button class="add">Ajouter une
                entreprise</button></a>
        <a class="add" href="/controler/pages/create_internship.php"> <button class="add">Ajouter une offre de
                stage</button></a>
    </div>
</div><?php }
}
