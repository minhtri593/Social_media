<?php
/* Smarty version 4.3.4, created on 2024-11-12 02:32:44
  from 'C:\xampp\htdocs\content\themes\default\templates\admin.blacklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732be4c34cf69_73918393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3592615a4b78bf10588552b22fa435a53273b29b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\admin.blacklist.tpl',
      1 => 1685288947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6732be4c34cf69_73918393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/blacklist/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo __("Add New");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/blacklist" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-minus-circle mr5"></i><?php echo __("Blacklist");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Type");?>
</th>
              <th><?php echo __("Value");?>
</th>
              <th><?php echo __("Added");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "ip") {?>
                    <span class="badge badge-lg bg-danger">IP</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "email") {?>
                    <span class="badge badge-lg bg-primary"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['node_type']);?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "username") {?>
                    <span class="badge badge-lg bg-info"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['node_type']);?>
</span>
                  <?php }?>
                </td>
                <td><span class="badge badge-lg bg-warning"><?php echo $_smarty_tpl->tpl_vars['row']->value['node_value'];?>
</span></td>
                <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['row']->value['created_time'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['created_time'];?>
</span></td>
                <td>
                  <button data-bs-toggle="tooltip" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="blacklist_node" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

    <form class="js_ajax-forms" data-url="admin/blacklist.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Type");?>

          </label>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input type="radio" name="node_type" id="ip" value="ip" class="form-check-input" checked>
              <label class="form-check-label" for="ip"><?php echo __("IP");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="node_type" id="email" value="email" class="form-check-input">
              <label class="form-check-label" for="email"><?php echo __("Email Provider");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="node_type" id="username" value="username" class="form-check-input">
              <label class="form-check-label" for="username"><?php echo __("Username");?>
</label>
            </div>
            <div class="form-text">
              <?php echo __("Select what you want to add to the blackist");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Value");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="node_value">
            <div class="form-text">
              <?php echo __("IP (example: 192.168.687.123) | Email Povider (example: outlook.com or gmail.com) | Username (example: admin or superadmin)");?>
<br>
            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}
