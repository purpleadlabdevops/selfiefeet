<div class="sale">Flash Sale! Get up to 70% off on our SelfieFeet</div>
<header class="header">
  <div class="container">
    <button class="header__btn">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="header__logo" href="<?php echo home_url(); ?>"><img src="<?php the_field('logotype', 'options'); ?>" alt="logotype" /></a>
    <?php
      wp_nav_menu([
        'menu' => 'header',
        'container'       => 'nav',
        'container_class' => 'header__nav',
        'container_id'    => '',
        'menu_class'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
      ]);
    ?>
    <a class="header__cart" href="<?php the_permalink(8); ?>">
      <svg class="icon icon-cart" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
        <path fill="currentColor" fill-rule="evenodd" d="M20.5 6.5a4.75 4.75 0 00-4.75 4.75v.56h-3.16l-.77 11.6a5 5 0 004.99 5.34h7.38a5 5 0 004.99-5.33l-.77-11.6h-3.16v-.57A4.75 4.75 0 0020.5 6.5zm3.75 5.31v-.56a3.75 3.75 0 10-7.5 0v.56h7.5zm-7.5 1h7.5v.56a3.75 3.75 0 11-7.5 0v-.56zm-1 0v.56a4.75 4.75 0 109.5 0v-.56h2.22l.71 10.67a4 4 0 01-3.99 4.27h-7.38a4 4 0 01-4-4.27l.72-10.67h2.22z"></path>
      </svg>
      <span>
        <?php
          global $woocommerce;
          echo count($woocommerce->cart->get_cart());
        ?>
      </span>
    </a>
  </div>
</header>