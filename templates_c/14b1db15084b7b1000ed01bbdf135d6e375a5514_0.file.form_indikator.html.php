<?php
/* Smarty version 3.1.32, created on 2019-12-15 10:17:51
  from 'E:\Yoyoy\bantingan\bantingan\Views\Masterindikator\form_indikator.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df5a5df753805_77234093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b1db15084b7b1000ed01bbdf135d6e375a5514' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterindikator\\form_indikator.html',
      1 => 1576379866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df5a5df753805_77234093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82705df5a5df7080a4_09331478', 'bodycontent');
?>
          
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136795df5a5df742846_93596402', 'scriptcontent');
?>
    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_82705df5a5df7080a4_09331478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_82705df5a5df7080a4_09331478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Indikator</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterindikator/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Standar SPMI</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="id_standar" id="id_standar">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatastandar']->value, 'itemdataindstandar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdataindstandar']->value) {
?>	
              <option value=<?php echo $_smarty_tpl->tpl_vars['itemdataindstandar']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['itemdataindstandar']->value['nama_standar'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Indikator</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Indikator" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly> 
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">No. Indikator</label>
        <div class="col-md-9">
          <input type="text" id="no_indikator" name="no_indikator" class="form-control" placeholder="No. Indikator" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['no_indikator'];?>
">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nama Indikator</label>
        <div class="col-md-9">
          <input type="text" id="nama_indikator" name="nama_indikator" class="form-control" placeholder="Nama Indikator" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_indikator'];?>
">
        </div>
      </div>   
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Flag</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="flag" id="flag">
              <option value="P">Indikator</option>
              <option value="S">Sub Indikator</option>
              <option value="C">Sub Sub Indikator</option>
            </select>          
        </div>
      </div>      
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Generate Indikator</label>
        <div class="col-md-9">
          <div class="checkbox">
            <label for="generate">
              <input type="checkbox" id="generate" name="generate" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['generate'];?>
" onchange="setCBGenerate()">
            </label>
          </div>
        </div>
      </div>      
      <div class="card-footer">
          <input type="hidden" id="flag_update" name="flag_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['flag'];?>
">
          <input type="hidden" id="id_standar_update" name="id_standar_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_standar'];?>
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
class Block_136795df5a5df742846_93596402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_136795df5a5df742846_93596402',
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

// if(document.getElementById("id_standar_update").value != null && document.getElementById("id_standar_update").value!= "" && document.getElementById("id_standar_update").value != 0)
// {
//   document.getElementById("id_standar").readonly = true;
// } else {
//   document.getElementById("id_standar").readonly = false;
// }
document.getElementById("flag").value = document.getElementById("flag_update").value;
document.getElementById("id_standar").value = document.getElementById("id_standar_update").value;
 
$(document).ready(function()
{         	
    $(".js-example-basic-single").select2({
      width: '50%' // need to override the changed default
    });
});

if(document.getElementById("generate").value == 1) {
  document.getElementById("generate").checked = true;
} 

function setCBGenerate() {
  if (document.getElementById("generate").checked) {
    document.getElementById("generate").value = 1;
  } else {
    document.getElementById("generate").value = 0;
  }
}
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptcontent'} */
}
