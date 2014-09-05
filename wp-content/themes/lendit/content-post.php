<div>
  <header>
    <h3>
      <?php if(is_single()): ?>
        <?php the_title(); ?>
      <?php else: ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <?php endif; ?>
    </h3>
  </header>

  <ul>
    <?php if(is_single()): ?>
      <li>Written by: <?php the_author(); ?></li>
      <li>Published: <?php the_time('F j, Y'); ?></li>
    <?php else: ?>
      <li>Published: <?php the_time('F j, Y'); ?></li>
    <?php endif; ?>
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

