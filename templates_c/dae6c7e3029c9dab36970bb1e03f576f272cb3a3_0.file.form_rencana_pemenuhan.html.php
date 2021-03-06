<?php
/* Smarty version 3.1.32, created on 2019-12-04 22:23:48
  from 'E:\Yoyoy\bantingan\bantingan\Views\Standarkompetensilulusan\form_rencana_pemenuhan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de7cf84c64d60_43916741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae6c7e3029c9dab36970bb1e03f576f272cb3a3' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Standarkompetensilulusan\\form_rencana_pemenuhan.html',
      1 => 1575472645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de7cf84c64d60_43916741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234055de7cf84b87f24_51218907', 'bodycontent');
?>

              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_234055de7cf84b87f24_51218907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_234055de7cf84b87f24_51218907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
    <div class="card-header">
      <strong>Standar Kompetensi Lulusan - Rencana Pemenuhan Form</strong>
    </div>
    <div class="card-body">
      <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standarkompetensilulusan/saveRencanaPemenuhan" method="post" enctype="multipart/form-data" class="form-horizontal">
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
            <label class="col-md-3 col-form-label" for="text-input">Rekomendasi</label>
            <div class="col-md-9">
              <input type="text" id="rekomendasi" name="rekomendasi" class="form-control" placeholder="Rekomendasi" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['rekomendasi'];?>
" readonly>
            </div>
        </div>   
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="text-input">Program</label>
          <div class="col-md-9">
            <input type="text" id="program" name="program" class="form-control" placeholder="Program" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['program'];?>
">
          </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Kegiatan</label>
            <div class="col-md-9">
              <input type="text" id="kegiatan" name="kegiatan" class="form-control" placeholder="Kegiatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kegiatan'];?>
">
            </div>
        </div>   
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Volume</label>
            <div class="col-md-9">
              <input type="text" id="volume" name="volume" class="form-control" placeholder="Volume" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['volume'];?>
">
            </div>
        </div>     
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Kebutuhan Biaya</label>
            <div class="col-md-9">
              <input type="text" id="kebutuhan_biaya" name="kebutuhan_biaya" class="form-control" placeholder="Kebutuhan Biaya" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kebutuhan_biaya'];?>
">
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Sumber Daya</label>
            <div class="col-md-9">
              <input type="text" id="sumber_daya" name="sumber_daya" class="form-control" placeholder="Sumber Daya" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['sumber_daya'];?>
">
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Skala Prioritas</label>
            <div class="col-md-9">
              <div class="checkbox">
                <label for="sk_1">
                  <input type="checkbox" id="sk_1" name="sk_1" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['sk_1'];?>
" onchange="setCBBitValue()"> Tahun ke-1
                </label>
              </div>
              <div class="checkbox">
                <label for="sk_2">
                  <input type="checkbox" id="sk_2" name="sk_2" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['sk_2'];?>
" onchange="setCBBitValue()"> Tahun ke-2
                </label>
              </div>
              <div class="checkbox">
                <label for="sk_3">
                  <input type="checkbox" id="sk_3" name="sk_3" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['sk_3'];?>
" onchange="setCBBitValue()"> Tahun ke-3
                </label>
              </div>
              <div class="checkbox">
                  <label for="sk_4">
                    <input type="checkbox" id="sk_4" name="sk_4" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['sk_4'];?>
" onchange="setCBBitValue()"> Tahun ke-4
                  </label>
                </div>
            </div>
          </div>      
        <div class="card-footer">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
">
            <input type="hidden" name="id_pemetaan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_pemetaan'];?>
">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
          </div>
      </form>
    </div>
                
  </div>

<?php echo '<script'; ?>
 type="text/javascript">	

if(document.getElementById("sk_1").value == 1) {
  document.getElementById("sk_1").checked = true;
} 
if(document.getElementById("sk_2").value == 1) {
  document.getElementById("sk_2").checked = true;
} 
if(document.getElementById("sk_3").value == 1) {
  document.getElementById("sk_3").checked = true;
} 
if(document.getElementById("sk_4").value == 1) {
  document.getElementById("sk_4").checked = true;
} 

function setCBBitValue() {
  if (document.getElementById("sk_1").checked) {
    document.getElementById("sk_1").value = 1;
  } else {
    document.getElementById("sk_1").value = 0;
  }
  if (document.getElementById("sk_2").checked) {
    document.getElementById("sk_2").value = 1;
  } else {
    document.getElementById("sk_2").value = 0;
  }
  if (document.getElementById("sk_3").checked) {
    document.getElementById("sk_3").value = 1;
  } else {
    document.getElementById("sk_3").value = 0;
  }
  if (document.getElementById("sk_4").checked) {
    document.getElementById("sk_4").value = 1;
  } else {
    document.getElementById("sk_4").value = 0;
  }
}

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bodycontent'} */
}
