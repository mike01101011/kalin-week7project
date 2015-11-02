<?php

/*
	Template Name: Full Page, No Sidebar, Contact
*/

get_header();  ?>

<div class="main">
	<div class="container">
		<h2 class="pageHeading"><?php the_title(); ?></h2>
	</div>
	<div class="container flex">
		<div class = "contactLeft" id='map'></div>
		<div class='contactDetails contactRight'>
			<ul>
				<li>
					<ul class="contactDetailsSubList">
						<li><h4>Address</h4></li>
						<li><a class ="hvr-underline-from-center" href="http://bit.ly/1kkKc9a" target="_blank">123 Main St, Toronto, ON</a></li>
					</ul>
				</li>
				<li>
					<ul class="contactDetailsSubList">
						<li><h4>Phone</h4></li>
						<li><a class ="hvr-underline-from-center" href="tel:+1-555-555-5555">555-555-5555</a></li>
					</ul>
				</li>
				<li>
					<ul class="contactDetailsSubList">
						<li><h4>Email</h4></li>
						<li><a class ="hvr-underline-from-center" href="mailto:info@espresso.com">info@espresso.com</a></li>
					</ul>
				</li>
				<li>
					<ul class="contactDetailsSubList">
						<li><h4>Hours</h4></li>
						<li><p>8am-12pm, Wednesday-Sunday</p></li>
					</ul>
				</li>
			</ul>
		</div>
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>