<?php
/* Smarty version 3.1.32, created on 2020-02-07 18:56:01
  from 'D:\SKRIPSI KU\Framwork\Yoyoy\bantingan\bantingan\Views\Mastermatpel\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3d5051be23e1_18650988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0970d5ecccf5d40cc9b1acd9cd8085bf3dc94e2f' => 
    array (
      0 => 'D:\\SKRIPSI KU\\Framwork\\Yoyoy\\bantingan\\bantingan\\Views\\Mastermatpel\\index.html',
      1 => 1580621209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3d5051be23e1_18650988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188535e3d5051a44af7_09498168', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208585e3d5051bd4380_05110412', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_188535e3d5051a44af7_09498168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_188535e3d5051a44af7_09498168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i> Master Mata Pelajaran
      <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
      <span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastermatpel/form_matpel">New Mata Pelajaran</a></span>
      <?php }?>
    </div>
    <div class="card-body">
      <table class="table table-responsive-sm" id="table-user">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Mata Pelajaran</th>
            <th>Nama Mata Pelajaran</th>
            <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
            <th>Edit/Delete</th>
            <?php }?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['kode_matpel'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_matpel'];?>
</td>
            <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastermatpel/form_matpel/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastermatpel/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-times" onclick="return confirm('Are you sure you want to delete this data?')"></a>
            </td>
            <?php }?>
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
class Block_208585e3d5051bd4380_05110412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_208585e3d5051bd4380_05110412',
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
