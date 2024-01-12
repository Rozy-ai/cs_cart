<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:28:18
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/geo_maps/hooks/products/product_block_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983c320befb0_40224335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ce2b016464b93bb1778bb6aa42c7df9cbf1bac' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/geo_maps/hooks/products/product_block_content.post.tpl',
      1 => 1704450611,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl' => 2,
  ),
),false)) {
function content_65983c320befb0_40224335 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/products/product_block_content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/products/product_block_content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), 0, true);
}
}
}
