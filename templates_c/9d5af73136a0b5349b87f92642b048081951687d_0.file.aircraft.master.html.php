<?php
/* Smarty version 3.1.32, created on 2018-11-06 10:16:19
  from 'C:\xampp\htdocs\bantingan\Views\Shared\aircraft.master.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be107830391c4_12901431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d5af73136a0b5349b87f92642b048081951687d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Shared\\aircraft.master.html',
      1 => 1541474178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be107830391c4_12901431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php if (($_smarty_tpl->tpl_vars['siteTitle']->value != $_smarty_tpl->tpl_vars['pageTitle']->value)) {
echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
 - <?php }
echo strtoupper($_smarty_tpl->tpl_vars['siteTitle']->value);?>
</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" 
      type="image/icon" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/iconamazon.png">

    <link rel="stylesheet" type="text/css" href="http://sagmicddev01/static/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/aircraft/stylesheets/theme.css">
    <link rel="stylesheet" href="http://sagmicddev01/static/font-awesome/4.7.0/css/font-awesome.css">

    <?php echo '<script'; ?>
 src="http://sagmicddev01/static/jquery/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
        .swal2-content {
            font-size: 1.6em !important;
        }
        .swal2-actions {
            font-size: 1.2em !important;
        }
        .datepicker {
            z-index: 999 !important;
        }
    </style>    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9770658785be10783015f32_63842183', 'scriptheader');
?>

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><span><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/logoadf.png"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">$currentUser->user_fullname <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Email : $currentUser->user_name@oto.co.id</a></li>
                <li><a href="#">NIK : $currentUser->user_nik</a></li>                
                <li role="separator" class="divider"></li>
                <li><a href="#">Role : $currentUser->page_role</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    


    
    <div class="sidebar-nav">
        <a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-amazon"></i> ADF Management<i class="fa fa-collapse"></i></a>
        <ul class="dashboard-menu nav nav-list collapse in">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
"><span class="fa fa-caret-right"></span> Home</a></li>
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/adf?all"><span class="fa fa-caret-right"></span> ADF List</a></li>
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/adf"><span class="fa fa-caret-right"></span> My ADF</a></li>
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/adf/formadf"><span class="fa fa-caret-right"></span> Create ADF</a></li>
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/adf/history"><span class="fa fa-caret-right"></span> History</a></li>
        </ul>

        <a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-users"></i> User Management<i class="fa fa-collapse"></i></a>
        <ul class="legal-menu nav nav-list collapse">
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement"><span class="fa fa-caret-right"></span> User Management</a></li>
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/pages"><span class="fa fa-caret-right"></span> Page Management</a></li>
            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/groups"><span class="fa fa-caret-right"></span> Group Management</a></li>
        </ul>

        <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
        <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>Faq</a>
    </div>
    

    
    <div class="content">
        
        <!--div class="header">            
            <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h1>
        </div-->
        
<?php if (isset($_smarty_tpl->tpl_vars['breadcrumb']->value)) {?>        
        <ul class="breadcrumb">            
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'label', false, 'url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>    
    <li><?php if ($_smarty_tpl->tpl_vars['url']->value != "#") {?><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['label']->value;
}?></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</li>
        </ul>
<?php } else { ?>        
        <ul class="breadcrumb"><li><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</li></ul>
<?php }?>

        <div class="container-fluid">
            <div class="row-fluid">
              <div class="maincontent">                
                <div class="block-body clearfix">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13163725295be107830314c8_87871572', 'bodycontent');
?>
   
                 </div>
              </div>

<div class="clearfix"></div>

<footer>    
    <hr>                    
    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p class="pull-right">ADF Online Alpha</p>

    <p>&copy; 2018 <a href="#">Woles Jahe</a></p>
</footer>
            </div>            

        </div>
    </div>

    <?php echo '<script'; ?>
 src="http://sagmicddev01/static/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- toastr -->
    <?php echo '<script'; ?>
 src="http://sagmicddev01/static/toaster/latest/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link href="http://sagmicddev01/static/toaster/latest/toastr.min.css" rel="stylesheet"/>
    <!-- datatables -->
    <?php echo '<script'; ?>
 src="http://sagmicddev01/static/datatables/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link href="http://sagmicddev01/static/datatables/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/> 
    <?php echo '<script'; ?>
 src="http://sagmicddev01/static/jquery/jquery.form.min.js" type="text/javascript"><?php echo '</script'; ?>
>  
    <!-- bantingan -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bantingan/css/bantingan.picker.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bantingan/js/bantingan.picker.js"><?php echo '</script'; ?>
>
    <!-- bantingan -->
    <link rel="stylesheet" type="text/css" href="http://sagmicddev01/static/bootstrap/bootstrap-taginput/bootstrap-taginput.css">
    <?php echo '<script'; ?>
 src="http://sagmicddev01/static/bootstrap/bootstrap-taginput/bootstrap-taginput.js"><?php echo '</script'; ?>
>
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
    <!-- swal -->
    <?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert2@7.22.2/dist/sweetalert2.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert2@7.22.2/dist/sweetalert2.min.css">
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <?php echo '<script'; ?>
 src="https://unpkg.com/promise-polyfill"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18431890805be10783035349_19502965', 'scriptfooter');
?>
  
  </body>
</html>


<?php }
/* {block 'scriptheader'} */
class Block_9770658785be10783015f32_63842183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptheader' => 
  array (
    0 => 'Block_9770658785be10783015f32_63842183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scriptheader'} */
/* {block 'bodycontent'} */
class Block_13163725295be107830314c8_87871572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_13163725295be107830314c8_87871572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptfooter'} */
class Block_18431890805be10783035349_19502965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_18431890805be10783035349_19502965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'scriptfooter'} */
}
