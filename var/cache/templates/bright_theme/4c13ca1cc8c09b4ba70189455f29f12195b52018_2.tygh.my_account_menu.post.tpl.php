<?php
/* Smarty version 4.1.1, created on 2024-01-01 23:26:36
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/reward_points/hooks/profiles/my_account_menu.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65931ffce89bc9_90069097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c13ca1cc8c09b4ba70189455f29f12195b52018' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/reward_points/hooks/profiles/my_account_menu.post.tpl',
      1 => 1704139989,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65931ffce89bc9_90069097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('my_points','my_points'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars((string) fn_url("reward_points.userlog"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("my_points");?>
&nbsp;<span class="ty-reward-points-count">(<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['user_info']->value['points'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
)</span></a></li>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars((string) fn_url("reward_points.userlog"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("my_points");?>
&nbsp;<span class="ty-reward-points-count">(<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['user_info']->value['points'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
)</span></a></li>
<?php }
}
}
}
