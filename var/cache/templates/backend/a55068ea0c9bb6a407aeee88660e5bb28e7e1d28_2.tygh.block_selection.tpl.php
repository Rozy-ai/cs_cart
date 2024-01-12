<?php
/* Smarty version 4.1.1, created on 2024-01-05 20:29:34
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/block_manager/block_selection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65983c7e71b9a3_68000275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a55068ea0c9bb6a407aeee88660e5bb28e7e1d28' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/block_manager/block_selection.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/new_blocks_list.tpl' => 1,
    'tygh:views/block_manager/components/existing_blocks_list.tpl' => 1,
  ),
),false)) {
function content_65983c7e71b9a3_68000275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('manage_existing_block','use_existing_block','create_new_block'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div id="block_selection<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="user_existing_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php if ($_REQUEST['manage'] && $_REQUEST['manage'] == "Y") {
echo $_smarty_tpl->__("manage_existing_block");
} else {
echo $_smarty_tpl->__("use_existing_block");
}?></a></li>
            <li id="create_new_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("create_new_block");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content tabs_content_blocks" id="tabs_content_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_create_new_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/new_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('manage'=>(($tmp = $_REQUEST['manage'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), 0, false);
?>
        <!--content_create_new_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div id="content_user_existing_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/existing_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('manage'=>(($tmp = $_REQUEST['manage'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), 0, false);
?>
        <!--content_user_existing_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<!--block_selection<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
