<?php

/*
    Template Name: Tour Schedule Page
*/

get_header()
?>

 <?php get_template_part('content', 'navbar') ?>


<div class="container dates">
        
        <div class="tour">
            
            <h2>Tour Dates</h2>
       
        </div>
            
        <div class="tour-dates">
        
            <?php $loop = new WP_Query(array('post_type' => 'tour_date', 'order' => 'ASC')); ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>


                <div class="row tour-dates">
                    <span style="font-size: 20px"><b><?php the_field('date'); ?></b></span>
                    <span style="font-size: 14px"><em><?php the_field('location'); ?></em></span>                    
                    <button style="float:right"id="tickets" class="btn btn-danger">Tickets</button> 
                    <span style="float:right; margin-right: 80px; font-size: 13px"> with <?php the_field('other_bands'); ?></span>
                </div>
                
            <?php endwhile; wp_reset_query(); ?>
        </div>


    </div>


<div class="bottom">
<?php get_footer(); ?>
</div>