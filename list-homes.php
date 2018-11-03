<?php 
/*
Template Name: List Homes
*/
  get_header(); 
?>
<div class="lh-wrapper">
  <div class="container-fluid">
      <header class="modal-menu b-shadow">
        <i class="fas fa-chevron-left fasback"></i>
        <a href="#">Back</a>

        <!-- make an offer, schedule tour -->
        <!-- save, share, virtual tour, remove, X -->
      </header>

    <div class="row no-gutters">
      <div class="col-12 col-md-7">
        <figure class="lh-img-holder">
          <img src="/wp-content/themes/theoffercompany/images/pexels-photo-259593.jpeg" alt="Propery-1">
          <figcaption class="d-md-none">
            <span>Virtual tour</span>
            <span>1 / 27</span>
          </figcaption> 
        </figure>
      </div>

      <div class="col-12 col-md-5 d-none d-md-block more-imgs">
        <div class="row no-gutters lh-pictures">  
          <div class="col-6"><div class="pl"></div></div>
          <div class="col-6"><div class="pl"></div></div>
          <div class="col-6"><div class="pl"></div></div>
          <div class="col-6"><div class="pl"></div></div>
<!--
          <div class="col-6">
            <img src="/wp-content/themes/theoffercompany/images/property2.png" alt='prop1'/>
          </div>
          <div class="col-6">
            <img src="/wp-content/themes/theoffercompany/images/property3.png" alt='prop1'/>
          </div>
          <div class="col-6">
            <img src="/wp-content/themes/theoffercompany/images/property4.png" alt='prop1'/>
          </div>
          <div class="col-6">
            <img src="/wp-content/themes/theoffercompany/images/property5.png" alt='prop1'/>
          </div>
          </div>
-->
        </div>
      </div>
    </div>

    <div class="offer-link-group b-shadow d-block d-md-none">
      <div class="offer-link">
        <a href="#">Make an offer</a>
        <i class="fas fa-arrow-right fasarrow"></i>
      </div>

      <div class="offer-link">
        <a href="#">Schedule tour</a>
        <i class="fas fa-arrow-right fasarrow"></i>
      </div>
    </div>

    <div class="row no-gutters lh-info-wrapper">
      <div class="col-12 col-md-9">
        <div class="row no-gutters">
          <div class="col-12 col-md-7">
            <h1 class="lh-info-imp">11249 E Sonrisa Ave</h1>
            <p>Mesa, AZ 85212</p>
            <span>3 bds </span> 
            <span class="small-dot">&#8226;</span> 
            <span>2 ba </span> 
            <span class="small-dot">&#8226;</span> 
            <span>1,209 sqft </span> 

            <div class="d-none d-md-block lh-house-details">
              <p class="lh-house lh-house--desktop">Open House <strong>Fri, Oct 12  &#8226; 11:00am - 2:00pm</strong></p>
              <i class="fas fa-phone agent-phone"></i><strong class="agent-phone-text">Call Agent</strong>
              <i class="fas fa-comment-alt agent-text"></i><strong class="agent-phone-text">Text Agent</strong>
            </div>
          </div>

          <div class="col-12 col-md-5">
            <div class="row no-gutters">
              <div class="col-6 col-md-12">  
              <span class="red-dot"></span>
                <strong class="small-imp">FOR SALE</strong>
                <h1 class="lh-info-imp lh-money">$425,000</h1>
                <a href="#" class="large-link lh-info-imp">Get pre-qualified
                  <i class="fas fa-arrow-right fasarrow"></i>
                </a>
              </div>
              <div class="col-6 col-md-12 d-flex lh-map">
                <img src="/wp-content/themes/theoffercompany/images/map.png" />
              </div>
            </div>
          </div>
        </div>
        <p class="lh-house d-md-none">Open House <strong>Fri, Oct 12  &#8226; 11:00am - 2:00pm</strong></p>
      </div>
    </div>
    <!-- container fluid -->
  </div>
  <!-- lh-wrapper -->
</div>

<?php get_footer(); ?>