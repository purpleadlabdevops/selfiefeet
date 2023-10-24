<section class="features">
  <div class="container">
    <h2><?php the_field('features_title', 'options'); ?></h2>
    <?php if( have_rows('features_items', 'options') ): $i=0; ?>
      <div class="features__row">
        <?php while( have_rows('features_items', 'options') ): the_row(); $i++; ?>
          <div class="features__item">
            <h4><?php the_sub_field('text'); ?></h4>
            <img src="<?php echo IMG.'/f'.$i.'.webp'; ?>" alt="">
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>