
	
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					
					<h2>Check Out Our Latest Music Videos</h2>
					
				</div><!-- end col -->
			</div><!-- row -->			
				
			 <div class="videos">
        
            <?php $loop = new WP_Query(array('post_type' => 'video')); ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <iframe width="560" height="315" src="<?php the_field('video_link')?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                
            <?php endwhile; wp_reset_query(); ?>

        </div>
			
		</div><!-- container -->
	</section><!-- featurette -->
	