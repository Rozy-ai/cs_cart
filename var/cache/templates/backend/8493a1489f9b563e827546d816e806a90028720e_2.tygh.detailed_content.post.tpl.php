<?php
/* Smarty version 4.1.1, created on 2024-01-12 12:36:27
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/rus_taxes/hooks/companies/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65a1081bf244a1_95278774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8493a1489f9b563e827546d816e806a90028720e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/rus_taxes/hooks/companies/detailed_content.post.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_65a1081bf244a1_95278774 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('rus_taxes.rus_taxes','rus_taxes.agent_type','rus_taxes.agent_type.'));
if (($_smarty_tpl->tpl_vars['agent_types']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("rus_taxes.rus_taxes")), 0, false);
?>
    <div class="control-group">
        <label class="control-label" for="agent_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("rus_taxes.agent_type");?>
:</label>
        <div class="controls">
            <select name="company_data[agent_type]" id="agent_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agent_types']->value, 'agent_type');
$_smarty_tpl->tpl_vars['agent_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['agent_type']->value) {
$_smarty_tpl->tpl_vars['agent_type']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['agent_type']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['company_data']->value['agent_type'] === $_smarty_tpl->tpl_vars['agent_type']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("rus_taxes.agent_type.".((string)$_smarty_tpl->tpl_vars['agent_type']->value));?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
<?php }
}
}
