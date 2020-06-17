<?php
/* Smarty version 3.1.32, created on 2018-11-06 10:10:12
  from 'C:\xampp\htdocs\bantingan\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be1061471c315_96512232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff891e8f76d473515f3aea52c8abd4ca98e324b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Home\\index.html',
      1 => 1541473458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1061471c315_96512232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_872088445be106146c2573_76305181', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_872088445be106146c2573_76305181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_872088445be106146c2573_76305181',
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
