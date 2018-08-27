<?php 

$banner_background = get_field('banner_background');
$next_show = get_post_meta(10, 'next_show', true);
$second_show = get_post_meta(10, 'second_show', true);
$third_show = get_post_meta(10, 'third_show', true);
$schedule = get_post_meta(10, 'schedule_link', true);
$button_text = get_post_meta(10, 'button_text', true);


?>  
  
  <section id="hero" data-type="background" style="background: url('<?php echo $banner_background['url']; ?>') 50% 0 repeat fixed" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				<div class="col-sm-5">
						<h2>Our Albums</h2>
						<?php echo do_shortcode('[smartslider3 slider=3]'); ?>
    				</div><!-- col -->
		    		
		    	
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
	