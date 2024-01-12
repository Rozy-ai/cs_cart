<?php
/* Smarty version 4.1.1, created on 2024-01-05 13:34:37
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/onboarding_guide/steps/setup_shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597db3db5e6d8_91947402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf4ebf54dc26ab6557a6c9a6e61e2ebce070a326' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/addons/onboarding_guide/steps/setup_shipping.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597db3db5e6d8_91947402 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.configure_shippings_description','onboarding_guide.configure_shippings_label','onboarding_guide.configure_shippings'));
?>
<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings_description");?>
</span>
</div>

<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings_label");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2 og-step-complete">
  <a href="<?php echo htmlspecialchars((string) fn_url("shippings.manage"), ENT_QUOTES, 'UTF-8');?>
" class="button button-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings");?>
</a>
</div>
<?php }
}
