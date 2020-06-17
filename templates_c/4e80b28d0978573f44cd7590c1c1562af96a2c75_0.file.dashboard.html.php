<?php
/* Smarty version 3.1.32, created on 2020-02-02 21:04:04
  from 'D:\SKRIPSI KU\Framwork\Yoyoy\bantingan\bantingan\Views\Home\dashboard.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e36d6d42205a6_27399237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e80b28d0978573f44cd7590c1c1562af96a2c75' => 
    array (
      0 => 'D:\\SKRIPSI KU\\Framwork\\Yoyoy\\bantingan\\bantingan\\Views\\Home\\dashboard.html',
      1 => 1580568542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36d6d42205a6_27399237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137075e36d6d4219db1_71638951', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_137075e36d6d4219db1_71638951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_137075e36d6d4219db1_71638951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
  <div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-12">
          <div class="card text-white bg-primary">
            <div class="card-body pb-0">
              <h4 class="mb-0">Standar Pendidik & Tenaga Kependidikan</h4>
              <br></br>
              <div class="card">
                <div class="card-body">
                  <div class="chart-wrapper">
                    <canvas id="canvas-0"></canvas>
                  </div>
                </div>
              </div>
              <table class="table table-responsive-sm" id="table-tendik0">
                <tr>
                  <th>No. Indikator</th>
                  <th>Nama Indikator</th>
                  <th>Kondisi Saat Ini</th>
                  <th>Kondisi Ideal</th>
                  <th>Masalah</th>
                  <th>Akar Masalah</th>
                  <th>Rekomendasi</th>
                </tr>
              </table>
              <br></br>
              <div class="card">
                <div class="card-body">
                  <div class="chart-wrapper">
                    <canvas id="canvas-pendidikan"></canvas>
                  </div>
                </div>
              </div>
              <br></br>
              <div class="card">
                <div class="card-body">
                  <div class="chart-wrapper">
                    <canvas id="canvas-sertifikasi"></canvas>
                  </div>
                </div>
              </div>
              <br></br>
              <div class="card">
                <div class="card-body">
                  <div class="chart-wrapper">
                    <canvas id="canvas-pedagogik"></canvas>
                  </div>
                </div>
              </div>
              <br></br>
              <div class="card">
                <div class="card-body">
                  <div class="chart-wrapper">
                    <canvas id="canvas-profesional"></canvas>
                  </div>
                </div>
              </div>
              <br></br>
			  <table class="table table-responsive-sm" id="table-tendik">
			    <tr>
			      <th>No. Indikator</th>
			      <th>Nama Indikator</th>
			      <th>Sesuai</th>
			      <th>Tidak Sesuai</th>
			    </tr>
			  </table>
              <br></br>
              <div class="card">
                <div class="card-body">
                  <div class="chart-wrapper">
                    <canvas id="canvas-1"></canvas>
                  </div>
                </div>
              </div>
              <table class="table table-responsive-sm" id="table-tendik1">
                <tr>
                  <th>No. Indikator</th>
                  <th>Nama Indikator</th>
                  <th>Kondisi Saat Ini</th>
                  <th>Kondisi Ideal</th>
                  <th>Masalah</th>
                  <th>Akar Masalah</th>
                  <th>Rekomendasi</th>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-success">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Sarana & Prasarana</h4>
			<br></br>
            <table class="table table-responsive-sm" id="table-sapras">
              <tr>
                  <th>No. Indikator</th>
                  <th>Nama Indikator</th>
                  <th>Sesuai</th>
                  <th>Tidak Sesuai</th>
                </tr>
            </table>
            <br></br>
            <div class="card">
              <div class="card-body">
                <div class="chart-wrapper">
                  <canvas id="canvas-2"></canvas>
                </div>
              </div>
            </div>
            <table class="table table-responsive-sm" id="table-sapras-det">
              <tr>
                  <th>No. Indikator</th>
                  <th>Nama Indikator</th>
                  <th>Kondisi Saat Ini</th>
                  <th>Kondisi Ideal</th>
                  <th>Masalah</th>
                  <th>Akar Masalah</th>
                  <th>Rekomendasi</th>
                </tr>
            </table>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div> 
  </div>
<?php
}
}
/* {/block 'bodycontent'} */
}
