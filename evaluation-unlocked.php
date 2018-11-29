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
                <div id="menu-opener"><span>Menu</div><div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $template_directory_uri; ?>/images/logo.png" alt=""/></a></div>
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
                <div class="property-info"><span class="beds">3 Beds</span><i class="fas fa-circle"></i><span class="baths">2 Baths</span><i class="fas fa-circle"></i><span class="sqft">3,600 Sq Ft</span></div>
            </div>
        </div>
    </div>
</div>
<div class="eval-unlocked-body">
    <div class="eval-unlocked-floating-container">
        <div class="eval-unlocked-floating-block">
            <h1>Comparable home insights</h1>
            <p>This estimate looks at recently sold homes with similar features to this home, like it's location, square footage, bedrooms and bathrooms.</p>
            <p class="avg">Avg. sold price <span>$1,775,000</span></p>
            <p class="avg">Avg. price/sqft <span>$4798</span></p>
            <p class="avg">Avg. days on market <span>36 days</span></p>
            <p class="comp">Comparable homes <span>$/sqft</span></p>
            <div class="comp-homes">
                <div class="comp-item">
                    <img src="/wp-content/themes/theoffercompany/images/property-1.png" alt="Property 1">
                    <div class="info">
                        <strong>SOLD 5/16/18</strong>
                        <p class="price">$1,788,000</p>
                        <div class="property-info"><span class="beds">3 Beds</span><i class="fas fa-circle"></i><span class="baths">2 Baths</span><i class="fas fa-circle"></i><span class="sqft">3,600 Sq Ft</span></div>
                        <p>3400 N Kilpatrick Ave Chicago, IL 60641</p>
                    </div>
                    <p class="price-sqft">$5250</p>
                </div>
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
    <h1 class="title reports">Detailed home report</h1>
    <div class="reports-wrapper">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-md-inline-block d-none ">
                    <div class="outline">
                        <h3>Property details</h3>
                        <div class="line" style="width: 85%;"></div>
                        <div class="line" style="width: 65%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 95%;"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 report-content">
                    <i class="far fa-lock-alt lock"></i>
                    <p>See property details, comparable home insights and neighborhood trends.</p>
                    <a href="#" class="btn btn-block">I'm the owner. Show me! <i class="far fa-arrow-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-md-inline-block d-none">
                    <div class="outline">
                        <h3>Neighborhood trends</h3>
                        <div class="line" style="width: 85%;"></div>
                        <div class="line" style="width: 65%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 95%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>