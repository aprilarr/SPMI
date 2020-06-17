<?php
/* Smarty version 3.1.32, created on 2020-02-02 13:03:47
  from 'D:\Yoyoy\bantingan\bantingan\Views\Mastersiswa\form_siswa.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e36664388f9a6_21319243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929b5a333aadc8235e409cd5b39409330a7d1c62' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Mastersiswa\\form_siswa.html',
      1 => 1580623421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36664388f9a6_21319243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27585e36664387d126_38540776', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_27585e36664387d126_38540776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_27585e36664387d126_38540776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Siswa</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastersiswa/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Siswa</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Siswa" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nomor Induk Siswa</label>
        <div class="col-md-9">
          <input type="number" id="nis" name="nis" class="form-control" placeholder="NIS" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nis'];?>
" required max="99999999">
        </div>
      </div>    
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Siswa</label>
        <div class="col-md-9">
          <input type="text" id="nama_siswa" name="nama_siswa" class="form-control" placeholder="Nama Siswa" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_siswa'];?>
" required>
        </div>
      </div>  
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Kelas</label>
        <div class="col-md-9">
          <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kelas'];?>
" required maxlength="5">
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
