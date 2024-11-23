<?php
/* Smarty version 4.3.4, created on 2024-11-18 05:56:44
  from 'C:\xampp\htdocs\content\themes\default\templates\settings.accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673ad71c09b108_73558289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c571ff1cb04f5aedcbc3ba924b670971829a8cb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\settings.accounts.tpl',
      1 => 1685364226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_user.tpl' => 2,
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_673ad71c09b108_73558289 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_add",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Connected Accounts");?>

  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_master_account']) {?>
    <div class="float-end">
      <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-url="#account-connector">
        <i class="fa fa-plus-circle"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Connect Account");?>
</span>
      </button>
    </div>
  <?php }?>
</div>
<div class="card-body">
  <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['connected_accounts']) > 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_master_account']) {?>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['connected_accounts'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['_user']->value['user_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"connected_account_remove"), 0, true);
?>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php } else { ?>
      <div class="alert alert-info">
        <?php echo __("You are connected to this account");?>

      </div>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['connected_accounts'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['_user']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_master_account']) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"connected_account_revoke"), 0, true);
?>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
</div><?php }
}
