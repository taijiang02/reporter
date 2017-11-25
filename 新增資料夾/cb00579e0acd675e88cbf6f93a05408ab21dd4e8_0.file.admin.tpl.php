<?php
/* Smarty version 3.1.30, created on 2017-10-28 13:53:25
  from "E:\UniServerZ\www\reporter\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f47dc59b3671_23839167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb00579e0acd675e88cbf6f93a05408ab21dd4e8' => 
    array (
      0 => 'E:\\UniServerZ\\www\\reporter\\templates\\admin.tpl',
      1 => 1508572756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f47dc59b3671_23839167 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">
</head>

<body>
    <div class="img-container">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="text-white nav-link">首頁</a>
                <a href="index.php" class="text-white nav-link">編輯精選</a>
                <a href="index.php" class="nav-link text-white">街巷故事</a>
                <a href="index.php" class="nav-link text-white">市井觀點</a>
                <a href="index.php" class="nav-link text-white">私房知識塾</a>
                <a href="admin.php" class="text-white nav-link">管理</a>
            </nav>

            <form action="admin.php" method="post">
                <div class="form-group">
                    <label for="title" class="col-form-label">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="請輸入文章標題"></input>
                </div>

                <div class="form-group">
                    <label for="content" class="col-form-label">文章內容</label>
                    <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"></textarea>
                </div>

                <div class="form-center">
                    <button type="hidden" name="op" value="insert" class="btn btn-primary">儲存</button>
                </div>
            </form>

        </div>
    </div>

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
        });
        $(window).resize(function () {
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
