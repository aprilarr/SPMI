<?php
/* Smarty version 3.1.32, created on 2019-12-13 17:15:10
  from 'D:\Master\Yoyoy\bantingan\bantingan\Views\Shared\core2.master.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df364ae715526_23248988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bbcc2579e0ad77d09d4f949cc911174d19021a3' => 
    array (
      0 => 'D:\\Master\\Yoyoy\\bantingan\\bantingan\\Views\\Shared\\core2.master.html',
      1 => 1576232108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df364ae715526_23248988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.6
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
   <meta name="author" content="Łukasz Holeczek">
   <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
   <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/favicon.png">
   <title>SPMI - YBB</title>
 
   <!-- Icons -->
   <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/css/font-awesome.min.css" rel="stylesheet">
   <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/css/simple-line-icons.min.css" rel="stylesheet">
 
   <!-- Main styles for this application -->
   <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/css/style.css" rel="stylesheet">
   <!-- Styles required by this views -->
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/nanoscroller/nanoscroller.css">
 
 </head>
 
 <!-- BODY options, add following classes to body to change options
 
 // Header options
 1. '.header-fixed'					- Fixed Header
 
 // Brand options
 1. '.brand-minimized'       - Minimized brand (Only symbol)
 
 // Sidebar options
 1. '.sidebar-fixed'					- Fixed Sidebar
 2. '.sidebar-hidden'				- Hidden Sidebar
 3. '.sidebar-off-canvas'		- Off Canvas Sidebar
 4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
 5. '.sidebar-compact'			  - Compact Sidebar
 
 // Aside options
 1. '.aside-menu-fixed'			- Fixed Aside Menu
 2. '.aside-menu-hidden'			- Hidden Aside Menu
 3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu
 
 // Breadcrumb options
 1. '.breadcrumb-fixed'			- Fixed Breadcrumb
 
 // Footer options
 1. '.footer-fixed'					- Fixed footer
 
 -->
 
 <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
   <header class="app-header navbar">
     <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"></a>
 
     <ul class="nav navbar-nav d-md-down-none">
       <li class="nav-item px-3 font-weight-bold font-xl">
         <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/dashboard">Sistem Informasi Penjaminan Mutu Internal - SMP YBB</a>
       </li>
     </ul>
     <ul class="nav navbar-nav ml-auto">
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#" role="button" aria-haspopup="true" aria-expanded="false"><?php if ((isset($_smarty_tpl->tpl_vars['currentuser']->value->user_name))) {
echo $_smarty_tpl->tpl_vars['currentuser']->value->user_name;?>
 (<?php echo $_smarty_tpl->tpl_vars['currentuser']->value->page_role;?>
)<?php }?>
         </a>
         <div class="dropdown-menu dropdown-menu-right">
           <div class="dropdown-header text-center">
             <strong>Account</strong>
           </div>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-user"></i> Profile</a>
           <div class="divider"></div>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-lock"></i> Logout</a>
         </div>
       </li>
     </ul>
 
   </header>
 
   <div class="app-body">    
     <div class="sidebar">
       <div class="nano">
       <div class="nano-content">
       <nav class="sidebar-nav">
         <ul class="nav">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/dashboard"><i class="icon-speedometer"></i> Home</a>
            </li>
            <li class="nav-title">
            Standar Indikator Mutu
          </li>
          <?php if ((isset($_smarty_tpl->tpl_vars['menucontent']->value))) {
echo $_smarty_tpl->tpl_vars['menucontent']->value;
}?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/skl"><i class="icon-list"></i> Standar Kompetensi Lulusan</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/isi"><i class="icon-list"></i> Standar Isi</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/proses"><i class="icon-list"></i> Standar Proses</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/penilaian"><i class="icon-list"></i> Standar Penilaian</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/tendik"><i class="icon-list"></i> Standar Pendidik dan Tenaga Kependidikan</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/sapras"><i class="icon-list"></i> Standar Sarana dan Prasarana</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/pengelolaan"><i class="icon-list"></i> Standar Pengelolaan</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/pembiayaan"><i class="icon-list"></i> Standar Pembiayaan</a>
           </li>
           <li class="divider"></li>
           <li class="nav-title">
             Master Data
           </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/master_indikator"><i class="icon-star"></i> Master Indikator</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/master_guru"><i class="icon-star"></i> Master Guru</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/master_siswa"><i class="icon-star"></i> Master Siswa</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/master_matpel"><i class="icon-star"></i> Master Mata Pelajaran</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/master_jabatan"><i class="icon-star"></i> Master Jabatan</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/master_pendidikan"><i class="icon-star"></i> Master Pendidikan</a>
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/master_default"><i class="icon-star"></i> Master Default</a>
          </li>
 
         </ul>
       </nav>
       <button class="sidebar-minimizer brand-minimizer" type="button"></button>
       </div>
       </div>
     </div>
 
     <!-- Main content -->
     <main class="main">
       <div class="nano">
       <div class="nano-content">
 
       <!-- Breadcrumb -->
       <ol class="breadcrumb">
       </ol>
 
       <div class="container-fluid">
 
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69865df364ae6fac69_40916004', 'bodycontent');
?>

 
       </div>
       <!-- /.conainer-fluid -->
     </div>
   </div>
     </main> 
   </div>
 
   <footer class="app-footer">
     <span><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/http://coreui.io">CoreUI</a> © 2017 BantinganLabs.</span>
     <span class="ml-auto">Powered by <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/http://coreui.io">CoreUI</a></span>
   </footer>
 
   <!-- Bootstrap and necessary plugins -->
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/js/jquery.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/js/popper.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/js/bootstrap.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/js/pace.min.js"><?php echo '</script'; ?>
>
 
   <!-- Plugins and scripts required by all views -->
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/js/Chart.min.js"><?php echo '</script'; ?>
>
 
   <!-- CoreUI main scripts -->
 
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/js/app.js"><?php echo '</script'; ?>
>
 
   <!-- Plugins and scripts required by this views -->
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
>
 
 
   <?php echo '<script'; ?>
 type="text/javascript">
    $(".nano").nanoScroller();
    var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";
  <?php echo '</script'; ?>
>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_232275df364ae70eab0_81560654', 'scriptcontent');
?>

 </body>
 </html><?php }
/* {block 'bodycontent'} */
class Block_69865df364ae6fac69_40916004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_69865df364ae6fac69_40916004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptcontent'} */
class Block_232275df364ae70eab0_81560654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptcontent' => 
  array (
    0 => 'Block_232275df364ae70eab0_81560654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scriptcontent'} */
}
