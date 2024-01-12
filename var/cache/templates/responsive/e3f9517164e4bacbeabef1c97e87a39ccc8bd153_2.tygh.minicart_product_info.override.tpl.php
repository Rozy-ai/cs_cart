<?php
/* Smarty version 4.1.1, created on 2024-01-05 15:45:00
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/my_design/hooks/checkout/minicart_product_info.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597f9ccccbf26_75036905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f9517164e4bacbeabef1c97e87a39ccc8bd153' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/my_design/hooks/checkout/minicart_product_info.override.tpl',
      1 => 1704458516,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6597f9ccccbf26_75036905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
        <div class="ty-cart-items__list-item-image">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0, false);
?>
        </div>
    <?php }?>
    <div class="ty-cart-items__list-item-desc">
        <a
            href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</a>
        <p>
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span
                dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, false);
?>
        </p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == "Y") {?>
        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['force_items_deletion']->value) && !$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, false);
?>
            <?php }?>
        </div>
    <?php }?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_design/hooks/checkout/minicart_product_info.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_design/hooks/checkout/minicart_product_info.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
        <div class="ty-cart-items__list-item-image">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0, true);
?>
        </div>
    <?php }?>
    <div class="ty-cart-items__list-item-desc">
        <a
            href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</a>
        <p>
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span
                dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, true);
?>
        </p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == "Y") {?>
        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['force_items_deletion']->value) && !$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
            <?php }?>
        </div>
    <?php }?>
</div><?php }
}
}
