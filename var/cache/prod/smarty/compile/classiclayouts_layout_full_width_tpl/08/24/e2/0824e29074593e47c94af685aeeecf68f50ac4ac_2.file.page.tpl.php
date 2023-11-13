<?php
/* Smarty version 4.3.1, created on 2023-11-13 11:04:39
  from '/home/runcloud/webapps/david-proguitarshop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f4b7e3b562_82440420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0824e29074593e47c94af685aeeecf68f50ac4ac' => 
    array (
      0 => '/home/runcloud/webapps/david-proguitarshop/themes/classic/templates/page.tpl',
      1 => 1699868594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f4b7e3b562_82440420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20076703946551f4b7e33be7_51924719', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20975769836551f4b7e34701_47844943 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_15311446206551f4b7e34106_90148548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20975769836551f4b7e34701_47844943', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14703396496551f4b7e38a44_37932154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14909205816551f4b7e396f4_57506328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16694951496551f4b7e37f33_47183361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14703396496551f4b7e38a44_37932154', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14909205816551f4b7e396f4_57506328', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12602537166551f4b7e3a8c1_53301605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4899673066551f4b7e3a476_91823660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12602537166551f4b7e3a8c1_53301605', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20076703946551f4b7e33be7_51924719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20076703946551f4b7e33be7_51924719',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15311446206551f4b7e34106_90148548',
  ),
  'page_title' => 
  array (
    0 => 'Block_20975769836551f4b7e34701_47844943',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16694951496551f4b7e37f33_47183361',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14703396496551f4b7e38a44_37932154',
  ),
  'page_content' => 
  array (
    0 => 'Block_14909205816551f4b7e396f4_57506328',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4899673066551f4b7e3a476_91823660',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12602537166551f4b7e3a8c1_53301605',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15311446206551f4b7e34106_90148548', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16694951496551f4b7e37f33_47183361', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4899673066551f4b7e3a476_91823660', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
