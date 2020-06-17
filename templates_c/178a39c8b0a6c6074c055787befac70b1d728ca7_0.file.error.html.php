<?php
/* Smarty version 3.1.32, created on 2020-02-02 21:07:45
  from 'D:\SKRIPSI KU\Framwork\Yoyoy\bantingan\bantingan\Views\Shared\error.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e36d7b133f6f5_05538496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '178a39c8b0a6c6074c055787befac70b1d728ca7' => 
    array (
      0 => 'D:\\SKRIPSI KU\\Framwork\\Yoyoy\\bantingan\\bantingan\\Views\\Shared\\error.html',
      1 => 1570233008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36d7b133f6f5_05538496 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Bantingan - Error Page</title>
	<style type="text/css">
		/* reset */
		html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}
		body {padding:20px;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;border-top:6px solid #E9E9E9}
		p.main_head {color:#424242;font-size:62px;margin-bottom:30px}
		p.sub_head {color:#BCBCBC;font-size:24px;text-transform:uppercase;line-height:1.3;margin-bottom:10px}
		p.sub_head a {color:#3299BB;text-decoration:none}
		p.sub_head a:hover {text-decoration:underline}
		p.content { color:#424242 }
		p.footer { font-size: small; border-top: dashed 1px #333; padding-top : 5px !important; margin-top : 5px !important; }
	</style>
</head>

<body>
	<p class="main_head">Ooops! <?php echo $_smarty_tpl->tpl_vars['errorException']->value->getCode();?>
</p>
	<p class="sub_head">System cannot complete your request,<br>Messages :<i>"<?php echo $_smarty_tpl->tpl_vars['errorException']->value->getMessage();?>
".</p>
	<p class="sub_head">Go to <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
">Home</a></p>
	<p class="content"><?php if (SHOW_ERROR) {?><b>Details : </b><br><?php echo print_r($_smarty_tpl->tpl_vars['errorException']->value);
}?></p>
	<p class="footer">Powered By Bantingan</p>
</body>
</html><?php }
}
