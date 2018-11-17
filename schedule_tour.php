<?php
/*
Template Name: Schedule Tour
*/
  get_header(nomenu);
?>
<div class="lh-wrapper">
  <div class="container-fluid override-fluid">
    <header class="modal-menu b-shadow">
      <div class="sch-t-header go-back">
        <a href="#">Cancel</a>
        <p class="header-heading">Schedule Tour</p>
      </div>
    </header>

    <div class="sch-t-pic-info">
      <div class="column-item">
        <div class="pi-image-holder">
          <div class="property-item">
            <span class="sale-type">
              <i class="red-dot"></i>
              House for Sale</span>
            <h1 class="property-price">$425,000</h1>
            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2
                ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="multi-step schedule-step-form">
      <div id="step-1" class="step">
        <h1 class="estate-tile">Are you workig with a real estate agent?</h1>
        <div data-triger="#step-2" class="step-toggler step-wrap">
          <a class="step-circle step-circle--checkmark">
            <i class="fas fa-check"></i>
          </a>
          <p class="approve-text">Yes</p>
          <i class="far fa-arrow-right arrow"></i>
        </div>
        <hr />
        <div class="step-wrap">
          <a class="step-circle step-circle--checkmark">
            <i class="fas fa-times"></i>
          </a>
          <p class="approve-text">No</p>
          <i class="far fa-arrow-right arrow"></i>
        </div>
      </div>
      <div id="step-2" class="step">
        <h1 class="notify-title">Notify your agent</h1>
        <p>We'll send your agent a link with your request to schedule a tour of this property.</p>
        <p>If you already have an account, please <a href="#">Sign in</a></p>
        <form class="lh-form">
          <h2 class="information">Your information</h2>
          <div class="row no-gutters">
            <div class="form-group col-6 pr-2">
              <input type="text" class="form-control" placeholder="First name" />
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="Last Name" />
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" />
          </div>

          <h2 class="information">Your agents information</h2>
          <div class="row no-gutters">
            <div class="form-group col-6 pr-2">
              <input type="text" class="form-control" placeholder="First name" />
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="Last Name" />
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" />
          </div>

          <div class="offer-link">
            <a href="#">Submit</a>
            <i class="far fa-arrow-right fasarrow"></i>
          </div>
        </form>
      </div>
    </div>


  </div> <!-- container fluid -->
</div> <!-- lh-wrapper -->

<?php get_footer(); ?>