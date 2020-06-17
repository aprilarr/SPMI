<?php
/* Smarty version 3.1.32, created on 2019-12-14 21:35:45
  from 'E:\Yoyoy\bantingan\bantingan\Views\Masterindikator\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df4f3410e2a18_99679406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e17020770f022d49859f87ddbe07e7ca94c425' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterindikator\\index.html',
      1 => 1576151742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df4f3410e2a18_99679406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85715df4f340f33d53_31620932', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_275445df4f34109c470_88965048', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_85715df4f340f33d53_31620932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_85715df4f340f33d53_31620932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <i class="fa fa-align-justify"></i> Master Indikator
    <span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterindikator/form_indikator">New Indikator</a></span>
  </div>
  <div class="card-body">
    <table class="table table-responsive-sm" id="table-user">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Standar</th>
          <th>No Indikator</th>
          <th>Nama Indikator</th>
          <th>Flag</th>
          <th>Generated</th>
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
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_standar'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['no_indikator'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_indikator'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['flag'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['generate'];?>
</td>
          <td>
              <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterindikator/form_indikator/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterindikator/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
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
class Block_275445df4f34109c470_88965048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_275445df4f34109c470_88965048',
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
