<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:20:24
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e3685304e1_78381836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ce11e9ba97df5cd3b986991c11659f15a937b2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6593e3685304e1_78381836 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace.buy'));
if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>
    <div>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_page'], ENT_QUOTES, 'UTF-8');?>
" class="btn" target="_blank">
            <?php echo $_smarty_tpl->__("cscart_marketplace.buy");?>

        </a>
    </div>
<?php }
}
}
