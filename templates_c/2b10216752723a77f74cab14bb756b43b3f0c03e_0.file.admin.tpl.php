<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:55:03
  from "M:\!!!kcy6013\UniServerZ\www\reporter\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03dfa77812b2_54982648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b10216752723a77f74cab14bb756b43b3f0c03e' => 
    array (
      0 => 'M:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\admin.tpl',
      1 => 1509767592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a03dfa77812b2_54982648 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
