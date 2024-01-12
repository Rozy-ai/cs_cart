<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:33:24
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/products/components/picker/block_manager_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983d6424cb64_92139530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f8d2973ec60b465a5f2e379aab604613442298c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/products/components/picker/block_manager_picker.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_65983d6424cb64_92139530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_ids'=>explode(",",$_smarty_tpl->tpl_vars['item_ids']->value),'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'view_mode'=>$_smarty_tpl->tpl_vars['view_mode']->value,'show_positions'=>$_smarty_tpl->tpl_vars['show_positions']->value,'allow_clear'=>false,'for_current_storefront'=>true,'additional_query_params'=>http_build_query((($tmp = $_smarty_tpl->tpl_vars['additional_query_params']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp))), 0, false);
}
}
