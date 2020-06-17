<?php
/* Smarty version 3.1.32, created on 2019-12-15 13:32:45
  from 'E:\Yoyoy\bantingan\bantingan\Views\Masterruangan\form_ruangan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df5d38d4af748_97835621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8cdfb752864049365d847a82a1e1b52567ca368' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterruangan\\form_ruangan.html',
      1 => 1576391551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df5d38d4af748_97835621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57635df5d38d49f1f5_34273446', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_57635df5d38d49f1f5_34273446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_57635df5d38d49f1f5_34273446',
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
" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Ruangan</label>
        <div class="col-md-9">
          <input type="text" id="nama_ruangan" name="nama_ruangan" class="form-control" placeholder="Nama Ruangan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_ruangan'];?>
">
        </div>
      </div>  
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Luas Ruangan</label>
        <div class="col-md-9">
          <input type="text" id="luas" name="luas" class="form-control" placeholder="Luas Ruangan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['luas'];?>
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
