<?php
/* Smarty version 4.3.4, created on 2024-11-12 02:22:32
  from 'C:\xampp\htdocs\content\themes\default\templates\__feeds_article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732bbe876ccd4_48815042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c60d885a192596b5f49a63337e45022643e50b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\__feeds_article.tpl',
      1 => 1701092669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_need_payment.tpl' => 2,
    'file:_need_subscription.tpl' => 2,
    'file:_need_pro_package.tpl' => 2,
  ),
),false)) {
function content_6732bbe876ccd4_48815042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['_tpl']->value == "featured") {?>
  <div class="<?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>col-sm-12 col-md-8 col-lg-6<?php } else { ?>col-sm-6 col-md-4 col-lg-3<?php }?>">
    <a href="<?php if ($_smarty_tpl->tpl_vars['article']->value['needs_payment'] || $_smarty_tpl->tpl_vars['article']->value['needs_subscription'] || $_smarty_tpl->tpl_vars['article']->value['needs_pro_package']) {
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];
} else {
echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];
}?>" class="blog-container <?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>primary<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['article']->value['needs_payment']) {?>
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->_subTemplateRender('file:_need_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post_id'=>$_smarty_tpl->tpl_vars['article']->value['post_id'],'price'=>$_smarty_tpl->tpl_vars['article']->value['post_price']), 0, false);
?>
        </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['article']->value['needs_subscription']) {?>
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['article']->value['needs_pro_package']) {?>
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->_subTemplateRender('file:_need_pro_package.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      <?php } else { ?>
        <div class="blog-image">
          <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
">
        </div>
        <div class="blog-content">
          <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</h3>
          <div class="text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],400);?>
</div>
          <div>
            <div class="post-avatar">
              <div class="post-avatar-picture small" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
');">
              </div>
            </div>
            <div class="post-meta">
              <span class="text-link">
                <?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>

              </span>
              <div class="post-time">
                <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
      <div class="blog-more">
        <span><?php echo __("More");?>
</span>
      </div>
    </a>
  </div>
<?php } else { ?>
  <div class="post-media list">
    <?php if ($_smarty_tpl->tpl_vars['article']->value['needs_payment']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->_subTemplateRender('file:_need_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post_id'=>$_smarty_tpl->tpl_vars['article']->value['post_id'],'price'=>$_smarty_tpl->tpl_vars['article']->value['post_price'],'paid_text'=>$_smarty_tpl->tpl_vars['article']->value['paid_text']), 0, true);
?>
        </div>
      </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['article']->value['needs_subscription']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
      </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['article']->value['needs_pro_package']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->_subTemplateRender('file:_need_pro_package.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
      </a>
    <?php } else { ?>
      <div class="post-media-image-wrapper">
        <a class="post-media-image" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
">
          <div style="padding-top: 50%; background-position: center center; background-size: cover; background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
');"></div>
        </a>
        <div class="post-media-image-meta">
          <a class="article-category <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_url'];?>
">
            <?php echo __($_smarty_tpl->tpl_vars['article']->value['article']['category_name']);?>

          </a>
        </div>
      </div>
      <div class="post-media-meta">
        <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</a>
        <div class="text mb5">
          <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],100);?>

          <?php } else { ?>
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],500);?>

          <?php }?>
        </div>
        <div class="info">
          <?php echo __("By");?>

          <span class="js_user-popover pr10" data-type="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">
            <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</a>
          </span>
          <i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
          <i class="fa fa-comments pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['comments'];?>
</span>
          <i class="fa fa-eye pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['views'];?>
</span>
        </div>
      </div>
    <?php }?>
  </div>
<?php }
}
}
