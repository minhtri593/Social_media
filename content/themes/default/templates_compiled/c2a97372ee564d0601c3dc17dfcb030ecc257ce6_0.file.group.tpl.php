<?php
/* Smarty version 4.3.4, created on 2024-11-12 02:15:11
  from 'C:\xampp\htdocs\content\themes\default\templates\group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732ba2fc14631_80892202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a97372ee564d0601c3dc17dfcb030ecc257ce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\group.tpl',
      1 => 1702523651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 43,
    'file:_ads.tpl' => 1,
    'file:__feeds_user.tpl' => 7,
    'file:__feeds_photo.tpl' => 2,
    'file:_footer_mini.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 2,
    'file:_chatbox.tpl' => 1,
    'file:_need_subscription.tpl' => 4,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6732ba2fc14631_80892202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
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
          <?php if ($_smarty_tpl->tpl_vars['group']->value['group_cover_id']) {?>
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover_full'];?>
">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped js_lightbox" data-init-position="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">
            <!-- cropped-cover -->
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['group']->value['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
                <div class="dropdown-menu action-dropdown-menu">
                  <!-- upload -->
                  <div class="dropdown-item pointer js_x-uploader" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
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
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=cover&type=group&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
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
              <div class="profile-cover-position <?php if (!$_smarty_tpl->tpl_vars['group']->value['group_cover']) {?>x-hidden<?php }?>">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['group']->value['group_cover']) {?>x-hidden<?php }?>">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
              </div>
            </div>

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
          <img <?php if ($_smarty_tpl->tpl_vars['group']->value['group_picture_id']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture_id'];?>
" data-context="album" data-image="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture_full'];?>
" <?php } elseif (!$_smarty_tpl->tpl_vars['group']->value['group_picture_default']) {?> class="js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">

          <?php if ($_smarty_tpl->tpl_vars['group']->value['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-avatar-change">
              <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
              <div class="dropdown-menu action-dropdown-menu">
                <!-- upload -->
                <div class="dropdown-item pointer js_x-uploader" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
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
                <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=avatar&type=group&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
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
            <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['group']->value['group_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture_full'];?>
" data-handle="group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
            </div>
            <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['group']->value['group_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-trash js_delete-picture" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "public") {?>
            <i data-bs-toggle="tooltip" title='<?php echo __("Public Group");?>
' class="fa fa-globe fa-fw privacy-badge"></i>
          <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed") {?>
            <i data-bs-toggle="tooltip" title='<?php echo __("Closed Group");?>
' class="fa fa-unlock-alt fa-fw privacy-badge"></i>
          <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "secret") {?>
            <i data-bs-toggle="tooltip" title='<?php echo __("Secret Group");?>
' class="fa fa-lock fa-fw privacy-badge"></i>
          <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <!-- join -->
          <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
            <button type="button" class="btn btn-md btn-success btn-delete rounded-pill js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];?>
">
              <i class="fa fa-check"></i>
              <span class="d-none d-xxl-inline-block ml5"><?php echo __("Joined");?>
</span>
            </button>
          <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "pending") {?>
            <button type="button" class="btn btn-md btn-warning rounded-pill js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];?>
">
              <i class="fa fa-clock"></i>
              <span class="d-none d-xxl-inline-block ml5"><?php echo __("Pending");?>
</span>
            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-md btn-success rounded-pill js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->tpl_vars['group']->value['i_admin']) {?>public<?php } else {
echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];
}?>">
              <i class="fa fa-user-plus"></i>
              <span class="d-none d-xxl-inline-block ml5"><?php echo __("Join");?>
</span>
            </button>
          <?php }?>
          <!-- join -->

          <!-- report menu -->
          <div class="d-inline-block dropdown ml5">
            <button type="button" class="btn btn-icon rounded-pill btn-light" data-bs-toggle="dropdown" data-display="static">
              <i class="fa fa-ellipsis-v fa-fw"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end action-dropdown-menu">
              <!-- share -->
              <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/share.php?node_type=group&node_username=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                <div class="action">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                  <?php echo __("Share");?>

                </div>
                <div class="action-desc"><?php echo __("Share this group");?>
</div>
              </div>
              <!-- share -->
              <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['group']->value['i_admin']) {?>
                <!-- report -->
                <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=group&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
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
                <!-- manage -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups/edit_group/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                    <?php echo __("Edit in Admin Panel");?>

                  </a>
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp/groups/edit_group/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                    <?php echo __("Edit in Moderator Panel");?>

                  </a>
                <?php }?>
                <!-- manage -->
              <?php }?>
            </div>
          </div>
          <!-- report menu -->
        </div>
        <!-- profile-buttons -->

      </div>
      <!-- profile-header -->

      <!-- profile-tabs -->
      <div class="profile-tabs-wrapper d-flex justify-content-evenly">
        <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed" && $_smarty_tpl->tpl_vars['group']->value['i_joined'] != "approved" && !$_smarty_tpl->tpl_vars['group']->value['i_admin'] && !$_smarty_tpl->tpl_vars['user']->value->_is_admin && !$_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"info",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo __("About");?>
</span>
          </a>
        <?php } else { ?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo __("Timeline");?>
</span>
          </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "photos" || $_smarty_tpl->tpl_vars['view']->value == "albums" || $_smarty_tpl->tpl_vars['view']->value == "album") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo __("Photos");?>
</span>
          </a>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/videos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo __("Videos");?>
</span>
            </a>
          <?php }?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members" <?php if ($_smarty_tpl->tpl_vars['view']->value == "members" || $_smarty_tpl->tpl_vars['view']->value == "invites") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo __("Members");?>
</span>
          </a>
          <?php if ($_smarty_tpl->tpl_vars['group']->value['i_admin']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings" <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo __("Settings");?>
</span>
            </a>
          <?php }?>
        <?php }?>
      </div>
      <!-- profile-tabs -->

      <!-- profile-content -->
      <div class="row">
        <!-- view content -->
        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

          <!-- left panel -->
          <div class="<?php if ($_smarty_tpl->tpl_vars['group']->value['chatbox_enabled']) {?>col-lg-3 order-3 order-lg-1<?php } else { ?>col-lg-4 order-2 order-lg-1<?php }?>">
            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- panel [about] -->
            <div class="card">
              <div class="card-body">
                <?php if (!is_empty($_smarty_tpl->tpl_vars['group']->value['group_description'])) {?>
                  <div class="about-bio">
                    <div class="js_readmore overflow-hidden">
                      <?php echo nl2br((string) $_smarty_tpl->tpl_vars['group']->value['group_description'], (bool) 1);?>

                    </div>
                  </div>
                <?php }?>
                <ul class="about-list">
                  <!-- privacy -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"unhide",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "public") {?>
                        <i class="fa fa-globe fa-fw"></i>
                        <?php echo __("Public Group");?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed") {?>
                        <i class="fa fa-unlock-alt fa-fw"></i>
                        <?php echo __("Closed Group");?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "secret") {?>
                        <i class="fa fa-lock fa-fw"></i>
                        <?php echo __("Secret Group");?>

                      <?php }?>
                    </div>
                  </li>
                  <!-- privacy -->
                  <!-- members -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
 <?php echo __("members");?>
</a>
                    </div>
                  </li>
                  <!-- members -->
                  <!-- posts -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['group']->value['posts_count']);?>
 <?php echo __("Posts");?>

                    </div>
                  </li>
                  <!-- posts -->
                  <!-- photos -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['group']->value['photos_count']);?>
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
                        <?php echo __($_smarty_tpl->tpl_vars['group']->value['videos_count']);?>
 <?php echo __("Videos");?>

                      </div>
                    </li>
                    <!-- videos -->
                  <?php }?>
                  <!-- category -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tag",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['group']->value['group_category_name']);?>

                    </div>
                  </li>
                  <!-- category -->
                </ul>
              </div>
            </div>
            <!-- panel [about] -->

            <!-- custom fields [basic] -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"info",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><?php echo __("Info");?>
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
            <!-- custom fields [basic] -->

            <!-- subscribers -->
            <?php if ($_smarty_tpl->tpl_vars['group']->value['subscribers_count'] > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a></strong>
                  <span class="badge rounded-pill bg-info ml5"><?php echo $_smarty_tpl->tpl_vars['group']->value['subscribers_count'];?>
</span>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['subscribers'], '_subscriber');
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

            <!-- invite friends -->
            <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved" && $_smarty_tpl->tpl_vars['group']->value['invites']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <div class="float-end">
                    <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites"><?php echo __("See All");?>
</a></small>
                  </div>
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites"><?php echo __("Invite Friends");?>
</a></strong>
                </div>
                <div class="card-body">
                  <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['invites'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_small'=>true), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              </div>
            <?php }?>
            <!-- invite friends -->

            <!-- photos -->
            <?php if ($_smarty_tpl->tpl_vars['group']->value['photos']) {?>
              <div class="card panel-photos">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a></strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['photos'], 'photo');
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

            <!-- mini footer -->
            <?php $_smarty_tpl->_subTemplateRender('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- mini footer -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="<?php if ($_smarty_tpl->tpl_vars['group']->value['chatbox_enabled']) {?>col-lg-6 order-1 order-lg-2<?php } else { ?>col-lg-8 order-1 order-lg-2<?php }?>">

            <!-- super admin alert -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 && ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "secret" || $_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed") && ($_smarty_tpl->tpl_vars['group']->value['i_joined'] != "approved" && !$_smarty_tpl->tpl_vars['group']->value['i_admin'])) {?>
              <div class="alert alert-warning">
                <button type="button" class="btn-close float-end" data-dismiss="alert" aria-label="Close"></button>
                <div class="icon"><i class="fa fa-info-circle fa-2x"></i></div>
                <div class="text align-middle">
                  <?php echo __("You can access this as your account is system admin account!");?>

                </div>
              </div>
            <?php }?>
            <!-- super admin alert -->

            <?php if ($_smarty_tpl->tpl_vars['get']->value == "posts_group") {?>
              <!-- group requests -->
              <?php if ($_smarty_tpl->tpl_vars['group']->value['i_admin'] && $_smarty_tpl->tpl_vars['group']->value['total_requests'] > 0) {?>
                <div class="alert alert-light">
                  <button type="button" class="btn-close float-end" data-dismiss="alert" aria-label="Close"></button>
                  <div class="icon"><i class="fa fa-users fa-lg"></i></div>
                  <div class="text align-middle">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/requests" class="alert-link">
                      <span class="badge bg-secondary mr5"><?php echo $_smarty_tpl->tpl_vars['group']->value['total_requests'];?>
</span><?php if ($_smarty_tpl->tpl_vars['group']->value['total_requests'] == 1) {
echo __("person");
} else {
echo __("persons");
}?> <?php echo __("wants to join this group");?>

                    </a>
                  </div>
                </div>
              <?php }?>
              <!-- group requests -->

              <!-- group pending posts -->
              <?php if ($_smarty_tpl->tpl_vars['group']->value['pending_posts'] > 0) {?>
                <div class="alert alert-light">
                  <button type="button" class="btn-close float-end" data-dismiss="alert" aria-label="Close"></button>
                  <div class="icon"><i class="fa fa-comments fa-lg"></i></div>
                  <div class="text align-middle">
                    <a href="?pending" class="alert-link">
                      <?php if ($_smarty_tpl->tpl_vars['group']->value['i_admin']) {?>
                        <span class="badge bg-secondary mr5"><?php echo $_smarty_tpl->tpl_vars['group']->value['pending_posts'];?>
</span><?php if ($_smarty_tpl->tpl_vars['group']->value['pending_posts'] == 1) {
echo __("post");
} else {
echo __("posts");
}?> <?php echo __("pending needs your approval");?>

                      <?php } else { ?>
                        <?php echo __("You have");?>
<span class="badge bg-secondary mlr5"><?php echo $_smarty_tpl->tpl_vars['group']->value['pending_posts'];?>
</span><?php if ($_smarty_tpl->tpl_vars['group']->value['pending_posts'] == 1) {
echo __("post");
} else {
echo __("posts");
}?> <?php echo __("pending");?>

                      <?php }?>
                    </a>
                  </div>
                </div>
              <?php }?>
              <!-- group pending posts -->

              <!-- publisher -->
              <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved" && ($_smarty_tpl->tpl_vars['group']->value['group_publish_enabled'] || (!$_smarty_tpl->tpl_vars['group']->value['group_publish_enabled'] && $_smarty_tpl->tpl_vars['group']->value['i_admin']))) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"group",'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id'],'_node_can_monetize_content'=>$_smarty_tpl->tpl_vars['group']->value['can_monetize_content'],'_node_monetization_enabled'=>$_smarty_tpl->tpl_vars['group']->value['group_monetization_enabled'],'_node_monetization_plans'=>$_smarty_tpl->tpl_vars['group']->value['group_monetization_plans']), 0, false);
?>
              <?php }?>
              <!-- publisher -->

              <!-- pinned post -->
              <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value,'_get'=>"posts_group"), 0, false);
?>
              <?php }?>
              <!-- pinned post -->

              <!-- posts -->
              <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_group",'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id']), 0, false);
?>
              <!-- posts -->
            <?php } else { ?>
              <!-- posts -->
              <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>$_smarty_tpl->tpl_vars['get']->value,'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id'],'_title'=>__("Pending Posts")), 0, true);
?>
              <!-- posts -->
            <?php }?>
          </div>
          <!-- right panel -->

          <!-- chatbox -->
          <?php if ($_smarty_tpl->tpl_vars['group']->value['chatbox_enabled']) {?>
            <div class="col-lg-3 order-2 order-lg-3">
              <?php $_smarty_tpl->_subTemplateRender('file:_chatbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_node_type'=>"group",'_node'=>$_smarty_tpl->tpl_vars['group']->value), 0, false);
?>
            </div>
          <?php }?>
          <!-- chatbox -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
          <!-- photos -->
          <div class="col-12">
            <?php if ($_smarty_tpl->tpl_vars['group']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'group','node_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id'],'price'=>$_smarty_tpl->tpl_vars['group']->value['group_monetization_min_price']), 0, false);
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['photos']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['photos'], 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type='group'>
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have photos");?>

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
            <?php if ($_smarty_tpl->tpl_vars['group']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'group','node_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id'],'price'=>$_smarty_tpl->tpl_vars['group']->value['group_monetization_min_price']), 0, true);
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['albums']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['albums'], 'album');
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
                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type='group'>
                        <span><?php echo __("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have albums");?>

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
            <?php if ($_smarty_tpl->tpl_vars['group']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'group','node_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id'],'price'=>$_smarty_tpl->tpl_vars['group']->value['group_monetization_min_price']), 0, true);
?>
            <?php } else { ?>
              <div class="card panel-photos">
                <div class="card-header with-icon with-nav">
                  <!-- back to albums -->
                  <div class="float-end">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
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
            <?php if ($_smarty_tpl->tpl_vars['group']->value['needs_subscription']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'group','node_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id'],'price'=>$_smarty_tpl->tpl_vars['group']->value['group_monetization_min_price']), 0, true);
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
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['videos']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['videos'], 'video');
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
                    <div class="alert alert-post see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type='group'>
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have videos");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- videos -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "members") {?>
          <!-- members -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Members");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members">
                      <?php echo __("Members");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites"><?php echo __("Invites");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] > 0) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['members'], '_user');
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

                  <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="group_members" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have members");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- members -->

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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members"><?php echo __("Members");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/subscribers">
                      <?php echo __("Subscribers");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['group']->value['subscribers_count'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites"><?php echo __("Invites");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->tpl_vars['group']->value['subscribers_count'] > 0) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['subscribers'], '_user');
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
                  <?php if (count($_smarty_tpl->tpl_vars['group']->value['subscribers']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="subscribers" data-uid="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type="group">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have subscribers");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- subscribers -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>
          <!-- invites -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Invites");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members"><?php echo __("Members");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/subscribers"><?php echo __("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites">
                      <?php echo __("Invites");?>

                    </a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['group']->value['invites']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['invites'], '_user');
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

                  <?php if (count($_smarty_tpl->tpl_vars['group']->value['invites']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="group_invites" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo __("No friends to invite");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- invites -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body with-nav">
                <ul class="side-nav">
                  <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Group Settings");?>

                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] != "public") {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "requests") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/requests">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Join Requests");?>

                      </a>
                    </li>
                  <?php }?>
                  <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "members") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/members">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Members");?>

                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "monetization") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/monetization">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Monetization");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/delete">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo __("Delete Group");?>

                      </a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="card">
              <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Group Settings");?>

                </div>
                <form class="js_ajax-forms" data-url="modules/create.php?type=group&do=edit&edit=settings&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label" for="title"><?php echo __("Name Your Group");?>
</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder='<?php echo __("Name of your group");?>
' value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="username"><?php echo __("Group Username");?>
</label>
                      <div class="input-group">
                        <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span>
                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                      </div>
                      <div class="form-text">
                        <?php echo __("Can only contain alphanumeric characters (A–Z, 0–9) and periods ('.')");?>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="privacy"><?php echo __("Select Privacy");?>
</label>
                      <select class="form-select" name="privacy">
                        <option <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "public") {?>selected<?php }?> value="public"><?php echo __("Public Group");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed") {?>selected<?php }?> value="closed"><?php echo __("Closed Group");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "secret") {?>selected<?php }?> value="secret"><?php echo __("Secret Group");?>
</option>
                      </select>
                      <div class="form-text">
                        (<?php echo __("Note: Change group privacy to public will approve any pending join requests");?>
)
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="title"><?php echo __("Category");?>
</label>
                      <select class="form-select" name="category" id="category">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['group']->value['group_category']), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="description"><?php echo __("About");?>
</label>
                      <textarea class="form-control" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>
</textarea>
                    </div>
                    <!-- custom fields -->
                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
                    <?php }?>
                    <!-- custom fields -->

                    <div class="divider"></div>

                    <div class="form-table-row">
                      <div class="avatar">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                      </div>
                      <div>
                        <div class="form-label h6"><?php echo __("Chat Box");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Enable chat box for this group");?>
</div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="chatbox_enabled">
                          <input type="checkbox" name="chatbox_enabled" id="chatbox_enabled" <?php if ($_smarty_tpl->tpl_vars['group']->value['chatbox_enabled']) {?>checked<?php }?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>

                    <div class="divider"></div>

                    <div class="form-table-row">
                      <div>
                        <div class="form-label h6"><?php echo __("Members Can Publish Posts?");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Members can publish posts or only group admins");?>
</div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="group_publish_enabled">
                          <input type="checkbox" name="group_publish_enabled" id="group_publish_enabled" <?php if ($_smarty_tpl->tpl_vars['group']->value['group_publish_enabled']) {?>checked<?php }?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>

                    <div class="form-table-row">
                      <div>
                        <div class="form-label h6"><?php echo __("Post Approval");?>
</div>
                        <div class="form-text d-none d-sm-block">
                          <?php echo __("All posts must be approved by a group admin");?>
<br>
                          (<?php echo __("Note: Disable it will approve any pending posts");?>
)
                        </div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="group_publish_approval_enabled">
                          <input type="checkbox" name="group_publish_approval_enabled" id="group_publish_approval_enabled" <?php if ($_smarty_tpl->tpl_vars['group']->value['group_publish_approval_enabled']) {?>checked<?php }?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>

                    <!-- error -->
                    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
                    <!-- error -->
                  </div>
                  <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                  </div>
                </form>
              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "requests") {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Member Requests");?>

                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->tpl_vars['group']->value['requests']) {?>
                    <ul>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['requests'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['requests']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="group_requests" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                        <span><?php echo __("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo __("No Requests");?>

                    </p>
                  <?php }?>
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "members") {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Members");?>

                </div>
                <div class="card-body">
                  <!-- admins -->
                  <div class="heading-small mb20">
                    <?php echo __("Admins");?>
 <span class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['group']->value['group_admins_count'];?>
)</span>
                  </div>
                  <div class="pl-md-4">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['group_admins']) {?>
                      <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['group_admins'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>

                      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_admins_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                        <!-- see-more -->
                        <div class="alert alert-post see-more js_see-more" data-get="group_admins" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                          <span><?php echo __("See More");?>
</span>
                          <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                      <?php }?>
                    <?php } else { ?>
                      <p class="text-center text-muted mt10">
                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have admins");?>

                      </p>
                    <?php }?>
                  </div>
                  <!-- admins -->

                  <div class="divider"></div>

                  <!-- members -->
                  <div class="heading-small mb20">
                    <?php echo __("All Members");?>
 <span class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
)</span>
                  </div>
                  <div class="pl-md-4">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] > 0) {?>
                      <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['members'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>

                      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                        <!-- see-more -->
                        <div class="alert alert-post see-more js_see-more" data-get="group_members_manage" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                          <span><?php echo __("See More");?>
</span>
                          <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                      <?php }?>
                    <?php } else { ?>
                      <p class="text-center text-muted mt10">
                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have members");?>

                      </p>
                    <?php }?>
                  </div>
                  <!-- members -->
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "monetization") {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Monetization");?>

                </div>
                <div class="card-body">
                  <div class="alert alert-primary">
                    <div class="text">
                      <strong><?php echo __("Content Monetization");?>
</strong><br>
                      <?php echo __("Now you can earn money from your content. Via paid posts or subscriptions plans.");?>

                      <br>
                      <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_commission'] > 0) {?>
                        <?php echo __("There is commission");?>
 <strong><span class="badge rounded-pill bg-warning"><?php echo $_smarty_tpl->tpl_vars['system']->value['monetization_commission'];?>
%</span></strong> <?php echo __("will be deducted");?>
.
                        <br>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_withdraw_enabled']) {?>
                        <?php echo __("You can");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/monetization/payments" target="_blank"><?php echo __("withdraw your money");?>
</a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_transfer_enabled']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_withdraw_enabled']) {
echo __("or");?>
 <?php }?>
                        <?php echo __("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo __("wallet");?>
</a>
                      <?php }?>
                    </div>
                  </div>

                  <div class="alert alert-info">
                    <div class="icon">
                      <i class="fa fa-info-circle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                      <?php echo __("Only super admin can manage monetization and money goes to his monetization money balance");?>
.
                    </div>
                  </div>

                  <div class="heading-small mb20">
                    <?php echo __("Monetization Settings");?>

                  </div>
                  <div class="pl-md-4">
                    <form class="js_ajax-forms" data-url="modules/create.php?type=group&do=edit&edit=monetization&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                      <div class="form-table-row">
                        <div class="avatar">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                        </div>
                        <div>
                          <div class="form-label h6"><?php echo __("Content Monetization");?>
</div>
                          <div class="form-text d-none d-sm-block"><?php echo __("Enable or disable monetization for your content");?>
</div>
                        </div>
                        <div class="text-end">
                          <label class="switch" for="group_monetization_enabled">
                            <input type="checkbox" name="group_monetization_enabled" id="group_monetization_enabled" <?php if ($_smarty_tpl->tpl_vars['group']->value['group_monetization_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-label">
                          <?php echo __("Subscriptions Plans");?>

                        </label>
                        <div class="col-md-9">
                          <div class="payment-plans">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['monetization_plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                              <div class="payment-plan">
                                <div class="text-xxlg"><?php echo __($_smarty_tpl->tpl_vars['plan']->value['title']);?>
</div>
                                <div class="text-xlg"><?php echo print_money($_smarty_tpl->tpl_vars['plan']->value['price']);?>
 / <?php if ($_smarty_tpl->tpl_vars['plan']->value['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['plan']->value['period_num'];
}?> <?php echo __(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['plan']->value['period'] )));?>
</div>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value['custom_description'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                                  <div><?php echo $_smarty_tpl->tpl_vars['plan']->value['custom_description'];?>
</div>
                                <?php }?>
                                <div class="mt10">
                                  <span class="text-link mr10 js_monetization-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['plan']->value['plan_id'];?>
">
                                    <i class="fa fa-trash-alt mr5"></i><?php echo __("Delete");?>

                                  </span>
                                  |
                                  <span data-toggle="modal" data-url="monetization/controller.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['plan']->value['plan_id'];?>
" class="text-link ml10">
                                    <i class="fa fa-pen mr5"></i><?php echo __("Edit");?>

                                  </span>
                                </div>
                              </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div data-toggle="modal" data-url="monetization/controller.php?do=add&node_id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
&node_type=group" class="payment-plan new"><?php echo __("Add new plan");?>
 </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                        </div>
                      </div>

                      <!-- success -->
                      <div class="alert alert-success mt15 mb0 x-hidden"></div>
                      <!-- success -->

                      <!-- error -->
                      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
                      <!-- error -->
                    </form>
                  </div>

                  <div class="divider"></div>

                  <div class="heading-small mb20">
                    <?php echo __("Monetization Balance");?>

                  </div>
                  <div class="pl-md-4">
                    <div class="row">
                      <!-- subscribers -->
                      <div class="col-sm-6">
                        <div class="section-title mb20">
                          <?php echo __("Group Subscribers");?>

                        </div>
                        <div class="stat-panel bg-gradient-info">
                          <div class="stat-cell">
                            <i class="fa fas fa-users bg-icon"></i>
                            <div class="h3 mtb10">
                              <?php echo $_smarty_tpl->tpl_vars['subscribers_count']->value;?>

                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- subscribers -->

                      <!-- money balance -->
                      <div class="col-sm-6">
                        <div class="section-title mb20">
                          <?php echo __("Monetization Money Balance");?>

                        </div>
                        <div class="stat-panel bg-gradient-primary">
                          <div class="stat-cell">
                            <i class="fa fa-donate bg-icon"></i>
                            <div class="h3 mtb10">
                              <?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_balance'],2));?>

                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- monetization balance -->
                    </div>
                  </div>
                </div>
              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Delete Group");?>

                </div>
                <div class="card-body">
                  <div class="alert alert-warning">
                    <div class="icon">
                      <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                      <?php echo __("Once you delete your group you will no longer can access it again");?>

                    </div>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-danger js_delete-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                      <?php echo __("Delete Group");?>

                    </button>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>

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
}
}
