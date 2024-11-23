<?php
/* Smarty version 4.3.4, created on 2024-11-18 00:49:48
  from 'C:\xampp\htdocs\content\themes\default\templates\live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673a8f2ccfd874_61995737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b00dece33ed8bcb5f31dd23fe33a995ec831fc86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\live.tpl',
      1 => 1698757434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_673a8f2ccfd874_61995737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">

      <div class="live-stream-wrapper">

        <!-- live stream title -->
        <div class="live-stream-title clearfix">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          <?php echo __("Live");?>

          <div class="float-end">
            <?php if (!$_smarty_tpl->tpl_vars['page_id']->value && $_smarty_tpl->tpl_vars['user']->value->_data['can_receive_tip']) {?>
              <span class="x-hidden" id="js_live-tips">
                <input type="checkbox" class="btn-check" name="tips_enabled" id="tips_enabled">
                <label class="btn btn-md btn-outline-info rounded-pill" for="tips_enabled"> <?php echo __("Enable Tips");?>
</label>
              </span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['can_be_for_subscriptions']->value) {?>
              <span class="x-hidden" id="js_live-subscriptions">
                <input type="checkbox" class="btn-check" name="for_subscriptions" id="for_subscriptions">
                <label class="btn btn-md btn-outline-info rounded-pill" for="for_subscriptions"> <?php echo __("Subscribers Only");?>
</label>
              </span>
            <?php }?>
            <span class="btn btn-md btn-danger rounded-pill x-hidden" id="js_live-end"><i class="fas fa-power-off mr5"></i><?php echo __("End");?>
</span>
            <span class="btn btn-md btn-danger rounded-pill x-hidden" id="js_live-start" <?php if ($_smarty_tpl->tpl_vars['page_id']->value) {?> data-node-id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
 data-node='page' <?php }
if ($_smarty_tpl->tpl_vars['group_id']->value) {?> data-node-id=<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
 data-node='group' <?php }
if ($_smarty_tpl->tpl_vars['event_id']->value) {?> data-node-id=<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
 data-node='event' <?php }?>><i class="fas fa-play mr5"></i><?php echo __("Go Live");?>
</span>
          </div>
        </div>
        <!-- live stream title -->

        <!-- live stream video -->
        <div class="live-stream-video large">

          <!-- live counter -->
          <div class="live-counter">
            <span class="status offline" id=js_live-counter-status><?php echo __("Offline");?>
</span>
            <span class="number">
              <i class="fas fa-eye mr5"></i><strong id="js_live-counter-number">0</strong>
            </span>
          </div>
          <!-- live counter -->

          <!-- live recording -->
          <?php if ($_smarty_tpl->tpl_vars['system']->value['save_live_enabled']) {?>
            <div class="live-recording" id="js_live-recording">
              <span>
                <i class="fas fa-record-vinyl mr5"></i><span><?php echo __("Recording");?>
</span>
              </span>
            </div>
          <?php }?>
          <!-- live recording -->

          <!-- live status -->
          <div class="live-status" id="js_live-status">
            <div class="mb5"><i class="fas fa-camera fa-2x"></i></div>
            <?php echo __("Getting the Camera and Mic permissions");?>
<span class="spinner-grow spinner-grow-sm ml10"></span>
          </div>
          <!-- live status -->

          <!-- live comments -->
          <div class="live-comments" id="live-comments">
            <ul class="js_scroller" data-slimScroll-height="100%"></ul>
          </div>
          <!-- live comments -->

          <!-- live video -->
          <div id="js_live-video" style="width: 100%;height: 100%; background: #000"></div>
          <!-- live video -->
        </div>
        <!-- live stream video -->

        <!-- live stream buttons -->
        <div class="live-stream-buttons" id="js_live-stream-buttons">
          <!-- mute/unmute mic -->
          <button class="btn btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_mute-mic" id="mic-btn" disabled>
            <i class="fas fa-microphone fa-fw"></i>
          </button>
          <!-- mute/unmute mic -->
          <!-- mute/unmute cam -->
          <button class="btn btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_mute-cam" id="cam-btn" disabled>
            <i class="fas fa-video fa-fw"></i>
          </button>
          <!-- mute/unmute cam -->
          <!-- share/unshare screen -->
          <button class="btn btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_share-screen" id="screen-btn" disabled>
            <i class="fas fa-desktop fa-fw"></i>
          </button>
          <!-- share/unshare screen -->
          <!-- mute/unmute comments -->
          <button class="btn btn-icon btn-rounded btn-secondary mr10 js_mute-comments" id="comments-btn" disabled>
            <i class="fas fa-comments fa-fw"></i>
          </button>
          <!-- mute/unmute comments -->
        </div>
        <!-- live stream buttons -->

      </div>

    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
