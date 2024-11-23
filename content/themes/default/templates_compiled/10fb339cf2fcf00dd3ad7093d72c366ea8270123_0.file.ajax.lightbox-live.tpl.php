<?php
/* Smarty version 4.3.4, created on 2024-11-17 09:54:56
  from 'C:\xampp\htdocs\content\themes\default\templates\ajax.lightbox-live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6739bd709067a7_15959012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10fb339cf2fcf00dd3ad7093d72c366ea8270123' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\ajax.lightbox-live.tpl',
      1 => 1647975800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_live.tpl' => 1,
  ),
),false)) {
function content_6739bd709067a7_15959012 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lightbox-post" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
  <div class="js_scroller" data-slimScroll-height="100%">
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_live.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div><?php }
}
