<?php
    /*
    Template Name: Evaluation Unlocked
    */
      get_header(nomenu);
      $template_directory_uri = "/wp-content/themes/theoffercompany";
    ?>
<div class="eval-unlocked-header-container">
    <div class="faded">
        <div class="main-header transparent">
            <div class="container">
                <div id="menu-opener"><span>Menu</div>
                <div class="logo d-none d-md-block"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $template_directory_uri; ?>/images/logo.png"
                            alt="" /></a></div>
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
        </div>
        <div class="eval-unlocked-header">
            <div class="eval-unlocked-header-content">
                <span class="status"><i class="black-dot"></i>Off Market</span>
                <h3>120 E Amberwood Dr,</h3>
                <p>Phoenix, AZ 85048</p>
                <p><strong>Estimate: $1,017,186</strong></p>
                <div class="property-info"><span class="beds">3 Beds</span><i class="fas fa-circle"></i><span class="baths">2
                        Baths</span><i class="fas fa-circle"></i><span class="sqft">3,600 Sq Ft</span></div>
            </div>
        </div>
    </div>
</div>
<div class="eval-unlocked-body">
    <div class="eval-unlocked-floating-container">
        <div class="eval-unlocked-floating-block">
            <h1>Comparable home insights</h1>
            <p>This estimate looks at recently sold homes with similar features to this home, like it's location,
                square footage, bedrooms and bathrooms.</p>
            <p class="avg">Avg. sold price <span>$1,775,000</span></p>
            <p class="avg">Avg. price/sqft <span>$4798</span></p>
            <p class="avg">Avg. days on market <span>36 days</span></p>
            <p class="comp">Comparable homes <span>$/sqft</span></p>
            <div class="comp-homes">
                <div class="comp-item">
                    <div class="ch-img">
                        <div class="ch-background-img" style="background-image:url('/wp-content/themes/theoffercompany/images/property-1.png');"></div>
                    </div>
                    <div class="info">
                        <small>SOLD 5/16/18</small>
                        <p class="highlighted">$1,788,000</p>
                        <div class="property-info">
                            <span class="beds">4 bd</span>
                            <span class="dot">•</span>
                            <span class="baths">2 ba</span>
                            <span class="dot">•</span>
                            <span class="sqft">3,600 Sq Ft</span>
                        </div>
                        <p class="location">136 E Desert Wind Dr</p>
                    </div>
                    <p class="price-sqft">$5250</p>
                </div>

                <div class="comp-item">
                    <div class="ch-img">
                        <div class="ch-background-img" style="background-image:url('/wp-content/themes/theoffercompany/images/property-2.png');"></div>
                    </div>
                    <div class="info">
                        <small>SOLD 5/16/18</small>
                        <p class="highlighted">$1,788,000</p>
                        <div class="property-info">
                            <span class="beds">4 bd</span>
                            <span class="dot">•</span>
                            <span class="baths">2 ba</span>
                            <span class="dot">•</span>
                            <span class="sqft">3,600 Sq Ft</span>
                        </div>
                        <p class="location">136 E Desert Wind Dr</p>
                    </div>
                    <p class="price-sqft">$5250</p>
                </div>

                <div class="comp-item">
                    <div class="ch-img">
                        <div class="ch-background-img" style="background-image:url('/wp-content/themes/theoffercompany/images/property-3.png');"></div>
                    </div>
                    <div class="info">
                        <small>SOLD 5/16/18</small>
                        <p class="highlighted">$1,788,000</p>
                        <div class="property-info">
                            <span class="beds">4 bd</span>
                            <span class="dot">•</span>
                            <span class="baths">2 ba</span>
                            <span class="dot">•</span>
                            <span class="sqft">3,600 Sq Ft</span>
                        </div>
                        <p class="location">136 E Desert Wind Dr</p>
                    </div>
                    <p class="price-sqft">$5250</p>
                </div>


            </div>
            <div class="see-more">
                <a href="#">
                    <i class="fas fa-plus"></i>
                    See more
                </a>
            </div>
        </div>

        <div class="eval-unlocked-floating-block" style="margin-top: 0 !important;">
            <h1 class="heading-center">Neighborhood trends</h1>
            <div class="comp-homes">
                <div class="comp-item">
                    <div class="ch-img  ch-circle">
                        <div class="ch-background-img ch-bg-img" style="background-image:url('/wp-content/themes/theoffercompany/images/property-1.png');"></div>
                    </div>
                    <div class="info">
                        <p class="highlighted">16013 S Desert Foot...</p>
                        <p class="new-info">Price cut to $327,000 (-$3,000)</p>
                        <p class="location">1 mi away | 3 days ago</p>
                    </div>
                </div>

                <div class="comp-item">
                    <div class="ch-img ch-circle">
                        <div class="ch-background-img ch-bg-img" style="background-image:url('/wp-content/themes/theoffercompany/images/property-2.png');"></div>
                    </div>
                    <div class="info">
                        <p class="highlighted">507 W Mountain Sag...</p>
                        <p class="new-info">Listed for $285,000</p>
                        <p class="location">1 mi away | 3 days ago</p>
                    </div>
                </div>

                <div class="comp-item">
                    <div class="ch-img ch-circle">
                        <div class="ch-background-img ch-bg-img " style="background-image:url('/wp-content/themes/theoffercompany/images/property-3.png');"></div>
                    </div>
                    <div class="info">
                        <p class="highlighted">14033 S 9th PI</p>
                        <p class="new-info">Increased to $345,000 (+$4,000)</p>
                        <p class="location">1 mi away | 3 days ago</p>
                    </div>
                </div>


            </div>
            <div class="see-more">
                <a href="#">
                    <i class="fas fa-plus"></i>
                    See more
                </a>
            </div>
        </div>
    </div>

    <h1 class="questions">Can I answer any questions?</h1>
    <div class="eval-unlocked-contact-agent">
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
    </div>

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
</div>
<?php get_footer(); ?>