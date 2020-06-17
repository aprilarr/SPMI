<?php
/* Smarty version 3.1.32, created on 2019-12-12 15:21:46
  from 'D:\Master\Yoyoy\bantingan\bantingan\Views\Masterpendidikanguru\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df1f89a0032e4_17453566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bce0a6c21e167a69074b1b55da0cb27edbcefd7' => 
    array (
      0 => 'D:\\Master\\Yoyoy\\bantingan\\bantingan\\Views\\Masterpendidikanguru\\index.html',
      1 => 1576138826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1f89a0032e4_17453566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234805df1f899f07b75_34974364', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198575df1f899f3e342_40509834', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_234805df1f899f07b75_34974364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_234805df1f899f07b75_34974364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i> Master Pedidikan
      <span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterpendidikanguru/form_pendidikan">New Pendidikan</a></span>
    </div>
    <div class="card-body">
      <table class="table table-responsive-sm" id="table-user">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Deskripsi</th>
            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdata']->value, 'itemdata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->value) {
?>	
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['kode'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['deskripsi'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterpendidikanguru/form_pendidikan/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterpendidikanguru/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-times"></a>
            </td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  </div>
<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptcontent'} */
class Block_198575df1f899f3e342_40509834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_198575df1f899f3e342_40509834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/jquery.dataTables.min.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">	
$(document).ready(function()
{         	
    var table = $('#table-user').DataTable();
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptcontent'} */
}
