<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:16:36
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e2843dcb92_09021228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3102d54783f7ea96b20b0e1fe5644987042ec10' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6593e2843dcb92_09021228 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.group_code.link','none','none'));
?>
<div class="object-picker__simple object-picker__simple--variation-group input-xlarge">
    <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_id">
    <select id="product_variations_code"
        class="cm-object-picker object-picker__select product-variations__toolbar-code-link"
        name="group_id"
        data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("product_variations.group_code.link");?>
"
    >
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_codes']->value, 'group_code', false, 'group_id');
$_smarty_tpl->tpl_vars['group_code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group_code']->value) {
$_smarty_tpl->tpl_vars['group_code']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_code']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
    </select>
</div><?php }
}