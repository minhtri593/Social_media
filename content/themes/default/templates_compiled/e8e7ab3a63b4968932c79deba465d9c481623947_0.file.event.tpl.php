<?php
/* Smarty version 4.3.4, created on 2024-11-12 02:24:22
  from 'C:\xampp\htdocs\content\themes\default\templates\event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732bc56437331_59278989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e7ab3a63b4968932c79deba465d9c481623947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\event.tpl',
      1 => 1699201830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 36,
    'file:__feeds_user.tpl' => 2,
    'file:__feeds_photo.tpl' => 2,
    'file:_footer_mini.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 2,
    'file:_chatbox.tpl' => 1,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6732bc56437331_59278989 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="profile-header no-avatar">
        <!-- profile-cover -->
        <div class="profile-cover-wrapper">
          <?php if ($_smarty_tpl->tpl_vars['event']->value['event_cover_id']) {?>
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_full'];?>
">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped js_lightbox" data-init-position="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
">
            <!-- cropped-cover -->
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
                <div class="dropdown-menu action-dropdown-menu">
                  <!-- upload -->
                  <div class="dropdown-item pointer js_x-uploader" data-handle="cover-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
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
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=cover&type=event&id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
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
              <div class="profile-cover-position <?php if (!$_smarty_tpl->tpl_vars['event']->value['event_cover']) {?>x-hidden<?php }?>">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['event']->value['event_cover']) {?>x-hidden<?php }?>">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
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

        <!-- profile-date -->
        <div class="profle-date-wrapper">
          <?php echo __(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%b"));?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%e");?>

        </div>
        <!-- profile-date -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>
            <i data-bs-toggle="tooltip" title='<?php echo __("Public Event");?>
' class="fa fa-globe fa-fw privacy-badge"></i>
          <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>
            <i data-bs-toggle="tooltip" title='<?php echo __("Closed Event");?>
' class="fa fa-unlock-alt fa-fw privacy-badge"></i>
          <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>
            <i data-bs-toggle="tooltip" title='<?php echo __("Secret Event");?>
' class="fa fa-lock fa-fw privacy-badge"></i>
          <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-meta -->
        <div class="profle-meta-wrapper">
          <i class="fa fa-clock"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%e");?>
 <?php echo __(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%b"));?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%I:%M %p");?>
 <?php echo __("to");?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%e");?>
 <?php echo __(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%b"));?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%I:%M %p");?>

        </div>
        <!-- profile-meta -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <!-- going & interested -->
          <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public" || $_smarty_tpl->tpl_vars['event']->value['i_joined'] || $_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
            <!-- going -->
            <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']['is_going']) {?>
              <button type="button" class="btn btn-md btn-light rounded-pill js_ungo-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                <i class="fa fa-check"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo __("Going");?>
</span>
              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-md btn-success rounded-pill js_go-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                <i class="fa fa-calendar-check"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo __("Going");?>
</span>
              </button>
            <?php }?>
            <!-- going -->

            <!-- interested -->
            <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']['is_interested']) {?>
              <button type="button" class="btn btn-md btn-light rounded-pill js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                <i class="fa fa-check"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo __("Interested");?>
</span>
              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-md btn-primary rounded-pill js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                <i class="fa fa-star"></i>
                <span class="d-none d-xxl-inline-block ml5"><?php echo __("Interested");?>
</span>
              </button>
            <?php }?>
            <!-- interested -->
          <?php }?>
          <!-- going & interested -->

          <!-- report menu -->
          <div class="d-inline-block dropdown ml5">
            <button type="button" class="btn btn-icon rounded-pill btn-light" data-bs-toggle="dropdown" data-display="static">
              <i class="fa fa-ellipsis-v fa-fw"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end action-dropdown-menu">
              <!-- share -->
              <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/share.php?node_type=event&node_username=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                <div class="action">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                  <?php echo __("Share");?>

                </div>
                <div class="action-desc"><?php echo __("Share this event");?>
</div>
              </div>
              <!-- share -->
              <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                <!-- report -->
                <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=event&id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
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
/admincp/events/edit_event/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                    <?php echo __("Edit in Admin Panel");?>

                  </a>
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp/events/edit_event/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
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
        <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public" || $_smarty_tpl->tpl_vars['event']->value['i_joined'] || $_smarty_tpl->tpl_vars['event']->value['i_admin'] || $_smarty_tpl->tpl_vars['user']->value->_is_admin || $_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo __("Timeline");?>
</span>
          </a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "photos" || $_smarty_tpl->tpl_vars['view']->value == "albums" || $_smarty_tpl->tpl_vars['view']->value == "album") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo __("Photos");?>
</span>
          </a>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/videos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo __("Videos");?>
</span>
            </a>
          <?php }?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/going" <?php if ($_smarty_tpl->tpl_vars['view']->value == "going" || $_smarty_tpl->tpl_vars['view']->value == "interested" || $_smarty_tpl->tpl_vars['view']->value == "invited" || $_smarty_tpl->tpl_vars['view']->value == "invites") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <span class="ml5 d-none d-xl-inline-block"><?php echo __("Members");?>
</span>
          </a>
          <?php if ($_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings" <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>class="active" <?php }?>>
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <span class="ml5 d-none d-xl-inline-block"><?php echo __("Settings");?>
</span>
            </a>
          <?php }?>
        <?php } else { ?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == "about") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"info",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("About");?>

          </a>
        <?php }?>
      </div>
      <!-- profile-tabs -->

      <!-- profile-content -->
      <div class="row">
        <!-- view content -->
        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

          <!-- left panel -->
          <div class="<?php if ($_smarty_tpl->tpl_vars['event']->value['chatbox_enabled']) {?>col-lg-3 order-3 order-lg-1<?php } else { ?>col-lg-4 order-2 order-lg-1<?php }?>">
            <!-- panel [about] -->
            <div class="card">
              <div class="card-body">
                <?php if (!is_empty($_smarty_tpl->tpl_vars['event']->value['event_description'])) {?>
                  <div class="about-bio">
                    <div class="js_readmore overflow-hidden">
                      <?php echo nl2br((string) $_smarty_tpl->tpl_vars['event']->value['event_description'], (bool) 1);?>

                    </div>
                  </div>
                <?php }?>
                <ul class="about-list">
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"unhide",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>
                        <i class="fa fa-globe fa-fw"></i>
                        <?php echo __("Public Event");?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>
                        <i class="fa fa-unlock-alt fa-fw"></i>
                        <?php echo __("Closed Event");?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>
                        <i class="fa fa-lock fa-fw"></i>
                        <?php echo __("Secret Event");?>

                      <?php }?>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"clock",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%e");?>
 <?php echo __(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%b"));?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%e");?>
 <?php echo __(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%b"));?>
<br>
                      <small class="text-muted">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%e");?>
 <?php echo __(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%b"));?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%I:%M %p");?>
 <?php echo __("to");?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%e");?>
 <?php echo __(smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%b"));?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%I:%M %p");?>

                      </small>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"profile",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Hosted By");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['user_name'];?>
"><?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['event']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['event']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['user_lastname'];
}?></a>
                    </div>
                  </li>
                  <!-- posts -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['event']->value['posts_count']);?>
 <?php echo __("Posts");?>

                    </div>
                  </li>
                  <!-- posts -->
                  <!-- photos -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['event']->value['photos_count']);?>
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
                        <?php echo __($_smarty_tpl->tpl_vars['event']->value['videos_count']);?>
 <?php echo __("Videos");?>

                      </div>
                    </li>
                    <!-- videos -->
                  <?php }?>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tag",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __($_smarty_tpl->tpl_vars['event']->value['event_category_name']);?>

                    </div>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['event']->value['event_location']) {?>
                    <!-- event location -->
                    <li>
                      <div class="about-list-item">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>

                      </div>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
                      <div style="margin-left: -20px; margin-right: -20px;">
                        <iframe width="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
&amp;q=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>
&amp;language=en"></iframe>
                      </div>
                    <?php }?>
                    <!-- event location -->
                  <?php }?>
                  <li class="divider mtb10"></li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"going",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/going"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_going'];?>
 <?php echo __("Going");?>
</a>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/interested"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_interested'];?>
 <?php echo __("Interested");?>
</a>
                    </div>
                  </li>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invitation",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invited"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_invited'];?>
 <?php echo __("Invited");?>
</a>
                    </div>
                  </li>
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

            <!-- invite friends -->
            <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined'] && $_smarty_tpl->tpl_vars['event']->value['invites']) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <div class="float-end">
                    <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invites"><?php echo __("See All");?>
</a></small>
                  </div>
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invites"><?php echo __("Invite Friends");?>
</a></strong>
                </div>
                <div class="card-body">
                  <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['invites'], '_user');
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
            <?php if ($_smarty_tpl->tpl_vars['event']->value['photos']) {?>
              <div class="card panel-photos">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a></strong>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['photos'], 'photo');
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
          <div class="<?php if ($_smarty_tpl->tpl_vars['event']->value['chatbox_enabled']) {?>col-lg-6 order-1 order-lg-2<?php } else { ?>col-lg-8 order-1 order-lg-2<?php }?>">
            <!-- super admin alert -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 && ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret" || $_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") && (!$_smarty_tpl->tpl_vars['event']->value['i_joined'] && !$_smarty_tpl->tpl_vars['event']->value['i_admin'])) {?>
              <div class="alert alert-warning">
                <button type="button" class="btn-close float-end" data-dismiss="alert" aria-label="Close"></button>
                <div class="icon"><i class="fa fa-info-circle fa-2x"></i></div>
                <div class="text align-middle">
                  <?php echo __("You can access this as your account is system admin account!");?>

                </div>
              </div>
            <?php }?>
            <!-- super admin alert -->

            <?php if ($_smarty_tpl->tpl_vars['get']->value == "posts_event") {?>
              <!-- event pending posts -->
              <?php if ($_smarty_tpl->tpl_vars['event']->value['pending_posts'] > 0) {?>
                <div class="alert alert-light">
                  <button type="button" class="btn-close float-end" data-dismiss="alert" aria-label="Close"></button>
                  <div class="icon"><i class="fa fa-comments fa-lg"></i></div>
                  <div class="text align-middle">
                    <a href="?pending" class="alert-link">
                      <?php if ($_smarty_tpl->tpl_vars['event']->value['i_admin']) {?>
                        <span class="badge bg-secondary mr5"><?php echo $_smarty_tpl->tpl_vars['event']->value['pending_posts'];?>
</span><?php if ($_smarty_tpl->tpl_vars['event']->value['pending_posts'] == 1) {
echo __("post");
} else {
echo __("posts");
}?> <?php echo __("pending needs your approval");?>

                      <?php } else { ?>
                        <?php echo __("You have");?>
<span class="badge bg-secondary mlr5"><?php echo $_smarty_tpl->tpl_vars['event']->value['pending_posts'];?>
</span><?php if ($_smarty_tpl->tpl_vars['event']->value['pending_posts'] == 1) {
echo __("post");
} else {
echo __("posts");
}?> <?php echo __("pending");?>

                      <?php }?>
                    </a>
                  </div>
                </div>
              <?php }?>
              <!-- event pending posts -->

              <!-- publisher -->
              <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined'] && ($_smarty_tpl->tpl_vars['event']->value['event_publish_enabled'] || (!$_smarty_tpl->tpl_vars['event']->value['event_publish_enabled'] && $_smarty_tpl->tpl_vars['event']->value['i_admin']))) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"event",'_id'=>$_smarty_tpl->tpl_vars['event']->value['event_id']), 0, false);
?>
              <?php }?>
              <!-- publisher -->

              <!-- pinned post -->
              <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value,'_get'=>"posts_event"), 0, false);
?>
              <?php }?>
              <!-- pinned post -->

              <!-- posts -->
              <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_event",'_id'=>$_smarty_tpl->tpl_vars['event']->value['event_id']), 0, false);
?>
              <!-- posts -->
            <?php } else { ?>
              <!-- posts -->
              <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>$_smarty_tpl->tpl_vars['get']->value,'_id'=>$_smarty_tpl->tpl_vars['event']->value['event_id'],'_title'=>__("Pending Posts")), 0, true);
?>
              <!-- posts -->
            <?php }?>
          </div>
          <!-- right panel -->

          <!-- chatbox -->
          <?php if ($_smarty_tpl->tpl_vars['event']->value['chatbox_enabled']) {?>
            <div class="col-lg-3 order-2 order-lg-3">
              <?php $_smarty_tpl->_subTemplateRender('file:_chatbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_node_type'=>"event",'_node'=>$_smarty_tpl->tpl_vars['event']->value), 0, false);
?>
            </div>
          <?php }?>
          <!-- chatbox -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
          <!-- photos -->
          <div class="col-12">
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
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums"><?php echo __("Albums");?>
</a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['event']->value['photos']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['photos'], 'photo');
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
                  <div class="alert alert-post see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                    <span><?php echo __("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                  <!-- see-more -->
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have photos");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- photos -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
          <!-- albums -->
          <div class="col-12">
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
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums"><?php echo __("Albums");?>
</a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['event']->value['albums']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['albums'], 'album');
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
                  <?php if (count($_smarty_tpl->tpl_vars['event']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have albums");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
          <!-- albums -->
          <div class="col-12">
            <div class="card panel-photos">
              <div class="card-header with-icon with-nav">
                <!-- back to albums -->
                <div class="float-end">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
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
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
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
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>
          <!-- videos -->
          <div class="col-12">
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
                <?php if ($_smarty_tpl->tpl_vars['event']->value['videos']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['videos'], 'video');
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
                  <div class="alert alert-post see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                    <span><?php echo __("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                  <!-- see-more -->
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have videos");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- videos -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "going" || $_smarty_tpl->tpl_vars['view']->value == "interested" || $_smarty_tpl->tpl_vars['view']->value == "invited" || $_smarty_tpl->tpl_vars['view']->value == "invites") {?>
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
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "going") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/going">
                      <?php echo __("Going");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_going'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "interested") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/interested">
                      <?php echo __("Interested");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_interested'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "invited") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invited">
                      <?php echo __("Invited");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_invited'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']) {?>
                    <li class="nav-item">
                      <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invites">
                        <?php echo __("Invites");?>

                      </a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['event']->value['total_members'] > 0) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['members'], '_user');
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

                  <?php if ($_smarty_tpl->tpl_vars['event']->value['total_members'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="event_<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>
                      <?php echo __("No friends to invite");?>

                    <?php } else { ?>
                      <?php echo __("No people available");?>

                    <?php }?>
                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- members -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body with-nav">
                <ul class="side-nav">
                  <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Event Settings");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings/delete">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Delete Event");?>

                    </a>
                  </li>
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
                  <?php echo __("Event Settings");?>

                </div>
                <form class="js_ajax-forms" data-url="modules/create.php?type=event&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label" for="title"><?php echo __("Name Your Event");?>
</label>
                      <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="location"><?php echo __("Location");?>
</label>
                      <input type="text" class="form-control" name="location" id="location" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label"><?php echo __("Start Date");?>
</label>
                      <input type="datetime-local" class="form-control" name="start_date" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_start_date'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label"><?php echo __("End Date");?>
</label>
                      <input type="datetime-local" class="form-control" name="end_date" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_end_date'];?>
">
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="privacy"><?php echo __("Select Privacy");?>
</label>
                      <select class="form-select" name="privacy">
                        <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>selected<?php }?> value="public"><?php echo __("Public Event");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>selected<?php }?> value="closed"><?php echo __("Closed Event");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>selected<?php }?> value="secret"><?php echo __("Secret Event");?>
</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="category"><?php echo __("Category");?>
</label>
                      <select class="form-select" name="category">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['event']->value['event_category']), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="description"><?php echo __("About");?>
</label>
                      <textarea class="form-control" name="description"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_description'];?>
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
                        <div class="form-text d-none d-sm-block"><?php echo __("Enable chat box for this event");?>
</div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="chatbox_enabled">
                          <input type="checkbox" name="chatbox_enabled" id="chatbox_enabled" <?php if ($_smarty_tpl->tpl_vars['event']->value['chatbox_enabled']) {?>checked<?php }?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>

                    <div class="divider"></div>

                    <div class="form-table-row">
                      <div>
                        <div class="form-label h6"><?php echo __("Members Can Publish Posts?");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Members can publish posts or only event admin");?>
</div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="event_publish_enabled">
                          <input type="checkbox" name="event_publish_enabled" id="event_publish_enabled" <?php if ($_smarty_tpl->tpl_vars['event']->value['event_publish_enabled']) {?>checked<?php }?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>

                    <div class="form-table-row">
                      <div>
                        <div class="form-label h6"><?php echo __("Post Approval");?>
</div>
                        <div class="form-text d-none d-sm-block">
                          <?php echo __("All posts must be approved by the event admin");?>
<br>
                          (<?php echo __("Note: Disable it will approve any pending posts");?>
)
                        </div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="event_publish_approval_enabled">
                          <input type="checkbox" name="event_publish_approval_enabled" id="event_publish_approval_enabled" <?php if ($_smarty_tpl->tpl_vars['event']->value['event_publish_approval_enabled']) {?>checked<?php }?>>
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
              <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
                <div class="card-header with-icon">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Delete Event");?>

                </div>
                <div class="card-body">
                  <div class="alert alert-warning">
                    <div class="icon">
                      <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                      <?php echo __("Once you delete your event you will no longer can access it again");?>

                    </div>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-danger js_delete-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                      <?php echo __("Delete Event");?>

                    </button>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "about") {?>
          <!-- info -->
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?php echo __("This event is private and you need to be invited to see its info, members and posts");?>

              </div>
            </div>
          </div>
          <!-- info -->

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
