<?php
/* Smarty version 4.1.1, created on 2024-01-01 23:26:37
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/blocks/safe_smarty_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65931ffd3ed424_84065563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c1e10343ef3293a2430c232ab49fcd996ad3253' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/blocks/safe_smarty_block.tpl',
      1 => 1704139896,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65931ffd3ed424_84065563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.safe_eval_string.php','function'=>'smarty_function_safe_eval_string',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_function_safe_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/safe_smarty_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/safe_smarty_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_function_safe_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }
}
}
}
