<?php
/* Smarty version 4.3.4, created on 2024-11-19 08:25:06
  from 'C:\xampp\htdocs\content\themes\default\templates\__feeds_review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c4b62688325_75528498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb512f6ecad2260c50b521d614180cbfab2dfd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\__feeds_review.tpl',
      1 => 1702845759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_673c4b62688325_75528498 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6">
  <div class="ui-box <?php if ($_smarty_tpl->tpl_vars['_darker']->value) {?>darker<?php }?>">
    <div class="img">
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_review']->value['user_name'];?>
">
        <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['_review']->value['user_picture'];?>
" />
      </a>
    </div>
    <div class="mt10">
      <span class="js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_review']->value['user_id'];?>
">
        <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_review']->value['user_name'];?>
">
          <?php echo $_smarty_tpl->tpl_vars['_review']->value['user_fullname'];?>

        </a>
      </span>
      <?php if ($_smarty_tpl->tpl_vars['_review']->value['user_verified']) {?>
        <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo __("Verified User");?>
'>
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), 0, false);
?>
        </span>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['_review']->value['user_subscribed']) {?>
        <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo __("Pro User");?>
'>
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), 0, true);
?>
        </span>
      <?php }?>
    </div>
    <!-- time -->
    <div class="mt5">
      <i class="fa-regular fa-clock mr5"></i><small class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['_review']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['_review']->value['time'];?>
</small>
    </div>
    <!-- time -->
    <!-- rating -->
    <div class="review-stars mt10">
      <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['_review']->value['rate'] >= 1) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['_review']->value['rate'] >= 2) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['_review']->value['rate'] >= 3) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['_review']->value['rate'] >= 4) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['_review']->value['rate'] >= 5) {?>checked<?php }?>"></i>
    </div>
    <!-- rating -->
    <!-- review -->
    <?php if ($_smarty_tpl->tpl_vars['_review']->value['review']) {?>
      <div class="review-review mt10">
        <?php echo $_smarty_tpl->tpl_vars['_review']->value['review'];?>

      </div>
    <?php }?>
    <!-- review -->
    <!-- photos -->
    <?php if ($_smarty_tpl->tpl_vars['_review']->value['photos']) {?>
      <div class="review-photos mt10">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_review']->value['photos'], '_photo');
$_smarty_tpl->tpl_vars['_photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_photo']->value) {
$_smarty_tpl->tpl_vars['_photo']->do_else = false;
?>
          <span class="pointer js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_photo']->value['source'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_photo']->value['source'];?>
">
          </span>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>
    <!-- photos -->
    <!-- reply -->
    <?php if ($_smarty_tpl->tpl_vars['_review']->value['reply']) {?>
      <div class="divider dashed mtb10"></div>
      <div class="review-reply">
        <div class="data-container">
          <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_review']->value['page_name'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_review']->value['page_picture'];?>
" alt="">
          </a>
          <div class="data-content text-start">
            <div>
              <span class="name js_user-popover" data-type="page" data-uid="<?php echo $_smarty_tpl->tpl_vars['_review']->value['page_id'];?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_review']->value['page_name'];?>
">
                  <?php echo $_smarty_tpl->tpl_vars['_review']->value['page_title'];?>

                </a>
              </span>
              <?php if ($_smarty_tpl->tpl_vars['_review']->value['page_verified']) {?>
                <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo __("Verified Page");?>
'>
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                </span>
              <?php }?>
            </div>
            <div class="mt5">
              <?php echo $_smarty_tpl->tpl_vars['_review']->value['reply'];?>

            </div>
          </div>
        </div>
      </div>
    <?php }?>
    <!-- reply -->
    <!-- actions -->
    <?php if ($_smarty_tpl->tpl_vars['_review']->value['page_admin'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] && !$_smarty_tpl->tpl_vars['_review']->value['reply']) {?>
      <div class="divider dashed mtb10"></div>
      <button type="button" class="btn btn-sm btn-primary rounded-pill" data-toggle="modal" data-url="modules/review.php?do=reply&id=<?php echo $_smarty_tpl->tpl_vars['_review']->value['review_id'];?>
">
        <i class="fa fa-comment mr5"></i><?php echo __("Reply");?>

      </button>
    <?php }?>
    <!-- actions -->
  </div>
</div><?php }
}
