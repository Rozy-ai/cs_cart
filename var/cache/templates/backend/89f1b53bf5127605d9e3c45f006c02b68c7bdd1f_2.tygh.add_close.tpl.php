<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:32:22
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/buttons/add_close.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983d2646a1c2_96167981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89f1b53bf5127605d9e3c45f006c02b68c7bdd1f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/buttons/add_close.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 3,
  ),
),false)) {
function content_65983d2646a1c2_96167981 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cancel'));
?>
<a class="cm-dialog-closer cm-cancel tool-link btn <?php if ($_smarty_tpl->tpl_vars['disable_cancel']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("cancel");?>
</a>
<?php if ($_smarty_tpl->tpl_vars['is_js']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_close_onclick']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items cm-dialog-closer btn-primary"), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>'','but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_role'=>"submit",'but_meta'=>"cm-process-items btn-primary"), 0, true);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items btn-primary"), 0, true);
}
}
}