<?php 

$about_band_title = get_field('about_section_title');
$about_band_desc = get_field('about_section_description');

?>


<section id="about-band">
    <div class="container">
        
        <div class="section-header">
            
            <h2><?php echo $about_band_title ?></h2>

            <p class="lead"> <?php echo $about_band_desc ?></p>

        </div><!-- section-header -->
            
        <div class="row">
        
            <?php $loop = new WP_Query(array('post_type' => 'band_member')); ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="col-sm-2" style="justify-content: space-evenly; margin: auto; ">
                    <img src="<?php the_field('band_member_image'); ?>">
                    <h4><?php the_title(); ?></h4>
                </div>
                
            <?php endwhile; wp_reset_query(); ?>

        </div>

    </div>

</section>