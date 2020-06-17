<?php
/* Smarty version 3.1.32, created on 2019-12-12 15:22:08
  from 'D:\Master\Yoyoy\bantingan\bantingan\Views\Masterjabatan\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df1f8b0f33f98_62236643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64bca257c1ab3edaece45316e9cb15d2a43b766b' => 
    array (
      0 => 'D:\\Master\\Yoyoy\\bantingan\\bantingan\\Views\\Masterjabatan\\index.html',
      1 => 1576138927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1f8b0f33f98_62236643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_231705df1f8b0efa734_49143581', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_219075df1f8b0f2c9e4_58487273', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_231705df1f8b0efa734_49143581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_231705df1f8b0efa734_49143581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i> Master Jabatan
      <span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterjabatan/form_jabatan">New Jabatan</a></span>
    </div>
    <div class="card-body">
      <table class="table table-responsive-sm" id="table-user">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
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
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_jabatan'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterjabatan/form_jabatan/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterjabatan/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
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
class Block_219075df1f8b0f2c9e4_58487273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_219075df1f8b0f2c9e4_58487273',
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
