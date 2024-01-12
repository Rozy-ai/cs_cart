<?php
/* Smarty version 4.1.1, created on 2024-01-12 12:36:27
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/currencies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65a1081be12b63_42921429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109eb6dd00232fc23385c23d6ba8e3f77d8d6250' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/currencies.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/adaptive_object_selection.tpl' => 1,
  ),
),false)) {
function content_65a1081be12b63_42921429 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('currencies'));
?>

<div class="control-group">
    <label for="currencies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("currencies");?>

    </label>
    <div class="controls" id="currencies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_localization_picker_allowed']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"storefront_data[currencies]",'input_id'=>"storefront_currrency",'item_ids'=>$_smarty_tpl->tpl_vars['all_currency_ids']->value,'items'=>$_smarty_tpl->tpl_vars['all_currencies']->value,'id_field'=>"currency_id",'name_field'=>"description",'storefront_id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>"currencies",'load_items_url'=>"currencies.selector?storefront_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class_prefix'=>"localization",'close_on_select'=>"false"), 0, false);
?>
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div>
<?php }
}
