<?php
/* Smarty version 4.1.1, created on 2024-01-05 13:34:40
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/seo/hooks/index/meta_description.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597db40006d51_99272378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7906b3ebe4324021754517703f4e0c5ec171b6b0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/seo/hooks/index/meta_description.override.tpl',
      1 => 1704450611,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597db40006d51_99272378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['search']->value && ($_smarty_tpl->tpl_vars['meta_description']->value || $_smarty_tpl->tpl_vars['location_data']->value['meta_description'])) {?>
<meta name="description" content="<?php echo htmlspecialchars((string) (($tmp = html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_get_seo_page_title($_smarty_tpl->tpl_vars['search']->value), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta_description.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta_description.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['search']->value && ($_smarty_tpl->tpl_vars['meta_description']->value || $_smarty_tpl->tpl_vars['location_data']->value['meta_description'])) {?>
<meta name="description" content="<?php echo htmlspecialchars((string) (($tmp = html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_get_seo_page_title($_smarty_tpl->tpl_vars['search']->value), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
}
