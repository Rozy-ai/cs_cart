<?php
/* Smarty version 4.1.1, created on 2024-01-12 12:36:27
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65a1081be0d3b5_00861325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc0df6a536868e54099f7da5bbd4aa2723ea9043' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/languages.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/adaptive_object_selection.tpl' => 1,
  ),
),false)) {
function content_65a1081be0d3b5_00861325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('languages'));
?>

<div class="control-group">
    <label for="languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("languages");?>

    </label>
    <div class="controls" id="languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_localization_picker_allowed']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"storefront_data[languages]",'input_id'=>"storefront_language",'item_ids'=>$_smarty_tpl->tpl_vars['all_language_ids']->value,'items'=>$_smarty_tpl->tpl_vars['all_languages']->value,'id_field'=>"lang_id",'name_field'=>"name",'storefront_id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>"languages",'load_items_url'=>"languages.selector?storefront_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class_prefix'=>"localization",'close_on_select'=>"false"), 0, false);
?>
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['language']->value['lang_id'],$_smarty_tpl->tpl_vars['all_language_ids']->value)) {?>
                    <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</p>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div>
<?php }
}
