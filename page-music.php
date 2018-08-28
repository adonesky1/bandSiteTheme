

<?php

/*
    Template Name: Music Page
 */
get_header()
?>
 <?php get_template_part('content', 'navbar') ?>

<div class="container gallery">
    <div class="section-header">
        <h2>MUSIC</h2>
    </div>
    <?php cue_playlist(77); ?>
</div>

<?php get_footer(); ?>

