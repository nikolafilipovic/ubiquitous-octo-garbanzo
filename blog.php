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
            <li class="menu-item"><a href="http://localhost/">Real Estate</a></li>

            <li class="menu-item"><a href="http://localhost/">Selling</a></li>

            <li class="menu-item"><a href="http://localhost/">Foreclosure</a></li>

            <li class="menu-item"><a href="http://localhost/">Market Trends</a></li>

            <li class="menu-item"><a href="http://localhost/">Real Estate Tips</a></li>

            <li class="menu-item"><a href="http://localhost/">Market News</a></li>
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
        <div class="one-post row no-gutters">
          <div class="col-12 col-md-5">
            <div class="one-post-image" style="background-image: url(/wp-content/themes/theoffercompany/images/retro-design.jpeg);"></div>
            <div class="play round-blue">
              <i class="fas fa-play"></i>
            </div>
          </div>
          <div class="col-12 col-md-7 right-side">
            <small class="small-imp">
              <?php
                $categories = get_the_category($post->ID);
                $names = [];
                foreach($categories as $category) {
                  if($category->name !== 'popular') {
                    $names[] = $category->name;
                  }
                }
                echo implode(" ", $names);
              ?>
            </small>
            <a href="<?= get_the_permalink($post->ID) ?>">
              <?= $post->post_title ?>
            </a>
            <div class="review-by">
              <img src="<?= get_avatar_url($post->post_author) ?>" alt="review" />
              <p><?= get_author_name($post->post_author) ?></p>
              <small>on <?= format_blog_date($post->post_date, "d M Y") ?></small>
            </div>
          </div>
        </div>
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
        <div class="one-post row no-gutters">
          <div class="col-12 col-md-5">
            <div class="one-post-image" style="background-image: url(/wp-content/themes/theoffercompany/images/retro-design.jpeg);"></div>
            <div class="play round-blue">
              <i class="fas fa-play"></i>
            </div>
          </div>
          <div class="col-12 col-md-7 right-side">
            <small class="small-imp">
            <?php
                $categories = get_the_category($post->ID);
                $names = [];
                foreach($categories as $category) {
                  if($category->name !== 'popular') {
                    $names[] = $category->name;
                  }
                }
                echo implode(" ", $names);
              ?>
            </small>
            <a href="#">
              <?= $post->post_title ?>
            </a>
            <div class="review-by">
              <img src="<?= get_avatar_url($post->post_author) ?>" alt="review" />
              <p><?= get_author_name($post->post_author) ?></p>
              <small>on <?= format_blog_date($post->post_date, "d M Y") ?></small>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <hr class="d-block d-md-none line">
        <div class="row pagination blog-pag">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div>
              <?php if($max_pages > 1): ?>
              <ul class="pagination blog-pag">
                <?php for($i=1; $i <= $max_pages; $i++): ?>
                  <li class="page-item">
                    <a class="page-link <?= $i == $current_page ? "active":"" ?>" href="<?= get_pagenum_link($i) ?>">
                      <?= $i ?>
                    </a>
                  </li>
                  <!-- <li class="page-item"><a class="page-link active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                -->
                <?php endfor; ?>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item">
                  <?= styled_next_posts() ?>
                </li>
                <!-- <li class="page-item"><a class="page-link next" href="#">Next ()</a></li>  -->
              </ul>
              <?php endif; ?>
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
            <img src="/wp-content/themes/theoffercompany/images/agent.png" class="agent-pic" alt="agent">
          </div>
          <div class="contact-details">
            <h2 class="contact-agent-prev-name">Anette Brown</h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>602-448-7377</p>
            <p>annete@theofferco.com</p>

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