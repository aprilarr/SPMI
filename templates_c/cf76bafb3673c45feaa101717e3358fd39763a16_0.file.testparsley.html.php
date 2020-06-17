<?php
/* Smarty version 3.1.32, created on 2019-02-07 15:41:50
  from 'C:\xampp\htdocs\bantingan\Views\Home\testparsley.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c5bef4e120124_19979185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf76bafb3673c45feaa101717e3358fd39763a16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bantingan\\Views\\Home\\testparsley.html',
      1 => 1549526341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5bef4e120124_19979185 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/parsley/parsley.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/parsley/extra/validator/comparison.js"><?php echo '</script'; ?>
>
<form id="form">
<input type="text" name="test3" id="test3" 
required 
data-date-format='DD-MM-YYYY'
data-parsley-ddmmyyyylte="#test4"
data-parsley-ddmmyyyylte-message="Date cannot less than other date"
data-parsley-errors-container="#help-block"
value="<?php echo date('d-m-Y');?>
">
<input type="text" name="test4" id="test4" value="08-02-2019" data-date-format='DD-MM-YYYY'>
<input type="submit" name="submit" id="submit">
<input type="button" name="test" id="test" value="test">
<span id="help-block"></span>
</form>

<?php echo '<script'; ?>
>
  $('#form').parsley();

  $('#form').submit(function() {
  	console.log(strToDate($("#test3").val()));
  	 if(!$('#form').parsley().validate())
  	 {  	 	
  	 	return false;
  	 }  	 
  });

  $('#test').click(function() {  	
  	console.log(strToDate($("#test3").val()) <= strToDate($("#test4").val()));
  });

  function toDate(selector) {
	  var from = $(selector).val().split("-")
	  return new Date(from[2], from[1] - 1, from[0])
	}

	function strToDate(datestr) {
	  var from = datestr.split("-")
	  return new Date(from[2], from[1] - 1, from[0])
	}

window.Parsley.addValidator('ddmmyyyygte', {
  validateString: function (value, object) {  	  	  	
	return strToDate(value) >= strToDate($(object).val());
  },
  messages: {
    en: 'Invalid Date'
  }
});

window.Parsley.addValidator('ddmmyyyylte', {
  validateString: function (value, object) {  	  	  	
	return strToDate(value) <= strToDate($(object).val());
  },
  messages: {
    en: 'Invalid Date'
  }
});

window.Parsley.addValidator('ddmmyyyygt', {
  validateString: function (value, object) {  	  	  	
	return strToDate(value) > strToDate($(object).val());
  },
  messages: {
    en: 'Invalid Date'
  }
});

window.Parsley.addValidator('ddmmyyyylt', {
  validateString: function (value, object) {  	  	  	
	return strToDate(value) < strToDate($(object).val());
  },
  messages: {
    en: 'Invalid Date'
  }
});
<?php echo '</script'; ?>
><?php }
}
