<section class="faq">
  <div class="container">
    <h2><?php the_field('faq_title', 'options'); ?></h2>
    <?php if( have_rows('faq_items', 'options') ): ?>
    <div class="faq__list">
      <?php while( have_rows('faq_items', 'options') ): the_row(); ?>
        <div class="faq__item">
          <button class="faq__title" type="button"><?php the_sub_field('question'); ?><i class="fa-solid fa-chevron-right"></i></button>
          <div class="faq__text"><?php the_sub_field('answer'); ?></div>
        </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>