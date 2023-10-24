<section class="proof">
  <div class="container">
    <h2><?php the_field('proofs_title', 'options'); ?></h2>
    <?php if( have_rows('proofs_items', 'options') ): $i=0; ?>
    <div class="proof__slider">
      <?php while( have_rows('proofs_items', 'options') ): the_row(); $i++; ?>
      <div class="proof__item">
        <div class="proof__info">
          <img class="proof__sm" src="<?php the_sub_field('icon'); ?>" alt="">
          <div class="proof__name"><?php the_sub_field('name'); ?></div>
          <ul class="proof__stars">
            <li class="proof__stars-f"></li>
            <li class="proof__stars-f"></li>
            <li class="proof__stars-f"></li>
            <li class="proof__stars-f"></li>
            <li class="proof__stars-f"></li>
          </ul>
          <div class="proof__text">
            <svg class="proof__quote proof__quote-left" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
            <?php the_sub_field('text'); ?>
            <svg class="proof__quote proof__quote-right" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M448 296c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H320c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72zm-256 0c0 66.3-53.7 120-120 120H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72z"/></svg>
          </div>
        </div>
        <img class="proof__lg" src="<?php the_sub_field('image'); ?>" alt="">
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>