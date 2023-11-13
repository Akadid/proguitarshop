<?php
/* Smarty version 4.3.1, created on 2023-11-13 12:25:01
  from '/home/davidb/webapps/david-proguitarshop/admin162h4ivtm04praunexn/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6552078da4a612_50108918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf50ccc5692620c9dde52d65415149ec852622e2' => 
    array (
      0 => '/home/davidb/webapps/david-proguitarshop/admin162h4ivtm04praunexn/themes/default/template/content.tpl',
      1 => 1699868594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6552078da4a612_50108918 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
