<?php
/* Smarty version 4.1.1, created on 2024-01-05 13:34:41
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/blocks/static_templates/payment_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597db413384b4_96437865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0cc500decfd140d25203af620a78d5241ebc762' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/blocks/static_templates/payment_icons.tpl',
      1 => 1704139896,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597db413384b4_96437865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:payment_icons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <span class="ty-payment-icons__item twocheckout">&nbsp;</span>
    <span class="ty-payment-icons__item paypal">&nbsp;</span>
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:payment_icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/payment_icons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/payment_icons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:payment_icons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <span class="ty-payment-icons__item twocheckout">&nbsp;</span>
    <span class="ty-payment-icons__item paypal">&nbsp;</span>
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:payment_icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php }
}
}
