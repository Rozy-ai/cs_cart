<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:31:49
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/vendor_communication/hooks/products/view_main_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983d059df658_61297450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91e53828cd1f6cd7dfdeb716b549f04935d9bc59' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/vendor_communication/hooks/products/view_main_info.pre.tpl',
      1 => 1704450611,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65983d059df658_61297450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('quick_view_additional_container', ($_smarty_tpl->tpl_vars['quick_view_additional_container']->value).(",product_vendor_communication_thread_form") ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/products/view_main_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/products/view_main_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('quick_view_additional_container', ($_smarty_tpl->tpl_vars['quick_view_additional_container']->value).(",product_vendor_communication_thread_form") ,false ,2);
}
}
}
