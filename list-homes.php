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
          <div class="col-6">
            <div class="image" style="background: url('/wp-content/themes/theoffercompany/images/item.png')"></div>
          </div>
          <div class="col-6">
            <div class="image" style="background: url('/wp-content/themes/theoffercompany/images/property2.png')"></div>
          </div>
          <div class="col-6">
            <div class="image" style="background: url('/wp-content/themes/theoffercompany/images/property3.png')"></div>
          </div>
          <div class="col-6">
            <div class="image" style="background: url('/wp-content/themes/theoffercompany/images/property5.png')"></div>
          </div>
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
      <div class="col-12 col-md-8">
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
              <p class="lh-house lh-house--desktop">Open House <strong>Fri, Oct 12 &#8226; 11:00am - 2:00pm</strong></p>
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

          <p class="lh-house d-md-none">Open House <strong>Fri, Oct 12 &#8226; 11:00am - 2:00pm</strong></p>
        </div>

        <div class="faw-options d-block d-md-none">
          <div class="row no-gutters">
            <div class="col-3">
              <i class="far fa-heart"></i>
              <p>Save</p>
            </div>

            <div class="col-3">
              <i class="fas fa-share-alt"></i>
              <p>Share</p>
            </div>

            <div class="col-3">
              <i class="fas fa-vr-cardboard"></i>
              <p>Virtual Tour</p>
            </div>

            <div class="col-3">
              <i class="far fa-times-circle"></i>
              <p>Remove</p>
            </div>

          </div>
        </div>


      </div>

      <div class="col-12 col-md-4 contact-agent">
        <h1 class="contact-agent-title">Contact Agent</h1>
        <div class="contact-agent-prev row no-gutters">
          <div class="col-1">
            <img src="/wp-content/themes/theoffercompany/images/woman.png" />
          </div>
          <div class="col-11 contact-agent-details">
            <h2 class="contact-agent-prev-name">Anette Brown</h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>602-448-7377</p>
            <p>annete@theofferco.com</p>
            <div class="contact-agent-controlls d-block d-md-none">
              <i class="fas fa-phone agent-phone"></i><span class="agent-phone-text">Call</span>
              <i class="fas fa-comment-alt agent-text"></i><span class="agent-phone-text">Text</span>
            </div>
          </div>
        </div>
        <form class="contact-agent-form">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Name" />
          </div>

          <div class="input-group">
            <div class="shader"></div>
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-phone"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Phone" />
          </div>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-envelope"></i>
              </div>
            </div>

            <input type="email" class="form-control" placeholder="Email" />
          </div>

          <div class="input-group">
            <textarea class="form-control" placeholder="Question"></textarea>
          </div>

          <div class="form-check d-flex justify-content-center">
            <div>
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">I want financing information</label>
            </div>
          </div>

          <div class="offer-link">
            <button>Contact Agent</button>
            <i class="fas fa-arrow-right fasarrow"></i>
          </div>
        </form>

        <div class="another-contact">
          <img src="/wp-content/themes/theoffercompany/images/man.png" />
          <div class="preferred-lender">
            <p>Preferred lender</p>
            <h2 class="contact-agent-prev-name">David Houze</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- container fluid -->
  </div>
  <!-- lh-wrapper -->
</div>

<?php get_footer(); ?>