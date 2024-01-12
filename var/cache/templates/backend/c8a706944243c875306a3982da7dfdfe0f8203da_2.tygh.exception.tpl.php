<?php
/* Smarty version 4.1.1, created on 2024-01-12 12:34:07
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/exception.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65a1078f03f7c2_30992507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a706944243c875306a3982da7dfdfe0f8203da' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/exception.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_65a1078f03f7c2_30992507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('administration_panel','access_denied','page_not_found','access_denied_text','page_not_found_text','go_back','go_to_the_admin_homepage'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <span class="right"><span>&nbsp;</span></span>

    <h1 class="clear exception-header">
        <span><?php echo $_smarty_tpl->__("administration_panel");?>
</span>
    </h1>
<?php }?>

<div class="exception-body login-content">

<h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['exception_status']->value, ENT_QUOTES, 'UTF-8');?>
</h2>

<h3>
    <?php if ($_smarty_tpl->tpl_vars['exception_status']->value == "403") {?>
        <?php echo $_smarty_tpl->__("access_denied");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['exception_status']->value == "404") {?>
        <?php echo $_smarty_tpl->__("page_not_found");?>

    <?php }?>
</h3>

<div class="exception-content">
    <?php if ($_smarty_tpl->tpl_vars['exception_status']->value == "403") {?>
        <h4><?php echo $_smarty_tpl->__("access_denied_text");?>
</h4>
    <?php } elseif ($_smarty_tpl->tpl_vars['exception_status']->value == "404") {?>
        <h4><?php echo $_smarty_tpl->__("page_not_found_text");?>
</h4>
    <?php }?>

    <ul class="exception-menu">
        <li id="go_back"><a class="cm-back-link"><?php echo $_smarty_tpl->__("go_back");?>
</a></li>
        <li><a href="<?php echo htmlspecialchars((string) fn_url(fn_get_index_script($_smarty_tpl->tpl_vars['auth']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("go_to_the_admin_homepage");?>
</a></li>
    </ul>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    
    Tygh.$(document).ready(function() {
        var $ = Tygh.$;
        $.each($.browser, function(i, val) {
            if (history.length == 1) {
                $('#go_back').hide();
            }
        });
    });
    
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox')), 0, false);
}
}
