<?php

/*
    Template Name: Home Page
*/

get_header()
 ?>


    <!-- HERO
    ================================================== -->
  
	<?php get_template_part('content','newbanner')?>
	

	
	<?php get_template_part('content', 'newsScroll') ?>


    <!-- ABOUT THE BAND
	================================================== -->

	<?php get_template_part('content','about'); ?>
	
	
	<!-- OPT IN SECTION
	================================================== -->
	
	<?php get_template_part('content', 'subscribe') ?>
    

	<!-- VIDEOS
	================================================== -->

	<?php get_template_part('content', 'videos'); ?>
	
	

<?php get_footer(); ?>
