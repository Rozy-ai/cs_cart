<?php
/* Smarty version 4.1.1, created on 2024-01-08 11:29:32
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_659bb26c90a0a0_10852183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0716eb4b88d7ff061a512d2bd3239037df31d5e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_659bb26c90a0a0_10852183 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title'));
?>
<div class="sidebar-row">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="report_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
        <input type="hidden" name="report_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="selected_section" value="">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['period']->value,'display'=>"form"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_adv_link'=>true,'simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'not_saved'=>true,'dispatch'=>"sales_reports.set_report_view"), 0, false);
?>
</form>
</div><?php }
}
