<?php
/* Smarty version 3.1.30, created on 2017-11-25 08:11:24
  from "F:\!!!kcy6013\UniServerZ\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1925ac426a85_54570886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3001119c25dd7da3da9e0279f4937d98bab170c' => 
    array (
      0 => 'F:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1511597480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1925ac426a85_54570886 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">

<form action="admin.php" method="post" enctype="multipart/form-data" id="myform">
    <div class="form-group" id="form">
        <label for="title" class="col-form-label">文章標題</label>
        <input type="text" name="title" id="title" class="form-control validate[required]" placeholder="請輸入文章標題"></input>
    </div>

    <div class="form-group" id="form">
        <label for="content" class="col-form-label">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control validate[required, minSize[20]]" placeholder="請輸入文章內容"></textarea>
    </div>

    <div class="form-group" id="form">
        <label for="title" class="col-form-label">封面圖</label>
        <input type="file" name="pic" id="pic" class="form-control" placeholder="請上傳一張封面圖"></input>
    </div>

    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">儲存</button>

    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');
    $(document).ready(function () {
        $('#myform').validationEngine();
    });

<?php echo '</script'; ?>
><?php }
}
