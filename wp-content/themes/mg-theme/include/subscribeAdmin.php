<?php

function mg_admin_menu_subscribers() {
  add_menu_page(
    __( 'Subscribers', 'mg-textdomain-subscribers' ),
    __( 'Subscribers', 'mg-textdomain-subscribers' ),
    'manage_options',
    'subscribers',
    'mg_admin_page_contents_subscribers',
    'dashicons-email-alt',
    100
  );
}
add_action( 'admin_menu', 'mg_admin_menu_subscribers' );


function mg_admin_page_contents_subscribers() {
  global $wpdb;
  $subscribers = $wpdb->get_results( "SELECT * FROM subscribers" );
?>
<div class="wrap">
  <h1 class="wp-heading-inline">Subscribers list</h1>
  <table class="post__table">
    <thead>
      <tr>
        <th>ID</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach (array_reverse($subscribers) as $subscriber): ?>
        <tr>
          <td><?php echo $subscriber->ID; ?></td>
          <td><a href="mailto:<?php echo $subscriber->email; ?>"><?php echo $subscriber->email; ?></a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php

}