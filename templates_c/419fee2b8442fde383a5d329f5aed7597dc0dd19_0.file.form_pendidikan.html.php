<?php
/* Smarty version 3.1.32, created on 2019-12-05 01:37:42
  from 'E:\Yoyoy\bantingan\bantingan\Views\Masterpendidikanguru\form_pendidikan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de7fcf64130f3_07212227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '419fee2b8442fde383a5d329f5aed7597dc0dd19' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterpendidikanguru\\form_pendidikan.html',
      1 => 1575484584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de7fcf64130f3_07212227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107635de7fcf6401a07_40964818', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_107635de7fcf6401a07_40964818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_107635de7fcf6401a07_40964818',
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
" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Kode Pendidikan</label>
        <div class="col-md-9">
          <input type="text" id="kode" name="kode" class="form-control" placeholder="Kode Pendidikan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kode'];?>
">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Deskripsi</label>
        <div class="col-md-9">
          <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['deskripsi'];?>
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
