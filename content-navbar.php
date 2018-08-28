
<?php 
$band_logo = get_field('band_logo');
?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'boxspring'); ?></a>

	<!-- HEADER
	================================================== -->

	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar transparent navbar-inverse navbar-fixed-top justify-content-between" role="navigation">
				<nav class="navbar-inner">
					<div class="navbar-header">
						<a class="navbar-brand" href="/" style="margin-top: -12px" ><img src="<?php echo $band_logo; ?>" alt="Band Logo"></a>
					</div>

					<?php 
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => 'navbar-collapse collapse',
        'menu_class' => 'nav navbar-nav navbar-right',

    ))
    ?>

					
				</nav>
			</div>
		
		</div>
	</header>