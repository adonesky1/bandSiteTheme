<?php

/*
    Template Name: Tour Schedule Page
*/


get_header(); ?>




<div class="container dates">
        
        <div class="tour">
            
            <h2>Tour Dates</h2>
       
        </div>
            
        <div class="tour-dates">
        
            <?php $loop = new WP_Query(array('post_type' => 'tour_date', 'order' => 'ASC')); ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="row tour-dates">
                    <span style="font-size: 20px"><b><?php the_field('date'); ?></b></span>
                    <span><em><?php the_field('location'); ?></em></span>
                    <button id="tickets" class="btn btn-danger">Tickets</button> 
                </div>
                
            <?php endwhile; wp_reset_query(); ?>
        </div>


    </div>


<!-- <div id="wsk-widget" class="admin-only">
    <script src="https://libraries.wmgartistservices.com/songkick/widget_min.js?cache"></script>
    <div class="songkick-container songkick-artist-91029 songkick-page-undefined" id="songkick-widget-918">
        <div class="widget_row">
            <div class="event_date">
                <div class="month plain_text" style="display: inline;">Sep</div>
                <div class="date plain_text" style="display: inline;">01</div>
                <div class="dtm_date" style="display: none;">01 Sep 2018</div>
            </div>
            <div class="event_location">
                <div class="special-event plain_text"></div>
                <div class="venue plain_text"> Northern Alberta Jubilee Auditorium </div>
                <div class="location plain_text">Edmonton, AB, Canada</div>
            </div>
            <div class="featuring-artists plain_text">with Dinosaur Jr.</div>
            <div class="event_links">
                <a class="ticket_link link_text link_background" target="_blank" data-track="songkick-tickets" href="https://bit.ly/2r5tUGR">Tickets</a
                ><a class="additional_link link_text link_background" target="_blank" data-track="songkick-vip" href="https://mastodon.wun.io/events/440831">VIP</a>
            </div>
        </div>
    </div>
</div> -->


<?php get_footer(); ?>