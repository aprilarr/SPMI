<?php
/* Smarty version 3.1.32, created on 2019-12-05 01:37:11
  from 'E:\Yoyoy\bantingan\bantingan\Views\Masterjabatan\form_jabatan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de7fcd76c3434_50539299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81dbdcf61a834549ed2df40ee14e0003e096a4d4' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterjabatan\\form_jabatan.html',
      1 => 1575484555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de7fcd76c3434_50539299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76635de7fcd76b47c1_59063041', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_76635de7fcd76b47c1_59063041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_76635de7fcd76b47c1_59063041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Jabatan</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterjabatan/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Jabatan</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Jabatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Jabatan</label>
        <div class="col-md-9">
          <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_jabatan'];?>
">
        </div>
      </div>              
      <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
          <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </form>
  </div>      
</div>
<?php
}
}
/* {/block 'bodycontent'} */
}
