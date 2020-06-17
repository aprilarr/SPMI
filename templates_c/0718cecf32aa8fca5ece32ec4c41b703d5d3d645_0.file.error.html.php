<?php
/* Smarty version 3.1.32, created on 2019-12-12 16:07:41
  from 'D:\Master\Yoyoy\bantingan\bantingan\Views\Home\error.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df2035dcf6702_27241698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0718cecf32aa8fca5ece32ec4c41b703d5d3d645' => 
    array (
      0 => 'D:\\Master\\Yoyoy\\bantingan\\bantingan\\Views\\Home\\error.html',
      1 => 1575989806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2035dcf6702_27241698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75345df2035dce7c10_49478472', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_75345df2035dce7c10_49478472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_75345df2035dce7c10_49478472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

<?php
}
}
/* {/block 'bodycontent'} */
}
