<?php

/*
	Template Name: Full Page, No Sidebar, Home
*/

get_header();  ?>

<div class="main">
	<div class="container">
		<h2 class="pageHeading"><?php the_title(); ?></h2>
	</div>
	<div class="container flex">
		<div class="logo">
			<div class="a hvr-underline-from-center"><a href="#">A</a></div>
			<div class="b hvr-underline-from-center"><a href="#">B</a></div>
			<div class="c hvr-underline-from-center"><a href="#">C</a></div>
			<div class="d hvr-underline-from-center"><a href="#">D</a></div>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 90 90" enable-background="new 0 0 90 90" xml:space="preserve">
				<rect x="44.958" y="-18.605" transform="matrix(0.7052 0.7091 -0.7091 0.7052 45.1408 -18.7228)" width="0.251" height="127.043"/>
				<rect x="-18.439" y="44.792" transform="matrix(0.7071 0.7071 -0.7071 0.7071 44.9656 -18.7227)" width="127.043" height="0.25"/>
				<!-- Created by Kervin Markle from the Noun Project -->
			</svg>
		</div>
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>