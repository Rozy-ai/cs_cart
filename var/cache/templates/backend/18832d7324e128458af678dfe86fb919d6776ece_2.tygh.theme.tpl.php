<?php
/* Smarty version 4.1.1, created on 2024-01-12 12:36:27
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65a1081be058d2_14020825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18832d7324e128458af678dfe86fb919d6776ece' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/theme.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a1081be058d2_14020825 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('store_theme','goto_theme_configuration'));
?>

<?php $_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "storefront_data[theme_name]" ?? null : $tmp));
$_smarty_tpl->_assignInScope('theme_url', (($tmp = $_smarty_tpl->tpl_vars['theme_url']->value ?? null)===null||$tmp==='' ? "themes.manage?s_storefront=".((string)$_smarty_tpl->tpl_vars['id']->value) ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="control-group">
        <label for="theme_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="control-label"
        >
            <?php echo $_smarty_tpl->__("store_theme");?>

        </label>
        <div class="controls">
            <input type="hidden"
                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_theme']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_style']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            <?php if (!$_smarty_tpl->tpl_vars['readonly']->value) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['theme_url']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("goto_theme_configuration");?>
</a>
            <?php }?>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden"
           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
<?php }
}
}