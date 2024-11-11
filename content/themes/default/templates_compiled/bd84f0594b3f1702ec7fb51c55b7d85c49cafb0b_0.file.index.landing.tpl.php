<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:05:33
  from 'C:\xampp\htdocs\content\themes\default\templates\index.landing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731f30d888506_86111557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd84f0594b3f1702ec7fb51c55b7d85c49cafb0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\index.landing.tpl',
      1 => 1689764199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:__svg_icons.tpl' => 3,
    'file:_footer.links.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6731f30d888506_86111557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
  <div class="row landing-row">
    <div class="col-lg-6 landing-left">
      <div class="landing-intro">
        <!-- welcome message -->
        <h5><?php echo __("Welcome to");?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
</h5>
        <h1><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description']);?>
</h1>
        <!-- welcome message -->

        <!-- slider -->
        <div class="landing-slider d-none d-lg-block">
          <ul class="landing-slides">
            <input type="radio" name="radio-btn" id="img-1" checked />
            <li class="landing-slide-container">
              <div class="landing-slide">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/landing/slide_1.svg" />
              </div>
              <div class="nav">
                <label for="img-3" class="prev">&#x2039;</label>
                <label for="img-2" class="next">&#x203a;</label>
              </div>
            </li>
            <input type="radio" name="radio-btn" id="img-2" />
            <li class="landing-slide-container">
              <div class="landing-slide">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/landing/slide_2.svg" />
              </div>
              <div class="nav">
                <label for="img-1" class="prev">&#x2039;</label>
                <label for="img-3" class="next">&#x203a;</label>
              </div>
            </li>
            <input type="radio" name="radio-btn" id="img-3" />
            <li class="landing-slide-container">
              <div class="landing-slide">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/landing/slide_3.svg" />
              </div>
              <div class="nav">
                <label for="img-2" class="prev">&#x2039;</label>
                <label for="img-1" class="next">&#x203a;</label>
              </div>
            </li>
            <li class="nav-dots">
              <label for="img-1" class="nav-dot" id="img-dot-1"></label>
              <label for="img-2" class="nav-dot" id="img-dot-2"></label>
              <label for="img-3" class="nav-dot" id="img-dot-3"></label>
            </li>
          </ul>
        </div>
        <!-- slider -->
      </div>
    </div>
    <div class="col-lg-6">
      <div class="landing-form">
        <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('do'=>"in"), 0, false);
?>
        <div class="text-center">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['play_store_badge_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['play_store_link'];?>
" target="_blank">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"playstore_badge",'height'=>"68px"), 0, false);
?>
            </a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['appgallery_badge_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['appgallery_store_link'];?>
" target="_blank">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appgallery_badge",'height'=>"50px",'class'=>"mr10"), 0, true);
?>
            </a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['app_store_badge_enabled']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['app_store_link'];?>
" target="_blank">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appstore_badge",'height'=>"50px"), 0, true);
?>
            </a>
          <?php }?>
        </div>
      </div>

      <?php $_smarty_tpl->_subTemplateRender('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
