<?php
/* Smarty version 3.1.32, created on 2018-11-16 19:47:26
  from 'C:\xampp\htdocs\bantingan\Views\Admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5beebc5edb1864_74834718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15ada9393e6759ff9e9be9caa821b6a5d8bb4a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Admin\\index.html',
      1 => 1542372439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beebc5edb1864_74834718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_735126915beebc5edad9e8_82633445', 'bodycontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_735126915beebc5edad9e8_82633445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_735126915beebc5edad9e8_82633445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
Ini Halaman Admin<br>
<?php echo MESSAGE_EMAIL_SAME_LIKE_OLD_ONE;?>

<?php
}
}
/* {/block 'bodycontent'} */
}
