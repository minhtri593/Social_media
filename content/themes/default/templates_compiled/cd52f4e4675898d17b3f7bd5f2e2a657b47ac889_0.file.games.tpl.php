<?php
/* Smarty version 4.3.4, created on 2024-11-17 09:20:27
  from 'C:\xampp\htdocs\content\themes\default\templates\games.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6739b55bb13e71_15686026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd52f4e4675898d17b3f7bd5f2e2a657b47ac889' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\games.tpl',
      1 => 1685452143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_game.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6739b55bb13e71_15686026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_gaming_re_cma2.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo __("Games");?>
</h2>
    <p class="text-xlg"><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description_games']);?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">

  <div class="position-relative">
    <!-- tabs -->
    <div class="content-tabs rounded-sm shadow-sm clearfix">
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "genre") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games"><?php echo __("Discover");?>
</a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value != '' && $_smarty_tpl->tpl_vars['view']->value != "genre") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/played"><?php echo __("Your Games");?>
</a>
          </li>
        <?php }?>
      </ul>
    </div>
    <!-- tabs -->
  </div>

  <div class="row">

    <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "genre") {?>
      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <!-- genres -->
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "search") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games">
                  <?php echo __("All");?>

                </a>
              </li>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, '_genre');
$_smarty_tpl->tpl_vars['_genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_genre']->value) {
$_smarty_tpl->tpl_vars['_genre']->do_else = false;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "genre" && $_smarty_tpl->tpl_vars['genre']->value['genre_id'] == $_smarty_tpl->tpl_vars['_genre']->value['genre_id']) {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/genre/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['_genre']->value['genre_name']);?>

                  </a>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
        <!-- genres -->
      </div>
      <!-- left panel -->
    <?php } else { ?>
      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['view']->value == "game") {?>

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="post">
          <div class="ptb20 plr20">
            <div class="post-header mb0">
              <div class="post-avatar">
                <div class="post-avatar-picture" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['game']->value['thumbnail'];?>
);">
                </div>
              </div>
              <div class="post-meta">
                <div class="float-end">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games" class="btn btn-sm btn-light d-none d-lg-block">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                  </a>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games" class="btn btn-sm btn-icon btn-light d-block d-lg-none">
                    <i class="fa fa-arrow-circle-left"></i>
                  </a>
                </div>
                <div class="h6 mt5 mb0"><?php echo $_smarty_tpl->tpl_vars['game']->value['title'];?>
</div>
              </div>
            </div>
          </div>
        </div>
        <div class="ratio ratio-16x9">
          <iframe frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['game']->value['source'];?>
"></iframe>
        </div>
      </div>
      <!-- content panel -->

    <?php } else { ?>

      <!-- content panel -->
      <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "genre") {?><div class="col-md-8 col-lg-9 sg-offcanvas-mainbar"><?php } else { ?><div class="col-12 sg-offcanvas-mainbar"><?php }?>

          <!-- content -->
          <div>
            <?php if ($_smarty_tpl->tpl_vars['games']->value) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, '_game');
$_smarty_tpl->tpl_vars['_game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
$_smarty_tpl->tpl_vars['_game']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>'box'), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>

              <!-- see-more -->
              <?php if (count($_smarty_tpl->tpl_vars['games']->value) >= $_smarty_tpl->tpl_vars['system']->value['games_results']) {?>
                <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == "genre") {?>data-id="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genre_id'];?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['view']->value == "played") {?>data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
" <?php }?>>
                  <span><?php echo __("See More");?>
</span>
                  <div class="loader loader_small x-hidden"></div>
                </div>
              <?php }?>
              <!-- see-more -->
            <?php } else { ?>
              <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
          </div>
          <!-- content -->

        </div>
        <!-- content panel -->

      <?php }?>

    </div>
  </div>
  <!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
