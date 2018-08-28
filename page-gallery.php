<?php

/*
    Template Name: Gallery Page
 */

get_header()
?>
 <?php get_template_part('content', 'navbar') ?>
<div class="container gallery">
    <div class="section-header">
        <h2>GALLERY</h2>
    </div>
<?php
if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '58', 'slug' ); }
?>

</div>

<?php get_footer(); ?>