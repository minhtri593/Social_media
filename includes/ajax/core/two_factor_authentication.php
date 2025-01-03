<?php

/**
 * ajax -> core -> two factor authentication
 * 
 * 
 * 
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if ($user->_logged_in && !isset($_POST['connecting_account'])) {
  return_json(array('callback' => 'window.location.reload();'));
}

try {

  // two factor authentication
  $remember = (isset($_POST['remember'])) ? true : false;
  $connecting_account = (isset($_POST['connecting_account'])) ? true : false;
  $user->two_factor_authentication($_POST['two_factor_key'], $_POST['user_id'], $_POST['remember'], true, [], $connecting_account);

  // return
  return_json(array('callback' => 'window.location.reload();'));
} catch (Exception $e) {
  return_json(array('error' => true, 'message' => $e->getMessage()));
}
