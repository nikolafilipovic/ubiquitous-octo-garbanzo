<?php
/*
Template Name: List Homes
*/
  get_header();
?>
<div class="lh-wrapper">
  <div class="container-fluid override-fluid">
    <header class="modal-menu b-shadow">
      <div class="go-back d-block d-md-none">
        <i class="fas fa-chevron-left fasback"></i>
        <a href="#">Back</a>
      </div>

      <div class="various-link d-none d-md-flex">
        <div class="offer-link">
          <a href="#">Make an offer</a>
          <i class="fas fa-arrow-right fasarrow"></i>
        </div>

        <div class="offer-link">
          <a href="#">Schedule tour</a>
          <i class="fas fa-arrow-right fasarrow"></i>
        </div>

        <!-- save, share, virtual tour, remove, X -->
        <div class="faw-options">
          
          <a href="#">
          <i class="far fa-heart"></i>
            Save</a>

          <a href="#" data-toggle="modal" data-target="#share-modal">
              <i class="fas fa-share-alt"></i>
            Share</a>

          <a href="#">
              <i class="fas fa-vr-cardboard"></i>
            Virtual Tour</a>

          <a href="#">
              <i class="far fa-times-circle"></i>
            Remove</a>

          <a href="#" class="close-link">&times;</a>
        </div>
      </div>
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
      <div class="left-side-container col-12 col-md-8">
        <div class="row no-gutters">
          <div class="col-12 col-md-7">
            <h1 class="lh-name">11249 E Sonrisa Ave</h1>
            <p class="lh-street">Mesa, AZ 85212</p>
            <span class="font-padding-stilization">3 bds </span>
            <span class="small-dot">&#8226;</span>
            <span class="font-padding-stilization">2 ba </span>
            <span class="small-dot">&#8226;</span>
            <span class="font-padding-stilization">1,209 sqft </span>


            <div class="d-none d-md-block lh-house-details">
              <p class="lh-house lh-house--desktop">Open House <strong>Fri, Oct 12 &#8226; 11:00am - 2:00pm</strong></p>
              <i class="fas fa-phone agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Call Agent</span>
              <i class="fas fa-comment-alt agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Text Agent</span>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <div class="map-price row no-gutters">
              <div class="col-6 col-md-12">
                <span class="crimson-dot"></span>
                <strong class="small-imp house-for-sale">HOUSE FOR SALE</strong>
                <h1 class=" lh-money">$425,000</h1>
                <a href="#" class="large-link">Get pre-qualified
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
          <div class="hr hr-up"></div>
          <div class="fo-container row no-gutters">
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
          <div class="hr hr-down"></div>
        </div>

        <div class="lh-house-details lh-house-details--big d-flex d-md-none">
          <i class="fas fa-phone round-blue agent-round"></i>
          <p class="agent-phone-text d-flex align-items-center">Call Agent</p>
          <i class="fas fa-comment-alt round-blue agent-round"></i>
          <p class="agent-phone-text d-flex align-items-center">Text Agent</p>
        </div>

        <div class="lh-house-prop-desc">
          <h1 class="list-home-title--not-collapsable">Property Description</h1>
          <p class="lh-description">
            Rare opportunity awaits! Own a 40 units multi-family in up & coming area just minutes from the heart of
            Midtown in Atlanta.
            This secluded gated property has 4 sided brick buildings situated in a shape of a square. Each unit has
            2bdr/1bth.
            Bring your contractors and decide on how to finish each unit to suite best your investment portfolio. Sold
            "AS-IS" without disclosures.
            Close to Marta Westlake Station, Atlanta Beltline, The World Congress Center, Mercedes Benz Stadium,
            Georgia Tech Campus and other sites.
            Security in place, appointment is needed.
          </p>
          <div class="plus-button">
            <i class="fas fa-plus"></i>
            More
          </div>
        </div>

        <div class="lh-virutal-tour">
          <h1 class="list-home-title--not-collapsable">Virtual Walkthrough</h1>
          <img src="/wp-content/themes/theoffercompany/images/virtualtour.png" alt="virutal" />
        </div>

        <div class="lh-features">
          <div class="hr hr-up d-block d-md-none"></div>
          <h1 class="list-home-title toggle-collapse" data-target="#lh-property-amentities" data-notify="#finance-wrap">
            Property Amentities
            <i class="fas fa-chevron-up faup"></i>
          </h1>
          <div class="hr hr-down d-block d-md-none"></div>
        
          <div class="collapse show" id="lh-property-amentities">
            <h2 class="lh-subtitle">
              Features
            </h2>
            <div class="lh-features-list-wrap">
              <div class="row">
                <div class="col-6 col-md-4">
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>Type:</span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>House</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>Stories:</span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>2</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>Beds:</span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>4</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>Baths:</span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>2</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>SqFt:</span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>556</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>
                        Year Built:
                      </span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>2002</strong>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-5">
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>
                        Pool:
                      </span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>Yes</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>
                        Spa:
                      </span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>Yes</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>Lot size:</span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>12000</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      Garage spaces:
                    </div>
                    <div class="col-6 text-right">
                      <strong>4</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                      <span>Carportspaces:</span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>2</strong>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-6">
                    <span> 
                      Fireplace:
                      </span>
                    </div>
                    <div class="col-6 text-right">
                      <strong>Yes</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="lh-subtitle mt-3">
              Room Details
            </h2>
            <div class="lh-details-block">
              <p>Kitchen Features</p>
              <strong>-</strong>
            </div>
            <div class="lh-details-block">
              <p>Master bathroom</p>
              <strong>Toilet, Soap dispenser, TV, Roof</strong>
            </div>
            <div class="lh-details-block">
              <p>Laundry</p>
              <strong>Dryer, Detergent, Ironing board</strong>
            </div>
            <div class="lh-details-block">
              <p>Dining area</p>
              <strong>-</strong>
            </div>
            <div class="lh-details-block">
              <p>Basement</p>
              <strong>Table tennis, Cinema, Popcorn</strong>
            </div>
            <div class="lh-details-block no-border">
              <p>Basement</p>
              <strong>Office desk, Chair, Security safe</strong>
            </div>
            <h2 class="lh-subtitle">
              Construction
            </h2>
            <div class="lh-details-block">
              <p>Architecture</p>
              <strong>-</strong>
            </div>
            <div class="lh-details-block">
              <p>Finish</p>
              <strong>One finish, Another one</strong>
            </div>
            <div class="lh-details-block">
              <p>Frame</p>
              <strong>Item, Another item</strong>
            </div>
            <div class="lh-details-block">
              <p>Roofing</p>
              <strong>-</strong>
            </div>
            <div class="lh-details-block">
              <p>Fencing</p>
              <strong>Wooden</strong>
            </div>
            <div class="lh-details-block">
              <p>Cooling</p>
              <strong>Air condition</strong>
            </div>
            <div class="lh-details-block">
              <p>Heating</p>
              <strong>-</strong>
            </div>
            <div class="lh-details-block">
              <p>Utilities</p>
              <strong>Item, Another item</strong>
            </div>
            <div class="lh-details-block">
              <p>Water</p>
              <strong>Yes</strong>
            </div>
            <div class="lh-details-block no-border">
              <p>Sewer</p>
              <strong>Yes</strong>
            </div>
            <h2 class="lh-subtitle">
              Other
            </h2>
            <div class="lh-details-block no-border--desktop">
              <div class="row no-gutters">
                <div class="col-12 col-md-3">
                  <p>HOA: <strong>Yes</strong></p>
                </div>
                <div class="col-12 col-md-3">
                  <p>HOA free: <strong>$60</strong></p>
                </div>
                <div class="col-12 col-md-5">
                  <p class="mb-4">HOA Frequency: <strong>Monthly</strong></p>
                </div>
              </div>
            </div>

            <div class="lh-provider">
              <div class="lh-license">
                <p>Listing provided by</p>
                <span class="font-padding-stilization">
                  <a href="#">Samuel Shechter</a>, License #357382,
                  <a href="#">Quicksilver Realty</a> inc.,
                  (404) 624-6362, Source: First Multiple Listing Service.
                  <a href="#">MLS Disclaimer</a>
                </span>
              </div>

              <div class="d-flex d-md-none">
                <div class="offer-link">
                  <a href="#">Make an offer</a>
                  <i class="fas fa-arrow-right fasarrow"></i>
                </div>

                <div class="offer-link">
                  <a href="#">Schedule tour</a>
                  <i class="fas fa-arrow-right fasarrow"></i>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- lh-features -->

        <div id="finance-wrap" class="lh-finance w-100">
          <div class="hr hr-down d-none d-md-block"></div>
          <h1 class="list-home-title d-block w-100 toggle-collapse" data-target="#lh-get-financing">
            Get Financing
            <i class="fas fa-chevron-up faup"></i>
          </h1>
          <div id="lh-get-financing" class="collapse show">
            <div class="row no-gutters">
              <div class="col-4 col-md-3 lh-finance-list">
                <ul>
                  <li>P&amp;I <strong>$1,642</strong></li>
                  <li>Insurance <strong>$67</strong></li>
                  <li>Taxes <strong>$226</strong></li>
                  <li>PMI <strong>$0</strong></li>
                  <li>HOA <strong>$60</strong></li>
                </ul>
              </div>
              <div class="col-7 col-md-6 d-flex justify-content-center">
                <div class="chart-wrapper">
                  <canvas width="200" height="200" id="lh-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-12 col-md-8 d-flex flex-column align-items-center">
                <div class="offer-link">
                  <a href="#">Get pre-qualified</a>
                  <i class="fas fa-arrow-right fasarrow"></i>
                </div>
                <div class="plus-button d-flex justify-content-center">
                  <i class="fas fa-plus"></i>
                  More
                </div>
              </div>
            </div>
            <form class="lh-form">
              <label class="lh-label">Home Price</label>
              <div class="row no-gutters">
                <div class="form-group mt-1 mb-4 col-12 col-md-9">
                  <div class="has-dollar-left">
                    <input type="text" class="form-control" value="398,900" />
                  </div>
                </div>
              </div>

              <label class="lh-label">Down payment</label>
              <div class="row no-gutters mb-3">
                <div class="form-group mt-1 col-9 col-md-7 pr-1">
                  <div class="has-dollar-left">
                    <input type="text" class="form-control" value="398,900" />
                  </div>
                </div>
                <div class="form-group mt-1 col-3 col-md-2 pl-1">
                  <div class="has-amp-right">
                    <input type="text" class="form-control" value="20" />
                  </div>
                </div>
              </div>

              <label class="lh-label">Loan program</label>
              <div class="row no-gutters">
                <div class="col-12 col-md-9 lh-custom-select-wrap mb-4">
                  <select name="cars" class="lh-custom-select">
                    <option selected>30-year fixed</option>
                    <option>20-year fixed</option>
                    <option>10-year fixed</option>
                  </select>
                </div>
              </div>

              <label class="lh-label">Interest rate</label>
              <div class="row no-gutters">
                <div class="col-12 col-md-9 form-group mt-1 mb-2">
                  <div class="has-amp-right">
                    <input type="text" class="form-control" value="4,627" />
                  </div>
                </div>
              </div>

              <div class="mb-4">
                <label class="custom-checkmark">
                  Include taxes/insurance
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>

              <label class="lh-label">Property tax</label>
              <div class="row no-gutters mb-3">
                <div class="form-group mt-1 col-9 col-md-7 pr-1">
                  <div class="has-year-right has-dollar-left">
                    <input type="text" class="form-control" value="2,712" />
                  </div>
                </div>
                <div class="form-group mt-1 col-3 col-md-2 pl-1">
                  <div class="has-amp-right">
                    <input type="text" class="form-control" value="0.68" />
                  </div>
                </div>
              </div>

              <label class="lh-label">Property tax</label>
              <div class="row no-gutters">
                <div class="col-12 col-md-9 form-group mt-1 mb-2">
                  <div class="has-year-right has-dollar-left">
                    <input type="text" class="form-control" value="398,900" />
                  </div>
                </div>
              </div>

              <div class="mb-4">
                <label class="custom-checkmark">
                  Include PMI
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>

              <label class="lh-label">HOA dues</label>
              <div class="row no-gutters">
                <div class="col-12 col-md-9 form-group mt-1 mb-4">
                  <div class="has-month-right has-dollar-left">
                    <input type="text" class="form-control" value="398,900" />
                  </div>
                </div>
              </div>


              <p class="lh-apendix">
                <small>
                  All calculations and costs are estimates.
                  This information is intended for planning and educational purposes only.
                </small>
              </p>
            </form>
          </div>
        </div>

        <div class="lh-transportation">
          <div class="hr hr-up"></div>
          <h1 class="list-home-title d-block w-100 toggle-collapse" data-target="#lh-transportation">
            Transportation
            <i class="fas fa-chevron-up faup"></i>
          </h1>
          <div class="transporation-group collapse show" id="lh-transportation">
            <div class="row no-gutters">
              <div class="col-12 col-md-6">
                <div class="mb-4 row no-gutters">
                  <div class="border-dotted">
                    75
                  </div>

                  <div class="transp-desc">
                    <p>Walk Score</p>
                    <a href="#">Very Walkable</a>
                  </div>
                </div>
              </div>
              <div class="mb-4 col-12 col-md-6">
                <div class="row no-gutters">
                  <div class="border-dotted">
                    51
                  </div>

                  <div class="transp-desc">
                    <p>Transit Score</p>
                    <a href="#">Good Transit</a>
                  </div>
                </div>
              </div>
              <div class="mb-4 col-12 col-md-6">
                <div class="row no-gutters">
                  <div class="border-dotted">
                    51
                  </div>

                  <div class="transp-desc">
                    <p>Bike Score</p>
                    <a href="#">Bikeable</a>
                  </div>
                </div>
              </div>
            </div>
            <p class="small-caps data-by">Data by <a class="small-caps" href="#"> walkscore</a></p>
          </div>
          <div class="hr hr-down"></div>
        </div> <!-- lh-transportation -->

        <div class="lh-nearby-places">
          <h1 class="list-home-title d-block w-100 toggle-collapse" data-target="#lh-nearby-places">
            Nearby Places
            <i class="fas fa-chevron-up faup"></i>
          </h1>
          <div id="lh-nearby-places" class="collapse show">
            <div class="nearby-places-group row no-gutters">
              <div class="d-flex col-12 col-md-6">
                <div>
                  <i class="fas fa-shopping-cart round-blue"></i>
                </div>
                <div class="places-stars">
                  <h2>Shopping</h2>
                  <p>Walmart (0.85 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">5 reviews</span>
                  </div>
                  <p>Jules Acupuncture (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>

                  <p>Damian Gonzales (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>
                </div>
              </div>

              <div class="d-flex col-12 col-md-6">
                <div>
                  <i class="fas fa-briefcase-medical round-blue"></i>
                </div>
                <div class="places-stars">
                  <h2>Hospital</h2>
                  <p>Walmart (0.85 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">5 reviews</span>
                  </div>

                  <p>Jules Acupuncture (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>

                  <p>Damian Gonzales (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>
                </div>
              </div>

              <div class="d-flex col-12 col-md-6">
                <div>
                  <i class="fas fa-utensils round-blue"></i>
                </div>
                <div class="places-stars">
                  <h2>Restaurant</h2>
                  <p>Walmart (0.85 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">5 reviews</span>
                  </div>
                  <p>Jules Acupuncture (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>

                  <p>Damian Gonzales (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>
                </div>
              </div>

              <div class="d-flex col-12 col-md-6">
                <div>
                  <i class="fas fa-running round-blue"></i>
                </div>
                <div class="places-stars">
                  <h2>Fitness</h2>
                  <p>Walmart (0.85 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">5 reviews</span>
                  </div>
                  <p>Jules Acupuncture (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>

                  <p>Damian Gonzales (2.87 mi)</p>
                  <div class="stars-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="faded font-padding-stilization">2 reviews</span>
                  </div>
                </div>
              </div>
            </div>
            <p class="small-caps">Data by <a class="small-caps" href="#"> Yelp</a></p>
          </div>
          <div class="hr hr-down"></div>
        </div> <!-- lh-nearby-places -->

        <div class="lh-school-rankings">
          <h1 class="list-home-title d-block w-100 toggle-collapse" data-target="#lh-school-ranking">
            School Rankings
            <i class="fas fa-chevron-up faup"></i>
          </h1>
          <div id="lh-school-ranking" class="collapse show"> 
            <div class="school-rank-group row no-gutters">
              <div>
                <i class="round-blue">5</i>
                <p class="faded">out of 10</p>
              </div>
              <div class="sch-r-desc">
                <p>Marshall Ranch Elementary</p>
                <p class="small-caps">0.9 mi</p>
              </div>
            </div>

            <div class="school-rank-group row no-gutters">
              <div>
                <i class="round-blue">6</i>
                <p class="faded">out of 10</p>
              </div>
              <div class="sch-r-desc">
                <p>Moon Valley High</p>
                <p class="small-caps">0.9 mi</p>
              </div>
            </div>

            <div class="school-rank-group row no-gutters">
              <div>
                <i class="round-blue">8</i>
                <p class="faded">out of 10</p>
              </div>
              <div class="sch-r-desc">
                <p>Tumbleweed Elementary</p>
                <p class="small-caps">0.9 mi</p>
              </div>
            </div>
            <p class="small-caps">Data by <a class="small-caps" href="#"> GreatSchools.org</a></p>

            <div class="sch-r-offer-link d-block d-md-none">
              <div class="offer-link">
                <a href="#">Make an offer</a>
                <i class="fas fa-arrow-right fasarrow"></i>
              </div>

              <div class="offer-link">
                <a href="#">Schedule tour</a>
                <i class="fas fa-arrow-right fasarrow"></i>
              </div>
            </div>
          </div>
        </div> <!-- lh-school-rankings -->
        <div class="d-none d-md-block hr hr-down"></div>

        <div class="property-slider lh-property-slider">
          <h1 class="list-home-title text-center">Featured Properties Nearby</h1>

          <div class="row justify-content-center no-gutters">
            <div class="col-11 col-md-9 col-lg-12 m-auto">
              <div class="owl-carousel owl-carousel-lh">
                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-1.png)">
                  <span class="time-on-market">
                    <i class="fas fa-vr-cardboard"></i>
                    5 days on the market</span>
                  <span class="sale-type">
                    <i class="red-dot"></i>
                  House for Sale</span>
                  <h1 class="property-price">$425,000</h1>
                  <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2
                      ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                  <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>
                </div>

                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-2.png)">
                  <span class="time-on-market">
                    <i class="fas fa-vr-cardboard"></i>
                    5 days on the market
                  </span>
                  <span class="sale-type">
                    <i class="red-dot"></i>
                    House for Sale
                  </span>
                  <h1 class="property-price">$425,000</h1>
                  <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2
                      ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                  <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex flex-column justify-content-center">
            <div class="offer-link">
              <a href="#">See all featured properties</a>
              <i class="fas fa-arrow-right fasarrow"></i>
            </div>

            <div class="blue-border">
              Buying but need to sell first? <span>The Offer Company will get you offers in 48 hours!</span>
            </div>

            <div class="d-none d-md-flex justify-content-center">
              <a href="#" class="top-link">
                <i class="fas fa-chevron-up top-up"></i>
                Back to Top
              </a>
            </div>
          </div>
        </div> <!-- property-slider -->

      </div> <!-- left-side-container -->


      <div class="col-12 col-md-4 contact-agent">
        <!-- <h1 class="contact-agent-title">Contact Agent</h1> -->
        <strong class="small-imp">CONTACT AGENT</strong>
        <div class="contact-agent-prev row no-gutters">
          <div class="col-2">
            <img src="/wp-content/themes/theoffercompany/images/woman.png" />
          </div>
          <div class="col-10 contact-agent-details">
            <h2 class="contact-agent-prev-name">Anette Brown</h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>602-448-7377</p>
            <p>annete@theofferco.com</p>
            <div class="contact-agent-controlls d-block d-md-none">
              <i class="fas fa-phone agent-phone"></i><span class="font-padding-stilization">Call</span>
              <i class="fas fa-comment-alt agent-text"></i><span class="font-padding-stilization">Text</span>
            </div>
          </div>
        </div>
        <form class="contact-agent-form">
          <div class="form-group">
            <div class="has-person-left">
              <input type="text" class="form-control" placeholder="Name" />
            </div>
          </div>

          <div class="form-group">
            <div class="has-phone-left">
              <input type="text" class="form-control" placeholder="Phone" />
            </div>
          </div>

          <div class="form-group">
            <div class="has-mail-left">
              <input type="text" class="form-control" placeholder="Email" />
            </div>
          </div>

          <div class="input-group">
            <textarea class="form-control" placeholder="Question"></textarea>
          </div>

          <div class="form-check d-flex justify-content-center">
            <div>
              <label class="custom-checkmark">
                I want financing information
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
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

      </div> <!-- contact-agent -->
    </div> <!-- lh-info-wrapper -->
  </div> <!-- container fluid -->
</div> <!-- lh-wrapper -->


<!-- modals -->
<div id="share-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Share on</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="close-link" aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="sphere-container">
          <span class="sphere sphere--fb">
            <i class="fab fa-facebook-f"></i>
          </span>
          <span class="sphere sphere--twitt">
            <i class="fab fa-twitter"></i>
          </span>
          <span class="sphere sphere--in">
            <i class="fab fa-linkedin-in"></i>
          </span>
          <span class="sphere sphere--pinta">
            <i class="fab fa-pinterest-p"></i>
          </span>
          <span class="sphere sphere--email">
            <i class="far fa-envelope"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>