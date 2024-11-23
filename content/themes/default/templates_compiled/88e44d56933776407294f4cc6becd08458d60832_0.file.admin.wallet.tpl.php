<?php
/* Smarty version 4.3.4, created on 2024-11-18 01:54:26
  from 'C:\xampp\htdocs\content\themes\default\templates\admin.wallet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673a9e52832df0_13026841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88e44d56933776407294f4cc6becd08458d60832' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\admin.wallet.tpl',
      1 => 1691857616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_673a9e52832df0_13026841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-wallet mr10"></i><?php echo __("Wallet");?>

  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <form class="js_ajax-forms" data-url="admin/settings.php?edit=wallet">
      <div class="card-body">
        <div class="alert alert-warning">
          <div class="icon">
            <i class="fa fa-exclamation-triangle fa-2x"></i>
          </div>
          <div class="text pt5">
            <?php echo __("Make sure you have configured");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, false);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Wallet Enabled");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Turn the wallet On and Off");?>

            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="wallet_enabled">
              <input type="checkbox" name="wallet_enabled" id="wallet_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet_transfer",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Transfer Money Enabled");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("Turn the transfer money between users On and Off");?>

            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="wallet_transfer_enabled">
              <input type="checkbox" name="wallet_transfer_enabled" id="wallet_transfer_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_transfer_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Maximum Transfer Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="wallet_max_transfer" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['wallet_max_transfer'];?>
">
            <div class="form-text">
              <?php echo __("The maximum amount of money so user can transfer to another user");?>
 (0 <?php echo __("for unlimited");?>
)
            </div>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"withdrawal",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Users Can Withdraw Money From Wallet");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo __("If enabled users will be able to withdraw money from their wallets");?>

            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="wallet_withdrawal_enabled">
              <input type="checkbox" name="wallet_withdrawal_enabled" id="wallet_withdrawal_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_withdrawal_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Payment Method");?>

          </label>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_paypal" id="method_paypal" <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_skrill" id="method_skrill" <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_moneypoolscash" id="method_moneypoolscash" <?php if (in_array("moneypoolscash",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_moneypoolscash"><?php echo __("MoneyPoolsCash");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_bank" id="method_bank" <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
            </div>
            <div class="form-check form-check-inline" id="js_custome-withdrawal">
              <input type="checkbox" class="form-check-input" name="method_custom" id="method_custom" <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_custom"><?php echo __("Custom Method");?>
</label>
            </div>
            <div class="form-text">
              <?php echo __("Users can send withdrawal requests via any of these methods");?>

            </div>
          </div>
        </div>

        <div id="js_custome-withdrawal-name" <?php if (!in_array("custom",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo __("Custom Method Name");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="wallet_payment_method_custom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_custom'];?>
">
              <div class="form-text">
                <?php echo __("Set the name of your custom withdrawal payment method");?>

              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Minimum Withdrawal Request");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="wallet_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['wallet_min_withdrawal'];?>
">
            <div class="form-text">
              <?php echo __("The minimum amount of money so user can send a withdrawal request");?>

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

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>

    <div class="card-body">

      <div class="alert alert-info">
        <div class="icon">
          <i class="fa fa-info-circle fa-2x"></i>
        </div>
        <div class="text pt5">
          <?php echo __("You will need to make the payments from your Paypal, Skrill, Bank Account... etc");?>
. <?php echo __("After making the payment you can mark the payment request as paid");?>
.
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("User");?>
</th>
              <th><?php echo __("Amount");?>
</th>
              <th><?php echo __("Method");?>
</th>
              <th><?php echo __("Transfer To");?>
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];
}?>
                  </a>
                </td>
                <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['row']->value['amount'],2));?>
</td>
                <td>
                  <span class="badge rounded-pill badge-lg bg-<?php echo $_smarty_tpl->tpl_vars['row']->value['method_color'];?>
">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['method'] ));?>

                  </span>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['method_value'];?>
</td>
                <td>
                  <button data-bs-toggle="tooltip" title='<?php echo __("Mark as Paid");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="wallet" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                    <i class="fa fa-check"></i>
                  </button>
                  <button data-bs-toggle="tooltip" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="wallet" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                    <i class="fa fa-times"></i>
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

  <?php }?>

</div><?php }
}
