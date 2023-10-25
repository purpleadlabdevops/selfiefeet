<?php
  $product_id = 12;
  $product = wc_get_product($product_id);
?>
<section class="product">
  <div class="container">
    <div class="product__row">
      <div class="product__gallery">
        <?php $attachment_ids = $product->get_gallery_image_ids(); ?>
        <img class="product__gallery-img" src="<?php echo wp_get_attachment_url( $attachment_ids[0] ); ?>" alt="">
        <div class="product__gallery-nav">
          <?php $i = 0; foreach( $attachment_ids as $attachment_id ): $i++; ?>
            <img <?php if($i===1){echo 'class="active"';} ?> src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" alt="">
          <?php endforeach; ?>
        </div>
      </div>
      <div class="product__info">
        <div class="product__rated">
          <ul class="product__stars">
            <li class="product__stars-f"></li>
            <li class="product__stars-f"></li>
            <li class="product__stars-f"></li>
            <li class="product__stars-f"></li>
            <li class="product__stars-h"><i></i></li>
          </ul>
          Rated 4.8/5 by hundreds of happy customers
        </div>
        <div class="product__title"><?php the_field('subtitle', $product_id); ?></div>
        <div class="product__price">
          <?php if($product->get_sale_price()): ?>
            <strike><?php echo get_woocommerce_currency_symbol() . $product->get_regular_price(); ?></strike>
          <?php endif; ?>
          <?php echo get_woocommerce_currency_symbol() . $product->get_price(); ?>
        </div>
        <div class="product__description"><?php echo $product->get_description(); ?></div>
        <?php if($product->get_stock_status() === 'instock'): ?>
        <form class="product__form" id="addToCart" data-id="<?php echo $product_id; ?>">
          <div class="product__qty">
            <button id="productQtyMinus" type="button">-</button>
            <input id="productQty" type="text" value="1" min="1" max="100" readonly required />
            <button id="productQtyPlus" type="button">+</button>
          </div>
          <button type="submit" >
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
            <span>Add to cart</span>
          </button>
          <div class="product__loader"></div>
        </form>
        <?php else: ?>
          <div class="product__status"><?php echo $product->get_stock_status(); ?></div>
        <?php endif; ?>
        <img class="product__payment" src="<?php echo IMG; ?>/payment.jpeg" alt="">
      </div>
    </div>
  </div>
</section>