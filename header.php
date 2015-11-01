<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Julius+Sans+One|Cutive+Mono' rel='stylesheet' type='text/css'>
  <script src='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.css' rel='stylesheet' />
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<header>
  <div class="container flex">
    <div class="left">
      <h1>
        <a  class ="hvr-underline-from-center"href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
    </div>
    <div class="right">
      <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary')); ?>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->

