<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:55:03
  from "M:\!!!kcy6013\UniServerZ\www\reporter\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03dfa7867356_33395062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53893828061d3ff71d22c0cc8145dac99ea0b069' => 
    array (
      0 => 'M:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\footer.tpl',
      1 => 1509767544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03dfa7867356_33395062 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
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
        var images = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg'];
        $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        // var txt = ['大家好', '歡迎光臨', 'Hello', '哈囉'];
        // $('title').text(txt[Math.floor(Math.random() * txt.length)]);

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
><?php }
}
