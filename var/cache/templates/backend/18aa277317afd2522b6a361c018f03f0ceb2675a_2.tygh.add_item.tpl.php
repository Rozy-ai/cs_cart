<?php
/* Smarty version 4.1.1, created on 2024-01-05 14:19:11
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/components/menu/add_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597e5afe61993_01222254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18aa277317afd2522b6a361c018f03f0ceb2675a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/components/menu/add_item.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_6597e5afe61993_01222254 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_menu.add_item_for_menu_title','admin_menu.add_item_title','admin_menu.add_item'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {
$_smarty_tpl->_assignInScope('has_subitems', (($tmp = $_smarty_tpl->tpl_vars['has_subitems']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_subitem', (($tmp = $_smarty_tpl->tpl_vars['is_subitem']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('li_class', $_smarty_tpl->tpl_vars['navigation_accordion']->value ? "accordion-group" : "dropdown");
$_smarty_tpl->_assignInScope('extra_params', (($tmp = $_smarty_tpl->tpl_vars['extra_params']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('extra_params_query', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra_params']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->_assignInScope('temp', ((string)$_smarty_tpl->tpl_vars['key']->value)."=".((string)$_smarty_tpl->tpl_vars['value']->value));
$_smarty_tpl->_assignInScope('extra_params_query', ((string)$_smarty_tpl->tpl_vars['extra_params_query']->value)."&".((string)$_smarty_tpl->tpl_vars['temp']->value));
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['li_class']->value, ENT_QUOTES, 'UTF-8');?>
 nav__header-main-menu-subitem bm-block-manager__block-add" data-ca-sortable-is-active="0"><?php if ($_smarty_tpl->tpl_vars['is_subitem']->value) {
$_smarty_tpl->_assignInScope('link_class', "nav__menu-subitem");
ob_start();
echo $_smarty_tpl->__("admin_menu.add_item_for_menu_title");
$_prefixVariable28=ob_get_clean();
$_smarty_tpl->_assignInScope('popup_title', $_prefixVariable28.": ".((string)$_smarty_tpl->tpl_vars['menu_name']->value));
} else {
$_smarty_tpl->_assignInScope('link_class', "nav__menu-item");
$_smarty_tpl->_assignInScope('popup_title', $_smarty_tpl->__("admin_menu.add_item_title"));
}
if ($_smarty_tpl->tpl_vars['navigation_accordion']->value && $_smarty_tpl->tpl_vars['has_items']->value) {
$_smarty_tpl->_assignInScope('link_class', ((string)$_smarty_tpl->tpl_vars['link_class']->value)." nav__menu-item--accordion");
} elseif (!$_smarty_tpl->tpl_vars['is_subitem']->value) {
$_smarty_tpl->_assignInScope('link_class', ((string)$_smarty_tpl->tpl_vars['link_class']->value)." dropdown-toggle");
}
ob_start();
echo $_smarty_tpl->__("admin_menu.add_item");
$_prefixVariable29=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"edit",'text'=>$_smarty_tpl->tpl_vars['popup_title']->value,'link_text'=>$_prefixVariable29."...",'href'=>"block_manager.update_custom_block?object_type=menu_item&block_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['current_dispatch']->value).((string)$_smarty_tpl->tpl_vars['extra_params_query']->value),'content'=>'','id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_second_level_add",'link_class'=>((string)$_smarty_tpl->tpl_vars['link_class']->value)." nav__menu-add"), 0, false);
?></li><?php }
}
}
