<section class="specification">
  <div class="container">
    <h2><?php the_field('specification_title', 'options'); ?></h2>
    <div class="specification__row">
      <?php if( have_rows('specification_items', 'options') ): $i=0; ?>
      <table>
        <tbody>
          <?php while( have_rows('specification_items', 'options') ): the_row(); $i++; ?>
            <tr>
              <td><?php the_sub_field('name'); ?></td>
              <td><?php the_sub_field('text'); ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
      <?php endif; ?>
      <img src="<?php the_field('specification_image', 'options'); ?>" alt="">
    </div>
  </div>
</section>