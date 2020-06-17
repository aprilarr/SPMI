<?php
/* Smarty version 3.1.32, created on 2019-10-05 05:57:00
  from 'F:\bantingan\bantingan\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d97ce3c8d6e38_61952056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb8b10b84d5cc9bd82f7d53c95cfebbd83537164' => 
    array (
      0 => 'F:\\bantingan\\bantingan\\Views\\Home\\index.html',
      1 => 1570229816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d97ce3c8d6e38_61952056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138645d97ce3c8cf795_72238314', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_138645d97ce3c8cf795_72238314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_138645d97ce3c8cf795_72238314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<?php echo $_smarty_tpl->tpl_vars['hellomessage']->value;?>

<?php
}
}
/* {/block 'bodycontent'} */
}
