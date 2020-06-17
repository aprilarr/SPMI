<?php
/* Smarty version 3.1.32, created on 2020-02-03 07:51:49
  from 'D:\SKRIPSI KU\Framwork\Yoyoy\bantingan\bantingan\Views\Masterpendidikanguru\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e376ea5d74d59_05920518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63bad2bb2d070db6f200cf8e96fb49f0f728fc6' => 
    array (
      0 => 'D:\\SKRIPSI KU\\Framwork\\Yoyoy\\bantingan\\bantingan\\Views\\Masterpendidikanguru\\index.html',
      1 => 1580621217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e376ea5d74d59_05920518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213915e376ea5cab5e1_16233386', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220445e376ea5d690e9_06878975', 'scriptcontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_213915e376ea5cab5e1_16233386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_213915e376ea5cab5e1_16233386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i> Master Pedidikan
      <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
      	<span class="pull-right"><a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterpendidikanguru/form_pendidikan">New Pendidikan</a></span>
      <?php }?>
    </div>
    <div class="card-body">
      <table class="table table-responsive-sm" id="table-user">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Deskripsi</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['kode'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['deskripsi'];?>
</td>
            <?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->page_role) && $_smarty_tpl->tpl_vars['currentuser']->value->page_role == "admin")) {?>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterpendidikanguru/form_pendidikan/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
" class="fa fa-pencil"></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterpendidikanguru/delete/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
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
class Block_220445e376ea5d690e9_06878975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_220445e376ea5d690e9_06878975',
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
