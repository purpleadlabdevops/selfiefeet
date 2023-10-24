<?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'order' => 'ASC'
    );
    $loop = new WP_Query( $args );
?>

<section class="products">
  <div class="container">
    <h3><?php the_field('products_title', 'options'); ?></h3>
    <div class="products__row">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="products__item products__item-<?php the_ID(); ?>">
          <h4><?php the_field('subtitle'); ?></h4>
          <?php echo woocommerce_get_product_thumbnail(); ?>
          <div class="products__price">
            <?php if($product->get_sale_price()): ?>
              <strike><?php echo get_woocommerce_currency_symbol() . $product->get_regular_price(); ?></strike>
            <?php endif; ?>
            <?php echo get_woocommerce_currency_symbol() . $product->get_price(); ?>
          </div>
          <div class="products__description"><?php echo $product->get_short_description(); ?></div>
          <?php if($product->get_stock_status() === 'instock'): ?>
            <button class="products__btn addToCart" data-id="<?php the_ID(); ?>" data-qty="1">Buy One and Save 30% 👉</button>
          <?php else: ?>
            <button class="products__btn" disabled>Sold Out</button>
          <?php endif; ?>
          <img src="<?php echo IMG; ?>/pp.avif" alt="">
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

