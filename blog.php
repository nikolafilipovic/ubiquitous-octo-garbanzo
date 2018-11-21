<?php
/*
Template Name: Blog
*/
  get_header(nomenu);
?>
<div class="blog-img-holder">
  <header class="main-header blog-header">
    <div class="container-fluid top-fixed">
      <div class="row no-gutters blog-header-menu">
        <div class="col-12 d-flex">
          <div id="menu-opener"></div>
          <div class="header-right">
            <a href="#">
              <i class="fas fa-search"></i>
            </a>

            <a href="#">
              <i class="fas fa-bars"></i>
            </a>
          </div>
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
</div>

<div class="container-fluid posts-container">
  <div class="row no-gutters">
    <div class="all-posts col-12 col-md-8">
      <h2>All Posts</h2>

      <!-- one post -->
      <div class="one-post row no-gutters">
        <div class="col-12 col-md-5">
          <div class="one-post-image" style="background-image: url(/wp-content/themes/theoffercompany/images/retro-design.jpeg);"></div>
          <div class="play round-blue">
            <i class="fas fa-play"></i>
          </div>
        </div>

        <div class="col-12 col-md-7 right-side">
          <small class="small-imp">Upgrading home</small>
          <p>
            Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest
          </p>
          <div class="review-by">
            <img src="/wp-content/themes/theoffercompany/images/chrisbrown.png" alt="review" />
            <p>Chris Brown</p>
            <small>on 25 Oct 2018</small>
          </div>
        </div>

      </div> <!-- one post -->

      
      <!-- one post -->
      <div class="one-post row no-gutters">
        <div class="col-12 col-md-5">
          <div class="one-post-image" style="background-image: url(/wp-content/themes/theoffercompany/images/bloomhouse.jpg);"></div>
          <div class="play round-blue">
            <i class="fas fa-play"></i>
          </div>
        </div>

        <div class="col-12 col-md-7 right-side">
          <small class="small-imp">Upgrading home</small>
          <p>
            Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest
          </p>
          <div class="review-by">
            <img src="/wp-content/themes/theoffercompany/images/chrisbrown.png" alt="review" />
            <p>Chris Brown</p>
            <small>on 25 Oct 2018</small>
          </div>
        </div>

      </div> <!-- one post -->

      
      <!-- one post -->
      <div class="one-post row no-gutters">
        <div class="col-12 col-md-5">
          <div class="one-post-image"  style="background-image: url(/wp-content/themes/theoffercompany/images/lulamaekitchen.jpg);"></div>
          <div class="play round-blue">
            <i class="fas fa-play"></i>
          </div>
        </div>

        <div class="col-12 col-md-7 right-side">
          <small class="small-imp">Upgrading home</small>
          <p>
            Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest
          </p>
          <div class="review-by">
            <img src="/wp-content/themes/theoffercompany/images/chrisbrown.png" alt="review" />
            <p>Chris Brown</p>
            <small>on 25 Oct 2018</small>
          </div>
        </div>

      </div> <!-- one post -->

      <!-- blue full width stuff -->

      
      <!-- one post -->
      <div class="one-post row no-gutters">
        <div class="col-12 col-md-5">
          <div class="one-post-image"></div>
          <div class="play round-blue">
            <i class="fas fa-play"></i>
          </div>
        </div>

        <div class="col-12 col-md-7 right-side">
          <small class="small-imp">Upgrading home</small>
          <p>
            Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest
          </p>
          <div class="review-by">
            <img src="/wp-content/themes/theoffercompany/images/chrisbrown.png" alt="review" />
            <p>Chris Brown</p>
            <small>on 25 Oct 2018</small>
          </div>
        </div>

      </div> <!-- one post -->

    </div>

    <div class="popular-posts col-12 col-md-4">
    
    </div>
  </div>
</div>


<?php get_footer(); ?>