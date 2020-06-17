<?php
/* Smarty version 3.1.32, created on 2019-12-15 16:35:35
  from 'E:\Yoyoy\bantingan\bantingan\Views\Mastersiswa\form_siswa.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df5fe6711fdc9_70890006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01da12c673265b2663d4452d5bed496b27a09090' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Mastersiswa\\form_siswa.html',
      1 => 1576402526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df5fe6711fdc9_70890006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_301935df5fe6710d3a9_43048077', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_301935df5fe6710d3a9_43048077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_301935df5fe6710d3a9_43048077',
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
" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nomor Induk Siswa</label>
        <div class="col-md-9">
          <input type="text" id="nis" name="nis" class="form-control" placeholder="NIS" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nis'];?>
">
        </div>
      </div>    
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Siswa</label>
        <div class="col-md-9">
          <input type="text" id="nama_siswa" name="nama_siswa" class="form-control" placeholder="Nama Siswa" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_siswa'];?>
">
        </div>
      </div>  
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Kelas</label>
        <div class="col-md-9">
          <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kelas'];?>
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
