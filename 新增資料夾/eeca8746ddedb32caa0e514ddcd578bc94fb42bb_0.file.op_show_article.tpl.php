<?php
/* Smarty version 3.1.30, created on 2017-11-18 12:08:29
  from "J:\!!!kcy6013\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1022bd994ea2_09229412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeca8746ddedb32caa0e514ddcd578bc94fb42bb' => 
    array (
      0 => 'J:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1510993000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1022bd994ea2_09229412 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>

    <div class="alert alert-info text-center">
        <a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=modify_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">編輯</a>
    </div>
</div><?php }
}
