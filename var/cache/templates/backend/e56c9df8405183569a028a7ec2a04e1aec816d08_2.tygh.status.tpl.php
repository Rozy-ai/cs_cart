<?php
/* Smarty version 4.1.1, created on 2024-01-12 12:36:27
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65a1081bdeac09_56679610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56c9df8405183569a028a7ec2a04e1aec816d08' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/storefronts/components/status.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
  ),
),false)) {
function content_65a1081bdeac09_56679610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront_status','storefront_status.tooltip','ttc_stores_status'));
?>

<?php $_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "storefront_data[status]" ?? null : $tmp));?>

<div class="control-group">
    <label for="status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_status");?>

    </label>
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
        />

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>$_smarty_tpl->tpl_vars['status']->value === smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value),'input_value'=>smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_id'=>"status_".((string)$_smarty_tpl->tpl_vars['id']->value),'meta'=>$_smarty_tpl->tpl_vars['meta']->value,'extra_attrs'=>$_smarty_tpl->tpl_vars['extra_attrs']->value), 0, false);
?>

        <p>
            <?php echo $_smarty_tpl->__("storefront_status.tooltip");?>

        </p>

        <p class="muted description"><?php echo $_smarty_tpl->__("ttc_stores_status");?>
</p>
    </div>
</div>
<?php }
}
