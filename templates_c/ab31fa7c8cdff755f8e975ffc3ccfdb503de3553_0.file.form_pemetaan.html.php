<?php
/* Smarty version 3.1.32, created on 2020-01-19 23:23:52
  from 'D:\Yoyoy\bantingan\bantingan\Views\Standartendik\form_pemetaan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e248298dfea30_15446500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab31fa7c8cdff755f8e975ffc3ccfdb503de3553' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Standartendik\\form_pemetaan.html',
      1 => 1579450938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e248298dfea30_15446500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_251215e248298dcb003_47557650', 'bodycontent');
?>
      
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16065e248298df9bc2_88974101', 'scriptcontent');
?>
        <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_251215e248298dcb003_47557650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_251215e248298dcb003_47557650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
    <div class="card-header">
      <strong>Standar Pendidik dan Tenaga Kependidikan - Pemetaan Form</strong>
    </div>
    <div class="card-body">
      <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standartendik/savePemetaan" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group row">
          <label class="col-md-3 col-form-label">No. Indikator</label>
          <div class="col-md-9">
            <input type="text" id="no_indikator" name="no_indikator" class="form-control" placeholder="No. Indikator" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['no_indikator'];?>
" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="text-input">Indikator</label>
          <div class="col-md-9">
            <input type="text" id="nama_indikator" name="nama_indikator" class="form-control" placeholder="Nama Indikator" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_indikator'];?>
" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="text-input">Kondisi Saat Ini</label>
          <div class="col-md-9">
            <input type="text" id="kondisi_saat_ini" name="kondisi_saat_ini" class="form-control" placeholder="Kondisi Saat Ini" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kondisi_saat_ini'];?>
">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['datanya']->value['generate'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
            <button type="button" class="btn btn-sm btn-primary" id="btnGenerate"><i class="fa fa-dot-circle-o"></i> Generate</button>
            <?php }?>
          </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Kelemahan</label>
            <div class="col-md-9">
              <input type="text" id="kelemahan" name="kelemahan" class="form-control" placeholder="Kelemahan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kelemahan'];?>
">
            </div>
        </div>   
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Kekuatan</label>
            <div class="col-md-9">
              <input type="text" id="kekuatan" name="kekuatan" class="form-control" placeholder="Kekuatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kekuatan'];?>
">
            </div>
        </div>     
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Masalah</label>
            <div class="col-md-9">
              <input type="text" id="masalah" name="masalah" class="form-control" placeholder="Masalah" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['masalah'];?>
">
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Akar Masalah</label>
            <div class="col-md-9">
              <input type="text" id="akar_masalah" name="akar_masalah" class="form-control" placeholder="Akar Masalah" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['akar_masalah'];?>
">
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Rekomendasi</label>
            <div class="col-md-9">
              <input type="text" id="rekomendasi" name="rekomendasi" class="form-control" placeholder="Rekomendasi" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['rekomendasi'];?>
">
            </div>
        </div>        
        <div class="card-footer">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
">
            <input type="hidden" name="id_indikator" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_indikator'];?>
">
            <input type="hidden" name="rumus" id="rumus" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['rumus'];?>
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
class Block_16065e248298df9bc2_88974101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_16065e248298df9bc2_88974101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">	
$(document).ready(function()
{ 
  $("#btnGenerate").click(function() {
    var rumus = $("#rumus").val();

    var formData = {
      rumus: rumus
    }

    $.ajax({ 
      url: baseUrl + '/standartendik/generateKondisiSaatIni',
      data: formData,
      type: 'POST',
      success: function(result)
      {
        alert(result);
        $("#kondisi_saat_ini").val(result);
      }
    });
  });

});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptcontent'} */
}
