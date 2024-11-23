<?php
/* Smarty version 4.3.4, created on 2024-11-18 01:53:25
  from 'C:\xampp\htdocs\content\themes\default\templates\wallet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673a9e15076992_28713945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02b3c457c476eb47b4e8fa1388873c0d93cb4053' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\wallet.tpl',
      1 => 1698671629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 11,
    'file:_no_transactions.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_673a9e15076992_28713945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_wallet_aym5.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Wallet");?>
</h2>
    <p class="text-xlg"><?php echo __("Send and Transfer Money");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">

      <!-- tabs -->
      <div class="position-relative">
        <div class="content-tabs rounded-sm shadow-sm clearfix">
          <ul>
            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
                <?php echo __("Wallet");?>

              </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_withdrawal_enabled']) {?>
              <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "payments") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet/payments">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"payments",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                  <?php echo __("Payments");?>

                </a>
              </li>
            <?php }?>
          </ul>
        </div>
      </div>
      <!-- tabs -->

      <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

        <!-- wallet -->
        <div class="card mt20">
          <div class="card-header with-icon">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Wallet");?>

          </div>
          <div class="card-body page-content">
            <?php if ($_smarty_tpl->tpl_vars['wallet_transfer_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Your");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_transfer_amount']->value,2));?>
</span> <?php echo __("transfer transaction successfuly sent");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_replenish_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_replenish_amount']->value,2));?>
</span>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_affiliates_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_withdraw_affiliates_amount']->value,2));?>
</span> <?php echo __("from your affiliates credit");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_points_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_withdraw_points_amount']->value,2));?>
</span> <?php echo __("from your points credit");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_market_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_withdraw_market_amount']->value,2));?>
</span> <?php echo __("from your market credit");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_funding_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_withdraw_funding_amount']->value,2));?>
</span> <?php echo __("from your funding credit");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_monetization_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_withdraw_monetization_amount']->value,2));?>
</span> <?php echo __("from your monetization credit");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_package_payment_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Your");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_package_payment_amount']->value,2));?>
</span> <?php echo __("payment transaction successfuly done");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_monetization_payment_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Your");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_monetization_payment_amount']->value,2));?>
</span> <?php echo __("payment transaction successfuly done");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['wallet_paid_post_amount']->value) {?>
              <div class="alert alert-success mb20">
                <i class="fas fa-check-circle mr5"></i>
                <?php echo __("Your");?>
 <span class="badge rounded-pill badge-lg bg-secondary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['wallet_paid_post_amount']->value,2));?>
</span> <?php echo __("payment transaction successfuly done");?>

              </div>
            <?php }?>

            <div class="row">
              <!-- credit -->
              <div class="col-md-5">
                <div class="section-title mb20">
                  <?php echo __("Your Credit");?>

                </div>
                <div class="stat-panel bg-gradient-info">
                  <div class="stat-cell small">
                    <i class="fa fa-money-bill-alt bg-icon"></i>
                    <div class="h3 mtb10">
                      <?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2));?>

                    </div>
                  </div>
                </div>
              </div>
              <!-- credit -->

              <!-- send & recieve money -->
              <div class="col-md-7">
                <div class="section-title mb20">
                  <?php echo __("Send & Recieve Money");?>

                </div>
                <div class="d-grid">
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_transfer_enabled']) {?>
                    <button class="btn btn-outline-primary mb10" data-toggle="modal" data-url="#wallet-transfer">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet_transfer",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Send Money");?>

                    </button>
                  <?php }?>
                </div>

                <div class="d-grid gap-2">
                  <button class="btn btn-outline-primary" data-toggle="modal" data-url="#wallet-replenish">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"payments",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Replenish Credit");?>

                  </button>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled'] && $_smarty_tpl->tpl_vars['system']->value['affiliates_money_transfer_enabled']) {?>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-url="#wallet-withdraw-affiliates">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"affiliates",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Affiliates Credit");?>

                    </button>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled'] && $_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled']) {?>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-url="#wallet-withdraw-points">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"points",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Points Credit");?>

                    </button>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products'] && $_smarty_tpl->tpl_vars['system']->value['market_money_transfer_enabled']) {?>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-url="#wallet-withdraw-market">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Marketplace Credit");?>

                    </button>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding'] && $_smarty_tpl->tpl_vars['system']->value['funding_money_transfer_enabled']) {?>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-url="#wallet-withdraw-funding">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Funding Credit");?>

                    </button>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content'] && $_smarty_tpl->tpl_vars['system']->value['monetization_money_transfer_enabled']) {?>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-url="#wallet-withdraw-monetization">
                      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                      <?php echo __("Monetization Credit");?>

                    </button>
                  <?php }?>
                </div>
              </div>
              <!-- send & recieve money -->

              <!-- wallet transactions -->
              <div class="col-12 mt20">
                <div class="section-title mt10 mb20">
                  <?php echo __("Wallet Transactions");?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['transactions']->value) {?>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover js_dataTable">
                      <thead>
                        <tr>
                          <th><?php echo __("ID");?>
</th>
                          <th><?php echo __("Amount");?>
</th>
                          <th><?php echo __("From / To");?>
</th>
                          <th><?php echo __("Time");?>
</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
?>
                          <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['transaction_id'];?>
</td>
                            <td>
                              <?php if ($_smarty_tpl->tpl_vars['transaction']->value['type'] == "out") {?>
                                <span class="badge rounded-pill badge-lg bg-danger mr5"><i class="far fa-arrow-alt-circle-down"></i></span>
                                <strong class="text-danger"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['transaction']->value['amount'],2));?>
</strong>
                              <?php } else { ?>
                                <span class="badge rounded-pill badge-lg bg-success mr5"><i class="far fa-arrow-alt-circle-up"></i></span>
                                <strong class="text-success"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['transaction']->value['amount'],2));?>
</strong>
                              <?php }?>
                            </td>
                            <td>
                              <?php if ($_smarty_tpl->tpl_vars['transaction']->value['type'] == "out") {?>
                                <span class="badge rounded-pill badge-lg bg-danger mr10"><?php echo __("To");?>
</span>
                              <?php } else { ?>
                                <span class="badge rounded-pill badge-lg bg-success mr10"><?php echo __("From");?>
</span>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "user" || $_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "tip") {?>
                                <?php if ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "tip") {?>
                                  <span class="badge rounded-pill badge-lg bg-secondary mr10"><?php echo __("Tip");?>
</span>
                                <?php }?>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_name'];?>
">
                                  <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_picture'];?>
" style="float: none;">
                                  <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_name'];?>

                                  <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_lastname'];?>

                                  <?php }?>
                                </a>
                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "recharge") {?>
                                <?php echo __("Replenish Credit");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_wallet") {?>
                                <?php echo __("Wallet Withdrawal");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_affiliates") {?>
                                <?php echo __("Affiliates Credit");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_points") {?>
                                <?php echo __("Points Credit");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_market") {?>
                                <?php echo __("Market Credit");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_funding") {?>
                                <?php echo __("Funding Credit");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_monetization") {?>
                                <?php echo __("Monetization Credit");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "package_payment") {?>
                                <?php echo __("Buy Pro Package");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "subscribe_profile" || $_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "subscribe_user") {?>
                                <?php echo __("Subscribe to Profile");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "subscribe_page") {?>
                                <?php echo __("Subscribe to Page");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "subscribe_group") {?>
                                <?php echo __("Subscribe to Group");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "paid_post") {?>
                                <?php echo __("Paid Post");?>

                              <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "market") {?>
                                <?php echo __("Market Purchase");?>

                              <?php }?>
                            </td>
                            <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
</span></td>
                          </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </tbody>
                    </table>
                  </div>
                <?php } else { ?>
                  <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
              </div>
              <!-- wallet transactions -->
            </div>
          </div>
        </div>
        <!-- wallet -->

      <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "payments") {?>

        <!-- payments -->
        <div class="card mt20">
          <div class="card-header with-icon">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"payments",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Payments");?>

          </div>
          <div class="card-body page-content">
            <div class="section-title mt10 mb20">
              <?php echo __("Withdrawal Request");?>

            </div>
            <form class="js_ajax-forms" data-url="users/withdraw.php?type=wallet">
              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo __("Your Balance");?>

                </label>
                <div class="col-md-9">
                  <h6>
                    <span class="badge badge-lg bg-info">
                      <?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2));?>

                    </span>
                  </h6>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                </label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="amount">
                  <div class="form-text">
                    <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo print_money($_smarty_tpl->tpl_vars['system']->value['wallet_min_withdrawal']);?>

                  </div>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo __("Payment Method");?>

                </label>
                <div class="col-md-9">
                  <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                    <div class="form-check form-check-inline">
                      <input type="radio" name="method" id="method_paypal" value="paypal" class="form-check-input">
                      <label class="form-check-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
                    </div>
                  <?php }?>
                  <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                    <div class="form-check form-check-inline">
                      <input type="radio" name="method" id="method_skrill" value="skrill" class="form-check-input">
                      <label class="form-check-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
                    </div>
                  <?php }?>
                  <?php if (in_array("moneypoolscash",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                    <div class="form-check form-check-inline">
                      <input type="radio" name="method" id="method_moneypoolscash" value="moneypoolscash" class="form-check-input">
                      <label class="form-check-label" for="method_moneypoolscash"><?php echo __("MoneyPoolsCash");?>
</label>
                    </div>
                  <?php }?>
                  <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                    <div class="form-check form-check-inline">
                      <input type="radio" name="method" id="method_bank" value="bank" class="form-check-input">
                      <label class="form-check-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
                    </div>
                  <?php }?>
                  <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                    <div class="form-check form-check-inline">
                      <input type="radio" name="method" id="method_custom" value="custom" class="form-check-input">
                      <label class="form-check-label" for="method_custom"><?php echo __($_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_custom']);?>
</label>
                    </div>
                  <?php }?>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo __("Transfer To");?>

                </label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="method_value">
                </div>
              </div>

              <div class="row">
                <div class="col-md-9 offset-md-3">
                  <button type="submit" class="btn btn-primary"><?php echo __("Make a withdrawal");?>
</button>
                </div>
              </div>

              <!-- success -->
              <div class="alert alert-success mt15 mb0 x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger mt15 mb0 x-hidden"></div>
              <!-- error -->
            </form>

            <div class="section-title mt20 mb20">
              <?php echo __("Withdrawal History");?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
              <div class="table-responsive mt20">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th><?php echo __("ID");?>
</th>
                      <th><?php echo __("Amount");?>
</th>
                      <th><?php echo __("Method");?>
</th>
                      <th><?php echo __("Transfer To");?>
</th>
                      <th><?php echo __("Time");?>
</th>
                      <th><?php echo __("Status");?>
</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_1_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>
                        <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2));?>
</td>
                        <td>
                          <?php if ($_smarty_tpl->tpl_vars['payment']->value['method'] == "custom") {?>
                            <?php echo $_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_custom'];?>

                          <?php } else { ?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['method'] ));?>

                          <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['method_value'];?>
</td>
                        <td>
                          <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>
                        </td>
                        <td>
                          <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>
                            <span class="badge rounded-pill badge-lg bg-warning"><?php echo __("Pending");?>
</span>
                          <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>
                            <span class="badge rounded-pill badge-lg bg-success"><?php echo __("Approved");?>
</span>
                          <?php } else { ?>
                            <span class="badge rounded-pill badge-lg bg-danger"><?php echo __("Declined");?>
</span>
                          <?php }?>
                        </td>
                      </tr>
                    <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
              </div>
            <?php } else { ?>
              <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
          </div>
        </div>
        <!-- payments -->

      <?php }?>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
