<?php
/* Smarty version 3.1.32, created on 2019-12-01 14:22:15
  from 'E:\Yoyoy\bantingan\bantingan\Views\Belajar\formregister.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de36a27670a49_51820005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fda093122f532794b6a565cca22a8b92c8132a9' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Belajar\\formregister.html',
      1 => 1575184931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de36a27670a49_51820005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146725de36a2760b433_28829055', 'bodycontent');
?>
              <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_146725de36a2760b433_28829055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_146725de36a2760b433_28829055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
                <div class="card-header">
                  <strong>Basic Form</strong>
                  Elements
                </div>
                <div class="card-body">
                  <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/belajar/saveformregister" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Nama</label>
                      <div class="col-md-9">
                        <input type="text" id="text-nama" name="textnama" class="form-control" placeholder="Nama" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['textnama'];?>
">
                        <span class="help-block">This is a help text</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Address</label>
                      <div class="col-md-9">
                        <input type="text" id="text-addr" name="textaddr" class="form-control" placeholder="Address" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['textaddr'];?>
">
                        <span class="help-block">This is a help text</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="email-input">Email Input</label>
                      <div class="col-md-9">
                        <input type="email" id="text-email" name="textemail" class="form-control" placeholder="Enter Email" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['textemail'];?>
">
                        <span class="help-block">Please enter your email</span>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email-input">Phone</label>
                        <div class="col-md-9">
                          <input type="text" id="text-phone" name="textphone" class="form-control" placeholder="Enter Phone" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['textphone'];?>
">
                          <span class="help-block">Please enter your phone</span>
                        </div>
                      </div>                  
                    <div class="card-footer">
                        <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datanya']->value['id'];?>
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
}
