<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:31:57
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/blocks/product_tabs/description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983d0d25bb42_64521979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0083bb92319c3a8c7172141c9fd6b9c1b1f264e0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/blocks/product_tabs/description.tpl',
      1 => 1704139896,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65983d0d25bb42_64521979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/description.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/description.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
    <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
<?php }
}
}
}
