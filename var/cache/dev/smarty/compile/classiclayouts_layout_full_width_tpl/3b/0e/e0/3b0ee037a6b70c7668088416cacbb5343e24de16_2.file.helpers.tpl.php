<?php
/* Smarty version 4.3.4, created on 2024-03-15 15:30:32
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f45b882cd4b3_23786719',
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
function content_65f45b882cd4b3_23786719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/prestashop/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/3b/0e/e0/3b0ee037a6b70c7668088416cacbb5343e24de16_2.file.helpers.tpl.php',
    'uid' => '3b0ee037a6b70c7668088416cacbb5343e24de16',
    'call_name' => 'smarty_template_function_renderLogo_14800379665f45b882c7555_15892560',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_14800379665f45b882c7555_15892560 */
if (!function_exists('smarty_template_function_renderLogo_14800379665f45b882c7555_15892560')) {
function smarty_template_function_renderLogo_14800379665f45b882c7555_15892560(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_14800379665f45b882c7555_15892560 */
}
