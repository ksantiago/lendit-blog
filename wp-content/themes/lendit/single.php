<?php get_header(); ?>

<div class="main">
	<div class="main-blog">
		<div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('content', 'post'); ?>

    <?php endwhile; else: ?>

      <p>There are no posts here.</p>

    <?php endif; ?>

		</div>
	</div>
</div>


<?php get_footer(); ?>

