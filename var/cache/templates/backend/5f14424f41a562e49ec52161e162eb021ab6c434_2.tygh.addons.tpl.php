<?php
/* Smarty version 4.1.1, created on 2024-01-01 23:20:31
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/settings_wizard/components/addons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65931e8fe76670_04520957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f14424f41a562e49ec52161e162eb021ab6c434' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/backend/templates/views/settings_wizard/components/addons.tpl',
      1 => 1701074501,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65931e8fe76670_04520957 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('install'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wizard_addons_list']->value, 'addon');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
	<div class="table-responsive-wrapper">
		<table class="table table-addons table-wizard table--relative table-responsive table-responsive-w-titles">
		    <tr>
		        <td class="addon-icon" data-th="&nbsp;">
		            <div class="bg-icon">
		                <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
		                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
		                <?php }?>
		            </div>
		        </td>
		        <td width="95%" data-th="&nbsp;">
		            <div class="object-group-link-wrap">
		                <span class="unedited-element block"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
		                <span class="row-status object-group-details"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
		            </div>
		        </td>
		        <td width="5%" data-th="&nbsp;">
		            <input type="hidden" name="addons[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
		            <label for="addon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
		                <input id="addon_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y">
		                <?php echo $_smarty_tpl->__("install");?>

		            </label>     
		        </td>
		    </tr>
		</table>
	</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
