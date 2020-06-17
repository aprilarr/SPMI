<?php
/* Smarty version 3.1.32, created on 2020-02-02 12:48:13
  from 'D:\Yoyoy\bantingan\bantingan\Views\Masterjurusan\form_jurusan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e36629d104a88_53799470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6b61c2cbfa9434b77a4e9895b44bb1068ae029' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterjurusan\\form_jurusan.html',
      1 => 1580622209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36629d104a88_53799470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16455e36629d0f0ca1_20088509', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_16455e36629d0f0ca1_20088509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_16455e36629d0f0ca1_20088509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Jurusan</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterjurusan/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Jabatan</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Jurusan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Jurusan</label>
        <div class="col-md-9">
          <input type="text" id="nama_jurusan" name="nama_jurusan" class="form-control" placeholder="Nama Jurusan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_jurusan'];?>
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
