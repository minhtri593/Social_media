<?php
/* Smarty version 4.3.4, created on 2024-11-17 09:25:03
  from 'C:\xampp\htdocs\content\themes\default\templates\admin.pro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6739b66f0d73b6_87415455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dc1d4483e9ef5aa6dc584ce9348a2f71495d1a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\admin.pro.tpl',
      1 => 1697477879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_6739b66f0d73b6_87415455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "packages") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New Package");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/packages" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-cubes mr5"></i><?php echo __("Pro System");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "packages") {?> &rsaquo; <?php echo __("Packages");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Package");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "subscribers") {?> &rsaquo; <?php echo __("Subscribers");
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {?> &rsaquo; <?php echo __("Earnings");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <form class="js_ajax-forms" data-url="admin/pro.php?do=settings">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"membership",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Pro Packages Enabled");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Enable pro packages to be used as upgrading plans or for subscriptions");?>
<br>
              <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="packages_enabled">
              <input type="checkbox" name="packages_enabled" id="packages_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Users Can Buy Packages From Wallet Balance");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Enable users to buy packages from their wallet balance");?>
<br>
              <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wallet"><?php echo __("Wallet System");?>
</a>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="packages_wallet_payment_enabled">
              <input type="checkbox" name="packages_wallet_payment_enabled" id="packages_wallet_payment_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_wallet_payment_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"noads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Ads FREE");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Disable any ads for all PRO user");?>

            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="packages_ads_free_enabled">
              <input type="checkbox" name="packages_ads_free_enabled" id="packages_ads_free_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_ads_free_enabled']) {?>checked<?php }?>>
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
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "packages") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Name");?>
</th>
              <th><?php echo __("Permissions");?>
</th>
              <th><?php echo __("Price");?>
</th>
              <th><?php echo __("Period");?>
</th>
              <th><?php echo __("Order");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

                  </a>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['package_permissions_group_id'] == 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['verification_badge_enabled']) {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/verified">
                        <?php echo __("Verified Permissions");?>

                      </a>
                    <?php } else { ?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/users">
                        <?php echo __("Users Permissions");?>

                      </a>
                    <?php }?>
                  <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_permissions_group_id'];?>
">
                      <?php echo $_smarty_tpl->tpl_vars['row']->value['permissions_group_title'];?>

                    </a>
                  <?php }?>
                </td>
                <td><?php echo print_money($_smarty_tpl->tpl_vars['row']->value['price']);?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['period'] == 'life') {?>
                    <?php echo __("Life Time");?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['period_num'];?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['period'] ));?>

                  <?php }?>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_order'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="package" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/pro.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['package_id'];?>
">
      <div class="card-body">

        <div class="alert alert-info">
          <div class="icon">
            <i class="fa fa-info-circle fa-2x"></i>
          </div>
          <div class="text pt5">
            <?php echo __("If package comes with verified badge and package permissions set to be");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/users"><?php echo __("Users Permissions");?>
</a> <?php echo __("so the");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/verified"><?php echo __("Verified Permissions");?>
</a> <?php echo __("will be used instead");?>

          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
">
            <div class="form-text">
              <?php echo __("You can set the price as 0 and it will be trial package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Paid Every");?>

          </label>
          <div class="col-md-9">
            <div class="row">
              <div class="col-sm-8">
                <input class="form-control" name="period_num" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['period_num'];?>
">
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="period">
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "day") {?>selected<?php }?> value="day"><?php echo __("Day");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "week") {?>selected<?php }?> value="week"><?php echo __("Week");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "month") {?>selected<?php }?> value="month"><?php echo __("Month");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "year") {?>selected<?php }?> value="year"><?php echo __("Year");?>
</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "life") {?>selected<?php }?> value="life"><?php echo __("Life Time");?>
</option>
                </select>
              </div>
            </div>
            <div class="form-text">
              <?php echo __("For example 15 days, 2 Months, 1 Year");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="text" class="form-control form-control-color" name="color" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['color'];?>
" />
              <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['color'];?>
" />
            </div>
            <div class="form-text">
              <?php echo __("The theme color for this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Icon");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['icon'] == '') {?>
              <div class="x-image">
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>

                </button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="icon" value="">
              </div>
            <?php } else { ?>
              <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
')">
                <button type="button" class="btn-close js_x-image-remover" title='<?php echo __("Remove");?>
'>

                </button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="icon" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
">
              </div>
            <?php }?>
            <div class="form-text">
              <?php echo __("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Package Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['package_permissions_group_id'] == '1') {?>selected<?php }?>>
                <?php echo __("Users Permissions");?>

              </option>
              <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['package_permissions_group_id'] == '2') {?>selected<?php }?>>
                <?php echo __("Verified Permissions");?>

              </option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['permissions_groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['package_permissions_group_id'] == $_smarty_tpl->tpl_vars['group']->value['permissions_group_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo __("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups"><?php echo __("Permissions Groups");?>
</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Videos Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_videos_categories" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['allowed_videos_categories'];?>
">
            <div class="form-text">
              <?php echo __("How many videos categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Blogs Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_blogs_categories" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['allowed_blogs_categories'];?>
">
            <div class="form-text">
              <?php echo __("How many blogs categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Market Products");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_products" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['allowed_products'];?>
">
            <div class="form-text">
              <?php echo __("How many market products allowed to sell for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Verification Badge Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="verification_badge_enabled">
              <input type="checkbox" name="verification_badge_enabled" id="verification_badge_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['verification_badge_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo __("Enable verification badge with this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Boost Posts Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_posts_enabled">
              <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['boost_posts_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo __("Enable boost posts feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Posts Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_posts" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_posts'];?>
">
            <div class="form-text">
              <?php echo __("Max posts boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Boost Pages Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_pages_enabled">
              <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['boost_pages_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo __("Enable boost pages feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Pages Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_pages" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_pages'];?>
">
            <div class="form-text">
              <?php echo __("Max pages boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Custom Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="custom_description" rows="5"><?php echo $_smarty_tpl->tpl_vars['data']->value['custom_description'];?>
</textarea>
            <div class="form-text">
              <?php echo __("Add more text to show it to your users");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="package_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['package_order'];?>
">
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

    <form class="js_ajax-forms" data-url="admin/pro.php?do=add">
      <div class="card-body">

        <div class="alert alert-info">
          <div class="icon">
            <i class="fa fa-info-circle fa-2x"></i>
          </div>
          <div class="text pt5">
            <?php echo __("If package comes with verified badge and package permissions set to be");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/users"><?php echo __("Users Permissions");?>
</a> <?php echo __("so the");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/verified"><?php echo __("Verified Permissions");?>
</a> <?php echo __("will be used instead");?>

          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="price">
            <div class="form-text">
              <?php echo __("You can set the price as 0 and it will be trial package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Paid Every");?>

          </label>
          <div class="col-md-9">
            <div class="row">
              <div class="col-sm-8">
                <input class="form-control" name="period_num">
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="period">
                  <option value="day"><?php echo __("Day");?>
</option>
                  <option value="week"><?php echo __("Week");?>
</option>
                  <option value="month"><?php echo __("Month");?>
</option>
                  <option value="year"><?php echo __("Year");?>
</option>
                  <option value="life"><?php echo __("Life Time");?>
</option>
                </select>
              </div>
            </div>
            <div class="form-text">
              <?php echo __("For example 15 days, 2 Months, 1 Year");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="color" class="form-control form-control-color" name="color" />
              <input type="color" class="form-control form-control-color" />
            </div>
            <div class="form-text">
              <?php echo __("The theme color for this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Icon");?>

          </label>
          <div class="col-md-9">
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>

              </button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="icon" value="">
            </div>
            <div class="form-text">
              <?php echo __("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Package Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="1">
                <?php echo __("Users Permissions");?>

              </option>
              <option value="2">
                <?php echo __("Verified Permissions");?>

              </option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions_groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo __("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups"><?php echo __("Permissions Groups");?>
</a><br>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Videos Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_videos_categories">
            <div class="form-text">
              <?php echo __("How many videos categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Blogs Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_blogs_categories">
            <div class="form-text">
              <?php echo __("How many blogs categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Market Products");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_products">
            <div class="form-text">
              <?php echo __("How many market products allowed to sell for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Verification Badge Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="verification_badge_enabled">
              <input type="checkbox" name="verification_badge_enabled" id="verification_badge_enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo __("Enable verification badge with this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Boost Posts Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_posts_enabled">
              <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo __("Enable boost posts feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Posts Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_posts">
            <div class="form-text">
              <?php echo __("Max posts boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Boost Pages Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_pages_enabled">
              <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo __("Enable boost pages feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Pages Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_pages">
            <div class="form-text">
              <?php echo __("Max pages boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Custom Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="custom_description" rows="5"></textarea>
            <div class="form-text">
              <?php echo __("Add more text to show it to your users");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="package_order">
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "subscribers") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("User");?>
</th>
              <th><?php echo __("Package");?>
</th>
              <th><?php echo __("Subscription");?>
</th>
              <th><?php echo __("Expiration");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <tr>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
</a></td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];
}?>
                  </a>
                </td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pro/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

                  </a>
                </td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['user_subscription_date'],"%e %B %Y");?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['period'] == "life") {?>
                    <?php echo __("Life Time");?>

                  <?php } else { ?>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['row']->value['subscription_timeleft'] > 0) {
echo __("Remaining");?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['subscription_timeleft'];?>
 <?php echo __("Days");
} else {
echo __("Expired");
}?>)
                  <?php }?>
                </td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {?>

    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-primary">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['total_earnings']->value,2));?>
</span><br>
              <span class="text-lg"><?php echo __("Total Earnings");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-info">
            <div class="stat-cell narrow">
              <i class="fa fa-dollar-sign bg-icon"></i>
              <span class="text-xxlg"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['month_earnings']->value,2));?>
</span><br>
              <span class="text-lg"><?php echo __("This Month Earnings");?>
</span><br>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("Package");?>
</th>
              <th><?php echo __("Total Sales");?>
</th>
              <th><?php echo __("Total Earnings");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sales'];?>
</td>
                <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['value']->value['earnings'],2));?>
</td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>

      <div id="admin-chart-earnings" class="admin-chart mt20"></div>
    </div>

  <?php }?>
</div><?php }
}
