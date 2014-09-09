<?php get_header(); ?>

<div class="main">
  <div class="main-blog">
    <div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
      <hr>

    <?php endwhile; else: ?>

      <p>There are no posts here.</p>

    <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
