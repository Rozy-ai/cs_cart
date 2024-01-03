<?php
/* Smarty version 4.1.1, created on 2024-01-03 09:42:22
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/views/sitemap/components/categories_tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_659501ce553720_21401491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd546460f97486e1aec6e999750bfd8aaa0dc9985' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/views/sitemap/components/categories_tree.tpl',
      1 => 1704139896,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659501ce553720_21401491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-sitemap__tree-section">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_categories_tree']->value, 'category', false, 'cat_key', 'categories', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'];
?>
     <?php if ($_smarty_tpl->tpl_vars['category']->value['level'] == "0") {?>
         <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value == "started") {?>
         </ul>
              <?php $_smarty_tpl->_assignInScope('ul_subcategories', '');?>
         <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value != "started") {?>
         <ul class="ty-sitemap__tree-section-list">
                 <li class="ty-sitemap__tree-list-item parent"><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-strong"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
              <?php $_smarty_tpl->_assignInScope('ul_subcategories', "started");?>
          <?php }?>
     <?php } else { ?>
             <li class="ty-sitemap__tree-list-item" style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php if ($_smarty_tpl->tpl_vars['category']->value['level'] == "1") {?>0px<?php } elseif ($_smarty_tpl->tpl_vars['category']->value['level'] > "1") {
echo smarty_function_math(array('equation'=>"x*y+0",'x'=>"5",'y'=>$_smarty_tpl->tpl_vars['category']->value['level']),$_smarty_tpl);?>
px<?php }?>;"><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
     <?php }?>
     <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] : null)) {?>
          </ul>
     <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="clearfix"></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/sitemap/components/categories_tree.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/sitemap/components/categories_tree.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-sitemap__tree-section">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_categories_tree']->value, 'category', false, 'cat_key', 'categories', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'];
?>
     <?php if ($_smarty_tpl->tpl_vars['category']->value['level'] == "0") {?>
         <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value == "started") {?>
         </ul>
              <?php $_smarty_tpl->_assignInScope('ul_subcategories', '');?>
         <?php }?>
         <?php if ($_smarty_tpl->tpl_vars['ul_subcategories']->value != "started") {?>
         <ul class="ty-sitemap__tree-section-list">
                 <li class="ty-sitemap__tree-list-item parent"><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-strong"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
              <?php $_smarty_tpl->_assignInScope('ul_subcategories', "started");?>
          <?php }?>
     <?php } else { ?>
             <li class="ty-sitemap__tree-list-item" style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php if ($_smarty_tpl->tpl_vars['category']->value['level'] == "1") {?>0px<?php } elseif ($_smarty_tpl->tpl_vars['category']->value['level'] > "1") {
echo smarty_function_math(array('equation'=>"x*y+0",'x'=>"5",'y'=>$_smarty_tpl->tpl_vars['category']->value['level']),$_smarty_tpl);?>
px<?php }?>;"><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
     <?php }?>
     <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] : null)) {?>
          </ul>
     <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="clearfix"></div><?php }
}
}
