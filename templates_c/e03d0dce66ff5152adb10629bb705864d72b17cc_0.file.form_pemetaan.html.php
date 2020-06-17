<?php
/* Smarty version 3.1.32, created on 2019-12-13 17:27:09
  from 'D:\Master\Yoyoy\bantingan\bantingan\Views\Standartendik\form_pemetaan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df3677dc463d7_41466566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e03d0dce66ff5152adb10629bb705864d72b17cc' => 
    array (
      0 => 'D:\\Master\\Yoyoy\\bantingan\\bantingan\\Views\\Standartendik\\form_pemetaan.html',
      1 => 1575486566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df3677dc463d7_41466566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129435df3677dc0bcb5_14824773', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_129435df3677dc0bcb5_14824773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_129435df3677dc0bcb5_14824773',
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
