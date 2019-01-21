<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	elegant_description();
	elegant_keywords();
	elegant_canonical();

	/**
	 * Fires in the head, before {@see wp_head()} is called. This action can be used to
	 * insert elements into the beginning of the head before any styles or scripts.
	 *
	 * @since 1.0
	 */
	do_action( 'et_head_meta' );

	$template_directory_uri = "/wp-content/themes/theoffercompany";
?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->	

	<?php wp_head(); ?>

	<script src="<?php echo $template_directory_uri; ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo $template_directory_uri; ?>/js/custom.js"></script>
	<script src="<?php echo $template_directory_uri; ?>/js/lh-chart.js"></script>
	<script src="<?php echo $template_directory_uri; ?>/js/multistep.js"></script>
	
</head>
<body <?php body_class(); ?>>
	<div id="page-container">
		<div id="overlay"></div>
		<header class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="menu-opener"><span>Menu</div><div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $template_directory_uri; ?>/images/logo.png" alt=""/></a></div>
					</div>
				</div>
			</div>
			<div class="slide-out-container" id="slide-out-nav">
				<p class="menu-title">Menu</p>
				<span class="close-menu" id="menu-closer"><i class="fal fa-times"></i></span>
				<a href="#" class="btn btn-primary btn-block nav-login-btn" data-toggle="modal" data-target="#unlock-modal" id="locked">My account or register <i class="fal fa-arrow-right"></i></a>
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
		<div id="et-main-area">

		<div id="unlock-modal" class="modal fade unlock" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content width-override">
                <div class="multi-step">
                    <div class="step" id="initial">
                        <div class="modal-header">
                            <h5 class="modal-title">Sign in or register to unlock</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="close-link" aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form method="post">
                          
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="has-mail-left">
                                        <!-- <input type="text" name="register_username" class="form-control" placeholder="Username"> -->
                                        <input type="email" name="register_email" class="form-control" placeholder="Email" style="margin-top: 5px">
                                        <input type="password" name="register_password" class="form-control" placeholder="Password" style="margin-top: 5px">

                                        <button href="#" class="btn btn-block" name="register" type="submit">Register <i class="far fa-arrow-right"></i></button>
                                        <a href="#" class="btn btn-block step-toggler" data-triger="#login">Login <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="sphere-container">
                                    <p>Or connect with</p>
                                    <a class="sphere sphere--fb">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="sphere sphere--twitt">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="step" id="login">
                        <div class="modal-header">
                            <h5 class="modal-title">Welcome back!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="close-link" aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form method="post">
                          
                        
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="has-mail-left">
                                    <input type="email" name="login_username" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="spacer-1rem"></div>
                                <div class="has-key-left">
                                    <input type="password" name="login_password" class="form-control" placeholder="Password" value="">
                                </div>
                                <button class="btn btn-block" type="submit" name="signin">Sign in <i class="far fa-arrow-right"></i></button>
                                <a href="#" class="help-link">Forgot password?</a>
                            </div>
                            <hr>
                            <div class="sphere-container">
                                <p>Or connect with</p>
                                <a class="sphere sphere--fb">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="sphere sphere--twitt">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="step" id="signup">
                        <div class="modal-header">
                            <h5 class="modal-title">Create a password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="close-link" aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <p class="message">Create a password to access your account any time.</p>
                                <div class="spacer-1rem"></div>
                                <div class="has-key-left">
                                    <input type="password" class="form-control" placeholder="Password" value="">
                                </div>
                                <a href="#" class="btn btn-block step-toggler">Submit <i class="far fa-arrow-right"></i></a>
                                <a href="#" class="help-link">Terms of use</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>