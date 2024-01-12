<?php
/* Smarty version 4.1.1, created on 2024-01-05 13:34:41
  from '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/recaptcha/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6597db4145aa98_02871463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'defb61ad8ee6b62707e001c73952e7ca49b28189' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/design/themes/responsive/templates/addons/recaptcha/hooks/index/scripts.post.tpl',
      1 => 1704450611,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597db4145aa98_02871463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/cscart_v4.17.2_ru/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('error_validator_recaptcha','recaptcha.recaptcha_cookie_title','recaptcha.recaptcha_cookie_description','error_validator_recaptcha','recaptcha.recaptcha_cookie_title','recaptcha.recaptcha_cookie_description'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver()) == "Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
    <?php echo '<script'; ?>
>
        (function (_, $) {
            _.tr({
                error_validator_recaptcha: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_recaptcha"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                "recaptcha.recaptcha_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("recaptcha.recaptcha_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                "recaptcha.recaptcha_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("recaptcha.recaptcha_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            });

            $.extend(_, {
                recaptcha_settings: {
                    site_key: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    theme: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_theme'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    type: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_type'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    size: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_size'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
                },
                google_recaptcha_v3_site_key: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_v3_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                google_recaptcha_v2_token_param: '<?php echo strtr((string)constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                google_recaptcha_v3_token_param: '<?php echo strtr((string)constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_V3_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
    <?php echo smarty_function_script(array('src'=>"js/addons/recaptcha/recaptcha.js",'cookie-name'=>"recaptcha"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/recaptcha/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/recaptcha/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver()) == "Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
    <?php echo '<script'; ?>
>
        (function (_, $) {
            _.tr({
                error_validator_recaptcha: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_recaptcha"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                "recaptcha.recaptcha_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("recaptcha.recaptcha_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                "recaptcha.recaptcha_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("recaptcha.recaptcha_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            });

            $.extend(_, {
                recaptcha_settings: {
                    site_key: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    theme: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_theme'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    type: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_type'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    size: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_size'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
                },
                google_recaptcha_v3_site_key: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_v3_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                google_recaptcha_v2_token_param: '<?php echo strtr((string)constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                google_recaptcha_v3_token_param: '<?php echo strtr((string)constant("\Tygh\Addons\Recaptcha\RecaptchaDriver::RECAPTCHA_V3_TOKEN_PARAM_NAME"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
    <?php echo smarty_function_script(array('src'=>"js/addons/recaptcha/recaptcha.js",'cookie-name'=>"recaptcha"),$_smarty_tpl);?>

<?php }
}
}
}
