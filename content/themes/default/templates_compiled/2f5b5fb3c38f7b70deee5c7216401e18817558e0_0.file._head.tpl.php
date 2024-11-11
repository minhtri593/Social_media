<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:05:33
  from 'C:\xampp\htdocs\content\themes\default\templates\_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731f30da13501_66084044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5b5fb3c38f7b70deee5c7216401e18817558e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\_head.tpl',
      1 => 1698010002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.css.tpl' => 1,
  ),
),false)) {
function content_6731f30da13501_66084044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>

<html data-lang="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Sngine">
    <meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
">

    <!-- Title -->
    <title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
">
    <!-- Meta -->

    <!-- OG-Meta -->
    <meta property="og:title" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
" />
    <meta property="og:description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
" />
    <meta property="og:site_name" content="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['page_image']->value;?>
" />
    <!-- OG-Meta -->

    <!-- Twitter-Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
" />
    <meta name="twitter:description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
" />
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['page_image']->value;?>
" />
    <!-- Twitter-Meta -->

    <!-- Favicon -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png" />
    <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['system_favicon']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
" />
    <?php }?>
    <!-- Favicon -->

    <!-- Fonts [Poppins|Font-Awesome] -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts [Poppins|Font-Awesome] -->

    <!-- CSS -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
      <link href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
        <?php echo minimize_css("../css/style.css");?>

      </style>
    <?php } else { ?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
      <style>
        <?php echo minimize_css("../css/style.rtl.css");?>

      </style>
    <?php }?>
    <!-- CSS -->

    <!-- CSS Customized -->
    <?php $_smarty_tpl->_subTemplateRender('file:_head.css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- CSS Customized -->

    <!-- Header Custom JavaScript -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['custome_js_header']) {?>
      <?php echo '<script'; ?>
>
        <?php echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['custome_js_header'],ENT_QUOTES);?>

      <?php echo '</script'; ?>
>
    <?php }?>
    <!-- Header Custom JavaScript -->

</head><?php }
}
