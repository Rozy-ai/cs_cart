<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:11:56
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e16ccaac64_14781951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d94380afec6f68b3932595894330556482c3190' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6593e16ccaac64_14781951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('import_product_href', "import_presets.manage&object_type=products" ,false ,2);
$_smarty_tpl->_assignInScope('has_permission_an_import', fn_check_permissions("import_presets","update","admin","POST") ,false ,2);
}
}
