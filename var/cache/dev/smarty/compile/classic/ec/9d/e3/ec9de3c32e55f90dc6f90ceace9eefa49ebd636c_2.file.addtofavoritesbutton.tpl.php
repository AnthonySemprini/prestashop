<?php
/* Smarty version 4.3.4, created on 2024-03-15 16:12:35
  from '/Applications/MAMP/htdocs/prestashop/modules/MyFav/views/templates/hook/addtofavoritesbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f46563573d69_49065017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec9de3c32e55f90dc6f90ceace9eefa49ebd636c' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/MyFav/views/templates/hook/addtofavoritesbutton.tpl',
      1 => 1710509297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f46563573d69_49065017 (Smarty_Internal_Template $_smarty_tpl) {
?>
<button class="add-to-favorites-btn" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
">Ajouter aux favoris</button>
<?php }
}
