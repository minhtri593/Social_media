<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:45:17
  from 'C:\xampp\htdocs\content\themes\default\templates\ajax.story.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731fc5d0a0a05_32327635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1d4f4771d46c52455975a9a317c03c9ea6a8fee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\ajax.story.publisher.tpl',
      1 => 1686302052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
  ),
),false)) {
function content_6731fc5d0a0a05_32327635 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"24_hours",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Create New Story");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini">
  <div class="modal-body">

    <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo __("Ads Story");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo __("Share this story as ads so all users see it");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="is_ads">
            <input type="checkbox" name="is_ads" id="is_ads">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
    <?php }?>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label class="form-label"><?php echo __("Message");?>
</label>
          <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Photos");?>
</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_upload_videos']) {?>
      <div class="form-group">
        <label class="form-label"><?php echo __("Videos");?>
</label>
        <div class="attachments clearfix" data-type="videos">
          <ul>
            <li class="add">
              <i class="fa fa-video js_x-uploader" data-type="video" data-handle="publisher-mini" data-multiple="true"></i>
            </li>
          </ul>
        </div>
      </div>
    <?php }?>

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-story"><?php echo __("Publish");?>
</button>
  </div>
</form><?php }
}
