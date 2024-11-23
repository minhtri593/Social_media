<?php
/* Smarty version 4.3.4, created on 2024-11-18 06:51:04
  from 'C:\xampp\htdocs\content\themes\default\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673ae3d8123682_98550049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aed7122a27bc926eb3e4617d455707a76481541' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\messages.tpl',
      1 => 1698150192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__svg_icons.tpl' => 5,
    'file:__feeds_conversation.tpl' => 1,
    'file:ajax.chat.conversation.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_673ae3d8123682_98550049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row h-100">

    <!-- threads -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
      <div class="card">
        <div class="card-header with-icon">
          <div class="row">
            <div class="col-xl-8 mb-2 mb-xl-0 pt-xl-1">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comments",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), 0, false);
?>
              <?php echo __("Messenger");?>

            </div>
            <div class="col-xl-4 text-start text-xl-end">
              <a class="btn btn-sm btn-light rounded-pill js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"start_chat",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), 0, true);
?>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body plr0 js_live-messages-alt">
          <div class="js_scroller" data-slimScroll-height="490px">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['conversations'], '_conversation');
$_smarty_tpl->tpl_vars['_conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_conversation']->value) {
$_smarty_tpl->tpl_vars['_conversation']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('conversation'=>$_smarty_tpl->tpl_vars['_conversation']->value), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
              <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                <!-- see-more -->
                <div class="alert alert-post see-more small mlr5 js_see-more" data-get="conversations">
                  <span><?php echo __("Load Older Threads");?>
</span>
                  <div class="loader loader_small x-hidden"></div>
                </div>
                <!-- see-more -->
              <?php }?>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- threads -->

    <!-- conversation -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar js_conversation-container">
      <?php if ($_smarty_tpl->tpl_vars['view']->value == "new") {?>
        <div class="card panel-messages fresh">
          <div class="card-header with-icon">
            <?php echo __("New Message");?>

          </div>
          <div class="card-body">
            <div class="chat-conversations js_scroller" data-slimScroll-height="420px"></div>
            <div class="chat-to clearfix js_autocomplete-tags">
              <div class="to"><?php echo __("To");?>
:</div>
              <ul class="tags">
                <?php if ($_smarty_tpl->tpl_vars['recipient']->value) {?>
                  <li data-uid="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recipient']->value['user_fullname'];?>
<button type="button" class="btn-close js_tag-remove" title="<?php echo __("Remove");?>
"></button></li>
                <?php }?>
              </ul>
              <div class="typeahead">
                <input type="text" size="1" autofocus>
              </div>
            </div>
            <div class="chat-voice-notes">
              <div class="voice-recording-wrapper" data-handle="chat">
                <!-- processing message -->
                <div class="x-hidden js_voice-processing-message">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"upload",'class'=>"main-icon mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
                  <?php echo __("Processing");?>
<span class="loading-dots"></span>
                </div>
                <!-- processing message -->

                <!-- success message -->
                <div class="x-hidden js_voice-success-message">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon mr5",'width'=>"16px",'height'=>"16px"), 0, true);
?>
                  <?php echo __("Voice note recorded successfully");?>

                  <div class="float-end">
                    <button type="button" class="btn-close js_voice-remove">

                    </button>
                  </div>
                </div>
                <!-- success message -->

                <!-- start recording -->
                <div class="btn-voice-start js_voice-start">
                  <i class="fas fa-microphone mr5"></i><?php echo __("Record");?>

                </div>
                <!-- start recording -->

                <!-- stop recording -->
                <div class="btn-voice-stop js_voice-stop" style="display: none">
                  <i class="far fa-stop-circle mr5"></i><?php echo __("Recording");?>
 <span class="js_voice-timer">00:00</span>
                </div>
                <!-- stop recording -->
              </div>
            </div>
            <div class="chat-attachments attachments clearfix x-hidden">
              <ul>
                <li class="loading">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="x-form chat-form">
              <div class="chat-form-message">
                <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea>
              </div>
              <ul class="x-form-tools clearfix">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_photos_enabled']) {?>
                  <li class="x-form-tools-attach">
                    <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['voice_notes_chat_enabled']) {?>
                  <li class="x-form-tools-voice js_chat-voice-notes-toggle">
                    <i class="fas fa-microphone fa-lg fa-fw"></i>
                  </li>
                <?php }?>
                <li class="x-form-tools-emoji js_emoji-menu-toggle">
                  <i class="far fa-smile-wink fa-lg fa-fw"></i>
                </li>
                <li class="x-form-tools-post js_post-message">
                  <i class="far fa-paper-plane fa-lg fa-fw"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['conversation']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
          <div class="card card-messages" style="padding-top: 60px;">
            <div class="card-body text-center text-muted" style="min-height: 510px;">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), 0, true);
?>
              <p class="mt10 mb0"><strong><?php echo __("No Conversation Selected");?>
</strong></p>
              <a class="mt20 btn btn-md rounded-pill btn-primary js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new">
                <?php echo __("New Message");?>

              </a>
            </div>
          </div>
        <?php }?>
      <?php }?>
    </div>
    <!-- conversation -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
