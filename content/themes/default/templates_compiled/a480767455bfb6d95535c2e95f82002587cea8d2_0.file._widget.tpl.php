<?php
/* Smarty version 4.3.4, created on 2024-11-11 12:28:53
  from 'C:\xampp\htdocs\content\themes\default\templates\_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6731f885414ee6_36668969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a480767455bfb6d95535c2e95f82002587cea8d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\_widget.tpl',
      1 => 1647975707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731f885414ee6_36668969 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
  <!-- Widgets -->
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
    <div class="card">
      <div class="card-header">
        <strong><?php ob_start();
echo $_smarty_tpl->tpl_vars['widget']->value['title'];
$_prefixVariable1 = ob_get_clean();
echo __($_prefixVariable1);?>
</strong>
      </div>
      <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <!-- Widgets -->
<?php }
}
}
