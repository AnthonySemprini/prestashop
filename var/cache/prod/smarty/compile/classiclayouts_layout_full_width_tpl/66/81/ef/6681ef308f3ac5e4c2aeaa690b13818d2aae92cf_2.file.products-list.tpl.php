<?php
/* Smarty version 4.3.4, created on 2024-03-15 10:03:52
  from '/Applications/MAMP/htdocs/prestashop/modules/blockwishlist/views/templates/pages/products-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f40ef8c1a082_87725142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6681ef308f3ac5e4c2aeaa690b13818d2aae92cf' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockwishlist/views/templates/pages/products-list.tpl',
      1 => 1691748513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:blockwishlist/views/templates/components/pagination.tpl' => 1,
  ),
),false)) {
function content_65f40ef8c1a082_87725142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50220816665f40ef8c0c823_24568032', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77432094965f40ef8c0d439_87307509', 'page_content_container');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31686030665f40ef8c17dc3_90253712', 'page_footer_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_50220816665f40ef8c0c823_24568032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_50220816665f40ef8c0c823_24568032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_77432094965f40ef8c0d439_87307509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_77432094965f40ef8c0d439_87307509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div
    class="wishlist-products-container"
    data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-list-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-default-sort="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last added','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-add-to-cart="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
    data-share="<?php if ($_smarty_tpl->tpl_vars['isGuest']->value) {?>true<?php } else { ?>false<?php }?>"
    data-customize-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-quantity-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
    data-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlistName']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-no-products-message="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products found','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-filter="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
  >
  </div>

  <?php $_smarty_tpl->_subTemplateRender("module:blockwishlist/views/templates/components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_31686030665f40ef8c17dc3_90253712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_31686030665f40ef8c17dc3_90253712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="wishlist-footer-links">
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlistsLink']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return to wishlists','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
</a>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">home</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
  </div>
<?php
}
}
/* {/block 'page_footer_container'} */
}
