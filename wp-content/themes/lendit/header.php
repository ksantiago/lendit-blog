<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">


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

	<?php if ( !is_user_logged_in() ){ ?>
		<style>
			#wpadminbar{ display:none; }
		</style>
	<?php } ?>

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


	<div class="navbar-area">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="logo-area">
					<a href="http://www.lendit.co" class="nav-logo"></a>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- This is the Nav Menu -->
					<?php
					wp_nav_menu( array(
						'menu'              => 'Main Menu',
						'theme_location'    => 'lendit',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
					?>

				</div>
			</div>
		</nav>
	</div>



