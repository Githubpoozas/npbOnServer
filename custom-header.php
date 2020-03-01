<?php
/**
* Template Name: custom banner template
* Description: page custom banner template
*/ 
?>
    <!-- header banner -->
    <div class="header__banner">
	<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/3Mp5hBj7rSs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

	sadfsdfa
    </div>
<?php
get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->


<?php get_footer(); ?>
