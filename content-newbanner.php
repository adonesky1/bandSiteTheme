<?php 

$banner_background = get_field('banner_background');
$recent_release = get_field('recent_release');
$recent_release_purchase = get_field('recent_release_purchase');

?>  
  
  <?php get_template_part('content', 'navbar') ?>

  <section style="background: url('<?php echo $banner_background['url']; ?>') no-repeat center center fixed; 
  background-size: cover;">
			<div class="container landing">
				<div class="row pullUp floating">
			
					<h1><?php echo $recent_release; ?>
						<br>
						<a href="<?php echo $recent_release_purchase; ?>" target="_blank" >Out Now</a>
					</h1>
					<br />
					<div class="arrow bounce">
						<a class="fa fa-arrow-down fa-2x" href="#twitter-feed" rel="m_PageScroll2id" ></a>
					</div>
				</div><!-- container -->
    </section>
	