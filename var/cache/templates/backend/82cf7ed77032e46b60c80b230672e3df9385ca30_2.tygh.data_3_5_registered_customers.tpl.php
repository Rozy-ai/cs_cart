<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:26:11
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983bb30509a9_18580657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82cf7ed77032e46b60c80b230672e3df9385ca30' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65983bb30509a9_18580657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.registered_customers','dashboard.analytics_card.view_customers'));
if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['customers'])) {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("UserTypes::CUSTOMER"), ENT_QUOTES, 'UTF-8');
$_prefixVariable17=ob_get_clean();
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', array('id'=>"analytics_card_registered_customers",'title'=>$_smarty_tpl->__("dashboard.analytics_card.registered_customers"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_customers"),'href'=>"profiles.manage?user_type=".$_prefixVariable17),'number'=>number_format($_smarty_tpl->tpl_vars['general_stats']->value['customers']['registered_customers'])));
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', $_smarty_tpl->tpl_vars['data_3_5_registered_customers']->value ,false ,2);
}
}
}
