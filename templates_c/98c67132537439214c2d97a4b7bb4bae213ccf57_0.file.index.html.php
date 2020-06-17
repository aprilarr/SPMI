<?php
/* Smarty version 3.1.32, created on 2020-02-03 07:51:20
  from 'D:\SKRIPSI KU\Framwork\Yoyoy\bantingan\bantingan\Views\Masterguru\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e376e883dd559_38132691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98c67132537439214c2d97a4b7bb4bae213ccf57' => 
    array (
      0 => 'D:\\SKRIPSI KU\\Framwork\\Yoyoy\\bantingan\\bantingan\\Views\\Masterguru\\index.html',
      1 => 1580622663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e376e883dd559_38132691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160945e376e87eaa370_40224277', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63355e376e883cc291_10337660', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_160945e376e87eaa370_40224277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_160945e376e87eaa370_40224277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <i class="fa fa-align-justify"></i> Master Guru
    <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
    	<span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterguru/form_guru">New Guru</a></span>
    <?php }?>
  </div>
  <div class="card-body">
    <table class="table table-responsive-sm" id="table-user">
      <thead>
        <tr>
          <th>NUPTK</th>
          <th>Nama Guru</th>
          <th>Jabatan</th>
          <th>Mengajar</th>
          <th>Pendidikan Terakhir</th>
          <th>Status Pedagogik</th>
          <th>Status Profesional</th>
          <th>Tahun Lahir</th>
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
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nip'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_guru'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_jabatan'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_matpel'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['deskripsi'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['status_pedagogik'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['status_profesional'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['tahun_lahir'];?>
</td>
          <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
	          <td>
	              <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterguru/form_guru/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
	              <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterguru/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
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
class Block_63355e376e883cc291_10337660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_63355e376e883cc291_10337660',
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
