<?php
/* Smarty version 4.3.4, created on 2024-11-12 01:30:32
  from 'C:\xampp\htdocs\content\themes\default\templates\emails\test_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732afb8924138_42849498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f3776d05ae87ce68ec07c2b918e02e28059b72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\emails\\test_email.txt',
      1 => 1693733147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6732afb8924138_42849498 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("This is a test email");?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
