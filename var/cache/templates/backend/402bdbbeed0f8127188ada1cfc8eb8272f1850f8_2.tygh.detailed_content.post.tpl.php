<?php
/* Smarty version 4.1.1, created on 2024-01-02 15:08:08
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593fca84a1d96_82582414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402bdbbeed0f8127188ada1cfc8eb8272f1850f8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:addons/discussion/views/discussion_manager/components/allow_discussion.tpl' => 1,
  ),
),false)) {
function content_6593fca84a1d96_82582414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('comments_and_reviews','discussion_title_page'));
if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_page_setting"), 0, false);
?>
        <div id="discussion_page_setting" class="in collapse">
   		    <fieldset>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PAGE"),'title'=>$_smarty_tpl->__("discussion_title_page"),'non_editable'=>true,'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['page_discussion_type']), 0, false);
?>
   		    </fieldset>
        </div>
    <?php }
}
}
}