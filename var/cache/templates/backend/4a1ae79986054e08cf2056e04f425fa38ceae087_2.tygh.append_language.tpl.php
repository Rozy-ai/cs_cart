<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:04:15
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/components/append_language.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593df9f66e616_65992409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a1ae79986054e08cf2056e04f425fa38ceae087' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/components/append_language.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6593df9f66e616_65992409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ((($tmp = $_smarty_tpl->tpl_vars['select_languages']->value ?? null)===null||$tmp==='' ? (bool) $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp) && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {
$_smarty_tpl->_assignInScope('simple_tooltip', (($tmp = $_smarty_tpl->tpl_vars['simple_tooltip']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('hide_inputs', (($tmp = $_smarty_tpl->tpl_vars['hide_inputs']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('image_hide_inputs_class', $_smarty_tpl->tpl_vars['hide_inputs']->value ? "cs-append-language__icon--hide-inputs cm-tooltip" : '');
if (!$_smarty_tpl->tpl_vars['simple_tooltip']->value) {
ob_start();
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['languages']->value[(defined('DESCR_SL') ? constant('DESCR_SL') : null)]['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"flag flag-".$_prefixVariable4,'assign'=>"flag"),$_smarty_tpl);
}?><span class="add-on cs-append-language cm-field-suffix cm-tooltip" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['languages']->value[(defined('DESCR_SL') ? constant('DESCR_SL') : null)]['name'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/append_language.svg" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['languages']->value[(defined('DESCR_SL') ? constant('DESCR_SL') : null)]['name'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cs-append-language__icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_hide_inputs_class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['languages']->value[(defined('DESCR_SL') ? constant('DESCR_SL') : null)]['name'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>/></span><?php }
}
}
