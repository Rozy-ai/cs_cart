<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:26:11
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_1_vendor_current_balance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983bb30249a0_16701778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01188855bdd13d4983aba0c84150bfb1d61c17ad' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_1_vendor_current_balance.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_65983bb30249a0_16701778 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.vendor_current_balance','dashboard.analytics_card.view_accounting'));
if (fn_allowed_for("MULTIVENDOR")) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['current_balance']->value), 0, false);
$_smarty_tpl->assign('vendor_current_balance_value', ob_get_clean());
$_smarty_tpl->_assignInScope('data_3_1_vendor_current_balance', array('id'=>"analytics_card_vendor_current_balance",'title'=>$_smarty_tpl->__("dashboard.analytics_card.vendor_current_balance"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_accounting"),'href'=>"companies.balance"),'number'=>$_smarty_tpl->tpl_vars['vendor_current_balance_value']->value));
$_smarty_tpl->_assignInScope('data_3_1_vendor_current_balance', $_smarty_tpl->tpl_vars['data_3_1_vendor_current_balance']->value ,false ,2);
}
}
}
}
