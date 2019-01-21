<?php
/*
Template Name: Blog
*/
  get_header(nomenu);
?>
<div class="bg-white">
  <div class="blog-img-holder">
    <header class="main-header blog-header">
      <div class="container-fluid top-fixed">
        <div class="row no-gutters blog-header-menu">
          <div class="col-12 d-flex">
            <div class="menu-opener"></div>
            <div class="header-right">
              <a href="#">
                <i class="fas fa-search search-click"></i>
              </a>

              <a href="#" id="menu-blog-opener">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="enterzip blog-search hide">
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

      <div class="slide-out-container-right" id="slide-out-nav-blog">
        <p class="menu-title">Blog Menu</p>
        <span class="close-blog-menu" id="menu-closer"><i class="fal fa-times"></i></span>
        <a href="" class="btn btn-primary btn-block nav-login-btn">My account or register <i class="fal fa-arrow-right"></i></a>
        <div class="navigation">
          <ul>
          <h1>Blog Topics</h1>
          <ul>
            <li class="menu-item"><a href="/real-estate/">Real Estate</a></li>

            <li class="menu-item"><a href="/selling/">Selling</a></li>

            <li class="menu-item"><a href="/foreclosure/">Foreclosure</a></li>

            <li class="menu-item"><a href="/market-trends/">Market Trends</a></li>

            <li class="menu-item"><a href="/real-estate-tips/">Real Estate Tips</a></li>

            <li class="menu-item"><a href="/market-news/">Market News</a></li>
          </ul>
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
        <?php
          $half_index = (int) ceil(count($posts) / 2);
          $first_half = array_slice($posts, 0, $half_index);
          $second_half = array_slice($posts, $half_index);
        ?>

        <?php foreach($first_half as $post): ?>
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

        <?php foreach($second_half as $post): ?>
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
            <a href="https://app.monstercampaigns.com/c/bejnpumprltfhvgoqdd6/">Get updates</a>
            <i class="far fa-arrow-right fasarrow"></i>
          </div>


        </div> <!-- popular posts -->
<!---This agent box needs to use a cookie for zipcode for display
		<div class="blog-contact-agent">
	        <div class="contact-agent-pic">
	            <img src="<?= $data_agent['photo'] ?>" class="agent-pic" alt="agent">
	        </div>
	        <div class="contact-details">
	            <h2 class="contact-agent-prev-name"><?= $data_agent['first_name'].' '.$data_agent['last_name'] ?></h2>
	            <i class="fas fa-star"></i>
	            <i class="fas fa-star"></i>
	            <i class="fas fa-star"></i>
	            <i class="fas fa-star"></i>
	            <i class="fas fa-star"></i>
	            <p><?= $data_agent['phone'] ?></p>
	            <p><?= $data_agent['email'] ?></p>
	            <div class="call-chat-write">
	                <a href="tel:<?= $data_agent['phone'] ?>"><i class="fas fa-phone agent-phone agent-phone-rotate"></i></a>
	                <a href="sms:<?= $data_agent['phone'] ?>"><i class="fas fa-comment-alt agent-phone"></i></a>
	               <a href="mailto:<?= $data_agent['email'] ?>"> <i class="fas fa-envelope agent-phone"></i></a>
	            </div>
	        </div>
	    </div>--->
       <!-- bg-contact-agent -->

      </aside> <!-- aside -->

    </div> <!-- row -->
  </div> <!-- container fluid -->
</div>

<?php get_footer(); ?>