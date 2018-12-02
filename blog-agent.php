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
    'posts_per_page' => 7,
    'author' => $agent_id,
  )); 

  $posts = $wpb_all_query->posts;
  $max_pages = $wpb_all_query->max_num_pages;
  $current_page = $paged;

  list($first, $second, $third) = array_chunk($posts, 3);
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

        <?php foreach($first as $post): ?>
           <?php include "post_template.php"; ?>
        <?php endforeach; ?>

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

        <?php foreach($second as $post): ?>
           <?php include "post_template.php"; ?>
        <?php endforeach; ?>

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
          
        <?php foreach($third as $post): ?>
           <?php include "post_template.php"; ?>
        <?php endforeach; ?>

        <hr class="d-block d-md-none line">
        <?php include "pagination_template.php" ?>
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