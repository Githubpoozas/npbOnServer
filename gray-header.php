<?php
/**
* Template Name: gray-banner template
* Description: page with gray-banner template
*/ 
?>
    <!-- header banner -->
    <div class="header__banner">
    <div class="header__bannerGray">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/noproblem_logo.svg"
        alt="logo"
        class="header__bannerGray-logo"
      />
    </div>
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
