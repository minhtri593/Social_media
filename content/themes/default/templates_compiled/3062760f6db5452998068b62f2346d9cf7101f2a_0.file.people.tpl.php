<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:42:26
  from 'C:\xampp\htdocs\content\themes\default\templates\people.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731fbb2292814_82868695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3062760f6db5452998068b62f2346d9cf7101f2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\people.tpl',
      1 => 1699255769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_user.tpl' => 4,
    'file:__custom_fields.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6731fbb2292814_82868695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- left panel -->

    <!-- content panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

      <!-- tabs -->
      <div class="content-tabs rounded-sm shadow-sm clearfix">
        <ul>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "find") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people"><?php echo __("Discover");?>
</a>
          </li>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "friend_requests") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests">
              <?php echo __("Friend Requests");?>

              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) {?>
                <span class="badge badge-lg bg-info ml5"><?php echo count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']);?>
</span>
              <?php }?>
            </a>
          </li>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "sent_requests") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/sent_requests">
              <?php echo __("Sent Requests");?>

              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent_total']) {?>
                <span class="badge badge-lg bg-warning ml5"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent_total'];?>
</span>
              <?php }?>
            </a>
          </li>
        </ul>
      </div>
      <!-- tabs -->

      <!-- content -->
      <div class="row">
        <!-- left panel -->
        <div class="col-lg-8">
          <div class="card">

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
              <div class="card-header bg-transparent">
                <strong><?php echo __("People You May Know");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['people']->value) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add"), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>

                  <!-- see-more -->
                  <?php if (count($_smarty_tpl->tpl_vars['people']->value) >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                    <div class="alert alert-post see-more js_see-more" data-get="new_people">
                      <span><?php echo __("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                  <?php }?>
                  <!-- see-more -->
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo __("No people available");?>

                  </p>
                <?php }?>
              </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "find") {?>
              <div class="card-header bg-transparent">
                <strong><?php echo __("Search Results");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['people']->value) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo __("No people available for your search");?>

                  </p>
                <?php }?>
              </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "friend_requests") {?>
              <div class="card-header bg-transparent">
                <strong><?php echo __("Respond to Your Friend Request");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo __("No new requests");?>

                  </p>
                <?php }?>

                <!-- see-more -->
                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                  <div class="alert alert-info see-more js_see-more" data-get="friend_requests">
                    <span><?php echo __("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                <?php }?>
                <!-- see-more -->
              </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "sent_requests") {?>
              <div class="card-header bg-transparent">
                <strong><?php echo __("Friend Requests Sent");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"cancel"), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo __("No new requests");?>

                  </p>
                <?php }?>

                <!-- see-more -->
                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                  <div class="alert alert-info see-more js_see-more" data-get="friend_requests_sent">
                    <span><?php echo __("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                <?php }?>
                <!-- see-more -->
              </div>

            <?php }?>

          </div>
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-lg-4">
          <!-- search panel -->
          <div class="card">
            <div class="card-header">
              <i class="fa fa-search mr10"></i><?php echo __("Search");?>

            </div>
            <div class="card-body">
              <form action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/find" method="post">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['location_finder_enabled']) {?>
                  <div class="form-group">
                    <label class="form-label"><?php echo __("Distance");?>
</label>
                    <div class="d-grid">
                      <input type="range" class="custom-range mb10" min="1" max="5000" value="5000" name="distance_slider" oninput="this.form.distance_value.value=this.value">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><?php if ($_smarty_tpl->tpl_vars['system']->value['system_distance'] == "mile") {
echo __("ML");
} else {
echo __("KM");
}?></span>
                        <input type="number" class="form-control" min="1" max="5000" value="5000" name="distance_value" oninput="this.form.distance_slider.value=this.value">
                      </div>
                    </div>
                  </div>
                <?php }?>
                <!-- keyword -->
                <div class="form-group">
                  <label class="form-label"><?php echo __("Keyword");?>
</label>
                  <input type="text" class="form-control" name="query">
                </div>
                <!-- keyword -->
                <!-- gender -->
                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['system']->value['genders_disabled']) {?>x-hidden<?php }?>">
                  <label class="form-label"><?php echo __("Gender");?>
</label>
                  <select class="form-select" name="gender">
                    <option value="any"><?php echo __("Any");?>
</option>
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
                <!-- gender -->
                <!-- relationship -->
                <?php if ($_smarty_tpl->tpl_vars['system']->value['relationship_info_enabled']) {?>
                  <div class="form-group">
                    <label class="form-label"><?php echo __("Relationship");?>
</label>
                    <select class="form-select" name="relationship">
                      <option value="any"><?php echo __("Any");?>
</option>
                      <option value="single"><?php echo __("Single");?>
</option>
                      <option value="relationship"><?php echo __("In a relationship");?>
</option>
                      <option value="married"><?php echo __("Married");?>
</option>
                      <option value="complicated"><?php echo __("It's complicated");?>
</option>
                      <option value="separated"><?php echo __("Separated");?>
</option>
                      <option value="divorced"><?php echo __("Divorced");?>
</option>
                      <option value="widowed"><?php echo __("Widowed");?>
</option>
                    </select>
                  </div>
                <?php }?>
                <!-- relationship -->
                <!-- online status -->
                <div class="form-group">
                  <label class="form-label"><?php echo __("Online Status");?>
</label>
                  <select class="form-select" name="status">
                    <option value="any"><?php echo __("Any");?>
</option>
                    <option value="online"><?php echo __("Online");?>
</option>
                    <option value="offline"><?php echo __("Offline");?>
</option>
                  </select>
                </div>
                <!-- online status -->
                <!-- custom fields -->
                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true,'_search'=>true), 0, false);
?>
                <?php }?>
                <!-- custom fields -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary" name="submit"><?php echo __("Search");?>
</button>
                </div>
              </form>
            </div>
          </div>
          <!-- search panel -->

          <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- right panel -->


      </div>
      <!-- content -->

    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
