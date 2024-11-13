<?php
/* Smarty version 4.3.4, created on 2024-11-11 14:18:49
  from 'C:\xampp\htdocs\content\themes\default\templates\settings.privacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67321249ee94b3_02220732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b76d27f3fb6b00483fc6f1c5b43fa5e34e2eb377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\settings.privacy.tpl',
      1 => 1699977810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
  ),
),false)) {
function content_67321249ee94b3_02220732 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"privacy",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Privacy");?>

</div>
<form class="js_ajax-forms" data-url="users/settings.php?edit=privacy">
  <div class="card-body">
    <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo __("Chat Enabled");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("If chat disabled you will appear offline and will not see who is online");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="user_chat_enabled">
            <input type="checkbox" name="user_chat_enabled" id="user_chat_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>
    <?php }?>

    <div class="form-table-row">
      <div class="avatar">
        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invitation",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
      </div>
      <div>
        <div class="form-label h6"><?php echo __("Email you with our newsletter");?>
</div>
        <div class="form-text d-none d-sm-block"><?php echo __("From time to time we send newsletter email to all of our members");?>
</div>
      </div>
      <div class="text-end">
        <label class="switch" for="user_newsletter_enabled">
          <input type="checkbox" name="user_newsletter_enabled" id="user_newsletter_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_newsletter_enabled']) {?>checked<?php }?>>
          <span class="slider round"></span>
        </label>
      </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_receive_tip']) {?>
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tip",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo __("Tips Enabled");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("Allow the send tips button on your profile");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="user_tips_enabled">
            <input type="checkbox" name="user_tips_enabled" id="user_tips_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_tips_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>
    <?php }?>

    <div class="row">
      <?php if ($_smarty_tpl->tpl_vars['system']->value['pokes_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can poke you");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-hand-point-right"></i></span>
            <select class="form-select" name="user_privacy_poke">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_poke'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_poke'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_poke'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("No One");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['gifts_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can send you gifts");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-gift"></i></span>
            <select class="form-select" name="user_privacy_gifts">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gifts'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gifts'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gifts'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("No One");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['wall_posts_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can post on your wall");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-newspaper"></i></span>
            <select class="form-select" name="user_privacy_wall">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['system']->value['genders_disabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("gender");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
            <select class="form-select" name="user_privacy_gender">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gender'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gender'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_gender'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['relationship_info_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("relationship");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-heart"></i></span>
            <select class="form-select" name="user_privacy_relationship">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("birthdate");?>
</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
          <select class="form-select" name="user_privacy_birthdate">
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
              <?php echo __("Everyone");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
              <?php echo __("Friends");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "me") {?>selected<?php }?> value="me">
              <?php echo __("Just Me");?>

            </option>
          </select>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("basic info");?>
</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
          <select class="form-select" name="user_privacy_basic">
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "public") {?>selected<?php }?> value="public">
              <?php echo __("Everyone");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "friends") {?>selected<?php }?> value="friends">
              <?php echo __("Friends");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "me") {?>selected<?php }?> value="me">
              <?php echo __("Just Me");?>

            </option>
          </select>
        </div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("work info");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
            <select class="form-select" name="user_privacy_work">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("location info");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
            <select class="form-select" name="user_privacy_location">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("education info");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-university"></i></span>
            <select class="form-select" name="user_privacy_education">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("other info");?>
</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-folder-plus"></i></span>
          <select class="form-select" name="user_privacy_other">
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "public") {?>selected<?php }?> value="public">
              <?php echo __("Everyone");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "friends") {?>selected<?php }?> value="friends">
              <?php echo __("Friends");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "me") {?>selected<?php }?> value="me">
              <?php echo __("Just Me");?>

            </option>
          </select>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("friends");?>
</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
          <select class="form-select" name="user_privacy_friends">
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
              <?php echo __("Everyone");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
              <?php echo __("Friends");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
              <?php echo __("Just Me");?>

            </option>
          </select>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("followers/followings");?>
</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
          <select class="form-select" name="user_privacy_followers">
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_followers'] == "public") {?>selected<?php }?> value="public">
              <?php echo __("Everyone");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_followers'] == "friends") {?>selected<?php }?> value="friends">
              <?php echo __("Friends");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_followers'] == "me") {?>selected<?php }?> value="me">
              <?php echo __("Just Me");?>

            </option>
          </select>
        </div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("subscriptions");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
            <select class="form-select" name="user_privacy_subscriptions">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_subscriptions'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_subscriptions'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_subscriptions'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("photos");?>
</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-images"></i></span>
          <select class="form-select" name="user_privacy_photos">
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "public") {?>selected<?php }?> value="public">
              <?php echo __("Everyone");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "friends") {?>selected<?php }?> value="friends">
              <?php echo __("Friends");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "me") {?>selected<?php }?> value="me">
              <?php echo __("Just Me");?>

            </option>
          </select>
        </div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("liked pages");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-flag"></i></span>
            <select class="form-select" name="user_privacy_pages">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("joined groups");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-users"></i></span>
            <select class="form-select" name="user_privacy_groups">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo __("Who can see your");?>
 <?php echo __("joined events");?>
</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
            <select class="form-select" name="user_privacy_events">
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "public") {?>selected<?php }?> value="public">
                <?php echo __("Everyone");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "friends") {?>selected<?php }?> value="friends">
                <?php echo __("Friends");?>

              </option>
              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "me") {?>selected<?php }?> value="me">
                <?php echo __("Just Me");?>

              </option>
            </select>
          </div>
        </div>
      <?php }?>
    </div>

    <!-- success -->
    <div class="alert alert-success mt15 mb0 x-hidden"></div>
    <!-- success -->

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
  </div>
  <div class="card-footer text-end">
    <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
  </div>
</form><?php }
}
