<?php
/* Smarty version 3.1.32, created on 2019-12-05 02:01:04
  from 'E:\Yoyoy\bantingan\bantingan\Views\Standarkompetensilulusan\form_monev.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de802709cad20_14640875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '512531f3b712a3d7ab94d42946325b1c379757bc' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Standarkompetensilulusan\\form_monev.html',
      1 => 1575485681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de802709cad20_14640875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93625de80270991427_14804331', 'bodycontent');
?>

              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_93625de80270991427_14804331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_93625de80270991427_14804331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
    <div class="card-header">
      <strong>Standar Kompetensi Lulusan - Monitoring dan Evaluasi Form</strong>
    </div>
    <div class="card-body">
      <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standarkompetensilulusan/saveMonev" method="post" enctype="multipart/form-data" class="form-horizontal">
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
            <label class="col-md-3 col-form-label" for="text-input">Program</label>
            <div class="col-md-9">
              <input type="text" id="program" name="program" class="form-control" placeholder="Program" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['program'];?>
" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Kegiatan</label>
            <div class="col-md-9">
              <input type="text" id="kegiatan" name="kegiatan" class="form-control" placeholder="Kegiatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kegiatan'];?>
" readonly>
            </div>
        </div>  
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Waktu Pelaksanaan</label>
            <div class="col-md-9">
              <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" class="form-control" placeholder="Kegiatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['waktu_pelaksanaan'];?>
">
            </div>
        </div>   
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Input</label>
            <div class="col-md-9">
              <input type="text" id="input" name="input" class="form-control" placeholder="Input" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['input'];?>
" readonly>
            </div>
        </div>     
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Proses</label>
            <div class="col-md-9">
              <input type="text" id="proses" name="proses" class="form-control" placeholder="Proses" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['proses'];?>
" readonly>
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Output</label>
            <div class="col-md-9">
              <input type="text" id="output" name="output" class="form-control" placeholder="Output" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['output'];?>
" readonly>
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Outcome</label>
            <div class="col-md-9">
              <input type="text" id="outcome" name="outcome" class="form-control" placeholder="Outcome" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['outcome'];?>
" readonly>
            </div>
        </div>   
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Petugas Monev</label>
            <div class="col-md-9">
              <input type="text" id="petugas_monev" name="petugas_monev" class="form-control" placeholder="Petugas Monev" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['petugas_monev'];?>
">
            </div>
        </div>  
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Waktu Monev</label>
            <div class="col-md-9">
              <input type="text" id="waktu_monev" name="waktu_monev" class="form-control" placeholder="Waktu Monev" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['waktu_monev'];?>
">
            </div>
        </div>  
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Kesimpulan</label>
            <div class="col-md-9">
              <input type="text" id="kesimpulan" name="kesimpulan" class="form-control" placeholder="Kesimpulan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kesimpulan'];?>
">
            </div>
        </div>   
        <div class="card-footer">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
">
            <input type="hidden" name="id_pemetaan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_pemetaan'];?>
">
            <input type="hidden" name="id_rencana" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_rencana'];?>
">
            <input type="hidden" name="id_rencana" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_pelaksanaan'];?>
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
