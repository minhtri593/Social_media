<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:05:33
  from 'C:\xampp\htdocs\content\themes\default\templates\_head.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731f30dc5f1b3_93849157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d8442e621a56ade07a6a6c201df285f9122473' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\_head.css.tpl',
      1 => 1698931910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731f30dc5f1b3_93849157 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['system']->value['css_customized']) {?><style type="text/css"><?php if ($_smarty_tpl->tpl_vars['system']->value['css_background']) {?>body {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_background'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_link_color']) {?>a,.data-content .name a,.text-link,.post-stats-alt,.post-stats .fa,.side-nav>li.active>a,.navbar-container .data-content .name a {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_link_color'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_btn_primary']) {?>.btn-primary,.btn-primary:focus,.btn-primary:hover {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_btn_primary'];?>
!important;border-color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_btn_primary'];?>
!important;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_header']) {?>.main-header {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header'];?>
;}.main-header .user-menu {border-left-color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_header_search']) {?>.main-header .search-wrapper .form-control {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_header_search_color']) {?>.main-header .search-wrapper .form-control {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;}.main-header .search-wrapper .form-control::placeholder {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;}.main-header .search-wrapper .form-control::-webkit-input-placeholder {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;}.main-header .search-wrapper .form-control:-moz-placeholder {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;opacity: 1;}.main-header .search-wrapper .form-control:-ms-input-placeholder {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_header_icons']) {?>.header-icon,.header-icon * {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_icons'];?>
 ! important;fill: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_icons'];?>
 ! important;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_header_icons_night']) {?>body.night-mode .header-icon,body.night-mode .header-icon * {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_icons_night'];?>
 ! important;fill: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_icons_night'];?>
 ! important;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_main_icons']) {?>.main-icon,.main-icon *,.x-form-tools {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_main_icons'];?>
 ! important;fill: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_main_icons'];?>
 ! important;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_main_icons_night']) {?>body.night-mode .main-icon,body.night-mode .main-icon *,body.night-mode .x-form-tools {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_main_icons_night'];?>
 ! important;fill: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_main_icons_night'];?>
 ! important;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_action_icons']) {?>.action-icon,.action-icon * {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_action_icons'];?>
 ! important;fill: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_action_icons'];?>
 ! important;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_action_icons_night']) {?>body.night-mode .action-icon,body.night-mode .action-icon * {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_action_icons_night'];?>
 ! important;fill: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_action_icons_night'];?>
 ! important;}<?php }
echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['css_custome_css'],ENT_QUOTES);?>
</style><?php }
}
}
