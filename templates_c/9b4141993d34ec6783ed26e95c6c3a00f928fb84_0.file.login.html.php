<?php
/* Smarty version 3.1.32, created on 2019-12-15 22:57:59
  from 'E:\Yoyoy\bantingan\bantingan\Views\Home\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df658079ba964_25191056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b4141993d34ec6783ed26e95c6c3a00f928fb84' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Home\\login.html',
      1 => 1576425476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df658079ba964_25191056 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

  <title><?php echo $_smarty_tpl->tpl_vars['siteTitle']->value;?>
</title>

  <!-- Icons -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/vendors/css/simple-line-icons.min.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/css/style.css" rel="stylesheet">

  <!-- Styles required by this views -->

</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <form class="card-body" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/home/login" method="POST">
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account </p>
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="user_name" >
              </div>
              <div class="input-group mb-4">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="user_password" >
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary px-4" name="login" value="Login">Login</button>
                </div>
                <div class="col-6 text-right">
                	<?php if (isset($_smarty_tpl->tpl_vars['returnmessage']->value)) {?>
	                <div class="help-block"><strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['returnmessage']->value;?>
</strong></div>
	                <button type="button" class="btn btn-link px-0">Forgot password?</button>
                <?php }?>                  
                </div>
              </div>
            </form>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/coreui2/img/ybb.png" style="width:300px;height:240px;">                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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

</body>
</html><?php }
}
