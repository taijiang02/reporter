<?php
/* Smarty version 3.1.30, created on 2017-11-09 05:01:04
  from "M:\!!!kcy6013\UniServerZ\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03e11034c333_21214657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26648e4c4ebe9afe3403a3d2ebd70e5776fc83b6' => 
    array (
      0 => 'M:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\index.tpl',
      1 => 1510203660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a03e11034c333_21214657 (Smarty_Internal_Template $_smarty_tpl) {
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

            <h1 class="text-white pt-3">巷集談-街道新聞</h1>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="text-white py-3">「臺南公民智庫」是一個全新的概念，有效地運用社大的公民教育場域、加上民間NGO、專業學者，成為一個具有研究與提供思考與政策方向的機構，並兼具有行動力及參與城市運作的社會機能。</p>
                </div>
                <div class="col-sm-6 col-md-6">

                </div>
                <div class="col-sm-6 col-md-6">

                </div>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
