<?php
/* Smarty version 3.1.32, created on 2020-02-02 12:23:56
  from 'D:\Yoyoy\bantingan\bantingan\Views\Mastersiswa\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e365cec568e01_12671783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a72228b5c0916377da948f74fc81b2084d7ecb0' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Mastersiswa\\index.html',
      1 => 1580621032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e365cec568e01_12671783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_241005e365cec51fc58_91255057', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157575e365cec5645e1_43492743', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_241005e365cec51fc58_91255057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_241005e365cec51fc58_91255057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i> Master Siswa
      <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
      	<span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastersiswa/form_siswa">New Siswa</a></span>
      <?php }?>
    </div>
    <div class="card-body">
      <table class="table table-responsive-sm" id="table-user">
        <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
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
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nis'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_siswa'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['kelas'];?>
</td>
            <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
	            <td>
	                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastersiswa/form_siswa/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
	                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastersiswa/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
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
class Block_157575e365cec5645e1_43492743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_157575e365cec5645e1_43492743',
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
