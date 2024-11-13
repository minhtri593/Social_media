<?php
/* Smarty version 4.3.4, created on 2024-11-12 00:27:17
  from 'C:\xampp\htdocs\content\themes\default\templates\admin.ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732a0e597e546_70784905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50377901715a5d0c8bbcfa657d18ad749f4c0118' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\admin.ads.tpl',
      1 => 1689526118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
  ),
),false)) {
function content_6732a0e597e546_70784905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card">

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <div class="card-header with-icon">
      <i class="fa fa-bullseye mr10"></i><?php echo __("Ads");?>
 &rsaquo; <?php echo __("Settings");?>

    </div>

    <form class="js_ajax-forms" data-url="admin/ads.php?do=settings">
      <div class="card-body">
        <!-- adblock-warning-message -->
        <div class="adblock-warning-message mb10">
          <?php echo __("Turn off the ad blocker or add this web page's URL as an exception so you use ads system without any problems");?>
, <?php echo __("After you turn off the ad blocker, you'll need to refresh your screen");?>

        </div>
        <!-- adblock-warning-message -->

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Ads Campaigns");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo __("Allow users to create ads");?>
 (<?php echo __("Enable it will enable wallet by default");?>
)</div>
          </div>
          <div class="text-end">
            <label class="switch" for="ads_enabled">
              <input type="checkbox" name="ads_enabled" id="ads_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['ads_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verification",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Ads Campaigns Approval System");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo __("Turn the approval system On and Off");?>
 (<?php echo __("If disabled all campaigns will be approved by default");?>
)</div>
          </div>
          <div class="text-end">
            <label class="switch" for="ads_approval_enabled">
              <input type="checkbox" name="ads_approval_enabled" id="ads_approval_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['ads_approval_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-3 form-label">
            <?php echo __("Cost by View");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="ads_cost_view" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_view'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-3 form-label">
            <?php echo __("Cost by Click");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="ads_cost_click" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_click'];?>
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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "users_ads") {?>

    <!-- card-header -->
    <div class="card-header with-icon with-nav">
      <!-- panel title -->
      <div class="mb20">
        <i class="fa fa-bullseye mr10"></i><?php echo __("Ads");?>
 &rsaquo; <?php echo __("Users Ads");?>

      </div>
      <!-- panel title -->

      <!-- panel nav -->
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#Pending" data-bs-toggle="tab">
            <i class="fa fa-clock fa-fw mr5"></i><strong><?php echo __("Pending");?>
</strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Approved" data-bs-toggle="tab">
            <i class="fa fa-check-circle fa-fw mr5"></i><strong><?php echo __("Approved");?>
</strong>
          </a>
        </li>
      </ul>
      <!-- panel nav -->
    </div>
    <!-- card-header -->

    <!-- tab-content -->
    <div class="tab-content">

      <!-- Pending -->
      <div class="tab-pane active" id="Pending">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
              <thead>
                <tr>
                  <th><?php echo __("ID");?>
</th>
                  <th><?php echo __("Title");?>
</th>
                  <th><?php echo __("By");?>
</th>
                  <th><?php echo __("Budget");?>
</th>
                  <th><?php echo __("Status");?>
</th>
                  <th><?php echo __("Actions");?>
</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value["pending"], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_title'];?>
</td>
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
                    <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['row']->value['campaign_budget'],2));?>
</td>
                    <td>
                      <span class="badge rounded-pill badge-lg bg-warning"><?php echo __("Pending");?>
</span>
                    </td>
                    <td>
                      <a data-bs-toggle="tooltip" title='<?php echo __("View");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
" target="_blank" class="btn btn-sm btn-icon btn-rounded btn-primary">
                        <i class="fa fa-eye"></i>
                      </a>
                      <button data-bs-toggle="tooltip" title='<?php echo __("Approve");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_ads-approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                        <i class="fa fa-check"></i>
                      </button>
                      <button data-bs-toggle="tooltip" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_ads-decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                        <i class="fa fa-times"></i>
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
      </div>
      <!-- Pending -->

      <!-- Approved -->
      <div class="tab-pane" id="Approved">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
              <thead>
                <tr>
                  <th><?php echo __("ID");?>
</th>
                  <th><?php echo __("Title");?>
</th>
                  <th><?php echo __("By");?>
</th>
                  <th><?php echo __("Budget");?>
</th>
                  <th><?php echo __("Spend");?>
</th>
                  <th><?php echo __("Clicks/Views");?>
</th>
                  <th><?php echo __("Status");?>
</th>
                  <th><?php echo __("Actions");?>
</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value["approved"], 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_title'];?>
</td>
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
                    <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['row']->value['campaign_budget'],2));?>
</td>
                    <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['row']->value['campaign_spend'],2));?>
</td>
                    <td>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['campaign_bidding'] == "click") {?>
                        <?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_clicks'];?>
 <?php echo __("Clicks");?>

                      <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_views'];?>
 <?php echo __("Views");?>

                      <?php }?>
                    </td>
                    <td>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['campaign_is_active']) {?>
                        <span class="badge rounded-pill badge-lg bg-success"><?php echo __("Active");?>
</span>
                      <?php } else { ?>
                        <span class="badge rounded-pill badge-lg bg-danger"><?php echo __("Not Active");?>
</span>
                      <?php }?>
                    </td>
                    <td>
                      <a data-bs-toggle="tooltip" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                        <i class="fa fa-pencil-alt"></i>
                      </a>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['campaign_is_active']) {?>
                        <button data-bs-toggle="tooltip" title='<?php echo __("Stop");?>
' class="btn btn-sm btn-icon btn-rounded btn-warning js_ads-stop-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                          <i class="fas fa-stop-circle"></i>
                        </button>
                      <?php } else { ?>
                        <button data-bs-toggle="tooltip" title='<?php echo __("Resume");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_ads-resume-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                          <i class="fas fa-play-circle"></i>
                        </button>
                      <?php }?>
                      <button data-bs-toggle="tooltip" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_ads-delete-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                        <i class="fas fa-trash"></i>
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
      </div>
      <!-- Approved -->

    </div>
    <!-- tab-content -->

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "system_ads") {?>

    <div class="card-header with-icon">
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New Ads");?>

        </a>
      </div>
      <i class="fa fa-bullseye mr10"></i><?php echo __("Ads");?>
 &rsaquo; <?php echo __("System Ads");?>

    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Title");?>
</th>
              <th><?php echo __("Place");?>
</th>
              <th><?php echo __("Date");?>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "home") {?><i class='fa fa-home fa-fw mr5'></i><?php echo __("Home Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "search") {?><i class='fa fa-search fa-fw mr5'></i><?php echo __("Search Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "people") {?><i class='fa fa-users fa-fw mr5'></i><?php echo __("Discover People Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "notifications") {?><i class='fa fa-bell fa-fw mr5'></i><?php echo __("Notifications Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post") {?><i class='fa fa-file-powerpoint fa-fw mr5'></i><?php echo __("Post (Right Panel)");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post_footer") {?><i class='fa fa-file-powerpoint fa-fw mr5'></i><?php echo __("Post (Footer)");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "photo") {?><i class='fa fa-file-image fa-fw mr5'></i><?php echo __("Photo Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "pages") {?><i class='fa fa-flag fa-fw mr5'></i><?php echo __("Pages");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "groups") {?><i class='fa fa-users fa-fw mr5'></i><?php echo __("Groups");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "directory") {?><i class='fa fa-th-list fa-fw mr5'></i><?php echo __("Directory Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "market") {?><i class='fa fa-shopping-bag fa-fw mr5'></i><?php echo __("Market Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "offers") {?><i class='fa fa-tag fa-fw mr5'></i><?php echo __("Offers Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "jobs") {?><i class='fa fa-briefcase fa-fw mr5'></i><?php echo __("Jobs Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "movies") {?><i class='fa fa-film fa-fw mr5'></i><?php echo __("Movies Page");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_1") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo __("Posts Feed");?>
 1<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_2") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo __("Posts Feed");?>
 2<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_3") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo __("Posts Feed");?>
 3<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "article") {?><i class='fa fa-file-alt fa-fw mr5'></i><?php echo __("Article (Right Panel)");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "article_footer") {?><i class='fa fa-file-alt fa-fw mr5'></i><?php echo __("Article (Footer)");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "header") {?><i class='fa fa-chevron-circle-up fa-fw mr5'></i><?php echo __("Header");
}?>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "footer") {?><i class='fa fa-chevron-circle-down fa-fw mr5'></i><?php echo __("Footer");
}?>
                </td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="ads_system" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
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

    <div class="card-header with-icon">
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads/system_ads" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
      <i class="fa fa-bullseye mr10"></i><?php echo __("Ads");?>
 &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

    </div>

    <form class="js_ajax-forms" data-url="admin/ads.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['ads_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Place");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="place" id="js_ads-place">
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "home") {?>selected<?php }?> value="home"><?php echo __("Home");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "search") {?>selected<?php }?> value="search"><?php echo __("Search");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "people") {?>selected<?php }?> value="people"><?php echo __("Discover People");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "notifications") {?>selected<?php }?> value="notifications"><?php echo __("Notifications");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post") {?>selected<?php }?> value="post"><?php echo __("Post (Right Panel)");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post_footer") {?>selected<?php }?> value="post_footer"><?php echo __("Post (Footer)");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "photo") {?>selected<?php }?> value="photo"><?php echo __("Photo");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "pages") {?>selected<?php }?> value="pages"><?php echo __("Pages");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "groups") {?>selected<?php }?> value="groups"><?php echo __("Groups");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "directory") {?>selected<?php }?> value="directory"><?php echo __("Directory");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "market") {?>selected<?php }?> value="market"><?php echo __("Marketplace");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "offers") {?>selected<?php }?> value="offers"><?php echo __("Jobs");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "jobs") {?>selected<?php }?> value="jobs"><?php echo __("Jobs");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "movies") {?>selected<?php }?> value="movies"><?php echo __("Movies");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_1") {?>selected<?php }?> value="newfeed_1"><?php echo __("Posts Feed");?>
 1</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_2") {?>selected<?php }?> value="newfeed_2"><?php echo __("Posts Feed");?>
 2</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_3") {?>selected<?php }?> value="newfeed_3"><?php echo __("Posts Feed");?>
 3</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "article") {?>selected<?php }?> value="article"><?php echo __("Article (Right Panel)");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "article_footer") {?>selected<?php }?> value="article_footer"><?php echo __("Article (Footer)");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "header") {?>selected<?php }?> value="header"><?php echo __("Header");?>
</option>
              <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "footer") {?>selected<?php }?> value="footer"><?php echo __("Footer");?>
</option>
            </select>
          </div>
        </div>

        <div id="js_selected-pages" <?php if (!$_smarty_tpl->tpl_vars['data']->value['ads_pages_ids']) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo __("Select Pages");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="pages" name="ads_pages_ids" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ads_pages_ids'];?>
">
              <div class="form-text">
                <?php echo __("Search for pages you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div id="js_selected-groups" <?php if (!$_smarty_tpl->tpl_vars['data']->value['ads_groups_ids']) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo __("Select Groups");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="groups" name="ads_groups_ids" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ads_groups_ids'];?>
">
              <div class="form-text">
                <?php echo __("Search for groups you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="message" rows="8"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</textarea>
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

    <div class="card-header with-icon">
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads/system_ads" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
      <i class="fa fa-bullseye mr10"></i><?php echo __("Ads");?>
 &rsaquo; <?php echo __("Add New Ads");?>

    </div>

    <form class="js_ajax-forms" data-url="admin/ads.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Place");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="place" id="js_ads-place">
              <option value="home"><?php echo __("Home");?>
</option>
              <option value="search"><?php echo __("Search");?>
</option>
              <option value="people"><?php echo __("Discover People");?>
</option>
              <option value="notifications"><?php echo __("Notifications");?>
</option>
              <option value="post"><?php echo __("Post (Right Panel)");?>
</option>
              <option value="post_footer"><?php echo __("Post (Footer)");?>
</option>
              <option value="photo"><?php echo __("Photo");?>
</option>
              <option value="pages"><?php echo __("Pages");?>
</option>
              <option value="groups"><?php echo __("Groups");?>
</option>
              <option value="directory"><?php echo __("Directory");?>
</option>
              <option value="market"><?php echo __("Marketplace");?>
</option>
              <option value="offers"><?php echo __("Offers");?>
</option>
              <option value="jobs"><?php echo __("Jobs");?>
</option>
              <option value="movies"><?php echo __("Movies");?>
</option>
              <option value="newfeed_1"><?php echo __("Posts Feed");?>
 1</option>
              <option value="newfeed_2"><?php echo __("Posts Feed");?>
 2</option>
              <option value="newfeed_3"><?php echo __("Posts Feed");?>
 3</option>
              <option value="article"><?php echo __("Article (Right Panel)");?>
</option>
              <option value="article_footer"><?php echo __("Article (Footer)");?>
</option>
              <option value="header"><?php echo __("Header");?>
</option>
              <option value="footer"><?php echo __("Footer");?>
</option>
            </select>
          </div>
        </div>

        <div id="js_selected-pages" class="x-hidden">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo __("Select Pages");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="pages" name="ads_pages_ids">
              <div class="form-text">
                <?php echo __("Search for pages you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div id="js_selected-groups" class="x-hidden">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo __("Select Groups");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="groups" name="ads_groups_ids">
              <div class="form-text">
                <?php echo __("Search for groups you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="message" rows="8"></textarea>
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

  <?php }?>

</div><?php }
}
