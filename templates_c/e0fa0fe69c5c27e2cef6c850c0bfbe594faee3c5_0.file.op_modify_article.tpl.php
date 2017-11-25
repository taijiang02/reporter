<?php
/* Smarty version 3.1.30, created on 2017-11-25 05:21:22
  from "F:\!!!kcy6013\UniServerZ\www\reporter\templates\op_modify_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a18fdd2c255a5_05044069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0fa0fe69c5c27e2cef6c850c0bfbe594faee3c5' => 
    array (
      0 => 'F:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\op_modify_article.tpl',
      1 => 1511587278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a18fdd2c255a5_05044069 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>


<form action="admin.php" method="post" enctype="multipart/form-data">
    <div class="form-group" id="form">
        <label for="title" class="col-form-label">文章標題</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="請輸入文章標題" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"></input>
    </div>

    <div class="form-group" id="form">
        <label for="content" class="col-form-label">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
    </div>

    <div class="form-group" id="form">
        <label for="title" class="col-form-label">封面圖</label>
        <input type="file" name="pic" id="pic" class="form-control" placeholder="請上傳一張封面圖"></input>
    </div>

    <div class="text-center">
        <input type="hidden" name="op" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">
        <input type="hidden" name="op" value="update">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">更新</button>

    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');

<?php echo '</script'; ?>
><?php }
}
