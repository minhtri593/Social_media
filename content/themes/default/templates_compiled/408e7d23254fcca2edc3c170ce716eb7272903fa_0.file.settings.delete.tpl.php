<?php
/* Smarty version 4.3.4, created on 2024-11-18 07:06:36
  from 'C:\xampp\htdocs\content\themes\default\templates\settings.delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673ae77c0db389_54804409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408e7d23254fcca2edc3c170ce716eb7272903fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\settings.delete.tpl',
      1 => 1685364301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_673ae77c0db389_54804409 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete_user",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
echo __("Delete Account");?>

</div>
<div class="card-body">
  <div class="alert alert-warning">
    <div class="icon">
      <i class="fa fa-exclamation-triangle fa-2x"></i>
    </div>
    <div class="text pt5">
      <?php echo __("Once you delete your account you will no longer can access it again");?>

    </div>
  </div>

  <div class="text-center">
    <button class="btn btn-danger js_delete-user">
      <?php echo __("Delete My Account");?>

    </button>
  </div>
</div><?php }
}
