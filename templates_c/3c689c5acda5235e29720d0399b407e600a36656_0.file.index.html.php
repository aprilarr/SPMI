<?php
/* Smarty version 3.1.32, created on 2018-11-23 17:09:56
  from 'C:\xampp\htdocs\bantingan\Views\Usermanagement\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7d1f4a6a365_54704739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c689c5acda5235e29720d0399b407e600a36656' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Usermanagement\\index.html',
      1 => 1542967795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7d1f4a6a365_54704739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4839608705bf7d1f4a4af52_02076354', 'bodycontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_4839608705bf7d1f4a4af52_02076354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_4839608705bf7d1f4a4af52_02076354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div class="col-lg-12">
  <div class="card">
    <div class="card-header"><?php $_smarty_tpl->_assignInScope('jumlah', 1+2);?>
      <i class="fa fa-align-justify"></i> Combined All Table <?php echo $_smarty_tpl->tpl_vars['jumlah']->value;?>
<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/usermanagement/userform" class="pull-right btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>    
    </div>
    <div class="card-body">
      <table class="table table-responsive-sm table-bordered table-striped table-sm">
        <thead>
          <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listuser']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?><tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_fullname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
</td>
            <td>
              <span class="badge badge-success">Active</span>
            </td>
          </tr><?php
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
</div>
<!--/.col-->  
<?php
}
}
/* {/block 'bodycontent'} */
}
