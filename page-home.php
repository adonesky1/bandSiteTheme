<?php

/*
    Template Name: Home Page
*/

get_header()
 ?>


    <!-- HERO
    ================================================== -->
  
	<?php get_template_part('content','newbanner')?>
	
	<!-- OPT IN SECTION
	================================================== -->
	
	<?php get_template_part('content','subscribe') ?>
    
    <!-- ABOUT THE BAND
	================================================== -->

	<?php get_template_part('content','about'); ?>
	
    
	<!-- VIDEOS
	================================================== -->

	<?php get_template_part('content', 'videos'); ?>
	
	

<?php get_footer(); ?>
