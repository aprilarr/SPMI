<?php
/* Smarty version 3.1.32, created on 2020-02-02 13:06:52
  from 'D:\Yoyoy\bantingan\bantingan\Views\Masterdefault\form_default.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3666fc71c4f0_65952439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44cba156c2e676eb9dd70d0adb7f55b8bfc99281' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterdefault\\form_default.html',
      1 => 1580623608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3666fc71c4f0_65952439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117055e3666fc70a8a6_90129043', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_117055e3666fc70a8a6_90129043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_117055e3666fc70a8a6_90129043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Default Parameter</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterdefault/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Default Param</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Default Param" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Kode</label>
        <div class="col-md-9">
          <input type="text" id="kode" name="kode" class="form-control" placeholder="Kode Param" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kode'];?>
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
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Value</label>
        <div class="col-md-9">
          <input type="text" id="value" name="value" class="form-control" placeholder="Value" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['value'];?>
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
