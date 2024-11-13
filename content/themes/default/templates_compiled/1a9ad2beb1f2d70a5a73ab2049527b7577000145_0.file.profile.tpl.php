<?php
/* Smarty version 4.3.4, created on 2024-11-11 14:03:59
  from 'C:\xampp\htdocs\content\themes\default\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67320ecfc902f6_09038736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a9ad2beb1f2d70a5a73ab2049527b7577000145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\profile.tpl',
      1 => 1704566586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 57,
    'file:__feeds_photo.tpl' => 2,
    'file:_footer_mini.tpl' => 1,
    'file:_publisher.tpl' => 2,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:__feeds_user.tpl' => 5,
    'file:__feeds_page.tpl' => 2,
    'file:__feeds_group.tpl' => 2,
    'file:_need_subscription.tpl' => 5,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 1,
    'file:__feeds_product.tpl' => 1,
    'file:_no_data.tpl' => 7,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_67320ecfc902f6_09038736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt20">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <!-- profile-header -->
      <div class="profile-header">
        <!-- profile-cover -->
        <div class="profile-cover-wrapper">
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover_id']) {?>
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_full'];?>
">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['profile']->value['user_cover_lightbox']) {?>js_lightbox<?php }?>" data-init-position="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
">
            <!-- cropped-cover -->
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
                <div class="dropdown-menu action-dropdown-menu">
                  <!-- upload -->
                  <div class="dropdown-item pointer js_x-uploader" data-handle="cover-user">
                    <div class="action">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"camera",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, false);
?>
                      <?php echo __("Upload Photo");?>

                    </div>
                    <div class="action-desc"><?php echo __("Upload a new photo");?>
</div>
                  </div>
                  <!-- upload -->
                  <!-- select -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=cover&type=user&id=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                      <?php echo __("Select Photo");?>

                    </div>
                    <div class="action-desc"><?php echo __("Select a photo");?>
</div>
                  </div>
                  <!-- select -->
                </div>
              </div>
              <div class="profile-cover-position <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>x-hidden<?php }?>">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>x-hidden<?php }?>">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-user"></i>
              </div>
            </div>
            <!-- buttons -->

            <!-- loaders -->
            <div class="profile-cover-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="profile-cover-position-loader">
              <i class="fa fa-arrows-alt mr5"></i><?php echo __("Drag to reposition cover");?>

            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-cover -->

        <!-- profile-avatar -->
        <div class="profile-avatar-wrapper">
          <img <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_id']) {?> <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['profile']->value['user_picture_lightbox']) {?>class="js_lightbox" <?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture_id'];?>
" data-context="album" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture_full'];?>
" <?php } elseif (!$_smarty_tpl->tpl_vars['profile']->value['user_picture_default']) {?> class="js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
">

          <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
            <!-- buttons -->
            <div class="profile-avatar-change">
              <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
              <div class="dropdown-menu action-dropdown-menu">
                <!-- upload -->
                <div class="dropdown-item pointer js_x-uploader" data-handle="picture-user">
                  <div class="action">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"camera",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                    <?php echo __("Upload Photo");?>

                  </div>
                  <div class="action-desc"><?php echo __("Upload a new photo");?>
</div>
                </div>
                <!-- upload -->
                <!-- select -->
                <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=avatar&type=user&id=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <div class="action">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                    <?php echo __("Select Photo");?>

                  </div>
                  <div class="action-desc"><?php echo __("Select a photo");?>
</div>
                </div>
                <!-- select -->
              </div>
            </div>
            <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_default'] || !$_smarty_tpl->tpl_vars['profile']->value['user_picture_id']) {?>x-hidden<?php }?>">
              <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"></i>
            </div>
            <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
            </div>
            <!-- buttons -->
            <!-- loaders -->
            <div class="profile-avatar-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-avatar -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
            <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo __("Verified User");?>
'>
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"30px",'height'=>"30px"), 0, true);
?>
            </span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_subscribed']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="badge bg-danger" data-bs-toggle="tooltip" title="<?php echo __($_smarty_tpl->tpl_vars['profile']->value['package_name']);?>
"><?php echo __($_smarty_tpl->tpl_vars['profile']->value['package_name']);?>
</a>
          <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
              <!-- add friend -->
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                <button type="button" class="btn btn-md rounded-pill btn-success btn-delete js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <i class="fa fa-check"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo __("Friends");?>
</span>
                </button>
              <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                <button type="button" class="btn btn-md rounded-pill btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <i class="fa fa-user-plus"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo __("Confirm");?>
</span>
                </button>
                <button type="button" class="btn btn-md rounded-pill btn-danger js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <i class="fa fa-times"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo __("Decline");?>
</span>
                </button>
              <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                <button type="button" class="btn btn-md rounded-pill btn-light js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <i class="fa fa-clock"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo __("Sent");?>
</span>
                </button>
              <?php } elseif (!$_smarty_tpl->tpl_vars['profile']->value['friendship_declined']) {?>
                <button type="button" class="btn btn-md rounded-pill btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <i class="fa fa-user-plus"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo __("Add Friend");?>
</span>
                </button>
              <?php }?>
              <!-- add friend -->

              <!-- follow -->
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
                <button type="button" class="btn btn-md rounded-pill btn-light js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <i class="fa fa-check"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo __("Following");?>
</span>
                </button>
              <?php } else { ?>
                <button type="button" class="btn btn-md rounded-pill btn-light js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <i class="fa fa-rss"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo __("Follow");?>
</span>
                </button>
              <?php }?>
              <!-- follow -->

              <!-- message -->
              <button type="button" class="btn btn-icon rounded-pill btn-light mlr5 js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-messages",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), 0, true);
?>
              </button>
              <!-- message -->

              <!-- poke & report & block menu -->
              <div class="d-inline-block dropdown">
                <button type="button" class="btn btn-icon rounded-pill btn-light" data-bs-toggle="dropdown" data-display="static">
                  <i class="fa fa-ellipsis-v fa-fw"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end action-dropdown-menu">
                  <!-- poke -->
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['pokes_enabled'] && !$_smarty_tpl->tpl_vars['profile']->value['i_poked']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_poke'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_poke'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                      <div class="dropdown-item pointer js_poke" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
">
                        <div class="action">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"poke",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                          <?php echo __("Poke");?>

                        </div>
                        <div class="action-desc"><?php echo __("Let them know you are here");?>
</div>
                      </div>
                    <?php }?>
                  <?php }?>
                  <!-- poke -->
                  <!-- share -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/share.php?node_type=user&node_username=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                      <?php echo __("Share");?>

                    </div>
                    <div class="action-desc"><?php echo __("Share this profile");?>
</div>
                  </div>
                  <!-- share -->
                  <!-- report -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=user&id=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"report",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                      <?php echo __("Report");?>

                    </div>
                    <div class="action-desc"><?php echo __("Report this to admins");?>
</div>
                  </div>
                  <!-- report -->
                  <!-- block -->
                  <div class="dropdown-item pointer js_block-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"block",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                      <?php echo __("Block");?>

                    </div>
                    <div class="action-desc"><?php echo __("This user won't be able to reach you");?>
</div>
                  </div>
                  <!-- block -->
                  <!-- manage -->
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                      <?php echo __("Edit in Admin Panel");?>

                    </a>
                  <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp/users/edit/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                      <?php echo __("Edit in Moderator Panel");?>

                    </a>
                  <?php }?>
                  <!-- manage -->
                </div>
              </div>
              <!-- poke & report & block menu -->
            <?php } else { ?>
              <!-- edit -->
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-icon btn-rounded btn-light">
                <i class="fa fa-pencil-alt fa-fw"></i>
              </a>
              <!-- edit -->
            <?php }?>
          <?php }?>
        </div>
        <!-- profile-buttons -->
      </div>
      <!-- profile-header -->

      <!-- profile-tabs -->
      <div class="profile-tabs-wrapper d-flex justify-content-evenly">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
          <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Timeline");?>
</span>
        </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends" <?php if ($_smarty_tpl->tpl_vars['view']->value == "friends" || $_smarty_tpl->tpl_vars['view']->value == "followers" || $_smarty_tpl->tpl_vars['view']->value == "followings") {?>class="active" <?php }?>>
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
          <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Friends");?>
</span>
        </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "photos" || $_smarty_tpl->tpl_vars['view']->value == "albums" || $_smarty_tpl->tpl_vars['view']->value == "album") {?>class="active" <?php }?>>
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
          <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Photos");?>
</span>
        </a>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/videos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Videos");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['profile']->value['can_sell_products']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/products" <?php if ($_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Products");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes" <?php if ($_smarty_tpl->tpl_vars['view']->value == "likes") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Likes");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups" <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Groups");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/events" <?php if ($_smarty_tpl->tpl_vars['view']->value == "events") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo __("Events");?>
</span>
          </a>
        <?php }?>
      </div>
      <!-- profile-tabs -->

      <!-- profile-content -->
      <div class="row">
        <!-- view content -->
        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

          <!-- left panel -->
          <div class="col-lg-4 order-2 order-lg-1">
            <!-- panel [profile completion] -->
            <?php if ((isset($_smarty_tpl->tpl_vars['profile']->value['profile_completion'])) && $_smarty_tpl->tpl_vars['profile']->value['profile_completion'] < 100) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <span class="float-end"><?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_completion'];?>
%</span>
                  <strong><?php echo __("Profile Completion");?>
</strong>
                  <div class="progress mt5">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_completion'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_completion'];?>
%"></div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb5">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_default']) {?>
                      <span class="text-link js_profile-image-trigger">
                        <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your profile picture");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo __("Add your profile picture");?>
</span>
                      <?php }?>
                  </div>
                  <div class="mb5">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover_default']) {?>
                      <span class="text-link js_profile-cover-trigger">
                        <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your profile cover");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo __("Add your profile cover");?>
</span>
                      <?php }?>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['biography_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_biography']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                          <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your biography");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo __("Add your biography");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <div class="mb5">
                    <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_birthdate']) {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                        <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your birthdate");?>

                      </a>
                    <?php } else { ?>
                      <i class="fas fa-check-circle green mr5"></i>
                      <span style="text-decoration: line-through;"><?php echo __("Add your birthdate");?>
</span>
                    <?php }?>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['relationship_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_relationship']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                          <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your relationship");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo __("Add your relationship");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_work_title'] || !$_smarty_tpl->tpl_vars['profile']->value['user_work_place']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/work">
                          <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your work info");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo __("Add your work info");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_current_city'] || !$_smarty_tpl->tpl_vars['profile']->value['user_hometown']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/location">
                          <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your location info");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo __("Add your location info");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_edu_major'] || !$_smarty_tpl->tpl_vars['profile']->value['user_edu_school']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/education">
                          <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your education info");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo __("Add your education info");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php }?>
            <!-- panel [profile completion] -->

            <!-- tips -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id'] && $_smarty_tpl->tpl_vars['profile']->value['can_receive_tips'] && $_smarty_tpl->tpl_vars['profile']->value['user_tips_enabled']) {?>
              <div class="d-grid">
                <button type="button" class="btn bg-red rounded-pill mb20" data-toggle="modal" data-url="#send-tip" data-options='{ "id": "<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"}'>
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tip",'class'=>"white-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Send a Tip");?>

                </button>
              </div>
            <?php }?>
            <!-- tips -->

            <!-- gifts -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id'] && $_smarty_tpl->tpl_vars['system']->value['gifts_enabled']) {?>
              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_send_gifts'] && ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_gifts'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_gifts'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends']))) {?>
                <div class="d-grid">
                  <button type="button" class="btn bg-red rounded-pill mb20" data-toggle="modal" data-url="#gifts" data-options='{ "uid": <?php echo $_smarty_tpl->tpl_vars['profile']->value["user_id"];?>
 }'>
                    <i class="fas fa-gift fa-lg mr10"></i><?php echo __("Send a Gift");?>

                  </button>
                </div>
              <?php }?>
            <?php }?>
            <!-- gifts -->

            <!-- panel [about] -->
            <div class="card">
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['biography_info_enabled']) {?>
                  <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_biography'])) {?>
                    <div class="about-bio">
                      <div class="js_readmore overflow-hidden">
                        <?php echo nl2br((string) $_smarty_tpl->tpl_vars['profile']->value['user_biography'], (bool) 1);?>

                      </div>
                    </div>
                  <?php }?>
                <?php }?>

                <ul class="about-list">
                  <!-- posts -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['profile']->value['posts_count']);?>
 <?php echo __("Posts");?>

                    </div>
                  </li>
                  <!-- posts -->
                  <!-- photos -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['profile']->value['photos_count']);?>
 <?php echo __("Photos");?>

                    </div>
                  </li>
                  <!-- photos -->
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
                    <!-- videos -->
                    <li>
                      <div class="about-list-item">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __($_smarty_tpl->tpl_vars['profile']->value['videos_count']);?>
 <?php echo __("Videos");?>

                      </div>
                    </li>
                    <!-- videos -->
                  <?php }?>
                  <!-- info -->
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_work_title']) {?>
                      <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>

                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_work_place']) {?>
                              <?php echo __("at");?>

                              <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_work_url']) {?>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</a>
                              <?php } else { ?>
                                <span><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</span>
                              <?php }?>
                            <?php }?>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_current_city']) {?>
                      <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"home",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php echo __("Lives in");?>
 <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_current_city'];?>
</span>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_hometown']) {?>
                      <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php echo __("From");?>
 <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_edu_major']) {?>
                      <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"education",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php echo __("Studied");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_major'];?>

                            <?php echo __("at");?>
 <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_school'];?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_edu_class']) {?>
                              <div class="details">
                                <?php echo __("Class of");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_class'];?>

                              </div>
                            <?php }?>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if (!$_smarty_tpl->tpl_vars['system']->value['genders_disabled']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_gender'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_gender'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"genders",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                          <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_gender'];?>

                        </div>
                      </li>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['relationship_info_enabled']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_relationship']) {?>
                      <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_relationship'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_relationship'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"relationship",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_relationship'] == "relationship") {?>
                              <?php echo __("In a relationship");?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['user_relationship'] == "complicated") {?>
                              <?php echo __("It's complicated");?>

                            <?php } else { ?>
                              <?php echo __(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['user_relationship'] )));?>

                            <?php }?>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'] != null) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_birthdate'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_birthdate'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"birthday",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'],$_smarty_tpl->tpl_vars['system']->value['system_date_format']);?>

                        </div>
                      </li>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['website_info_enabled']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_website']) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"website",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                          <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_website'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_website'];?>
</a>
                        </div>
                      </li>
                    <?php }?>
                  <?php }?>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Followed by");?>

                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("people");?>
</a>
                    </div>
                  </li>
                  <!-- info -->
                </ul>
              </div>
            </div>
            <!-- panel [about] -->

            <!-- custom fields [basic] -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_basic'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_basic'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"profile",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <strong><?php echo __("Basic Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['basic'], 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                          <li>
                            <strong><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox" && $_smarty_tpl->tpl_vars['custom_field']->value['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [basic] -->

            <!-- custom fields [work] -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['work']) {?>
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <strong><?php echo __("Work Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['work'], 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                          <li>
                            <strong><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox" && $_smarty_tpl->tpl_vars['custom_field']->value['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [work] -->

            <!-- custom fields [location] -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['location']) {?>
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <strong><?php echo __("Location Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['location'], 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                          <li>
                            <strong><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox" && $_smarty_tpl->tpl_vars['custom_field']->value['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [location] -->

            <!-- custom fields [education] -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['education']) {?>
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"education",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <strong><?php echo __("Education Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['education'], 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                          <li>
                            <strong><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox" && $_smarty_tpl->tpl_vars['custom_field']->value['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [education] -->

            <!-- custom fields [other] -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_other'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_other'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"biography",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <strong><?php echo __("Other Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['other'], 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                          <li>
                            <strong><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox" && $_smarty_tpl->tpl_vars['custom_field']->value['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [other] -->

            <!-- social links -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['social_info_enabled']) {?>
              <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_facebook'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_twitter'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_youtube'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_instagram'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_twitch'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte']) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"social_share",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <strong><?php echo __("Social Links");?>
</strong>
                  </div>
                  <div class="card-body text-center">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_facebook']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_facebook'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_twitter']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_twitter'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_youtube']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_youtube'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest">
                        <i class="fab fa-youtube"></i>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_instagram']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_instagram'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_twitch']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_twitch'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-twitch">
                        <i class="fab fa-twitch"></i>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                        <i class="fab fa-linkedin"></i>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                        <i class="fab fa-vk"></i>
                      </a>
                    <?php }?>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- social links -->

            <!-- photos -->
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['photos']) {?>
              <div class="card panel-photos">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a></strong>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                    <small>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos" class="float-end">
                        <?php echo __("Manage");?>

                      </a>
                    </small>
                  <?php }?>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['photos'], 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- photos -->

            <!-- friends -->
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a></strong>
                  <span class="badge rounded-pill bg-light text-primary ml5"><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</span>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                    <small>
                      (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>)
                    </small>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                    <small>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends" class="float-end">
                        <?php echo __("Manage");?>

                      </a>
                    </small>
                  <?php }?>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['friends'], '_friend');
$_smarty_tpl->tpl_vars['_friend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_friend']->value) {
$_smarty_tpl->tpl_vars['_friend']->do_else = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_name'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_picture'];?>
" />
                            <div class="name">
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_friend']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_friend']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_lastname'];
}?>
                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- friends -->

            <!-- subscribers -->
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['subscribers_count'] > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a></strong>
                  <span class="badge rounded-pill bg-light text-primary ml5"><?php echo $_smarty_tpl->tpl_vars['profile']->value['subscribers_count'];?>
</span>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['subscribers'], '_subscriber');
$_smarty_tpl->tpl_vars['_subscriber']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_subscriber']->value) {
$_smarty_tpl->tpl_vars['_subscriber']->do_else = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_name'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_picture'];?>
" />
                            <div class="name">
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_subscriber']->value['user_lastname'];
}?>
                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- subscribers -->

            <!-- pages -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes"><?php echo __("Likes");?>
</a></strong>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['pages'], '_page');
$_smarty_tpl->tpl_vars['_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->do_else = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
">
                            <img alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" />
                            <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
                              <?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>

                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- pages -->

            <!-- groups -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled'] && count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups"><?php echo __("Groups");?>
</a></strong>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['groups'], '_group');
$_smarty_tpl->tpl_vars['_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->do_else = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
">
                            <img alt="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
" />
                            <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
">
                              <?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>

                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- groups -->

            <!-- events -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled'] && count($_smarty_tpl->tpl_vars['profile']->value['events']) > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/events"><?php echo __("Events");?>
</a></strong>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['events'], '_event');
$_smarty_tpl->tpl_vars['_event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
$_smarty_tpl->tpl_vars['_event']->do_else = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                            <img alt="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
" />
                            <div style="" class="name" title="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
">
                              <?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>

                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- events -->

            <!-- mini footer -->
            <?php $_smarty_tpl->_subTemplateRender('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- mini footer -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-lg-8 order-1 order-lg-2">

            <!-- publisher -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_node_can_monetize_content'=>$_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content'],'_node_monetization_enabled'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_enabled'],'_node_monetization_plans'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_plans'],'_privacy'=>true), 0, false);
?>
              <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['wall_posts_enabled'] && ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_wall'] == 'friends' && $_smarty_tpl->tpl_vars['profile']->value['we_friends'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_wall'] == 'public')) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"user",'_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'_privacy'=>true), 0, true);
?>
              <?php }?>

            <?php }?>
            <!-- publisher -->

            <!-- pinned post -->
            <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value), 0, false);
?>
            <?php }?>
            <!-- pinned post -->

            <!-- posts -->
            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id']), 0, false);
?>
            <!-- posts -->

          </div>
          <!-- right panel -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "friends") {?>
          <!-- friends -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Friends");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends">
                      <?php echo __("Friends");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscriptions"><?php echo __("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['friends'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_darker'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="friends" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have friends to show");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- friends -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followers") {?>
          <!-- followers -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Followers");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers">
                      <?php echo __("Followers");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscriptions"><?php echo __("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['followers']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['followers'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_darker'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>

                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['followers_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="followers" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have followers to show");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- followers -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followings") {?>
          <!-- followings -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Followings");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings">
                      <?php echo __("Followings");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followings_count'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscriptions"><?php echo __("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['followings']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['followings'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_darker'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>

                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['followings_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="followings" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have followings to show");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- followings -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "subscribers") {?>
          <!-- subscribers -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Subscribers");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscribers">
                      <?php echo __("Subscribers");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['subscribers_count'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscriptions"><?php echo __("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['subscribers']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['subscribers'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_darker'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['subscribers_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="subscribers" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type="user">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have subscribers to show");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- subscribers -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "subscriptions") {?>
          <!-- subscriptions -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Subscribers");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/subscriptions">
                      <?php echo __("Subscriptions");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['subscriptions_count'];?>
</span>
                    </a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['subscriptions']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['subscriptions'], '_subscription');
$_smarty_tpl->tpl_vars['_subscription']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_subscription']->value) {
$_smarty_tpl->tpl_vars['_subscription']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['_subscription']->value['node_type'] == "profile") {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_user'=>$_smarty_tpl->tpl_vars['_subscription']->value,'_tpl'=>"box",'_connection'=>'unsubscribe','_darker'=>true), 0, true);
?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['_subscription']->value['node_type'] == "page") {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_page'=>$_smarty_tpl->tpl_vars['_subscription']->value,'_tpl'=>"box",'_connection'=>'unsubscribe','_darker'=>true), 0, true);
?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['_subscription']->value['node_type'] == "group") {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_group'=>$_smarty_tpl->tpl_vars['_subscription']->value,'_tpl'=>"box",'_connection'=>'unsubscribe','_darker'=>true), 0, true);
?>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['subscriptions_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="subscriptions" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have subscriptions to show");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- subscriptions -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
          <!-- photos -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'price'=>$_smarty_tpl->tpl_vars['profile']->value['user_monetization_min_price']), 0, false);
?>
            <?php } else { ?>
              <div class="card panel-photos">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['photos']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['photos'], 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_can_pin'=>true), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt20 js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have photos to show");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- photos -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
          <!-- albums -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'price'=>$_smarty_tpl->tpl_vars['profile']->value['user_monetization_min_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['albums']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['albums'], 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                        <span><?php echo __("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have albums to show");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
          <!-- albums -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'price'=>$_smarty_tpl->tpl_vars['profile']->value['user_monetization_min_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card panel-photos">
                <div class="card-header with-icon with-nav">
                  <!-- back to albums -->
                  <div class="float-end">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums" class="btn btn-md btn-light">
                      <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Back to Albums");?>

                    </a>
                  </div>
                  <!-- back to albums -->

                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>
          <!-- videos -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'price'=>$_smarty_tpl->tpl_vars['profile']->value['user_monetization_min_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card panel-videos">
                <div class="card-header with-icon">
                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Videos");?>

                  </div>
                  <!-- panel title -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['profile']->value['videos']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['videos'], 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
 <?php echo __("doesn't have videos to show");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- videos -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "products") {?>
          <!-- products -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'price'=>$_smarty_tpl->tpl_vars['profile']->value['user_monetization_min_price']), 0, true);
?>
            <?php } else { ?>
              <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
                <ul class="row">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <!-- see-more -->
                <div class="alert alert-post see-more js_see-more" data-get="products" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                  <span><?php echo __("See More");?>
</span>
                  <div class="loader loader_small x-hidden"></div>
                </div>
                <!-- see-more -->
              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php }?>
            <?php }?>
          </div>
          <!-- products -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "likes") {?>
          <!-- likes -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Likes");?>

                <!-- panel title -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                  <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['pages'], '_page');
$_smarty_tpl->tpl_vars['_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="profile_pages" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                        <span><?php echo __("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php }?>
                <?php } else { ?>
                  <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- likes -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
          <!-- groups -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Groups");?>

                <!-- panel title -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                  <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['groups'], '_group');
$_smarty_tpl->tpl_vars['_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="profile_groups" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                        <span><?php echo __("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php }?>
                <?php } else { ?>
                  <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- groups -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "events") {?>
          <!-- events -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Events");?>

                <!-- panel title -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_events'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_events'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                  <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) > 0) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['events'], '_event');
$_smarty_tpl->tpl_vars['_event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
$_smarty_tpl->tpl_vars['_event']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="profile_events" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                        <span><?php echo __("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php }?>
                <?php } else { ?>
                  <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- events -->

        <?php }?>
        <!-- view content -->
      </div>
      <!-- profile-content -->

      <!-- footer links -->
      <?php if ($_smarty_tpl->tpl_vars['view']->value != '') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
      <!-- footer links -->
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['gift']->value) {?>
  <?php echo '<script'; ?>
>
    $(function() {
      modal('#gift');
    });
  <?php echo '</script'; ?>
>
<?php }
}
}
