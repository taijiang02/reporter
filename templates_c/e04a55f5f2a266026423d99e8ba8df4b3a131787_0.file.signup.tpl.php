<?php
/* Smarty version 3.1.30, created on 2017-11-18 12:04:29
  from "J:\!!!kcy6013\UniServerZ\www\reporter\templates\signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1021cde711f8_57344938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e04a55f5f2a266026423d99e8ba8df4b3a131787' => 
    array (
      0 => 'J:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\signup.tpl',
      1 => 1510371388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a1021cde711f8_57344938 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <h1 class="pt-5">巷集談-街道新聞</h1>

            <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
                <h2 class="form-signup-heading">註冊畫面</h2>
                <input name="newuser" id="newuser" type="text" class="form-control" placeholder="使用者帳號" autofocus>
                <input name="email" id="email" type="text" class="form-control" placeholder="電子郵件">
                <br>
                <input name="password1" id="password1" type="password" class="form-control" placeholder="輸入密碼">
                <input name="password2" id="password2" type="password" class="form-control" placeholder="再輸入一次密碼">

                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">開始註冊</button>

                <div id="message"></div>
            </form>
        </div>
    </div>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 src="js/signup.js">

    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true,
                    required: true
                },
                password1: {
                    required: true,
                    minlength: 4
                },
                password2: {
                    equalTo: "#password1"
                }
            }
        });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
