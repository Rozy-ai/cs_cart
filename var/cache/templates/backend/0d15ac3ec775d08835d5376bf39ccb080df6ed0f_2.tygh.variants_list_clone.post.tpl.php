<?php
/* Smarty version 4.1.1, created on 2024-01-08 11:31:54
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_659bb2fa507623_22570005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d15ac3ec775d08835d5376bf39ccb080df6ed0f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659bb2fa507623_22570005 (Smarty_Internal_Template $_smarty_tpl) {
?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2">
</td>
<?php }
}
