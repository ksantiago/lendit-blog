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

  <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
</head>
<body>

  <!-- Google Analytics Code -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12735343-10']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_setDomainName', 'lendit.co']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <!-- End of Google Analytics Code -->

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

