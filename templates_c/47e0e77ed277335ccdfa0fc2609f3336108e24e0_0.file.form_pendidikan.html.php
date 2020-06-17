<?php
/* Smarty version 3.1.32, created on 2020-02-02 13:05:23
  from 'D:\Yoyoy\bantingan\bantingan\Views\Masterpendidikanguru\form_pendidikan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3666a30d25f8_69447540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47e0e77ed277335ccdfa0fc2609f3336108e24e0' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterpendidikanguru\\form_pendidikan.html',
      1 => 1580623517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3666a30d25f8_69447540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117415e3666a30c4448_90085504', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_117415e3666a30c4448_90085504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_117415e3666a30c4448_90085504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Pendidikan Terakhir Guru</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterpendidikanguru/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Pendidikan</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Jabatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Kode Pendidikan</label>
        <div class="col-md-9">
          <input type="text" id="kode" name="kode" class="form-control" placeholder="Kode Pendidikan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kode'];?>
" required maxlength="3">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Deskripsi</label>
        <div class="col-md-9">
          <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['deskripsi'];?>
" required>
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
