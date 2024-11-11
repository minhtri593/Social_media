<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:05:33
  from 'C:\xampp\htdocs\content\themes\default\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731f30d7c5683_57273008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01d7a283eed7f1bd28a31c8d7aa4582254eab8cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\index.tpl',
      1 => 1679665629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
),false)) {
function content_6731f30d7c5683_57273008 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
