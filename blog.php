<?php
/*
Template Name: Blog
*/
  get_header(nomenu);
?>
<header class="main-header blog-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="menu-opener"></div>
        <!-- <div class="logo"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>"><img src="<?php //echo $template_directory_uri; ?>/images/logo.png"
              alt="" /></a></div> -->
      </div>
    </div>
  </div>
  <div class="slide-out-container" id="slide-out-nav">
    <p class="menu-title">Menu</p>
    <span class="close-menu" id="menu-closer"><i class="fal fa-times"></i></span>
    <a href="" class="btn btn-primary btn-block nav-login-btn">My account or register <i class="fal fa-arrow-right"></i></a>
    <div class="navigation">
      <ul>
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

							echo( $slide_nav );
						?>
      </ul>
    </div>
  </div>

  <div class="blog-header-heading">
    <h1>The Offer Company</h1>
    <p>Expert tips, trends and insights for home sellers</p>
  </div>
</header>



<?php get_footer(); ?>