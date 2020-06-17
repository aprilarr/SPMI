<?php
/* Smarty version 3.1.32, created on 2020-02-02 21:03:46
  from 'D:\SKRIPSI KU\Framwork\Yoyoy\bantingan\bantingan\Views\Standartendik\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e36d6c2a39070_91768162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74257d6ce798a6824247b2b049187d9f9506ff5' => 
    array (
      0 => 'D:\\SKRIPSI KU\\Framwork\\Yoyoy\\bantingan\\bantingan\\Views\\Standartendik\\index.html',
      1 => 1580651043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36d6c2a39070_91768162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233695e36d6c25bc230_45714435', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195345e36d6c2a237e1_19237693', 'scriptcontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_233695e36d6c25bc230_45714435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_233695e36d6c25bc230_45714435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<!--/.col-->
<div class="mb-4">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#pemetaan" role="tab" aria-controls="pemetaan"><i class="icon-calculator"></i> Pemetaan & Evaluasi</a>
    </li>
    <!--<li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#rencanaPemenuhan" role="tab" aria-controls="rencanaPemenuhan"><i class="icon-basket-loaded"></i> Rencana Pemenuhan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#pelaksanaan" role="tab" aria-controls="pelaksanaan"><i class="icon-pie-chart"></i> Pelaksanaan Pemenuhan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#monev" role="tab" aria-controls="monev"><i class="icon-pie-chart"></i> Monitoring dan Evaluasi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#penyusunan" role="tab" aria-controls="penyusunan"><i class="icon-pie-chart"></i> Penyusunan Strategi Peningkatan</a>
    </li>-->
  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="pemetaan" role="tabpanel">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-header">
                  <select class="js-example-basic-single" name="id_indikator" id="idIndikator">
                  </select>
                  <?php if ($_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'kepsek' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'admin' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'tpmps6') {?>
                  <button type="submit" class="btn btn-sm btn-primary" id="btnAdd"><i class="fa fa-dot-circle-o"></i> Add Indikator</button>
                  <?php }?>
                </div>
                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Standar Indikator</th>
                      <th>Kondisi Saat Ini</th>
                      <th>Kelemahan</th>
                      <th>Kekuatan</th>
                      <th>Masalah</th>
                      <th>Akar Masalah</th>
                      <th>Rekomendasi</th>
                      <?php if ($_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'kepsek' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'admin' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'tpmps6') {?>
                      <th>Delete</th>
                      <?php }?>
                    </tr>
                  </thead>
                  <tbody>
                    <tbody>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatapemetaan']->value, 'itemdatapemetaan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatapemetaan']->value) {
?>	
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['no_indikator'];?>
</td>
                          <td>
                            <?php if ($_smarty_tpl->tpl_vars['itemdatapemetaan']->value['flag'] == "C" && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'kepsek' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'admin' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'tpmps6') {?>
                              <a href='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standartendik/form_pemetaan/<?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['nama_indikator'];?>
</a>
                            <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['nama_indikator'];?>

                            <?php }?>
                          </td>
                          <td><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['kondisi_saat_ini'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['kelemahan'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['kekuatan'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['masalah'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['akar_masalah'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['rekomendasi'];?>
</td>
                          <?php if ($_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'kepsek' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'admin' && $_smarty_tpl->tpl_vars['currentuser']->value->page_role != 'tpmps6') {?>
                          <td>
				              <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standartendik/delIndikator/<?php echo $_smarty_tpl->tpl_vars['itemdatapemetaan']->value['id'];?>
" class="fa fa-times" onclick="return confirm('Are you sure you want to delete this data?')"></a>
				          </td>
				          <?php }?>
                        </tr>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
              </div>  
            </div>
          </div>
        </div>
        <!--/.col-->
      </div>
    </div>
    <!--<div class="tab-pane" id="rencanaPemenuhan" role="tabpanel">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Standar Indikator</th>
                    <th>Rekomendasi</th>
                    <th>Program</th>
                    <th>Kegiatan</th>
                    <th>Volume</th>
                    <th>Kebutuhan Biaya</th>
                    <th>Sumber Daya</th>
                    <th>Skala Prioritas T1</th>
                    <th>Skala Prioritas T2</th>
                    <th>Skala Prioritas T3</th>
                    <th>Skala Prioritas T4</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatarencanapemenuhan']->value, 'itemdatarencanapemenuhan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value) {
?>	
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['no_indikator'];?>
</td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['flag'] == "C" && isset($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['rekomendasi'])) {?>
                          <a href='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standartendik/form_rencana_pemenuhan/<?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['nama_indikator'];?>
</a>
                        <?php } else { ?>
                          <?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['nama_indikator'];?>

                        <?php }?>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['rekomendasi'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['program'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['kegiatan'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['volume'];?>
</td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['flag'] == "C") {?>
                          <?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['kebutuhan_biaya'];?>

                        <?php }?>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['sumber_daya'];?>
</td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['flag'] == "C") {?>
                          <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['sk_1'] == "1") {?>
                            V
                          <?php }?>
                        <?php }?>
                      </td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['flag'] == "C") {?>
                            <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['sk_2'] == "1") {?>
                              V
                            <?php }?>
                        <?php }?>
                      </td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['flag'] == "C") {?>
                          <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['sk_3'] == "1") {?>
                            V
                          <?php }?>
                        <?php }?>
                      </td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['flag'] == "C") {?>
                          <?php if ($_smarty_tpl->tpl_vars['itemdatarencanapemenuhan']->value['sk_4'] == "1") {?>
                            V
                          <?php }?>
                        <?php }?>
                      </td>
                    </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
              <nav>
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>-->
        <!--/.col-->
      <!--</div>
    </div>
    <div class="tab-pane" id="pelaksanaan" role="tabpanel">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-striped table-sm">
              <thead>
                  <tr>
                    <th>No.</th>
                    <th>Standar Indikator</th>
                    <th>Program</th>
                    <th>Kegiatan</th>
                    <th>Input</th>
                    <th>Proses</th>
                    <th>Output</th>
                    <th>Outcome</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatapelaksanaanpemenuhan']->value, 'itemdatapelaksanaanpemenuhan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value) {
?>	
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['no_indikator'];?>
</td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['flag'] == "C" && isset($_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['program']) && isset($_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['kegiatan'])) {?>
                          <a href='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standartendik/form_pelaksanaan_pemenuhan/<?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['nama_indikator'];?>
</a>
                        <?php } else { ?>
                          <?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['nama_indikator'];?>

                        <?php }?>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['program'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['kegiatan'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['input'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['proses'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['output'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatapelaksanaanpemenuhan']->value['outcome'];?>
</td>
                    </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
              <nav>
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>-->
        <!--/.col-->
      <!--</div>
    </div>
    <div class="tab-pane" id="monev" role="tabpanel">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Standar Indikator</th>
                    <th>Program</th>
                    <th>Kegiatan</th>
                    <th>Koordinator</th>
                    <th>Waktu Pelaksaan</th>
                    <th>Input</th>
                    <th>Proses</th>
                    <th>Output</th>
                    <th>Outcome</th>
                    <th>Petugas Monev</th>
                    <th>Waktu Monev</th>
                    <th>Kesimpulan dan Rekomendasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatamonev']->value, 'itemdatamonev');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatamonev']->value) {
?>	
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['no_indikator'];?>
</td>
                      <td>
                          <?php if ($_smarty_tpl->tpl_vars['itemdatamonev']->value['flag'] == "C" && isset($_smarty_tpl->tpl_vars['itemdatamonev']->value['input']) && isset($_smarty_tpl->tpl_vars['itemdatamonev']->value['proses']) && isset($_smarty_tpl->tpl_vars['itemdatamonev']->value['output']) && isset($_smarty_tpl->tpl_vars['itemdatamonev']->value['outcome'])) {?>
                          <a href='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standartendik/form_monev/<?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['nama_indikator'];?>
</a>
                        <?php } else { ?>
                          <?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['nama_indikator'];?>

                        <?php }?>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['program'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['kegiatan'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['koordinator'];?>
</td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatamonev']->value['flag'] == "C") {?>
                          <?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['waktu_pelaksanaan'];?>

                        <?php }?>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['input'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['proses'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['output'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['outcome'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['petugas_monev'];?>
</td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatamonev']->value['flag'] == "C") {?>
                          <?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['waktu_monev'];?>

                        <?php }?>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatamonev']->value['kesimpulan'];?>
</td>
                    </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
              <nav>
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>-->
        <!--/.col-->
      <!--</div>
    </div>
    <div class="tab-pane" id="penyusunan" role="tabpanel">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Standar Indikator</th>
                    <th>Program</th>
                    <th>Kegiatan</th>
                    <th>Input</th>
                    <th>Proses</th>
                    <th>Output</th>
                    <th>Outcome</th>
                    <th>Kesimpulan dan Hasil Monev</th>
                    <th>Penyusunan Strategi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdatastrategi']->value, 'itemdatastrategi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdatastrategi']->value) {
?>	
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['no_indikator'];?>
</td>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['itemdatastrategi']->value['flag'] == "C" && isset($_smarty_tpl->tpl_vars['itemdatastrategi']->value['kesimpulan'])) {?>
                          <a href='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/standartendik/form_strategi/<?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['nama_indikator'];?>
</a>
                        <?php } else { ?>
                          <?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['nama_indikator'];?>

                        <?php }?>
                      </td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['program'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['kegiatan'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['input'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['proses'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['output'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['outcome'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['kesimpulan'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['itemdatastrategi']->value['strategi_peningkatan'];?>
</td>
                    </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
              <nav>
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>-->
        <!--/.col-->
      <!--</div>
    </div>-->
  </div>
</div>
<!--/.col-->
<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptcontent'} */
class Block_195345e36d6c2a237e1_19237693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_195345e36d6c2a237e1_19237693',
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
$(document).ready(function()
{ 
  $("#btnAdd").click(function() {
    var idIndikator = $("#idIndikator").val();

    var formData = {
      id_indikator: idIndikator
    }
    
    $.ajax({ 
      url: baseUrl + '/standartendik/addIndikator',
      data: formData,
      type: 'POST',
      success: function(result)
      {
        //table.ajax.reload();
        alert("Data indikator berhasil ditambahkan!");

        location.reload();

        $('.js-example-basic-single').empty();
        $('.js-example-basic-single').select2({
          width: '85%',
          ajax: {
            url: baseUrl + '/standartendik/getIndikator',
            dataType: 'json'
            // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
          }
        });
      }
    });
  });

  $('.js-example-basic-single').select2({
    width: '85%',
    ajax: {
      url: baseUrl + '/standartendik/getIndikator',
      dataType: 'json'
      // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
    }
  });

});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptcontent'} */
}
