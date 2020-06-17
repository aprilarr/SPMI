<?php
/* Smarty version 3.1.32, created on 2019-12-15 23:08:20
  from 'E:\Yoyoy\bantingan\bantingan\Views\Home\error.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df65a749a0ea2_82381661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c9751225a9f3a79547685074e7fed933a5e24d' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Home\\error.html',
      1 => 1575989806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df65a749a0ea2_82381661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72155df65a74996572_63745855', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_72155df65a74996572_63745855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_72155df65a74996572_63745855',
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
