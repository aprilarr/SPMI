<?php
/* Smarty version 3.1.32, created on 2019-12-15 20:37:28
  from 'E:\Yoyoy\bantingan\bantingan\Views\Masterperalatan\form_peralatan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df637189bd116_85435883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd410dc7f025103ebfb24af4ac3be56c095296ac' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterperalatan\\form_peralatan.html',
      1 => 1576416935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df637189bd116_85435883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225515df6371898a8a2_54159571', 'bodycontent');
?>
          
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133165df637189b62f0_68793863', 'scriptcontent');
?>
    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_225515df6371898a8a2_54159571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_225515df6371898a8a2_54159571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Peralatan</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterperalatan/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Ruangan</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="id_ruangan" id="id_ruangan">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatastandar']->value, 'itemdataindstandar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdataindstandar']->value) {
?>	
              <option value=<?php echo $_smarty_tpl->tpl_vars['itemdataindstandar']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['itemdataindstandar']->value['nama_ruangan'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Peralatan</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Peralatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly> 
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Nama Peralatan</label>
        <div class="col-md-9">
          <input type="text" id="nama_alat" name="nama_alat" class="form-control" placeholder="Nama Peralatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_alat'];?>
">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Jumlah</label>
        <div class="col-md-9">
          <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['jumlah'];?>
">
        </div>
      </div>      
      <div class="card-footer">
          <input type="hidden" id="id_ruangan_update" name="id_ruangan_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_ruangan'];?>
">
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
/* {block 'scriptcontent'} */
class Block_133165df637189b62f0_68793863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_133165df637189b62f0_68793863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/jquery.dataTables.min.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.min.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">	
document.getElementById("id_ruangan").value = document.getElementById("id_ruangan_update").value;
 
$(document).ready(function()
{         	
    $(".js-example-basic-single").select2({
      width: '50%' // need to override the changed default
    });
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptcontent'} */
}
