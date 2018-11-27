<?php
/*
Template Name: Blog Post
*/
  get_header(nomenu);
?>
<div class="blog-menu">
  <header class="main-header blog-header">
    <div class="container-fluid top-fixed">
      <div class="row no-gutters blog-header-menu">
        <div class="col-12 d-flex align-items-center">
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
  </header>
</div>

<section class="blog-post">
  <header class="blog-post__wrap">
    <div class="blog-post__image"></div>

    <div class="control-header">
      <div class="play round-blue d-md-flex d-none">
        <i class="fas fa-play"></i>
      </div>
      <h1 class="blog-post__pre-title">
        <?= get_the_category()[0]->name; ?>
      </h1>
    </div>

  </header>

  <section class="container-fluid">
    <div class="row">
      <article class="the-post col-12 col-md-8">
        <div class="row no-gutters">
          <div class="col-12 col-lg-10">
            <h1 class="blog-post__title">
              <?= the_title(); ?>
            </h1>
            <section class="blog-post-sub">
              <img src="/wp-content/themes/theoffercompany/images/face.png" alt="author" />
              <h2 class="blog-post__sub-title">
                <?= get_author_name($post->post_author); ?> <span>on <?= format_blog_date($post->post_date, "d M Y")?></span>
              </h2>
            </section>
            <section class="sphere-container spaced">
              <a class="sphere-small sphere--fb">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a class="sphere-small sphere--twitt">
                <i class="fab fa-twitter"></i>
              </a>
              <a class="sphere-small sphere--in">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a class="sphere-small sphere--pinta">
                <i class="fab fa-pinterest-p"></i>
              </a>
              <a class="sphere-small sphere--email">
                <i class="far fa-envelope"></i>
              </a>
            </section>
            <section class="blog-post__video">
              <div class="blog-post__video-wrap">
                <img src="/wp-content/themes/theoffercompany/images/video.png" alt="video" />
                <a class="sphere-small sphere--email">
                  <i class="fas fa-play"></i>
                </a>
                <span class="play">Play</span>
              </div>
            </section>

            <section class="blog-post__after-text">
              <?= 
                the_post();
                the_content(); 
              ?>
            </section>

