<?php
/* Smarty version 3.1.32, created on 2018-11-23 11:08:16
  from 'C:\xampp\htdocs\bantingan\Views\Usermanagement\userform.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf77d3049e895_92330322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa863959925c629e22f3b48bf155f773b0a067b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Usermanagement\\userform.html',
      1 => 1542946093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf77d3049e895_92330322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18407962255bf77d30492d13_69609031', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5142015985bf77d3049aa15_85542151', 'scriptblock');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_18407962255bf77d30492d13_69609031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_18407962255bf77d30492d13_69609031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div class="col col-lg-8">
<div class="card">
    <div class="card-header">
      <strong>User Form</strong>      
    </div>
    <div class="card-body">
      <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/usersave" method="post" enctype="multipart/form-data" class="form-horizontal" id="frmUser">        
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="user_name">Email</label>
          <div class="col-md-9">
            <input type="email" id="user_name" name="user_name" class="form-control" placeholder="Email Address as Username">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="user_fullname">User Fullname</label>
          <div class="col-md-9">
            <input type="text" id="user_fullname" name="user_fullname" class="form-control" placeholder="User Full Name">
          </div>
        </div>        
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="user_password_hash">Password</label>
          <div class="col-md-9">
            <input type="password" id="user_password_hash" name="user_password_hash" class="form-control" placeholder="Password">
            <span class="help-block">Please enter minimum 7 character</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="user_password_repeat">Repeat Password</label>
          <div class="col-md-9">
            <input type="password" id="user_password_repeat" name="user_password_repeat" class="form-control" placeholder="Password">
          </div>
        </div>        
      </form>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-sm btn-primary btnSubmit"><i class="fa fa-dot-circle-o"></i> Submit</button>
      <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
    </div>
  </div>
</div>  
<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptblock'} */
class Block_5142015985bf77d3049aa15_85542151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptblock' => 
  array (
    0 => 'Block_5142015985bf77d3049aa15_85542151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(".btnSubmit").click(function(){
		$("#frmUser").submit();
	});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptblock'} */
}
