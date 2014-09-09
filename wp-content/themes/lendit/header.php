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
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7219312/623924/css/fonts.css" />
  <?php wp_head(); ?>
  <meta name="google-site-verification" content="by6W7B4QIEZf5yc1MoQlex0GuqL2U9ekI9YTCSzX5wg" />
</head>
<body>

  <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
     <div id="navbarCollapse" class="collapse navbar-collapse">

      <div class="nav-logo">
        <a href="/">
         <img src="https://s3-us-west-2.amazonaws.com/lendit/lenditlogo_toscale_header_nodrpshadow.png" alt="LendIt" title="LendIt">
       </a>
     </div>

     <!-- This is the Nav Menu -->
     <?php

     $args = array(
      'menu' => 'Main Menu'
      );

     wp_nav_menu( $args );

     ?>
   </div>
 </div>
</nav>

