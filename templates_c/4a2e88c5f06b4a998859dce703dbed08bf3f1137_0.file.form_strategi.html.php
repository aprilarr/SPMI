<?php
/* Smarty version 3.1.32, created on 2019-12-05 02:06:27
  from 'E:\Yoyoy\bantingan\bantingan\Views\Standarkompetensilulusan\form_strategi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de803b37daa77_64266422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2e88c5f06b4a998859dce703dbed08bf3f1137' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Standarkompetensilulusan\\form_strategi.html',
      1 => 1575486266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de803b37daa77_64266422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51975de803b37a4255_96024377', 'bodycontent');
?>

              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_51975de803b37a4255_96024377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_51975de803b37a4255_96024377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
    <div class="card-header">
      <strong>Standar Kompetensi Lulusan - Penyusunan Strategi Form</strong>
    </div>
    <div class="card-body">
      <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standarkompetensilulusan/saveStrategi" method="post" enctype="multipart/form-data" class="form-horizontal">
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
            <label class="col-md-3 col-form-label" for="text-input">Kesimpulan Hasil Monev</label>
            <div class="col-md-9">
              <input type="text" id="kesimpulan" name="kesimpulan" class="form-control" placeholder="Kesimpulan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['kesimpulan'];?>
" readonly>
            </div>
        </div>   
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Penyusunan Strategi</label>
            <div class="col-md-9">
              <input type="text" id="strategi_peningkatan" name="strategi_peningkatan" class="form-control" placeholder="Strategi Peningkatan" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['strategi_peningkatan'];?>
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
            <input type="hidden" name="id_rencana" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_monev'];?>
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
