<?php
/* Smarty version 3.1.32, created on 2020-02-02 12:49:15
  from 'D:\Yoyoy\bantingan\bantingan\Views\Masterperalatan\form_peralatan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3662dbc7a156_55630649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e6137fca6658c5d571587002e827f190e41ceed' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterperalatan\\form_peralatan.html',
      1 => 1580622552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3662dbc7a156_55630649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_280755e3662dbc545c6_00743791', 'bodycontent');
?>
          
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_317525e3662dbc73308_01066700', 'scriptcontent');
?>
    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_280755e3662dbc545c6_00743791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_280755e3662dbc545c6_00743791',
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
            <select class="js-example-basic-single" name="id_ruangan" id="id_ruangan" required>
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
" readonly required> 
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Nama Peralatan</label>
        <div class="col-md-9">
          <input type="text" id="nama_alat" name="nama_alat" class="form-control" placeholder="Nama Peralatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_alat'];?>
" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Jumlah</label>
        <div class="col-md-9">
          <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['jumlah'];?>
" required>
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
class Block_317525e3662dbc73308_01066700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_317525e3662dbc73308_01066700',
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
