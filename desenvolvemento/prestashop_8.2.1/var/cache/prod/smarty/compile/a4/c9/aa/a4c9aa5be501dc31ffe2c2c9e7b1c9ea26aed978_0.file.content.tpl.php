<?php
/* Smarty version 4.3.4, created on 2025-03-16 16:54:48
  from '/app/admin038renmrzstcdunpprt/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d6f44858bbd0_29735302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c9aa5be501dc31ffe2c2c9e7b1c9ea26aed978' => 
    array (
      0 => '/app/admin038renmrzstcdunpprt/themes/default/template/content.tpl',
      1 => 1739196552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d6f44858bbd0_29735302 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
