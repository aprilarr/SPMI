<?php
/* Smarty version 3.1.32, created on 2020-02-02 13:04:48
  from 'D:\Yoyoy\bantingan\bantingan\Views\Mastermatpel\form_matpel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3666805b08a3_08254159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '293cd43bc563d5d7736af7ccc7364ad604e912de' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Mastermatpel\\form_matpel.html',
      1 => 1580623480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3666805b08a3_08254159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42745e3666805a2eb2_27103186', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_42745e3666805a2eb2_27103186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_42745e3666805a2eb2_27103186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Mata Pelajaran</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/mastermatpel/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Mata Pelajaran</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Mata " value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Kode Mata Pelajaran</label>
        <div class="col-md-9">
          <input type="text" id="kode_matpel" name="kode_matpel" class="form-control" placeholder="Kode Pelajaran" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kode_matpel'];?>
" required maxlength="3">
        </div>
      </div> 
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Mata Pelajaran</label>
        <div class="col-md-9">
          <input type="text" id="nama_matpel" name="nama_matpel" class="form-control" placeholder="Nama Pelajaran" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_matpel'];?>
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
