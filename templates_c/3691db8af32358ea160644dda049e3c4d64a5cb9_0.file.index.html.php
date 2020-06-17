<?php
/* Smarty version 3.1.32, created on 2020-02-01 21:50:28
  from 'D:\Yoyoy\bantingan\bantingan\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e359034d730a9_65771463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3691db8af32358ea160644dda049e3c4d64a5cb9' => 
    array (
      0 => 'D:\\Yoyoy\\bantingan\\bantingan\\Views\\Home\\index.html',
      1 => 1572751676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e359034d730a9_65771463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!--
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234715e359034d67971_28531454', 'bodycontent');
?>
-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30045e359034d6f269_90352552', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_234715e359034d67971_28531454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_234715e359034d67971_28531454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<?php echo $_smarty_tpl->tpl_vars['hellomessage']->value;?>

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodycontent'} */
class Block_30045e359034d6f269_90352552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_30045e359034d6f269_90352552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
      <meta charset="UTF-8">
      <title> Login - sistem penjaminan mutu internal</title>
            <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
            <link rel="stylesheet" href="../assets/css/bootstrap.css">
            <link rel="stylesheet" href="../assets/css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">		
            <?php echo '<script'; ?>
 src="../assets/js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../assets/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
            
            <link rel="shortcut icon" href="../images/ybb.png">
    
    </head>
    <body>
        <div class="loading"></div>
        <form method="post" name="login" action="../koneksi/cek_login.php">
            <div class="login-form">
                <div >
                    <img src="../images/ybb.png" height="240" width="300 alt="" class="gambar">
                </div>
                <div class="form-group">			
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <i class="fa fa-user"></i>
                </div>
    
                <div class="form-group log-status">				
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <i class="fa fa-lock"></i>
                </div>	
                <div class="form-group log-status">				
                    <input type="password" class="form-control" placeholder="Key" name="level_key">
                    <i class="fa fa-lock"></i>
                </div>						
                    
                <span class="alert">Invalid Credentials</span>
                <a class="link" href="register.php">Registrasi</a>						
    
                <td><input type="submit" class="log-btn" name="submit" value="Log In">
                <br><br>
                    <!-- <a class="link" href="../index.php">← Kembali /a> -->
                    <!-- <a class="link" href="daftar.php">DAFTAR</a></td> -->
                    
                <?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
>	
            </div>	
        </form>
    
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(window).load(function() {
             $(".loading").fadeOut("slow");
            });
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bodycontent'} */
}
