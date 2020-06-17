<?php
/* Smarty version 3.1.32, created on 2018-11-16 19:21:14
  from 'C:\xampp\htdocs\bantingan\Views\Home\cobalagi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5beeb63a9d8555_91041737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d28a90770518d03ec43b2a0cfebe84f3ea75f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Home\\cobalagi.html',
      1 => 1542370867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beeb63a9d8555_91041737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17030666435beeb63a9d46d1_62865327', 'bodycontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_17030666435beeb63a9d46d1_62865327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_17030666435beeb63a9d46d1_62865327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
Hello <?php echo $_smarty_tpl->tpl_vars['namaku']->value;?>

<?php
}
}
/* {/block 'bodycontent'} */
}
