<?php
/* Smarty version 3.1.32, created on 2019-12-15 21:12:05
  from 'E:\Yoyoy\bantingan\bantingan\Views\Home\dashboard.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df63f355c0e80_10571024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae87a95daa5ca0e925de5891a2bba045532978a0' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Home\\dashboard.html',
      1 => 1576419121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df63f355c0e80_10571024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_301525df63f355bdff8_31399662', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_301525df63f355bdff8_31399662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_301525df63f355bdff8_31399662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div class="animated fadeIn">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-primary">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Kompetensi Lulusan</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper px-3" style="height:70px;">
            <canvas id="card-chart1" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-info">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Isi</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper px-3" style="height:70px;">
            <canvas id="card-chart2" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-warning">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Proses</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper" style="height:70px;">
            <canvas id="card-chart3" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-danger">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Penilaian</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper px-3" style="height:70px;">
            <canvas id="card-chart4" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-primary">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Pendidik & Tenaga Kependidikan</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper px-3" style="height:70px;">
            <canvas id="card-chart1" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-info">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Sarana & Prasarana</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper px-3" style="height:70px;">
            <canvas id="card-chart2" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-warning">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Pengelolaan</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper" style="height:70px;">
            <canvas id="card-chart3" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card text-white bg-danger">
          <div class="card-body pb-0">
            <h4 class="mb-0">Standar Pembiayaan</h4>
            <br></br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Kondisi Saat Ini</th>
                <th>Kondisi Ideal</th>
              </tr>
              <tbody>
                <tr>
                  <td><p>Members online</p></td>
                  <td><p>Members online</p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="chart-wrapper px-3" style="height:70px;">
            <canvas id="card-chart4" class="chart" height="70"></canvas>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->
  </div>
<?php
}
}
/* {/block 'bodycontent'} */
}
