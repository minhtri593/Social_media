<?php
/* Smarty version 4.3.4, created on 2024-11-11 14:13:42
  from 'C:\xampp\htdocs\content\themes\default\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673211165f1239_62533609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6963a467fea0884b600f0196651e88fe9d5a445f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\search.tpl',
      1 => 1692353816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post.tpl' => 2,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_673211165f1239_62533609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_file_searching_duff.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Search");?>
</h2>
    <p class="text-xlg"><?php echo __("Discover new people, create new connections and make new friends");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -45px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-sm-none sg-offcanvas-sidebar mt30">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <!-- search form -->
      <div class="card">
        <div class="card-body">
          <form class="js_search-form" <?php if ($_smarty_tpl->tpl_vars['tab']->value) {?> data-filter="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" <?php }?>>
            <div class="form-group mb0">
              <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search");?>
' <?php if ($_smarty_tpl->tpl_vars['query']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" <?php }?>>
                <button type="submit" name="submit" class="btn btn-light plr30"><?php echo __("Search");?>
</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- search form -->

      <div class="row">
        <!-- left panel -->
        <div class="col-lg-8">
          <!-- panel nav -->
          <ul class="nav nav-pills nav-fill nav-search mb10">
            <li class="nav-item">
              <a class="nav-link rounded-pill <?php if ($_smarty_tpl->tpl_vars['tab']->value == '' || $_smarty_tpl->tpl_vars['tab']->value == "posts") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/<?php if ($_smarty_tpl->tpl_vars['hashtag']->value) {?>hashtag/<?php }
if ($_smarty_tpl->tpl_vars['query']->value) {
echo $_smarty_tpl->tpl_vars['query']->value;?>
/posts<?php }?>">
                <strong><?php echo __("Posts");?>
</strong>
              </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
              <li class="nav-item">
                <a class="nav-link rounded-pill <?php if ($_smarty_tpl->tpl_vars['tab']->value == "articles") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/<?php if ($_smarty_tpl->tpl_vars['hashtag']->value) {?>hashtag/<?php }
if ($_smarty_tpl->tpl_vars['query']->value) {
echo $_smarty_tpl->tpl_vars['query']->value;?>
/articles<?php }?>">
                  <strong><?php echo __("Articles");?>
</strong>
                </a>
              </li>
            <?php }?>
            <li class="nav-item">
              <a class="nav-link rounded-pill <?php if ($_smarty_tpl->tpl_vars['tab']->value == "users") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/<?php if ($_smarty_tpl->tpl_vars['query']->value) {
echo $_smarty_tpl->tpl_vars['query']->value;?>
/users<?php }?>">
                <strong><?php echo __("Users");?>
</strong>
              </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
              <li class="nav-item">
                <a class="nav-link rounded-pill <?php if ($_smarty_tpl->tpl_vars['tab']->value == "pages") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/<?php if ($_smarty_tpl->tpl_vars['query']->value) {
echo $_smarty_tpl->tpl_vars['query']->value;?>
/pages<?php }?>">
                  <strong><?php echo __("Pages");?>
</strong>
                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
              <li class="nav-item">
                <a class="nav-link rounded-pill <?php if ($_smarty_tpl->tpl_vars['tab']->value == "groups") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/<?php if ($_smarty_tpl->tpl_vars['query']->value) {
echo $_smarty_tpl->tpl_vars['query']->value;?>
/groups<?php }?>">
                  <strong><?php echo __("Groups");?>
</strong>
                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
              <li class="nav-item">
                <a class="nav-link rounded-pill <?php if ($_smarty_tpl->tpl_vars['tab']->value == "events") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/<?php if ($_smarty_tpl->tpl_vars['query']->value) {
echo $_smarty_tpl->tpl_vars['query']->value;?>
/events<?php }?>">
                  <strong><?php echo __("Events");?>
</strong>
                </a>
              </li>
            <?php }?>
          </ul>
          <!-- panel nav -->

          <div class="tab-content">

            <div class="tab-pane active">
              <?php if ($_smarty_tpl->tpl_vars['results']->value) {?>
                <ul>
                  <?php if ($_smarty_tpl->tpl_vars['tab']->value == '' || $_smarty_tpl->tpl_vars['tab']->value == "posts") {?>
                    <!-- posts -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- posts -->
                  <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "articles") {?>
                    <!-- articles -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- articles -->
                  <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "users") {?>
                    <!-- users -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- users -->
                  <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "pages") {?>
                    <!-- pages -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, '_page');
$_smarty_tpl->tpl_vars['_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- pages -->
                  <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "groups") {?>
                    <!-- groups -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, '_group');
$_smarty_tpl->tpl_vars['_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- groups -->
                  <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "events") {?>
                    <!-- events -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, '_event');
$_smarty_tpl->tpl_vars['_event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
$_smarty_tpl->tpl_vars['_event']->do_else = false;
?>
                      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- events -->
                  <?php }?>
                </ul>

                <?php if (count($_smarty_tpl->tpl_vars['results']->value) >= $_smarty_tpl->tpl_vars['system']->value['search_results']) {?>
                  <!-- see-more -->
                  <div class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="search_<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" data-filter="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">
                    <span><?php echo __("More Results");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                  <!-- see-more -->
                <?php }?>
              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php }?>
            </div>

          </div>
        </div>
        <!-- left panel -->

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
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
