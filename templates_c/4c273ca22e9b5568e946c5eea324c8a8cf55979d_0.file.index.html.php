<?php
/* Smarty version 3.1.32, created on 2019-12-15 20:38:09
  from 'E:\Yoyoy\bantingan\bantingan\Views\Masterperalatan\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df637419e63c1_14500342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c273ca22e9b5568e946c5eea324c8a8cf55979d' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterperalatan\\index.html',
      1 => 1576417084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df637419e63c1_14500342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_215385df637419bb8f6_55812170', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_242435df637419e20e5_50743535', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_215385df637419bb8f6_55812170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_215385df637419bb8f6_55812170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <i class="fa fa-align-justify"></i> Master Peralatan
    <span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterperalatan/form_peralatan">New Peralatan</a></span>
  </div>
  <div class="card-body">
    <table class="table table-responsive-sm" id="table-user">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Ruangan</th>
          <th>Nama Peralatan</th>
          <th>Jumlah</th>
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
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_ruangan'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['nama_alat'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['jumlah'];?>
</td>
          <td>
              <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterperalatan/form_peralatan/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterperalatan/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
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
class Block_242435df637419e20e5_50743535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_242435df637419e20e5_50743535',
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
