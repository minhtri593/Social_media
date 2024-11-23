<?php
/* Smarty version 4.3.4, created on 2024-11-18 01:53:25
  from 'C:\xampp\htdocs\content\themes\default\templates\_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673a9e15a42ce0_64832213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d8a6b17d9ea30c2f1b46c53cf79442ab3ba8c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\_no_transactions.tpl',
      1 => 1685400829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_673a9e15a42ce0_64832213 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no transaction -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"56px",'height'=>"56px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo __("Looks like you don't have any transaction yet");?>
</span>
  </div>
</div>
<!-- no transaction --><?php }
}
