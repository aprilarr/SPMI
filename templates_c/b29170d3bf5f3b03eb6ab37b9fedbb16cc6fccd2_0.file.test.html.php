<?php
/* Smarty version 3.1.32, created on 2019-11-24 18:04:46
  from 'E:\Yoyoy\bantingan\bantingan\Views\Home\test.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dda63ce81d501_93384953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29170d3bf5f3b03eb6ab37b9fedbb16cc6fccd2' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Home\\test.html',
      1 => 1574593483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dda63ce81d501_93384953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36385dda63ce8058a6_51303277', 'bodycontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_36385dda63ce8058a6_51303277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_36385dda63ce8058a6_51303277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--Halo <?php echo $_smarty_tpl->tpl_vars['namax']->value;?>
 di <?php echo $_smarty_tpl->tpl_vars['alamat']->value;?>
-->
<div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-align-justify"></i> Bordered Table
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm table-bordered">
          <thead>
            <tr>
              <th>Username</th>
              <th>Date registered</th>
              <th>Role</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pompeius René</td>
              <td>2012/01/01</td>
              <td>Member</td>
              <td>
                <span class="badge badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Paĉjo Jadon</td>
              <td>2012/02/01</td>
              <td>Staff</td>
              <td>
                <span class="badge badge-danger">Banned</span>
              </td>
            </tr>
            <tr>
              <td>Micheal Mercurius</td>
              <td>2012/02/01</td>
              <td>Admin</td>
              <td>
                <span class="badge badge-secondary">Inactive</span>
              </td>
            </tr>
            <tr>
              <td>Ganesha Dubhghall</td>
              <td>2012/03/01</td>
              <td>Member</td>
              <td>
                <span class="badge badge-warning">Pending</span>
              </td>
            </tr>
            <tr>
              <td>Hiroto Šimun</td>
              <td>2012/01/21</td>
              <td>Staff</td>
              <td>
                <span class="badge badge-success">Active</span>
              </td>
            </tr>
          </tbody>
        </table>
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
      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'bodycontent'} */
}
