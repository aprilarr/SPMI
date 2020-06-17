<?php
/* Smarty version 3.1.32, created on 2018-11-06 10:14:03
  from 'C:\xampp\htdocs\bantingan\Views\Home\index2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be106fb2a0058_46005404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96b1d9ee0ce1f3c6ac9394116cd227d56b843dd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Home\\index2.html',
      1 => 1541474019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be106fb2a0058_46005404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12052501105be106fb2944d7_14988124', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/aircraft.master.html");
}
/* {block 'bodycontent'} */
class Block_12052501105be106fb2944d7_14988124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_12052501105be106fb2944d7_14988124',
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
