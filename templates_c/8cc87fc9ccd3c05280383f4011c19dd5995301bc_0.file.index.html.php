<?php
/* Smarty version 3.1.32, created on 2019-12-12 18:57:08
  from 'D:\Master\Yoyoy\bantingan\bantingan\Views\Masterindikator\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df22b1451f275_68445244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cc87fc9ccd3c05280383f4011c19dd5995301bc' => 
    array (
      0 => 'D:\\Master\\Yoyoy\\bantingan\\bantingan\\Views\\Masterindikator\\index.html',
      1 => 1576151740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df22b1451f275_68445244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20595df22b144c5379_54886282', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_304405df22b14516bd8_61897608', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_20595df22b144c5379_54886282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_20595df22b144c5379_54886282',
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
class Block_304405df22b14516bd8_61897608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_304405df22b14516bd8_61897608',
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
