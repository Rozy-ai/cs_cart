<?php
/* Smarty version 4.1.1, created on 2024-01-05 14:19:11
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/onboarding_guide/hooks/bottom_panel/extra_link_in_help_menu_group_1.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597e5af8087e7_08378399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84bf2b16b7b5b6e97be4082750673dba9cd6c44e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/onboarding_guide/hooks/bottom_panel/extra_link_in_help_menu_group_1.post.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597e5af8087e7_08378399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.reset_onboarding'));
if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && (fn_onboarding_guide_has_progress() || fn_onboarding_guide_is_dismissed())) {?>
<a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.restart"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("onboarding_guide.reset_onboarding");?>
</a>
<?php }
}
}
