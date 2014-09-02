<p>This is the header.</p>

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