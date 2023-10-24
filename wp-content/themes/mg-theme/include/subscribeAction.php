<?php

function subscribeAction(){
  global $wpdb;

  require_once( ABSPATH . 'wp-admin/includes/file.php' );

  $email = $_POST['email'];

  $wpdb->insert('subscribers', [ 'email' => $email ]);

  $inserted_id = $wpdb->insert_id;

  if($inserted_id){
    $msg = [
      'status' => 'success',
      'msg' => 'Your id is '.$inserted_id
    ];
  } else {
    $msg = [
      'status' => 'error',
      'msg' => 'Some error with db!'
    ];
  }

  echo json_encode($msg);

  wp_die();
}
add_action('wp_ajax_subscribeAction', 'subscribeAction');
add_action('wp_ajax_nopriv_subscribeAction', 'subscribeAction');