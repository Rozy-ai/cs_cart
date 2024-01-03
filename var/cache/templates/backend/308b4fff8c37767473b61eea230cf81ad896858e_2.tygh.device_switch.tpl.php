<?php
/* Smarty version 4.1.1, created on 2024-01-02 13:08:59
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/block_manager/components/device_switch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6593e0bb687049_89089007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308b4fff8c37767473b61eea230cf81ad896858e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/block_manager/components/device_switch.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6593e0bb687049_89089007 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.view_layout.phone','block_manager.view_layout.tablet','block_manager.view_layout.desktop','block_manager.view_layout.reset_filter'));
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.phone");
$_prefixVariable5=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.tablet");
$_prefixVariable6=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.desktop");
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('devices', array(''=>array("name"=>$_smarty_tpl->__("block_manager.view_layout.reset_filter"),"icon_class"=>'',"btn_class"=>"btn btn-primary cm-reset-device-availability"),"phone"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable5."</span>","icon_class"=>"icon-mobile-phone","btn_class"=>"btn cm-switch-device-availability"),"tablet"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable6."</span>","icon_class"=>"icon-tablet","btn_class"=>"btn cm-switch-device-availability"),"desktop"=>array("name"=>"<span class=\"mobile-hidden\">".$_prefixVariable7."</span>","icon_class"=>"icon-desktop","btn_class"=>"btn cm-switch-device-availability")));?>

<div class="device-switch-wrap" id="device_switch">
    <div class="btn-group device-switch">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'device', false, 'device_id');
$_smarty_tpl->tpl_vars['device']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device_id']->value => $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['device']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['device']->value['icon_class'],'icon_first'=>true,'raw'=>true,'class'=>"device-switch__device ".((string)$_smarty_tpl->tpl_vars['device']->value['btn_class']),'data'=>array("data-ca-device-availability-device"=>$_smarty_tpl->tpl_vars['device_id']->value)), true);?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<!--device_switch--></div>
<?php }
}