<!--             
            <section class="blog-post__after-text">
              <h2>
                Dust off your lederhosen and steins, because
                it's the most wunderbar time of the year!
              </h2>
              <p>
                If you can’t make it to Munich for Oktoberfest,
                you can still enjoy a good beer at one
                of the American events happening all throughout the country in September.
              </p>
              <p>
                From Frankenmuth, Michigan, to Fredericksburg, Texas, you’re certain to find
                a spirited group of Germanophiles somewhere during the month
                celebrating all things Bavarian.
              </p>
              <p>
                To get inspired for Oktoberfest, check out these nine Bavarian-style
                homes for sale right here in the U.S.
              </p>
            </section>
            <figure>
              <img src="/wp-content/themes/theoffercompany/images/bavarian.jpg" alt="Bavarian home">
              <figcaption>Classic bavarian style home</figcaption>
            </figure>
            <section class="blog-post__after-text">
              <h3>A taste of Germany</h3>
              <p class="p-with-border-bottom">
                Nestled near the heart of downtown Solvang, California — a central coast town with Danish roots — this
                traditional
                Tudor gets you all the charm of a Bavarian home with all the modern American finishings you're
                accustomed
                to,
                like an updated kitchen with granite countertops and hardwood floors. The home also features a bocce
                court,
                a large 3-car garage and an elevator
                from the garage to the second floor.
              </p>
            </section> -->

            <section class="blog-aside d-block d-md-none">
              <div class="popular-posts">
                <h2 class="related-posts-heading">Related Posts</h2>
                <div class="one-popular one-related">
                  <a href="#">Prep for ‘Prost!’ Season 9 Bavarian Style Homes to Inspire Oktoberfest</a>
                </div>

                <div class="one-popular one-related">
                  <a href="#">A Farmhouse-Style Prefab That’ll Make You Want to Ditch the Big City</a>
                </div>

                <div class="one-popular one-related">
                  <a href="#">This Historic Connecticut Home Once Hosted a Dancing George Washington</a>
                </div>

                <div class="one-popular one-related">
                  <a href="#">A Farmhouse-Style Prefab That’ll Make You Want to Ditch the Big City</a>
                </div>

                <div class="one-popular">
                  <a href="#">This Historic Connecticut Home Once Hosted a Dancing George Washington</a>
                </div>
              </div> <!-- related posts -->
            </section>

            <section class="post-comment">
              <div class="author">
                <div class="author-img">
                  <img src="/wp-content/themes/theoffercompany/images/chrisbrown.jpg" alt="chrisbrown" />
                </div>
                <div class="about-author">
                  <h2>Chris Brown</h2>
                  <p>About the author</p>
                </div>
              </div>

              <div class="post-comment-form">
                <form class="make-comment-form">
                  <div class="input-group">
                    <textarea class="form-control" placeholder="Join the discussion..."></textarea>
                  </div>
                  <div class="offer-link">
                    <a href="#">Post comment</a>
                    <i class="far fa-arrow-right fasarrow"></i>
                  </div>
                </form>
              </div>

              <div class="success d-flex d-md-none">
                <div class="success-checkmark">
                  <i class="fas fa-check"></i>
                </div>
                <p>Successfully saved.</p>
              </div>

              <div class="one-comment">
                <div class="d-flex align-items-center">
                  <div class="pic">
                    <img src="/wp-content/themes/theoffercompany/images/userdefault.png" alt="userdefault" />
                  </div>
                  <h2>Strahinja S.</h2>
                </div>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                  and scrambled it to make a type specimen book. It has survived not only five centuries.</p>

                <div class="heart-date">
                  <div class="hearts">
                    <i class="far fa-heart not-hearted"></i>
                    <span class="not-hearted">4</span>
                    <i class="fas fa-heart"></i>
                    <span>4</span>
                  </div>

                  <div class="date">
                    <p>3 days ago</p>
                  </div>
                </div>

              </div> <!-- one comment -->
            </section> <!-- post a comment -->

            <section class="home-worth">
              <div class="hw-faded">
                <h2>See what your home is worth instantly</h2>
                <div class="enterzip-group">
                  <div class="enterzip enterzip--inset">
                    <div class="form-group mb-0 mt-0">
                      <div class="input-group-prepend">
                        <input type="text" class="form-control" placeholder="Enter your home address" />
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="offer-link">
                    I'm the owner. Show me!
                  </a>
                </div>
              </div>
            </section>

          </div>
        </div>

      </article>



      <aside class="blog-aside col-12 col-md-3">
        <div class="popular-posts">
          <h2>Popular Posts</h2>
          <div class="one-popular">
            <a href="#">Prep for ‘Prost!’ Season 9 Bavarian Style Homes to Inspire Oktoberfest</a>
            <p>25 Oct 2018</p>
          </div>

          <div class="one-popular">
            <a href="#">A Farmhouse-Style Prefab That’ll Make You Want to Ditch the Big City</a>
            <p>25 Oct 2018</p>
          </div>

          <div class="one-popular">
            <a href="#">This Historic Connecticut Home Once Hosted a Dancing George Washington</a>
            <p>25 Oct 2018</p>
          </div>

          <div class="one-popular">
            <a href="#">A Farmhouse-Style Prefab That’ll Make You Want to Ditch the Big City</a>
            <p>25 Oct 2018</p>
          </div>

          <div class="one-popular">
            <a href="#">This Historic Connecticut Home Once Hosted a Dancing George Washington</a>
            <p>25 Oct 2018</p>
          </div>
        </div> <!-- popular posts -->
      </aside>

    </div>
  </section>
</section>



<?php get_footer(); ?>