<?php
/* Smarty version 4.1.1, created on 2024-01-07 12:30:07
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/my_design/hooks/profiles/my_account_menu.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_659a6f1faf6233_42685042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffef50e2c91a576a549d3820ba42c6778cea4cf0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/my_design/hooks/profiles/my_account_menu.pre.tpl',
      1 => 1704619801,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659a6f1faf6233_42685042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('yes');?>
</li>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_design/hooks/profiles/my_account_menu.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_design/hooks/profiles/my_account_menu.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('yes');?>
</li>
<?php }
}
}
