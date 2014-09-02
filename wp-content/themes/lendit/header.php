<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      <?php
        wp_title( '-', true, 'right' );

        bloginfo( 'name' );
      ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>

    <nav>

      <div>
        <img src="https://s3-us-west-2.amazonaws.com/lendit/lenditlogo_toscale_header_nodrpshadow.png" alt="LendIt" title="LendIt">
      </div>

      <!-- This is the Nav Menu -->
      <?php

        $args = array(
          'menu' => 'Main Menu'
        );

        wp_nav_menu( $args );

      ?>

    </nav>