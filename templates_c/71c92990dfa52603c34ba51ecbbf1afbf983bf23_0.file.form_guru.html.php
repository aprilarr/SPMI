<?php
/* Smarty version 3.1.32, created on 2020-02-02 13:00:46
  from 'D:\Yoyoy\bantingan\bantingan\Views\Masterguru\form_guru.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e36658e6c1c57_29523448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71c92990dfa52603c34ba51ecbbf1afbf983bf23' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Masterguru\\form_guru.html',
      1 => 1580623241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36658e6c1c57_29523448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174405e36658e66d208_46455396', 'bodycontent');
?>
          
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291455e36658e6b9628_02338215', 'scriptcontent');
?>
    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_174405e36658e66d208_46455396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_174405e36658e66d208_46455396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-header">
    <strong>Form Master Guru</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/masterguru/save" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label">ID Guru</label>
        <div class="col-md-9">
          <input type="text" id="id" name="id" class="form-control" placeholder="ID Guru" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
" readonly required> 
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">NUPTK</label>
        <div class="col-md-9">
          <input type="number" id="nip" name="nip" class="form-control" placeholder="NUPTK" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nip'];?>
" required min="0" max="9999999999999999">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Nama Guru</label>
        <div class="col-md-9">
          <input type="text" id="nama_guru" name="nama_guru" class="form-control" placeholder="Nama Guru" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['nama_guru'];?>
" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Jabatan</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="id_jabatan" id="id_jabatan" required>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatajabatan']->value, 'itemdatajabatan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatajabatan']->value) {
?>	
              <option value=<?php echo $_smarty_tpl->tpl_vars['itemdatajabatan']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['itemdatajabatan']->value['nama_jabatan'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Jurusan</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="id_jurusan" id="id_jurusan" required>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatajurusan']->value, 'itemdatajurusan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatajurusan']->value) {
?>	
              <option value=<?php echo $_smarty_tpl->tpl_vars['itemdatajurusan']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['itemdatajurusan']->value['nama_jurusan'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
      </div> 
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Mengajar</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="id_matpel" id="id_matpel" required>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatamatpel']->value, 'itemdatamatpel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatamatpel']->value) {
?>	
              <option value=<?php echo $_smarty_tpl->tpl_vars['itemdatamatpel']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['itemdatamatpel']->value['nama_matpel'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
      </div>   
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Pendidikan Terakhir</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="id_pendidikan" id="id_pendidikan" required>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatapend']->value, 'itemdatapendidikan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatapendidikan']->value) {
?>	
              <option value=<?php echo $_smarty_tpl->tpl_vars['itemdatapendidikan']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['itemdatapendidikan']->value['deskripsi'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
      </div>   
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Sertifikasi</label>
        <div class="col-md-9">
          <div class="checkbox">
            <label for="sertified">
              <input type="checkbox" id="sertified" name="sertified" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['sertified'];?>
" onchange="setCBSertified()">
            </label>
          </div>
        </div>
      </div>  
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Status Pedagogik</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="status_pedagogik" id="status_pedagogik" required>
              <option value="sangat kurang">Sangat Kurang</option>
              <option value="kurang">Kurang</option>
              <option value="cukup">Cukup</option>
              <option value="baik">Baik</option>
              <option value="sangat baik">Sangat Baik</option>
            </select>
        </div>
      </div>    
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Status Profesional</label>
        <div class="col-md-9">
            <select class="js-example-basic-single" name="status_profesional" id="status_profesional" required>
              <option value="sangat kurang">Sangat Kurang</option>
              <option value="kurang">Kurang</option>
              <option value="cukup">Cukup</option>
              <option value="baik">Baik</option>
              <option value="sangat baik">Sangat Baik</option>
            </select>
        </div>
      </div>   
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Tahun Lahir</label>
        <div class="col-md-9">
          <input type="number" id="tahun_lahir" name="tahun_lahir" class="form-control" placeholder="Tahun Lahir" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['tahun_lahir'];?>
" required>
        </div>
      </div>
      <div class="card-footer">
          <input type="hidden" id="id_jabatan_update" name="id_jabatan_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_jabatan'];?>
">
          <input type="hidden" id="id_jurusan_update" name="id_jurusan_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_jurusan'];?>
">
          <input type="hidden" id="id_matpel_update" name="id_matpel_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_matpel'];?>
">
          <input type="hidden" id="id_pendidikan_update" name="id_pendidikan_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id_pendidikan'];?>
">
          <input type="hidden" id="status_pedagogik_update" name="status_pedagogik_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['status_pedagogik'];?>
">
          <input type="hidden" id="status_profesional_update" name="status_profesional_update" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['status_profesional'];?>
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
class Block_291455e36658e6b9628_02338215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_291455e36658e6b9628_02338215',
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
document.getElementById("id_jabatan").value = document.getElementById("id_jabatan_update").value;
document.getElementById("id_pendidikan").value = document.getElementById("id_pendidikan_update").value;
document.getElementById("id_matpel").value = document.getElementById("id_matpel_update").value;
document.getElementById("id_jurusan").value = document.getElementById("id_jurusan_update").value;
document.getElementById("status_pedagogik").value = document.getElementById("status_pedagogik_update").value;
document.getElementById("status_profesional").value = document.getElementById("status_profesional_update").value;
 
$(document).ready(function()
{         	
    $('#id_jabatan').select2();
    $('#id_jurusan').select2();
    $('#id_matpel').select2();
    $('#id_pendidikan').select2();
    document.getElementById("nip").value == 0;
    document.getElementById("tahun_lahir").value == 0;
    document.getElementById("sertified").value == 0;
});

if(document.getElementById("sertified").value == 1) {
  document.getElementById("sertified").checked = true;
} 

function setCBSertified() {
  if (document.getElementById("sertified").checked) {
    document.getElementById("sertified").value = 1;
  } else {
    document.getElementById("sertified").value = 0;
  }
}
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptcontent'} */
}
