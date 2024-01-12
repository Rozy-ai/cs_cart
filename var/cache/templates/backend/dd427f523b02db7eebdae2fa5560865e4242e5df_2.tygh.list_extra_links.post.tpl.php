<?php
/* Smarty version 4.1.1, created on 2024-01-08 11:28:51
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_659bb2436180a4_77155860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd427f523b02db7eebdae2fa5560865e4242e5df' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659bb2436180a4_77155860 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.text_anonymize_question','gdpr.anonymize'));
if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == "C" && $_smarty_tpl->tpl_vars['user']->value['anonymized'] != "Y") {?>
    <li><?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("gdpr.anonymize"),'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable4),'method'=>"POST"), true);?>
</li>
<?php }
}
}
