<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:20:24
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/addons/components/marketplace/marketplace_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e36854cbc1_09693910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '800569901a38456e5da4ed6d8253c1dfdb842f4b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/addons/components/marketplace/marketplace_search.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 1,
  ),
),false)) {
function content_6593e36854cbc1_09693910 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace.search','cscart_marketplace.search_description'));
?>
<div class="sidebar-row addons-marketplace-search">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        name="addons_marketplace-search_form" 
        method="get"
        class="form--no-margin"
        data-ca-addons-marketplace="marketplaceSearchForm"
    >
        <input type="hidden" name="result_ids" value="addons_market,actions_panel"/>

        <div class="controls">
            <input type="text"
                name="q"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->__("cscart_marketplace.search");?>
"
                data-ca-addons-marketplace="marketplaceSearch"
            />
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[addons.market]",'but_meta'=>"hidden"), 0, false);
?>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->__("cscart_marketplace.search_description");?>

    </div>
</div>
<?php }
}
