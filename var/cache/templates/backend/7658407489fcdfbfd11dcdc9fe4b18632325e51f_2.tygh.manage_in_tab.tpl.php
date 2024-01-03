<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:16:38
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/tabs/manage_in_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e286c94839_92127430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7658407489fcdfbfd11dcdc9fe4b18632325e51f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/tabs/manage_in_tab.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tabs/manage.tpl' => 1,
  ),
),false)) {
function content_6593e286c94839_92127430 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--content_product_tabs--></div>
<?php }
}
