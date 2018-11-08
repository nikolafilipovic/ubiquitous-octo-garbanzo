<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	elegant_description();
	elegant_keywords();
	elegant_canonical();

	/**
	 * Fires in the head, before {@see wp_head()} is called. This action can be used to
	 * insert elements into the beginning of the head before any styles or scripts.
	 *
	 * @since 1.0
	 */
	do_action( 'et_head_meta' );

	$template_directory_uri = "/wp-content/themes/theoffercompany";
?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->	

	<?php wp_head(); ?>

	<script src="<?php echo $template_directory_uri; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $template_directory_uri; ?>/js/custom.js"></script>
    
    <?php 
        $slide_nav = '';
        $slide_menu_class = 'et_mobile_menu';

        $slide_nav = wp_nav_menu( 
            array( 
                'theme_location' => 'primary-menu', 
                'container' => '', 
                'fallback_cb' => '', 
                'echo' => false, 
                'items_wrap' => '%3$s' 
            ) 
        );
        $slide_nav .= wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
        $listing_nav = wp_nav_menu( 
            array( 
                'theme_location' => 'primary-menu', 
                'container' => '', 
                'fallback_cb' => '', 
                'echo' => false, 
                'items_wrap' => '%3$s',
                'walker' => new WP_Bootstrap_Navwalker()
            ) 
        );
    ?>
</head>
<body <?php body_class(); ?> id="search-page-body">
	<div id="page-container">
	<header class="listing-header">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">
                <span id="desktop-icon" class="d-lg-block d-md-none d-sm-none d-none"></span>
                <span id="menu-opener" class="d-lg-none d-md-block d-sm-block d-block listing"></span>
            </a>
            <div class="d-lg-none d-md-block d-sm-inline-block d-inline-block search-mobile-field">
                <div class="input-group homes-search-field-mobile" id="input-group">
                    <input type="text" class="form-control" id="homes-search-mobile-field" placeholder="Search by address, city or zip...">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                    </div>
                </div>
            </div>
            <div class="navbar-collapse d-lg-block d-md-block d-none justify-content-between">
                <ul class="navbar-nav">
                    <?php
                        echo( $listing_nav );
                    ?>
                </ul>
                <span class="navbar-text">
                    <a href="#">My account</a> or <a href="#">Register</a>
                </span>
            </div>
        </nav>
        <div class="slide-out-container" id="slide-out-nav">
            <p class="menu-title">Menu</p>
            <span class="close-menu" id="menu-closer"><i class="fas fa-times"></i></span>
            <a href="" class="btn btn-primary btn-block nav-login-btn">My account or register <i class="fas fa-arrow-right"></i></a>
            <div class="navigation">
                <ul>
                    <?php
                        echo( $slide_nav );
                    ?>
                </ul>
            </div>
        </div>
    </header>
    <div id="et-main-area">