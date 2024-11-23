<?php
/* Smarty version 4.3.4, created on 2024-11-17 16:49:34
  from 'C:\xampp\htdocs\content\themes\default\templates\signup_social.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673a1e9e68ce80_22051901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0ab868efe55c9dd7a1edeef610240a10d08e87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\signup_social.tpl',
      1 => 1699254655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_673a1e9e68ce80_22051901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_product_teardown_elol.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Getting Started");?>
</h2>
    <p class="text-xlg"><?php echo __("This information will let us know more about you");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-md-auto">
      <div class="card px-4 py-4 shadow">
        <h3 class="mb20 text-center"><?php echo __("Welcome");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user_profile']->value->displayName;?>
</span></h3>
        <div class="text-center">
          <img class="img-thumbnail rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->photoURL;?>
" width="99" height="99">
        </div>
        <form class="js_ajax-forms" data-url="core/signup_social.php">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_enabled']) {?>
            <div class="form-group">
              <label class="form-label"><?php echo __("Invitation Code");?>
</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-handshake fa-fw"></i></span>
                <input name="invitation_code" type="text" class="form-control" required autofocus>
              </div>
            </div>
          <?php }?>
          <div class="form-group">
            <label class="form-label"><?php echo __("First name");?>
</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
              <input name="first_name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->firstName;?>
" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label"><?php echo __("Last name");?>
</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
              <input name="last_name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->lastName;?>
" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label"><?php echo __("Username");?>
</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-globe fa-fw"></i></span>
              <input name="username" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->username;?>
" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label"><?php echo __("Email");?>
</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
              <input name="email" type="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->email;?>
" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label"><?php echo __("Password");?>
</label>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                <input name="password" type="password" class="form-control" required>
              </div>
            </div>
          </div>
          <?php if (!$_smarty_tpl->tpl_vars['system']->value['genders_disabled']) {?>
            <div class="form-group">
              <label class="form-label"><?php echo __("I am");?>
</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-mars fa-fw"></i></span>
                <select class="form-select" name="gender" required>
                  <option value="none"><?php echo __("Select Sex");?>
:</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_name'];?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>
          <?php }?>
          <!-- newsletter consent -->
          <?php if ($_smarty_tpl->tpl_vars['system']->value['newsletter_consent']) {?>
            <div class="form-check mb10">
              <input type="checkbox" class="form-check-input" name="newsletter_agree" id="newsletter_agree">
              <label class="form-check-label" for="newsletter_agree">
                <?php echo __("I expressly agree to receive the newsletter");?>

              </label>
            </div>
          <?php }?>
          <!-- newsletter consent -->
          <div class="form-check mb10">
            <input type="checkbox" class="form-check-input" name="privacy_agree" id="privacy_agree">
            <label class="form-check-label" for="privacy_agree">
              <?php echo __("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/terms" target="_blank"><?php echo __("Terms");?>
</a> & <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/privacy" target="_blank"><?php echo __("Privacy Policy");?>
</a>
            </label>
          </div>
          <div class="d-grid form-group">
            <input value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->photoURL;?>
" name="avatar" type="hidden">
            <input value="<?php echo $_smarty_tpl->tpl_vars['provider']->value;?>
" name="provider" type="hidden">
            <button type="submit" class="btn btn-success bg-gradient-green border-0 rounded-pill"><?php echo __("Sign Up");?>
</button>
          </div>
          <!-- error -->
          <div class="alert alert-danger mt15 mb0 x-hidden"></div>
          <!-- error -->
        </form>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
