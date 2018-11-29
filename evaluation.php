<?php
    /*
    Template Name: Evaluation
    */
      get_header(nomenu);
      $template_directory_uri = "/wp-content/themes/theoffercompany";
    ?>
<div class="eval-header-container">
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
        <div class="eval-header">
            <div class="eval-header-content">
                <p>The Offer Company values</p>
                <h3>120 E Amberwood Dr</h3>
                <p>Phoenix, AZ 85048 at</p>
                <h1>$905,141</h1>
            </div>
        </div>
    </div>
</div>
<div class="eval-body">
    <h1 class="title">Compare home value</h1>
    <p class="sub-title">Compare our estimate to dozens of the top home buying companies.</p>
    <div class="eval-floating-container">
        <div class="eval-floating-block np-top">
            <div class="brand-logos">
                <img src="/wp-content/themes/theoffercompany/images/opendoor.png" alt="Opendoor">
                <img src="/wp-content/themes/theoffercompany/images/offerpad.png" alt="Offerpad">
                <img src="/wp-content/themes/theoffercompany/images/zillow.png" alt="Zillow">
            </div>
            <hr>
            <p>Estimates ready in 48 hours right to your email.</p>
            <a href="#" class="btn btn-block">Compare Estimates <i class="far fa-arrow-right"></i></a>
            <a href="#" class="btn btn-block inverted">No, I'm ready to sell now <i class="far fa-arrow-right"></i></a>
        </div>
    </div>
    <h1 class="questions">Can I answer any questions?</h1>
    <div class="eval-contact-agent">
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