<?php
/* Smarty version 4.1.1, created on 2024-01-02 15:08:08
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/blog/hooks/pages/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593fca8490816_56462620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc75050ac365bc21224f0a7981241f9d5cfb9699' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/blog/hooks/pages/detailed_content.post.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
  ),
),false)) {
function content_6593fca8490816_56462620 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('blog','image'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("blog"),'target'=>"#blog_image"), 0, false);
?>
<div id="blog_image" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
:</label>
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"blog_image",'image_object_type'=>"blog",'image_pair'=>$_smarty_tpl->tpl_vars['page_data']->value['main_pair'],'no_detailed'=>true,'hide_titles'=>true), 0, false);
?>
            </div>
        </div>
    </fieldset>
</div>

<?php }
}
}
