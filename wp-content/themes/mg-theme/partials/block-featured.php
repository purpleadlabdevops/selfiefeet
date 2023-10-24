<section class="featured">
  <div class="container">
    <h4><?php the_field('featured_title', 'options'); ?></h4>
    <?php
    $images = get_field('featured_images', 'options');
    if( $images ): ?>
      <div class="featured__row">
        <?php foreach( $images as $image ): ?>
          <img src="<?php echo $image; ?>" alt="">
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>