<?php
/* Smarty version 3.1.32, created on 2019-11-03 10:21:10
  from 'E:\Novi Lagi Belajar\bantingan\bantingan\Views\Shared\core2.master.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dbe47a6e850b2_12820433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0039fc12e08da6415197f79b89d151f29fd57169' => 
    array (
      0 => 'E:\\Novi Lagi Belajar\\bantingan\\bantingan\\Views\\Shared\\core2.master.html',
      1 => 1572751267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbe47a6e850b2_12820433 (Smarty_Internal_Template $_smarty_tpl) {
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
   <title>CoreUI - Open Source Bootstrap Admin Template</title>
 
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
     <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
       <span class="navbar-toggler-icon"></span>
     </button>
     <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"></a>
     <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
       <span class="navbar-toggler-icon"></span>
     </button>
 
     <ul class="nav navbar-nav d-md-down-none">
       <li class="nav-item px-3">
         <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/dashboard">Dashboard</a>
       </li>
       <li class="nav-item px-3">
         <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/test">Users</a>
       </li>
       <li class="nav-item px-3">
         <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#">Settings</a>
       </li>
     </ul>
     <ul class="nav navbar-nav ml-auto">
       <li class="nav-item d-md-down-none">
         <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
       </li>
       <li class="nav-item d-md-down-none">
         <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-list"></i></a>
       </li>
       <li class="nav-item d-md-down-none">
         <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-location-pin"></i></a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#" role="button" aria-haspopup="true" aria-expanded="false">
           <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
         </a>
         <div class="dropdown-menu dropdown-menu-right">
           <div class="dropdown-header text-center">
             <strong>Account</strong>
           </div>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
           <div class="dropdown-header text-center">
             <strong>Settings</strong>
           </div>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-user"></i> Profile</a>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-wrench"></i> Settings</a>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
           <div class="divider"></div>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-shield"></i> Lock Account</a>
           <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="fa fa-lock"></i> Logout</a>
         </div>
       </li>
     </ul>
     <button class="navbar-toggler aside-menu-toggler" type="button">
       <span class="navbar-toggler-icon"></span>
     </button>
 
   </header>
 
   <div class="app-body">    
     <div class="sidebar">
       <div class="nano">
       <div class="nano-content">
       <nav class="sidebar-nav">
         <ul class="nav">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/index.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
           </li>
 
           <li class="nav-title">
             UI Elements
           </li>
           <li class="nav-item nav-dropdown">
             <a class="nav-link nav-dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-puzzle"></i> Standar Isi</a>
             <ul class="nav-dropdown-items">
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-buttons.html"><i class="icon-puzzle"></i> Buttons</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-cards.html"><i class="icon-puzzle"></i> Cards</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-forms.html"><i class="icon-puzzle"></i> Forms</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-modals.html"><i class="icon-puzzle"></i> Modals</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-switches.html"><i class="icon-puzzle"></i> Switches</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-tables.html"><i class="icon-puzzle"></i> Tables</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/components-tabs.html"><i class="icon-puzzle"></i> Tabs</a>
               </li>
             </ul>
           </li>
           <li class="nav-item nav-dropdown">
             <a class="nav-link nav-dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-star"></i> Icons</a>
             <ul class="nav-dropdown-items">
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/icons-font-awesome.html"><i class="icon-star"></i> Font Awesome <span class="badge badge-secondary">4.7</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
               </li>
             </ul>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/widgets.html"><i class="icon-calculator"></i> Widgets <span class="badge badge-primary">NEW</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/charts.html"><i class="icon-pie-chart"></i> Charts</a>
           </li>
           <li class="divider"></li>
           <li class="nav-title">
             Extras
           </li>
           <li class="nav-item nav-dropdown">
             <a class="nav-link nav-dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-star"></i> Pages</a>
             <ul class="nav-dropdown-items">
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
               </li>
             </ul>
           </li>
           <li class="nav-item mt-auto">
             <a class="nav-link nav-link-success" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/http://coreui.io/" target="_top"><i class="icon-cloud-download"></i> Download CoreUI</a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/http://coreui.io/pro/" target="_top"><i class="icon-layers"></i> Try CoreUI <strong>PRO</strong></a>
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
         <li class="breadcrumb-item">Home</li>
         <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#">Admin</a></li>
         <li class="breadcrumb-item active">Dashboard</li>
 
         <!-- Breadcrumb Menu-->
         <li class="breadcrumb-menu d-md-down-none">
           <div class="btn-group" role="group" aria-label="Button group">
             <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-speech"></i></a>
             <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
             <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#"><i class="icon-settings"></i> &nbsp;Settings</a>
           </div>
         </li>
       </ol>
 
       <div class="container-fluid">
 
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138525dbe47a6e5d600_82651390', 'bodycontent');
?>

 
       </div>
       <!-- /.conainer-fluid -->
     </div>
   </div>
     </main>
 
     <aside class="aside-menu">
       <ul class="nav nav-tabs" role="tablist">
         <li class="nav-item">
           <a class="nav-link active" data-toggle="tab" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#timeline" role="tab"><i class="icon-list"></i></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" data-toggle="tab" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#messages" role="tab"><i class="icon-speech"></i></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" data-toggle="tab" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/#settings" role="tab"><i class="icon-settings"></i></a>
         </li>
       </ul>
 
       <!-- Tab panes -->
       <div class="tab-content">
         <div class="tab-pane active" id="timeline" role="tabpanel">
           <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
             <small><b>Today</b></small>
           </div>
           <hr class="transparent mx-3 my-0">
           <div class="callout callout-warning m-0 py-3">
             <div class="avatar float-right">
               <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
             </div>
             <div>Meeting with
               <strong>Lucas</strong>
             </div>
             <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
             <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
           </div>
           <hr class="mx-3 my-0">
           <div class="callout callout-info m-0 py-3">
             <div class="avatar float-right">
               <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
             </div>
             <div>Skype with
               <strong>Megan</strong>
             </div>
             <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
             <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line </small>
           </div>
           <hr class="transparent mx-3 my-0">
           <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
             <small><b>Tomorrow</b></small>
           </div>
           <hr class="transparent mx-3 my-0">
           <div class="callout callout-danger m-0 py-3">
             <div>New UI Project -
               <strong>deadline</strong>
             </div>
             <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
             <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
             <div class="avatars-stack mt-2">
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
             </div>
           </div>
           <hr class="mx-3 my-0">
           <div class="callout callout-success m-0 py-3">
             <div>
               <strong>#10 Startups.Garden</strong> Meetup</div>
             <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
             <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
           </div>
           <hr class="mx-3 my-0">
           <div class="callout callout-primary m-0 py-3">
             <div>
               <strong>Team meeting</strong>
             </div>
             <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
             <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
             <div class="avatars-stack mt-2">
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
               <div class="avatar avatar-xs">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
               </div>
             </div>
           </div>
           <hr class="mx-3 my-0">
         </div>
         <div class="tab-pane p-3" id="messages" role="tabpanel">
           <div class="message">
             <div class="py-3 pb-5 mr-3 float-left">
               <div class="avatar">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                 <span class="avatar-status badge-success"></span>
               </div>
             </div>
             <div>
               <small class="text-muted">Lukasz Holeczek</small>
               <small class="text-muted float-right mt-1">1:52 PM</small>
             </div>
             <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
             <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
           </div>
           <hr>
           <div class="message">
             <div class="py-3 pb-5 mr-3 float-left">
               <div class="avatar">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                 <span class="avatar-status badge-success"></span>
               </div>
             </div>
             <div>
               <small class="text-muted">Lukasz Holeczek</small>
               <small class="text-muted float-right mt-1">1:52 PM</small>
             </div>
             <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
             <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
           </div>
           <hr>
           <div class="message">
             <div class="py-3 pb-5 mr-3 float-left">
               <div class="avatar">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                 <span class="avatar-status badge-success"></span>
               </div>
             </div>
             <div>
               <small class="text-muted">Lukasz Holeczek</small>
               <small class="text-muted float-right mt-1">1:52 PM</small>
             </div>
             <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
             <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
           </div>
           <hr>
           <div class="message">
             <div class="py-3 pb-5 mr-3 float-left">
               <div class="avatar">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                 <span class="avatar-status badge-success"></span>
               </div>
             </div>
             <div>
               <small class="text-muted">Lukasz Holeczek</small>
               <small class="text-muted float-right mt-1">1:52 PM</small>
             </div>
             <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
             <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
           </div>
           <hr>
           <div class="message">
             <div class="py-3 pb-5 mr-3 float-left">
               <div class="avatar">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                 <span class="avatar-status badge-success"></span>
               </div>
             </div>
             <div>
               <small class="text-muted">Lukasz Holeczek</small>
               <small class="text-muted float-right mt-1">1:52 PM</small>
             </div>
             <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
             <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
           </div>
         </div>
         <div class="tab-pane p-3" id="settings" role="tabpanel">
           <h6>Settings</h6>
 
           <div class="aside-options">
             <div class="clearfix mt-4">
               <small><b>Option 1</b></small>
               <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                 <input type="checkbox" class="switch-input" checked="">
                 <span class="switch-label" data-on="On" data-off="Off"></span>
                 <span class="switch-handle"></span>
               </label>
             </div>
             <div>
               <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
             </div>
           </div>
 
           <div class="aside-options">
             <div class="clearfix mt-3">
               <small><b>Option 2</b></small>
               <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                 <input type="checkbox" class="switch-input">
                 <span class="switch-label" data-on="On" data-off="Off"></span>
                 <span class="switch-handle"></span>
               </label>
             </div>
             <div>
               <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
             </div>
           </div>
 
           <div class="aside-options">
             <div class="clearfix mt-3">
               <small><b>Option 3</b></small>
               <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                 <input type="checkbox" class="switch-input">
                 <span class="switch-label" data-on="On" data-off="Off"></span>
                 <span class="switch-handle"></span>
               </label>
             </div>
           </div>
 
           <div class="aside-options">
             <div class="clearfix mt-3">
               <small><b>Option 4</b></small>
               <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                 <input type="checkbox" class="switch-input" checked="">
                 <span class="switch-label" data-on="On" data-off="Off"></span>
                 <span class="switch-handle"></span>
               </label>
             </div>
           </div>
 
           <hr>
           <h6>System Utilization</h6>
 
           <div class="text-uppercase mb-1 mt-4">
             <small><b>CPU Usage</b></small>
           </div>
           <div class="progress progress-xs">
             <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
           </div>
           <small class="text-muted">348 Processes. 1/4 Cores.</small>
 
           <div class="text-uppercase mb-1 mt-2">
             <small><b>Memory Usage</b></small>
           </div>
           <div class="progress progress-xs">
             <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
           </div>
           <small class="text-muted">11444GB/16384MB</small>
 
           <div class="text-uppercase mb-1 mt-2">
             <small><b>SSD 1 Usage</b></small>
           </div>
           <div class="progress progress-xs">
             <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
           </div>
           <small class="text-muted">243GB/256GB</small>
 
           <div class="text-uppercase mb-1 mt-2">
             <small><b>SSD 2 Usage</b></small>
           </div>
           <div class="progress progress-xs">
             <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
           </div>
           <small class="text-muted">25GB/256GB</small>
         </div>
       </div>
     </aside>
 
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
 
   <!-- Custom scripts required by this view -->
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/js/views/main.js"><?php echo '</script'; ?>
>
 
 <?php echo '<script'; ?>
 type="text/javascript">
   $(".nano").nanoScroller();
 <?php echo '</script'; ?>
>
 </body>
 </html><?php }
/* {block 'bodycontent'} */
class Block_138525dbe47a6e5d600_82651390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_138525dbe47a6e5d600_82651390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bodycontent'} */
}
