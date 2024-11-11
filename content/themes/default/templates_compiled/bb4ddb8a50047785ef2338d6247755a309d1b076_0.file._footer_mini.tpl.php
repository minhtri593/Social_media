<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:28:53
  from 'C:\xampp\htdocs\content\themes\default\templates\_footer_mini.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731f8854a1b98_18350798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb4ddb8a50047785ef2338d6247755a309d1b076' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\_footer_mini.tpl',
      1 => 1691576555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731f8854a1b98_18350798 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mini-footer mtb20 plr10">
  <div class="copyrights dropdown">
    <span class="mr5">&copy; <?php echo date('Y');?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
</span>
    <!-- language -->
    <a href="#" class="language-dropdown" data-bs-toggle="dropdown">
      <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['flag'];?>
">
      <span><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
      <div class="js_scroller">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
          <a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
">
            <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>

          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
    <!-- language -->
  </div>
  <ul class="links">
    <?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page');
$_smarty_tpl->tpl_vars['static_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->do_else = false;
?>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
            <?php echo __($_smarty_tpl->tpl_vars['static_page']->value['page_title']);?>

          </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
          <?php echo __("Contact Us");?>

        </a>
      </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
          <?php echo __("Directory");?>

        </a>
      </li>
    <?php }?>
  </ul>
</div><?php }
}
