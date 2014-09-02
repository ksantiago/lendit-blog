<div>
  <header>
    <h3>><?php the_title(); ?></h3>
  </header>

  <ul>
    <li>Written by: <?php the_author(); ?></li>
    <li>Published: <?php the_time('F j, Y'); ?></li>
  </ul>

  <div class="excerpt">
    <?php if(is_single()): ?>

    <?php the_content(); ?>
    <?php comments_template(); ?>

  <?php else: ?>

    <?php the_excerpt(); ?>
    <p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>

  <?php endif; ?>
  </div>
</div>

