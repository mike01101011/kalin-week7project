<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
	<div class="container">
		<h2 class="pageHeading"><?php the_title(); ?></h2>
	</div>
	<div class="container flex">
	</div>
	<div class="container">
		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

		<?php endwhile; // end the loop?>

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>