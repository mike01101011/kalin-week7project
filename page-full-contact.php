<?php

/*
	Template Name: Full Page, No Sidebar, Conact
*/

get_header();  ?>

<div class="main">
	<div class="container">
		<h2 class="pageHeading">Contact</h2>
	</div>
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
						<li><a class ="hvr-underline-from-center" href="mailto:info@peregrineespresson.com">info@peregrineespresson.com</a></li>
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
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>