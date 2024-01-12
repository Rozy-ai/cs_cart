<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:33:24
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/products/components/picker/item_position.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983d642f7178_35903019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '241732487f74d7dce52a00c8b804e111ec8f4cf5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/products/components/picker/item_position.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65983d642f7178_35903019 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('position_short'));
?>
<div class="object-picker__products-position">
    <input type="text"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[${data.product_id}]"
        value="${(data._index + 1) * 10}"
        size="3"
        class="input-micro"
        placeholder="<?php echo $_smarty_tpl->__("position_short");?>
"
    />
</div><?php }
}
