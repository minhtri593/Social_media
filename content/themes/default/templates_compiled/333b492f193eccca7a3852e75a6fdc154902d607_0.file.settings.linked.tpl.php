<?php
/* Smarty version 4.3.4, created on 2024-11-13 01:30:47
  from 'C:\xampp\htdocs\content\themes\default\templates\settings.linked.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67340147b9b297_73945338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333b492f193eccca7a3852e75a6fdc154902d607' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\settings.linked.tpl',
      1 => 1688321669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_67340147b9b297_73945338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linked_accounts",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Linked Accounts");?>

</div>
<div class="card-body">
  <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-facebook-square fa-3x" style="color: #3B579D"></i>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo __("Facebook");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Facebook");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Facebook");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/facebook"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-google fa-3x" style="color: #DC4A38"></i>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo __("Google");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Google");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Google");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/google"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-twitter-square fa-3x" style="color: #55ACEE"></i>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo __("Twitter");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Twitter");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Twitter");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/twitter"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-linkedin fa-3x" style="color: #1A84BC"></i>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo __("Linkedin");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Linkedin");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Linkedin");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/linkedin"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-vk fa-3x" style="color: #527498"></i>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo __("Vkontakte");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("Vkontakte");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("Vkontakte");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/vkontakte"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['wordpress_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <i class="fab fa-wordpress fa-3x" style="color: #21759b"></i>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo __("Wordpress");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['wordpress_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php echo __("wordpress");?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php echo __("wordpress");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['wordpress_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/wordpress"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/wordpress"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['system']->value['sngine_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_icon'];?>
" width="40" height="40" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_name'];
$_prefixVariable1 = ob_get_clean();
echo __($_prefixVariable1);?>
">
      </div>
      <div>
        <div class="form-label h6 mb5"><?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_name'];
$_prefixVariable2 = ob_get_clean();
echo __($_prefixVariable2);?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['sngine_connected']) {?>
            <?php echo __("Your account is connected to");?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_name'];
$_prefixVariable3 = ob_get_clean();
echo __($_prefixVariable3);?>

          <?php } else { ?>
            <?php echo __("Connect your account to");?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_name'];
$_prefixVariable4 = ob_get_clean();
echo __($_prefixVariable4);?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['sngine_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/sngine"><?php echo __("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="https://<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_domain'];?>
/api/oauth?app_id=<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_appid'];?>
"><?php echo __("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>
</div><?php }
}
