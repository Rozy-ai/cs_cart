<?php
/* Smarty version 4.1.1, created on 2024-01-02 15:08:08
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/pages/components/pages_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593fca845b947_85865462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f23a6dd1a61ab1950abd7980f3b02ac6604fa8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/pages/components/pages_link.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6593fca845b947_85865462 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('page_target_url','tt_views_pages_components_pages_link_page_target_url','page_url','tt_views_pages_components_pages_link_page_url','open_in_new_window'));
?>
<div class="control-group">
    <label for="page_link" class="control-label cm-required"><?php echo $_smarty_tpl->__("page_target_url");?>
:</label>
    <div class="controls">
        <input type="text" name="page_data[link]" id="page_link" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_data']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_pages_components_pages_link_page_target_url");?>
</p>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="control-group">
        <label for="elm_customer_url" class="control-label"><?php echo $_smarty_tpl->__("page_url");?>
:</label>
        <div class="controls">
            <input type="text" id="elm_customer_url" size="55" value="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['id']->value),"C"), ENT_QUOTES, 'UTF-8');?>
" class="input-large" readonly="readonly" />
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_pages_components_pages_link_page_url");?>
</p>
        </div>
    </div>
<?php }?>

<div class="control-group">
    <label class="control-label" for="page_link_new_window"><?php echo $_smarty_tpl->__("open_in_new_window");?>
:</label>
    <div class="controls">
    <input type="hidden" name="page_data[new_window]" value="0" />
    <input <?php if ($_smarty_tpl->tpl_vars['page_data']->value['new_window'] != "0") {?>checked="checked"<?php }?> type="checkbox" name="page_data[new_window]" id="page_link_new_window" size="55" value="1" />
    </div>
</div><?php }
}
