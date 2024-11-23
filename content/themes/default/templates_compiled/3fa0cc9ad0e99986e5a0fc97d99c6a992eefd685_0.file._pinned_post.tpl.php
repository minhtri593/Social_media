<?php
/* Smarty version 4.3.4, created on 2024-11-18 06:43:51
  from 'C:\xampp\htdocs\content\themes\default\templates\_pinned_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673ae227b8ec95_70469790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fa0cc9ad0e99986e5a0fc97d99c6a992eefd685' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\_pinned_post.tpl',
      1 => 1647975699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_673ae227b8ec95_70469790 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo __("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), 0, false);
}
}
