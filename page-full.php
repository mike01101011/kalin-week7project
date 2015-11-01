<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container flex">
	
	<div class = "contactLeft" id='map'></div>
	
	<div class='contactDetails contactRight'>
		<ul>
			<li>
				<ul class="contactDetailsSubList">
					<li><h4>Address</h4></li>
					<li><a class ="hvr-underline-from-center" href="http://bit.ly/1kkKc9a" target="_blank">1718 14th St NW, Toronto, ON</a></li>
				</ul>
			</li>
			<li>
				<ul class="contactDetailsSubList">
					<li><h4>Phone</h4></li>
					<li><a class ="hvr-underline-from-center" href="tel:+1-647-567-5279">647-567-5279</a></li>
				</ul>
			</li>
			<li>
				<ul class="contactDetailsSubList">
					<li><h4>Email</h4></li>
					<li><a class ="hvr-underline-from-center" href="mailto:info@peligrineespresson.com">info@peligrineespresson.com</a></li>
				</ul>
			</li>
			<li>
				<ul class="contactDetailsSubList">
					<li><h4>Hours</h4></li>
					<li>8am-12pm, Wednesday-Sunday</li>
				</ul>
			</li>
		</ul>
	</div>


    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>