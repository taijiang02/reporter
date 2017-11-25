<?php
/* Smarty version 3.1.30, created on 2017-11-09 05:01:13
  from "M:\!!!kcy6013\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03e119157f75_97501595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55a4448de7bb8c482f3faa9236ec40f554839ef0' => 
    array (
      0 => 'M:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1509779260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03e119157f75_97501595 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>

<?php }
}
