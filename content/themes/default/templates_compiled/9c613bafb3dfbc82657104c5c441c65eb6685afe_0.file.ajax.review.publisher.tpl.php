<?php
/* Smarty version 4.3.4, created on 2024-11-19 08:24:39
  from 'C:\xampp\htdocs\content\themes\default\templates\ajax.review.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c4b47961f34_87753450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c613bafb3dfbc82657104c5c441c65eb6685afe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\ajax.review.publisher.tpl',
      1 => 1699190415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_673c4b47961f34_87753450 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Review");?>
 <?php echo $_smarty_tpl->tpl_vars['page']->value['page_title'];?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini" data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
">
  <div class="modal-body">

    <div class="form-group">
      <label class="form-label"><?php echo __("Rating");?>
</label>
      <div class="star-rating js_star-rating">
        <input type="radio" id="star5" name="rating" value="5" />
        <label for="star5"><i class="fa fa-star"></i></label>
        <input type="radio" id="star4" name="rating" value="4" />
        <label for="star4"><i class="fa fa-star"></i></label>
        <input type="radio" id="star3" name="rating" value="3" />
        <label for="star3"><i class="fa fa-star"></i></label>
        <input type="radio" id="star2" name="rating" value="2" />
        <label for="star2"><i class="fa fa-star"></i></label>
        <input type="radio" id="star1" name="rating" value="1" />
        <label for="star1"><i class="fa fa-star"></i></label>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Write Your Review");?>
</label>
      <textarea name="review" rows="5" dir="auto" class="form-control"></textarea>
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

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-review"><?php echo __("Submit");?>
</button>
  </div>
</form><?php }
}
