<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:16:35
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/buttons/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e283b4f4c1_25138244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f914dc84fb8232314a1d2ad5306ef5bad9c133e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/buttons/create.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6593e283b4f4c1_25138244 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('create'));
if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->tpl_vars['but_text']->value);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("create"));
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
