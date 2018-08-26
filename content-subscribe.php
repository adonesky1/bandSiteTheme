 
 <?php 

$subscribe = get_post_meta(10, 'subscribe', true);
$stay_in_touch = get_post_meta(10, 'stay_in_touch', true);
 
 ?>
 
 <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8">
					<p class="lead"><?php echo $stay_in_touch ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						<?php echo $subscribe?>
					</button>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->