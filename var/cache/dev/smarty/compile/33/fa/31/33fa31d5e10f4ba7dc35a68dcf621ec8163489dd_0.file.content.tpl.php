<?php
/* Smarty version 4.3.4, created on 2024-03-15 16:12:25
  from '/Applications/MAMP/htdocs/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f465595697a8_56263536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33fa31d5e10f4ba7dc35a68dcf621ec8163489dd' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/template/content.tpl',
      1 => 1708958657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f465595697a8_56263536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
