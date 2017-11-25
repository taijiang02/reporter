<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:57:06
  from "M:\!!!kcy6013\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03e0224f1643_05607373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40cc02dd3647fbfc929d4a77c3f3cc93aaaf0278' => 
    array (
      0 => 'M:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1509790234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03e0224f1643_05607373 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
    <?php
}
} else {
?>

    <h1>尚無內容</h1>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
