<?php
/*
Template Name: Blog Agent
*/
  get_header(nomenu);
  $agent_id = $_GET['agent'] ?? 123;
  $agent = get_user_by('id', $agent_id);

  $default_posts_per_page = get_option( 'posts_per_page' );
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $wpb_all_query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => $default_posts_per_page,
    'author' => $agent_id,
  )); 

  $posts = $wpb_all_query->posts;
  $max_pages = $wpb_all_query->max_num_pages;
  $current_page = $paged;
?>
<div class="bg-white">
  <div class="blog-img-holder">
    <header class="main-header blog-header">
      <div class="container-fluid top-fixed">
        <div class="row no-gutters blog-header-menu">
          <div class="col-12 d-flex">
            <div id="menu-opener"></div>
            <div class="header-right">
              <a href="#">
                <i class="fas fa-search search-click"></i>
              </a>

              <a href="#">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="enterzip blog-search">
          <div class="landing-search">
            <div class="search-field">
              <div class="input-group buy" id="input-group">
                <input type="text" class="form-control" id="landing-search" placeholder="Search posts...">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-chevron-right"></i>
                  </div>
                </div>
              </div>
            </div>
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
        <h1>Ahwatukee Lifestyle</h1>
        <p class="blog-subtitle">What it’s like to live in Ahwatukee.</p>
      </div>

      <div class="blog-header-links">
        <div class="sphere-container">
          <a class="sphere sphere--fb">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="sphere sphere--twitt">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="sphere sphere--in">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="sphere sphere--email">
            <i class="fab fa-pinterest-p"></i>
          </a>
        </div>
      </div>
    </header>
  </div>

  <div class="container-fluid blog-agent posts-container">
    <div class="row no-gutters">
      <div class="all-posts col-12 col-md-8">

        <div class="author">
          <div class="author-img">
            <img src="<?= get_avatar_url($agent_id); ?>" alt="agent" />
          </div>
          <div class="about-author">
            <h2><?= the_author_meta('description', $agent_id); ?></h2>
            <a href="#">Get weekly updates
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>


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
            <a href="#">
              Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest
            </a>
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
            <a href="#">
              This Remarkable Home Is Anything but Square
            </a>
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
            <a href="#">
              A Farmhouse-Style Prefab That'll Make You Want to Ditch the Big City
            </a>
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
            <div class="one-post-image" style="background-image: url(/wp-content/themes/theoffercompany/images/retro-design.jpeg);"></div>
            <div class="play round-blue">
              <i class="fas fa-play"></i>
            </div>
          </div>

          <div class="col-12 col-md-7 right-side">
            <small class="small-imp">Upgrading home</small>
            <a href="#">
              Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest
            </a>
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
            <a href="#">
              This Remarkable Home Is Anything but Square
            </a>
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
            <a href="#">
              A Farmhouse-Style Prefab That'll Make You Want to Ditch the Big City
            </a>
            <div class="review-by">
              <img src="/wp-content/themes/theoffercompany/images/chrisbrown.png" alt="review" />
              <p>Chris Brown</p>
              <small>on 25 Oct 2018</small>
            </div>
          </div>

        </div> <!-- one post -->

        <div class="row row-blue-adv">
          <div class="blue-adv col-12 col-md-11">
            <h2>Don't miss a thing in Ahwatukee!</h2>
            <p>Join our growing community who get weekly updates about what’s happening.</p>
            <a href="#">
              Get updates
              <i class="far fa-arrow-right"></i>
            </a>
          </div>
        </div>

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
            <a href="#">
              Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest
            </a>
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
            <a href="#">
              A Farmhouse-Style Prefab That'll Make You Want to Ditch the Big City
            </a>
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
            <a href="#">
              This Remarkable Home Is Anything but Square
            </a>
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
      </div> <!-- all posts -->

      <aside class="blog-aside col-12 col-md-3">
        <div class="popular-posts">
          <h2>Popular Posts</h2>
          <?php foreach( get_popular_posts() as $popular ): ?>
            <div class="one-popular">
              <a href="<?= get_the_permalink($post->ID) ?>"><?= $popular->post_title ?></a>
              <p>
                <?= format_blog_date($post->post_date, "d M Y") ?>
              </p>
            </div>
          <?php endforeach; ?>

          <div class="offer-link">
            <a href="#">Get updates</a>
            <i class="far fa-arrow-right fasarrow"></i>
          </div>
        </div> <!-- popular posts -->

        <div class="blog-contact-agent">
          <div class="contact-agent-pic">
            <img src="<?= get_avatar_url($agent_id); ?>" class="agent-pic" alt="agent">
          </div>
          <div class="contact-details">
            <h2 class="contact-agent-prev-name"><?= get_the_author_meta('display_name', $agent_id); ?></h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>602-448-7377</p>
            <p><?= get_the_author_meta('user_email', $agent_id); ?></p>

            <div class="call-chat-write">
              <i class="fas fa-phone agent-phone agent-phone-rotate"></i>
              <i class="fas fa-comment-alt agent-phone"></i>
              <i class="fas fa-envelope agent-phone"></i>
            </div>
          </div>
        </div> <!-- bg-contact-agent -->

      </aside> <!-- aside -->

    </div> <!-- row -->
  </div> <!-- container fluid -->
</div>

<?php get_footer(); ?>