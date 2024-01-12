<?php
/* Smarty version 4.1.1, created on 2024-01-05 14:23:29
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/hidpi/hooks/fileuploader/uploader.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597e6b1813d93_89770183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e7f7d2596851967fa8919beef66bb0ac3941060' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/hidpi/hooks/fileuploader/uploader.post.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597e6b1813d93_89770183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip'));
if ($_smarty_tpl->tpl_vars['is_image']->value && (($tmp = $_smarty_tpl->tpl_vars['show_hidpi_checkbox']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (defined('HIDPI_IS_HIGH_RES_FALSE') ? constant('HIDPI_IS_HIGH_RES_FALSE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_hidden" class="cm-image-field" />
    <label for="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidpi-mark checkbox">
        <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (defined('HIDPI_IS_HIGH_RES_TRUE') ? constant('HIDPI_IS_HIGH_RES_TRUE') : null), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image'] === "Y") {?>checked="checked"<?php }?> class="cm-image-field" />
        <?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
 <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign cm-tooltip",'title'=>$_smarty_tpl->__("hidpi.upload_high_res_image.tooltip"),'icon_text'=>''),$_smarty_tpl);?>

    </label>
<?php }
}
}
