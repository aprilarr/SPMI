<?php
/* Smarty version 3.1.32, created on 2020-02-02 12:48:36
  from 'D:\Yoyoy\bantingan\bantingan\Views\Masterruangan\form_ruangan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3662b4b4b347_19619528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5c34a3697e0e4b57bfdb376f6503b5edb1f25d1' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterruangan\\form_ruangan.html',
      1 => 1580622513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3662b4b4b347_19619528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193325e3662b4b3c024_51869934', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_193325e3662b4b3c024_51869934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_193325e3662b4b3c024_51869934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Ruangan</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterruangan/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Ruangan</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Ruangan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Ruangan</label>
        <div class="col-md-9">
          <input type="text" id="nama_ruangan" name="nama_ruangan" class="form-control" placeholder="Nama Ruangan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_ruangan'];?>
" required>
        </div>
      </div>  
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Luas Ruangan</label>
        <div class="col-md-9">
          <input type="number" id="luas" name="luas" class="form-control" placeholder="Luas Ruangan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['luas'];?>
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
