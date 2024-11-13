<?php
/* Smarty version 4.3.4, created on 2024-11-12 02:39:41
  from 'C:\xampp\htdocs\content\themes\default\templates\settings.security.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732bfed3fb644_77926228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71dad33b064548c0b1942070151e0f50458eac1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\settings.security.tpl',
      1 => 1685364821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_6732bfed3fb644_77926228 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sub_view']->value == "password") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"security",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Change Password");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=password">
    <div class="card-body">
      <div class="alert alert-warning">
        <div class="icon">
          <i class="fa fa-exclamation-triangle fa-2x"></i>
        </div>
        <div class="text pt5">
          <?php echo __("Changing password will log you out from all other sessions");?>

        </div>
      </div>

      <div class="form-group">
        <label class="form-label"><?php echo __("Confirm Current Password");?>
</label>
        <input type="password" class="form-control" name="current">
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Your New Password");?>
</label>
          <input type="password" class="form-control" name="new">
        </div>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Confirm New Password");?>
</label>
          <input type="password" class="form-control" name="confirm">
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
    </div>
  </form>

<?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "sessions") {?>
  <div class="card-header with-icon">
    <div class="float-end">
      <button class="btn btn-md btn-danger js_session-delete-all">
        <i class="fa fa-sign-out-alt"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Log Out Of All Sessions");?>
</span>
      </button>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"security",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("Manage Sessions");?>

  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th><?php echo __("ID");?>
</th>
            <th><?php echo __("Browser");?>
</th>
            <th><?php echo __("OS");?>
</th>
            <th><?php echo __("Date");?>
</th>
            <th><?php echo __("IP");?>
</th>
            <th><?php echo __("Actions");?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($_smarty_tpl->tpl_vars['sessions']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sessions']->value, 'session');
$_smarty_tpl->tpl_vars['session']->iteration = 0;
$_smarty_tpl->tpl_vars['session']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->do_else = false;
$_smarty_tpl->tpl_vars['session']->iteration++;
$__foreach_session_0_saved = $_smarty_tpl->tpl_vars['session'];
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['session']->iteration;?>
</td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['session']->value['user_browser'];?>
 <?php if ($_smarty_tpl->tpl_vars['session']->value['session_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['active_session_id']) {?><span class="badge rounded-pill badge-lg bg-success"><?php echo __("Active Session");?>
</span><?php }?>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_os'];?>
</td>
                <td>
                  <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
</span>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_ip'];?>
</td>
                <td>
                  <button data-bs-toggle="tooltip" title='<?php echo __("End Session");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_session-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            <?php
$_smarty_tpl->tpl_vars['session'] = $__foreach_session_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php } else { ?>
            <tr>
              <td colspan="6" class="text-center">
                <?php echo __("No data to show");?>

              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>

<?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "two-factor") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"security",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("Two-Factor Authentication");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=two-factor">
    <div class="card-body">
      <div class="alert alert-info">
        <div class="text">
          <strong><?php echo __("Two-Factor Authentication");?>
</strong><br>
          <?php echo __("Log in with a code from your");?>

          <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "email") {
echo __("email");
}?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "sms") {
echo __("phone");
}?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "google") {
echo __("Google Authenticator App");
}?>
          <?php echo __("as well as a password");?>

        </div>
      </div>
      <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_two_factor_enabled'] && $_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "google") {?>
        <div class="heading-small mb20">
          <?php echo __("Configuring your authenticator");?>

        </div>
        <div class="pl-md-4">
          <ol class="mtb20">
            <li class="mb5">
              <?php echo __("You need to download Google Authenticator app for");?>
 <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"><?php echo __("Android");?>
</a> <?php echo __("or");?>
 <a target="_blank" href="https://itunes.apple.com/eg/app/google-authenticator/id388497605?mt=8"><?php echo __("IOS");?>
</a>
            </li>
            <li>
              <?php echo __("In your app, add a new account using the details below");?>
:
            </li>
          </ol>

          <div class="row text-center">
            <div class="form-group col-md-6">
              <h6><?php echo __("Scanning the QR code");?>
</h6>
              <img src="<?php echo $_smarty_tpl->tpl_vars['two_factor_QR']->value;?>
">
            </div>
            <div class="form-group col-md-6">
              <h6><?php echo __("Manually by entering this token");?>
</h6>
              <h3>
                <span class="badge bg-warning pt10 plr20"><?php echo $_smarty_tpl->tpl_vars['two_factor_gsecret']->value;?>
</span>
              </h3>
            </div>
          </div>
        </div>
        <div class="heading-small mb20">
          <?php echo __("Activate your authenticator");?>

        </div>
        <div class="pl-md-4">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo __("Verification Code");?>

            </label>
            <div class="col-md-9">
              <input name="gcode" type="text" class="form-control" placeholder="######" required autofocus>
              <div class="form-text">
                <?php echo __("Enter the code shown on your app");?>

              </div>
            </div>
          </div>

          <!-- success -->
          <div class="alert alert-success mt15 mb0 x-hidden"></div>
          <!-- success -->

          <!-- error -->
          <div class="alert alert-danger mt15 mb0 x-hidden"></div>
          <!-- error -->
        </div>
      <?php } else { ?>
        <div class="form-table-row">
          <div>
            <div class="form-label h6"><?php echo __("Two-Factor Authentication");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo __("Enable two-factor authentication to log in with a code from your email/phone as well as a password");?>
</div>
          </div>
          <div class="text-end">
            <label class="switch" for="two_factor_enabled">
              <input type="checkbox" name="two_factor_enabled" id="two_factor_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_two_factor_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      <?php }?>
    </div>
    <div class="card-footer text-end">
      <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['two_factor_type'];?>
">
      <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
    </div>
  </form>

<?php }
}
}
