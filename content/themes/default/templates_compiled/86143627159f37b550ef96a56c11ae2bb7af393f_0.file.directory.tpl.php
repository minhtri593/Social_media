<?php
/* Smarty version 4.3.4, created on 2024-11-11 13:24:17
  from 'C:\xampp\htdocs\content\themes\default\templates\directory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673205819f64a9_73384926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86143627159f37b550ef96a56c11ae2bb7af393f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\directory.tpl',
      1 => 1685452074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 26,
    'file:__feeds_user.tpl' => 1,
    'file:_no_data.tpl' => 6,
    'file:__feeds_post.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:__feeds_game.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_673205819f64a9_73384926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_bookmarks_r6up.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Directory");?>
</h2>
    <p class="text-xlg"><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description_directory']);?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

  <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">
    <div class="row">
      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt20">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="card border-0 shadow">
          <div class="card-body static-page-content pb25">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/users" class="directory-card">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, false);
?>
                  <h5 class="title"><?php echo __("Users");?>
</h5>
                  <p>
                    <?php echo __("Help friends know you better and show them what you have in common");?>

                  </p>
                </a>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/posts" class="directory-card">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                  <h5 class="title"><?php echo __("Posts");?>
</h5>
                  <p>
                    <?php echo __("See what everyone’s up to and what’s on their minds");?>

                  </p>
                </a>
              </div>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/pages" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Pages");?>
</h5>
                    <p>
                      <?php echo __("Never miss a thing out! Keep in touch with your fans and customers");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/groups" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Groups");?>
</h5>
                    <p>
                      <?php echo __("Communicate and collaborate with the people who share your interests");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/events" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Events");?>
</h5>
                    <p>
                      <?php echo __("Members can organize community events for online and offline doings");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Blogs");?>
</h5>
                    <p>
                      <?php echo __("Sharing thoughts, ideas and creating amazing contents");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Marketplace");?>
</h5>
                    <p>
                      <?php echo __("Trusted community marketplace wherein members can post and browse items");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/funding" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Funding");?>
</h5>
                    <p>
                      <?php echo __("Fundraisers make it easy to support friends, family and the causes that are important to you");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['offers_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/offers" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Offers");?>
</h5>
                    <p>
                      <?php echo __("Find the best offers that you can buy");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['jobs_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/jobs" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Jobs");?>
</h5>
                    <p>
                      <?php echo __("Seeking for a job, You can find theme here");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Forums");?>
</h5>
                    <p>
                      <?php echo __("Forum is an old­school framework for online community");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Movies");?>
</h5>
                    <p>
                      <?php echo __("Watching movies always fun, Watch with the people who share your interests");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/games" class="directory-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), 0, true);
?>
                    <h5 class="title"><?php echo __("Games");?>
</h5>
                    <p>
                      <?php echo __("Playing games always fun, Play with the people who share your interests");?>

                    </p>
                  </a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <!-- content panel -->
    </div>
  </div>

<?php } else { ?>

  <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
    <div class="row">

      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/users">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Users");?>

                </a>
              </li>
              <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "posts") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/posts">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Posts");?>
</a>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/pages">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Pages");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/groups">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Groups");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "events") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/events">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Events");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Blogs");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Marketplace");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/funding">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Funding");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['offers_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/offers">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Offers");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['jobs_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/jobs">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Jobs");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Forums");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Movies");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/games">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Games");?>

                  </a>
                </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </div>
      <!-- left panel -->

      <!-- right panel -->
      <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">
        <div class="row">
          <!-- center panel -->
          <div class="col-lg-8">
            <?php if ($_smarty_tpl->tpl_vars['view']->value == "users") {?>
              <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_user');
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
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "posts") {?>
              <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>
              <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_page');
$_smarty_tpl->tpl_vars['_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
              <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_group');
$_smarty_tpl->tpl_vars['_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "events") {?>
              <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_event');
$_smarty_tpl->tpl_vars['_event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
$_smarty_tpl->tpl_vars['_event']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "games") {?>
              <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_game');
$_smarty_tpl->tpl_vars['_game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
$_smarty_tpl->tpl_vars['_game']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php }?>

            <?php }?>
          </div>
          <!-- center panel -->

          <!-- right panel -->
          <div class="col-lg-4">
            <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- right panel -->

    </div>
  </div>

<?php }?>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
