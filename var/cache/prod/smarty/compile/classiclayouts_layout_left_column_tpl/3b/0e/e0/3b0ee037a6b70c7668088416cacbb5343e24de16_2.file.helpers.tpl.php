<?php
/* Smarty version 4.3.4, created on 2024-03-15 10:03:55
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f40efb82ca72_15673973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0ee037a6b70c7668088416cacbb5343e24de16' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f40efb82ca72_15673973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/3b/0e/e0/3b0ee037a6b70c7668088416cacbb5343e24de16_2.file.helpers.tpl.php',
    'uid' => '3b0ee037a6b70c7668088416cacbb5343e24de16',
    'call_name' => 'smarty_template_function_renderLogo_56896855965f40efb825d01_12348183',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_56896855965f40efb825d01_12348183 */
if (!function_exists('smarty_template_function_renderLogo_56896855965f40efb825d01_12348183')) {
function smarty_template_function_renderLogo_56896855965f40efb825d01_12348183(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_56896855965f40efb825d01_12348183 */
}
