<?php
/* Smarty version 3.1.32, created on 2019-12-01 15:24:04
  from 'E:\Yoyoy\bantingan\bantingan\Views\Belajar\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de378a45d24b8_65527673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550be22d4dd8a1a55818567b3b0e6384e70abc72' => 
    array (
      0 => 'E:\\Yoyoy\\bantingan\\bantingan\\Views\\Belajar\\index.html',
      1 => 1575188045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de378a45d24b8_65527673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271145de378a456ccb1_27458909', 'bodycontent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/core2.master.html");
}
/* {block 'bodycontent'} */
class Block_271145de378a456ccb1_27458909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_271145de378a456ccb1_27458909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i> Simple Table
    </div>
    <div class="card-body">
      <table class="table table-responsive-sm">
        <thead>
          <tr>
            <th>Username</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdata']->value, 'itemdata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->value) {
?>	
          <tr>
            <td><a href='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/belajar/formregister/<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['textnama'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['textaddr'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['textemail'];?>
</td>
            <td>
              <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['textphone'];?>
</span>
            </td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php
}
}
/* {/block 'bodycontent'} */
}
