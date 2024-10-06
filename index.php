<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thepumpkingirl
 */

get_header();
?>

<main id="primary" class="site-main">


	<div class="welcome-container">
		<div class="welcome-message">
			<div class="welcome-text">
				<h2>Hello there! Welcome!</h2>
			</div>
			<div class="ghost">
				<div class="ghost-body">
					<img src="https://thepumpkingirl.ca/wp-content/uploads/2024/10/ghost-no-arm.png"
						alt="PNG image of Sara's ghost.">

				</div>
				<div class="ghost-arm">
					<img src="https://thepumpkingirl.ca/wp-content/uploads/2024/10/ghost-arm-animation.png"
						alt="PMG image of Sara's ghost characters arm, waving.">
				</div>

			</div>



		</div>
	</div>



</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
