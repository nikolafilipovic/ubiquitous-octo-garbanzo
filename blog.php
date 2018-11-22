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
            This Remarkable Home Is Anything but Square
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
          <div class="one-post-image" style="background-image: url(/wp-content/themes/theoffercompany/images/lulamaekitchen.jpg);"></div>
          <div class="play round-blue">
            <i class="fas fa-play"></i>
          </div>
        </div>

        <div class="col-12 col-md-7 right-side">
          <small class="small-imp">Upgrading home</small>
          <p>
            A Farmhouse-Style Prefab That'll Make You Want to Ditch the Big City
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

      <div class="row row-blue-adv">
        <div class="blue-adv col-12 col-md-11">
          <h2>Be the first to know!</h2>
          <p>New homes are getting added every 2 minutes. Save your search and be the first to know.</p>
          <a href="#">
            Save search
            <i class="far fa-arrow-right"></i>
          </a>
        </div>
      </div>

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
            This Remarkable Home Is Anything but Square
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
          <div class="one-post-image" style="background-image: url(/wp-content/themes/theoffercompany/images/lulamaekitchen.jpg);"></div>
          <div class="play round-blue">
            <i class="fas fa-play"></i>
          </div>
        </div>

        <div class="col-12 col-md-7 right-side">
          <small class="small-imp">Upgrading home</small>
          <p>
            A Farmhouse-Style Prefab That'll Make You Want to Ditch the Big City
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

      <hr class="d-block d-md-none line">
      <div class="row pagination blog-pag">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div>
            <ul class="pagination blog-pag">
              <li class="page-item"><a class="page-link active" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link next" href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="margin-negative d-block d-md-none line">


    </div>

    <div class="col-12 col-md-4" style="height: 500px; background: lightblue; margin-top: 30px;">
    </div>
  </div>
</div>

<?php get_footer(); ?>