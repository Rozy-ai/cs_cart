<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:08:58
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/yml_export/common/yml_categories_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e0badcde16_38964318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaf8d170c067186e9ea23fbcdfabf7f02bd386a5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/yml_export/common/yml_categories_selector.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6593e0badcde16_38964318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('yml2_export_market_category','tt_yml2_export_market_category'));
echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_categories.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? "yml_categories" ?? null : $tmp));?>

<div class="control-group">
    <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_export_market_category");?>
:</label>
    <div class="controls" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_box">
        <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" size="200" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large cm-yml-categories" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_market_category']->value))) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_market_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/></br>
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_yml2_export_market_category");?>
</p>
    </div>
</div>

<?php }
}