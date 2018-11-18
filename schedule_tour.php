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
      <div id="step-1" class="step step-inset">
        <h1 class="estate-tile">Are you workig with a real estate agent?</h1>
        <div data-triger="#step-2" class="step-toggler step-wrap">
          <a class="step-circle step-circle--checkmark">
            <i class="fas fa-check"></i>
          </a>
          <p class="approve-text">Yes</p>
          <i class="far fa-arrow-right arrow"></i>
        </div>
        <hr />
        <div data-triger="#step-2-alter" class="step-toggler step-wrap">
          <a class="step-circle step-circle--checkmark">
            <i class="fas fa-times"></i>
          </a>
          <p class="approve-text">No</p>
          <i class="far fa-arrow-right arrow"></i>
        </div>
      </div> <!-- End of step 1 -->
      <div id="step-2" class="step step-inset">
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

          <div data-triger="#step-3" class="offer-link step-toggler">
            <a href="#">Submit</a>
            <i class="far fa-arrow-right fasarrow"></i>
          </div>
        </form>
      </div> <!-- End of step 2 -->
      <div id="step-3" class="step step-inset">
        <h1>Success!</h1>
        <p>An email has been submited to your agent</p>
        <div class="row no-gutters">
        <div class="col-12">
          <div data-triger="#step-3" class="offer-link step-toggler">
            <a href="#">Submit</a>
            <i class="far fa-arrow-right fasarrow"></i>
          </div>
        </div>  
      </div>
      </div><!-- End of step 3 -->
      <div id="step-2-alter" class="step" data-on-enter="initmulti">
        <h1 class="when-tour">When do you want to tour?</h1>
        <div id="month-slider" class="data-carousel-wrap">
          <div class="left-control-arrow">
            <i class="far fa-chevron-left"></i>
          </div>
          <div class="dated-carousel">
            <div class="dated-stage">
              <div class="date-slide" data-obj='{"week":"Monday","month":"October","day":22}'>
                <div class="wrap">
                  <h1>Mon</h1>
                  <hr />
                  <h2>Oct 22</h2>
                </div>
              </div>
              <div class="date-slide" data-obj='{"week":"Tuesday","month":"October","day":23}'>
                <div class="wrap">
                  <h1>Tue</h1>
                  <hr />
                  <h2>Oct 23</h2>
                </div>
              </div>
              <div class="date-slide" data-obj='{"week":"Wednesday","month":"October","day":24}'>
                <div class="wrap">
                  <h1>Wed</h1>
                  <hr />
                  <h2>Oct 24</h2>
                </div>
              </div>
              <div class="date-slide" data-obj='{"week":"Thursday","month":"October","day":25}'>
                <div class="wrap">
                  <h1>Thu</h1>
                  <hr />
                  <h2>Oct 25</h2>
                </div>
              </div>
              <div class="date-slide" data-obj='{"week":"Friday","month":"October","day":26}'>
                <div class="wrap">
                  <h1>Fri</h1>
                  <hr />
                  <h2>Oct 26</h2>
                </div>
              </div>
              <div class="date-slide" data-obj='{"week":"Saturday","month":"October","day":27}'>
                <div class="wrap">
                  <h1>Sat</h1>
                  <hr />
                  <h2>Oct 27</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="right-control-arrow">
            <i class="far fa-chevron-right"></i>
          </div>
        </div>

        <div id="time-slider" class="data-carousel-wrap time">
          <div class="left-control-arrow">
            <i class="far fa-chevron-left"></i>
          </div>
          <div class="dated-carousel">
            <div class="dated-stage">
              <div class="date-slide" data-obj='{"time":"08:00 AM"}'>
                <div class="wrap">
                  <h3>08:00 AM</h3>
                </div>
              </div>
              <div class="date-slide" data-obj='{"time":"09:00 AM"}'>
                <div class="wrap">
                  <h3>09:00 AM</h3>
                </div>
              </div>
              <div class="date-slide" data-obj='{"time":"10:00 AM"}'>
                <div class="wrap">
                  <h3>10:00 AM</h3>
                </div>
              </div>
              <div class="date-slide" data-obj='{"time":"11:00 AM"}'>
                <div class="wrap">
                  <h3>11:00 AM</h3>
                </div>
              </div>
              <div class="date-slide" data-obj='{"time":"12:00 PM"}'>
                <div class="wrap">
                  <h3>12:00 PM</h3>
                </div>
              </div>
              <div class="date-slide" data-obj='{"time":"01:00 PM"}'>
                <div class="wrap">
                  <h3>01:00 PM</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="right-control-arrow">
            <i class="far fa-chevron-right"></i>
          </div>
        </div>

        <p id="info-text" class="info-text">
          <span id="weekday">
            Tuesday
          </span>, 
          <span id="month">
            October
          </span> <span id="day">23</span> at <span id="time">09:00am</span>
        </p>

        <div class="offer-link-wrap">
          <div data-triger="#step-3-alter" class="offer-link step-toggler">
            <a href="#">Continue</a>
            <i class="far fa-arrow-right fasarrow"></i>
          </div>
        </div>
      </div><!-- End of setp 2 alter -->
      <div id="step-3-alter" class="step step-inset" data-on-enter="copytag">
        <h1 class="notify-title">How should we contact you?</h1>
        <p>If you already have an account, please <a href="#">Sign in</a></p>
        <form class="lh-form">
          <div class="row no-gutters">
            <div class="form-group col-6 pr-2">
              <input type="text" class="form-control" placeholder="First name" />
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="Last Name" />
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Phone" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" />
          </div>

          <div class="info-text-wrap d-flex">
            <p id="info-text-clone" class="info-text">
            </p>
            <a href="#" class="step-toggler ml-auto" data-triger="#step-2-alter" >Change</a>
          </div>
          <div class="offer-link-form-wrap">
            <div data-triger="#step-3-alter" class="offer-link step-toggler">
              <a href="#">Submit</a>
              <i class="far fa-arrow-right fasarrow"></i>
            </div>
          </div>
        </form>
      </div>
    </div> <!-- end of step form -->


    

  </div> <!-- container fluid -->
</div> <!-- lh-wrapper -->

<?php get_footer(); ?>