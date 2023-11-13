<?php
/* Smarty version 4.3.1, created on 2023-11-13 11:04:39
  from '/home/runcloud/webapps/david-proguitarshop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f4b7e2b1d7_67733128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '941c742a23676a5f028e270f7bab6f16d3c18b8a' => 
    array (
      0 => '/home/runcloud/webapps/david-proguitarshop/themes/classic/templates/index.tpl',
      1 => 1699868594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f4b7e2b1d7_67733128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15878311006551f4b7e28295_33135237', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_3184777336551f4b7e28ba2_37039672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13216863066551f4b7e29cc6_84025866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8073745506551f4b7e29640_78866902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13216863066551f4b7e29cc6_84025866', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15878311006551f4b7e28295_33135237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15878311006551f4b7e28295_33135237',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3184777336551f4b7e28ba2_37039672',
  ),
  'page_content' => 
  array (
    0 => 'Block_8073745506551f4b7e29640_78866902',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13216863066551f4b7e29cc6_84025866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3184777336551f4b7e28ba2_37039672', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8073745506551f4b7e29640_78866902', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
