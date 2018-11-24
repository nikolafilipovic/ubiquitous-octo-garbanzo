<?php
/*
Template Name: My Account
*/
  get_header(nomenu);
?>
<div id="my-account">
    <div class="container-fluid">
        <div class="row">
            <div class="go-back">
                <a href="#"><i class="far fa-chevron-left"></i> Back</a>
                <p>My Account</p>
            </div>
        </div>
    </div>
    <div class="container content">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <h1 class="segment-title">My Account</h1>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="profile-photo">
                            <img src="/wp-content/themes/theoffercompany/images/rafael_profile.png" alt="Rafael Nadal">
                            <div class="hover-overlay"><p>Edit Photo</p></div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="profile">
                            <h1>Rafael Nadal</h1>
                            <h6>Email</h6>
                            <p>rafael.nadal@atp.com</p>
                            <h6>Phone</h6>
                            <p>+45 424 2499 345</p>
                            <h6>Password</h6>
                            <p>&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;</p>
                            <a href="#" class="btn btn-block">Edit <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>