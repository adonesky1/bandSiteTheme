<?php 

$banner_background = get_field('banner_background');
$next_show = get_post_meta(10, 'next_show', true);
$second_show = get_post_meta(10, 'second_show', true);
$third_show = get_post_meta(10, 'third_show', true);
$schedule = get_post_meta(10, 'schedule_link', true);
$button_text = get_post_meta(10, 'button_text', true);

?>  
  
  <?php get_template_part('content', 'navbar') ?>

  <section style="background: url('<?php echo $banner_background['url']; ?>') no-repeat center center fixed; 
  background-size: cover;">
			<div class="container landing">
				<div class="row">
			
					<h1>Emperor of Sands <br><small>Out Now</small></h1>
					<div class="arrow bounce">
						<a class="fa fa-arrow-down fa-2x" href="#"></a>
					</div>
				</div><!-- container -->
    </section>
	