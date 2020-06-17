<?php
/* Smarty version 3.1.32, created on 2020-02-02 12:48:03
  from 'D:\Yoyoy\bantingan\bantingan\Views\Masterjabatan\form_jabatan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3662934d50b2_14089552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd78cbdf8fe5fd34cbee480a63465283293509e66' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterjabatan\\form_jabatan.html',
      1 => 1580622186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3662934d50b2_14089552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63035e3662934c9594_98391837', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_63035e3662934c9594_98391837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_63035e3662934c9594_98391837',
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
" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Jabatan</label>
        <div class="col-md-9">
          <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_jabatan'];?>
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
