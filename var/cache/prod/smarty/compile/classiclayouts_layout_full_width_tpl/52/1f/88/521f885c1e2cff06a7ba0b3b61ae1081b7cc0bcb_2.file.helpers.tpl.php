<?php
/* Smarty version 4.3.1, created on 2023-11-13 11:04:39
  from '/home/runcloud/webapps/david-proguitarshop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f4b7e72964_23784209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '521f885c1e2cff06a7ba0b3b61ae1081b7cc0bcb' => 
    array (
      0 => '/home/runcloud/webapps/david-proguitarshop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1699868594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f4b7e72964_23784209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/runcloud/webapps/david-proguitarshop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/52/1f/88/521f885c1e2cff06a7ba0b3b61ae1081b7cc0bcb_2.file.helpers.tpl.php',
    'uid' => '521f885c1e2cff06a7ba0b3b61ae1081b7cc0bcb',
    'call_name' => 'smarty_template_function_renderLogo_3718398126551f4b7e6a3f7_02477217',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_3718398126551f4b7e6a3f7_02477217 */
if (!function_exists('smarty_template_function_renderLogo_3718398126551f4b7e6a3f7_02477217')) {
function smarty_template_function_renderLogo_3718398126551f4b7e6a3f7_02477217(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_3718398126551f4b7e6a3f7_02477217 */
}
