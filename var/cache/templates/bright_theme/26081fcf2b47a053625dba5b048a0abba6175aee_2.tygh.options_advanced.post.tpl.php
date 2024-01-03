<?php
/* Smarty version 4.1.1, created on 2024-01-02 15:08:23
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/reward_points/hooks/products/options_advanced.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593fcb7303c38_94412365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26081fcf2b47a053625dba5b048a0abba6175aee' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/reward_points/hooks/products/options_advanced.post.tpl',
      1 => 1704139989,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/reward_points/views/products/components/product_representation.tpl' => 2,
  ),
),false)) {
function content_6593fcb7303c38_94412365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && !$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_advanced.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/products/options_advanced.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && !$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
}
