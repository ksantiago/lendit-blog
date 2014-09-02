<div>
  <header>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </header>

  <ul>
    <li>Published: <?php the_time('F j, Y'); ?></li>
  </ul>

  <div class="excerpt">
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
  </div>
</div>