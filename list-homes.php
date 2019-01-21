<div id="root">
<?php

    /*
    Template Name: List Homes
    */
      get_header(nomenu);
      $new_str = explode('_',$_GET['property']);
      $zip = array_pop($new_str);
      $mls_id = $_GET['id'];
      // include 'franz_functions.php';
    ?>
<input type="hidden" name="mls_id" value="<?= $mls_id ?>" id="mls_id">
<input type="hidden" name="zip" value="<?= $zip ?>" id="zip_id">
<div class="lh-wrapper">
    <div class="container-fluid override-fluid">
        <header class="modal-menu b-shadow">
            <div class="go-back d-block d-md-none">
                <i class="far fa-chevron-left fasback"></i>
                <a href="#">Back</a>
            </div>
            <div class="various-link d-none d-md-flex">
                <div class="offer-link">
                    <a href="/make-an-offer?id=<?php echo $_GET['id'] ?>">Make an offer</a>
                    <i class="far fa-arrow-right fasarrow"></i>
                </div>
                <div class="offer-link">
                    <a href="/schedule-tour?id=<?php echo $_GET['id'] ?>&property=<?= $_GET['property']; ?>">Schedule tour</a>
                    <i class="far fa-arrow-right fasarrow"></i>
                </div>
                <!-- save, share, virtual tour, remove, X -->
                <div class="faw-options">
                    <a href="#">
                    <i class="far fa-heart"></i> Save</a>
                    <a href="#" data-toggle="modal" data-target="#share-modal">
                    <i class="fal fa-share-alt"></i> Share</a>
                    <a href="#" data-toggle="modal" data-target="#virtual-tour-modal">
                    <i class="fal fa-vr-cardboard"></i> Virtual Tour</a>
                    <a href="#" data-toggle="modal" data-target="#remove-modal">
                    <i class="fal fa-times-circle"></i> Remove</a>
                    <a href="#" id="close2" @click="redirect" class="close-link"><i class="fal fa-times"></i></a> 
                </div>
            </div>
        </header>
        <div class="row no-gutters">
            <div class="col-12 col-md-7">
                <figure class="lh-img-holder">
                    <img id="img0" :src="img0"  alt="" style="padding-left: 5px !important; width: 100% !important;">
                    <figcaption class="d-md-none">
                        <span><i class="fas fa-vr-cardboard"></i> Virtual tour</span>
                        <span>1 / 27</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-5 d-none d-md-block more-imgs">
                <div class="row no-gutters lh-pictures">
                    <div class="col-6">
                        <div class="image" id="img1"  :style="'background: url('+img1+')'"></div>
                    </div>
                    <div class="col-6">
                        <div class="image mr5" id="img2" :style="'background: url('+img2+')'"></div>
                    </div>
                    <div class="col-6">
                        <div class="image" id="img3" :style="'background: url('+img3+')'"></div>
                    </div>
                    <div class="col-6">
                        <div class="image mr5" id="img4" :style="'background: url('+img4+')'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-link-group b-shadow d-block d-md-none">
            <div class="offer-link">
                <a href="#">Make an offer</a>
                <i class="far fa-arrow-right fasarrow"></i>
            </div>
            <div class="offer-link">
                <a href="#">Schedule tour</a>
                <i class="far fa-arrow-right fasarrow"></i>
            </div>
        </div>
        <div class="row no-gutters lh-info-wrapper">
            <div class="left-side-container col-12 col-md-8">
                <div class="row no-gutters">
                    <div class="col-12 col-md-7">
                        <h1 class="lh-name" style="font-size: 1.549rem !important;">{{address_full}}</h1>
                        <p class="lh-street">{{address_city}}, {{address_state}} {{address_postalCode}}</p>
                        <span class="font-padding-stilization">{{property_bedrooms}} bds </span>
                        <span class="small-dot">&#8226;</span>
                        <span class="font-padding-stilization">{{property_bathrooms}} ba </span>
                        <span class="small-dot">&#8226;</span>
                        <span class="font-padding-stilization">{{property_area}} sqft </span>
                        <div class="d-none d-md-block lh-house-details">
                            <p class="lh-house lh-house--desktop">Open House <strong>Fri, Oct 12 &#8226; 11:00am - 2:00pm</strong></p>
                            <i class="fas fa-phone agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization"><a :href="'tel:'+ad_agentphone">Call
                            Agent</a></span>
                            <i class="fas fa-comment-alt-dots agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">
                                <a :href="'sms:'+ad_agentphone">Text
                            Agent</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="map-price row no-gutters">
                            <div class="col-6 col-md-12">
                                <span class="crimson-dot"></span>
                                <strong class="small-imp house-for-sale">FOR SALE</strong>
                                <h1 class="lh-money">{{listPrice}}</h1>
                                <a href="#" class="large-link">Get pre-qualified
                                <i class="far fa-arrow-right fasarrow"></i>
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
                        <div class="col-2">
                            <a href="#">
                            <i class="far fa-heart"></i>
                            Save
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" data-toggle="modal" data-target="#share-modal">
                            <i class="fas fa-share-alt"></i>
                            Share
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" data-toggle="modal" data-target="#virtual-tour-modal">
                            <i class="fas fa-vr-cardboard"></i>
                            Virtual Tour
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" data-toggle="modal" data-target="#remove-modal">
                            <i class="far fa-times-circle"></i>
                            Remove
                            </a>
                        </div>
                    </div>
                    <div class="hr hr-down"></div>
                </div>
                <div class="lh-house-details lh-house-details--big d-flex d-md-none">
                    <div class="col-6">
                        
                            <i class="fas fa-phone round-blue agent-round agent-phone"></i>
                            <p class="agent-phone-text d-flex align-items-center"><a href="#">Call Agent 12345</a></p>
                        
                    </div>
                    <div class="col-6">
                        
                        <i class="fas fa-comment-alt-dots round-blue agent-round"></i>
                        <p class="agent-phone-text d-flex align-items-center"><a href="#">Text Agent</a></p>
                         
                    </div>
                </div>
                <div class="lh-house-prop-desc">
                    <h1 class="list-home-title--not-collapsable">Property Description</h1>
                    <p class="lh-description">
                       
                       
                            {{remarks_placeholder}}<template v-if="preview">...</template>
                        
                    </p>
                    <template v-if="preview">
                    <div class="plus-button" @click="showReview()">
                        <i class="fas fa-plus"></i>
                        More
                    </div>
                    </template>
                </div>
                <template v-if="tourStatus">
                <div class="lh-virutal-tour" >
                    <h1 class="list-home-title--not-collapsable">Virtual Walkthrough</h1>  
                    <iframe id="vt" :src="vt" style="width: 100%; min-height: 550px; overflow:hidden !important;"></iframe>
                    <!-- <img src="/wp-content/themes/theoffercompany/images/virtualtour.png" alt="virutal" /> -->
                </div>
                </template>
                <div class="lh-features">
                    <div class="hr hr-up d-block d-md-none"></div>
                    <h1 class="list-home-title toggle-collapse" data-target="#lh-property-amentities" data-notify="#finance-wrap">
                        Property Amentities
                        <i class="far fa-chevron-up faup"></i>
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
                                            <strong>{{property_type}}</strong>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <span>Stories:</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <strong>{{property_stories}}</strong>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <span>Beds:</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <strong>{{property_bedrooms}}</strong>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <span>Baths:</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <strong>{{property_bathrooms}}</strong>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <span>SqFt:</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <strong>{{property_area}}</strong>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-7">
                                            <span>
                                            Year Built:
                                            </span>
                                        </div>
                                        <div class="col-5 text-right">
                                            <strong>{{property_yearBuilt}}</strong>
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
                                            <strong>{{property_pool}}</strong>
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
                                            <strong>{{property_lotSize}}</strong>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            Garage spaces:
                                        </div>
                                        <div class="col-6 text-right">
                                            <strong>{{property_garageSpaces}}</strong>
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
                                            <strong>{{property_fireplaces}}</strong>
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
                            <p>Master bathroom*</p>
                            <strong>Toilet, Soap dispenser, TV, Roof</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Laundry</p>
                            <strong>{{property_laundryFeatures}}</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Dining area*</p>
                            <strong>-</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Basement*</p>
                            <strong>Table tennis, Cinema, Popcorn</strong>
                        </div>
                        <div class="lh-details-block no-border">
                            <p>Basement*</p>
                            <strong>Office desk, Chair, Security safe</strong>
                        </div>
                        <h2 class="lh-subtitle">
                            Construction
                        </h2>
                        <div class="lh-details-block">
                            <p>Architecture*</p>
                            <strong>-</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Finish*</p>
                            <strong>One finish, Another one</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Frame*</p>
                            <strong>Item, Another item</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Roofing</p>
                            <strong>{{property_roof}}</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Fencing*</p>
                            <strong>-</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Cooling</p>
                            <strong>{{property_cooling}}</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Heating</p>
                            <strong>{{property_heating}}</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Utilities*</p>
                            <strong>Item, Another item</strong>
                        </div>
                        <div class="lh-details-block">
                            <p>Water</p>
                            <strong>Yes</strong>
                        </div>
                        <div class="lh-details-block no-border">
                            <p>Sewer*</p>
                            <strong>Yes</strong>
                        </div>
                        <h2 class="lh-subtitle">
                            Other
                        </h2>
                        <div class="lh-details-block no-border--desktop">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-3">
                                    <p>HOA: 
                                        <template v-if="hoa"><strong>Yes</strong></template>
                                        <template v-else><strong>No</strong></template>
                                    </p>
                                </div>
                                <template v-if="hoa">
                                    <div class="col-12 col-md-3">
                                        <p>HOA Fee: <strong>$60</strong></p>
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <p class="mb-4">HOA Frequency: <strong>Monthly</strong></p>
                                    </div>
                                </template>
                            </div>
                        </div>
                        <div class="lh-provider">
                            <div class="lh-license">
                                <p>Listing provided by</p>
                                <span class="font-padding-stilization">
                                <a :href="'/agent-profile/?id='+agent_id">{{agent_firstName}} {{agent_lastName}}</a>, License #357382, <a href="#">{{office_name}}</a> inc.<br>
                                {{office_contact_office}}, Source: {{mls_provider_name}} <a href="#">MLS Disclaimer</a>
                                </span>
                            </div>
                            <div class="d-flex d-md-none">
                                <div class="offer-link">
                                    <a href="#">Make an offer</a>
                                    <i class="far fa-arrow-right fasarrow"></i>
                                </div>
                                <div class="offer-link">
                                    <a href="#">Schedule tour</a>
                                    <i class="far fa-arrow-right fasarrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- lh-features -->
                <div id="finance-wrap" class="lh-finance w-100">
                    <div class="hr hr-down d-none d-md-block"></div>
                    <h1 class="list-home-title d-block w-100 toggle-collapse" data-target="#lh-get-financing">
                        Get Financing
                        <i class="far fa-chevron-up faup"></i>
                    </h1>
                    <div id="lh-get-financing" class="collapse show">
                        <div class="row no-gutters">
                            <div class="col-5 col-md-3 lh-finance-list">
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
                                    <canvas id="lh-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-12 col-md-8 d-flex flex-column align-items-center">
                                <div class="offer-link wide">
                                    <a href="#">Get pre-qualified</a>
                                    <i class="far fa-arrow-right fasarrow"></i>
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
                                <div class="form-group mt-1 col-12 col-md-9">
                                    <div class="has-dollar-left">
                                        <input type="text" class="form-control"  :value="rawListPrice.toLocaleString()" />
                                    </div>
                                </div>
                            </div>
                            <label class="lh-label">Down payment</label>
                            <div class="row no-gutters">
                                <div class="form-group mt-1 col-9 col-md-7 pr-1">
                                    <div class="has-dollar-left">
                                        <input type="text" class="form-control" @keyup="getDownPaymentPercentage" v-model="downpayment" />
                                    </div>
                                </div>
                                <div class="form-group mt-1 col-3 col-md-2 pl-1">
                                    <div class="has-amp-right">
                                        <input type="text" class="form-control" @keyup="getDownPayment" v-model="downpayment_percentage" />
                                    </div>
                                </div>
                            </div>
                            <label class="lh-label">Loan program</label>
                            <div class="row no-gutters">
                                <div class="col-12 col-md-9 lh-custom-select-wrap mb-3">
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
                                        <input type="text" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="custom-checkmark">
                                Include taxes/insurance
                                <input type="checkbox" v-model="hide_tax">
                                <span class="checkmark"></span>
                                </label>
                            </div>
                            <template v-if="hide_tax">
                                <label class="lh-label">Property tax</label>
                                <div class="row no-gutters mb-1">
                                    <div class="form-group mt-1 col-9 col-md-7 pr-1">
                                        <div class="has-year-right has-dollar-left">
                                            <input type="text" class="form-control" v-model="tax_taxAnnualAmount" />
                                        </div>
                                    </div>
                                    <div class="form-group mt-1 col-3 col-md-2 pl-1">
                                        <div class="has-amp-right">
                                            <input type="text" class="form-control" value="0.68" />
                                        </div>
                                    </div>
                                </div>
                                <label class="lh-label">Home Insurance</label>
                                <div class="row no-gutters mb-1">
                                    <div class="form-group mt-1 col-9 col-md-7 pr-1">
                                        <div class="has-year-right has-dollar-left">
                                            <input type="text" class="form-control" v-model="home_insurance.toLocaleString()"  />
                                        </div>
                                    </div>
                                    <div class="form-group mt-1 col-3 col-md-2 pl-1">
                                        <div class="has-amp-right">
                                            <input type="text" class="form-control" value="0.0042" />
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <div class="mb-3">
                                <label class="custom-checkmark">
                                Include PMI
                                <input type="checkbox" v-model="include_pmi">
                                <span class="checkmark"></span>
                                </label>
                            </div>
                            <template v-if="include_pmi">
                                <label class="lh-label">PMI</label>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-9 form-group mt-1 mb-4">
                                        <div class="has-month-right has-dollar-left">
                                            <input type="text" class="form-control" v-model="pmi" />
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <label class="lh-label">Association Fee</label>
                            <div class="row no-gutters">
                                <div class="col-12 col-md-9 form-group mt-1 mb-4">
                                    <div class="has-month-right has-dollar-left">
                                        <input type="text" class="form-control" v-model="association_fee" />
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
                        <p class="data-by">Data by <a class="small-caps" href="#"> walkscore</a></p>
                    </div>
                    <div class="hr hr-down"></div>
                </div>
                <!-- lh-transportation -->
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
                        <p class="data-by">Data by <a class="small-caps" href="#"> Yelp</a></p>
                    </div>
                    <div class="hr hr-down"></div>
                </div>
                <!-- lh-nearby-places -->
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
                        <p class="data-by">Data by <a class="small-caps" href="#"> GreatSchools.org</a></p>
                        <div class="d-block d-md-none hr hr-down"></div>
                        <div class="sch-r-offer-link d-block d-md-none">
                            <div class="offer-link">
                                <a href="#">Make an offer</a>
                                <i class="far fa-arrow-right fasarrow"></i>
                            </div>
                            <div class="offer-link">
                                <a href="#">Schedule tour</a>
                                <i class="far fa-arrow-right fasarrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- lh-school-rankings -->
                <div class="d-none d-md-block hr hr-down"></div>
                <div class="property-slider lh-property-slider">
                    <h1 class="list-home-title text-center">Ahwatukee Lifestyle</h1>
                    <p class="list-home-subtitle text-center">Get weekly updates about what's happening in Ahwatukee.</p>
                    <div class="row justify-content-center no-gutters">
                        <div class="col-11 col-md-9 col-lg-12 m-auto">
                            <div class="owl-carousel owl-carousel-lh">
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-1.png)">
                                </div>
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-2.png)">
                                </div>
                            </div>
                            <div class="lifestyle-news">
                                <small class="small-imp">Upgrading home</small>
                                <p>Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest</p>
                                <div class="review-by">
                                    <img src="/wp-content/themes/theoffercompany/images/chrisbrown.png" alt="review" />
                                    <p>Chris Brown</p>
                                    <small>on 25 Oct 2018</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="offer-link">
                            <a href="#">Get updates</a>
                            <i class="far fa-arrow-right fasarrow"></i>
                        </div>
                        <!-- <div class="d-none d-md-flex justify-content-center">
                            <a href="#" class="top-link">
                              <i class="fas fa-chevron-up top-up"></i>
                              Back to Top
                            </a>
                            </div> -->
                    </div>
                    <div class="blue-bg">
                        <p>Buying but need to sell first?</p>
                        <small>We have two great options to choose from.</small>
                        <a href="/selling-options?id=<?php echo $_GET['id'] ?>">Selling options
                        <i class="far fa-arrow-right fasarrow"></i>
                        </a>
                    </div>
                </div>
                <!-- property-slider -->
            </div>
            <!-- left-side-container -->
            <div class="col-12 col-md-4 contact-agent">
                <!-- <h1 class="contact-agent-title">Contact Agent</h1> -->
                <strong class="small-imp">CONTACT AGENT</strong>
                <div class="contact-agent-prev row no-gutters">
                    <div class="col-2">
                        <img :src="ad_photo" />
                    </div>
                    <div class="col-10 contact-agent-details">
                        <h2 class="contact-agent-prev-name">{{ad_first_name}} {{ad_last_name}}</h2>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p><a :href="'sms:'+ad_agentphone">{{ad_agentphone}}</a></p>
                        <p><a :href="'email:'+ad_agentemail"> {{ad_agentemail}}</p>
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
                    <div class="another-contact mt-4">
                        <img src="/wp-content/themes/theoffercompany/images/man.png" />
                        <div class="preferred-lender">
                            <p>Preferred lender</p>
                            <h2 class="contact-agent-prev-name">{{lender_fname}} {{lender_lname}}</h2>
                        </div>
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
                        <i class="far fa-arrow-right fasarrow"></i>
                    </div>
                </form>
            </div>
            <!-- contact-agent -->
        </div>
        <!-- lh-info-wrapper -->
    </div>
    <!-- container fluid -->
</div>
<!-- lh-wrapper -->
<!-- modals -->
<div id="share-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content width-override">
            <div class="modal-header">
                <h5 class="modal-title">Share on</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="close-link" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="sphere-container">
                    <a class="sphere sphere--fb">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="sphere sphere--twitt">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a class="sphere sphere--in">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="sphere sphere--pinta">
                    <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a class="sphere sphere--email">
                    <i class="far fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- virtual tour modal -->
<div id="virtual-tour-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content width-override">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-vr-cardboard"></i>
                    Virtual Tour
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="close-link" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body modal-body--center">
                <p>Would you like to add this property to your
                    virtual tour list? Tour lists allow you to
                    seamlessly go from one home tour to the next.
                </p>
                <div class="modal-blue-links">
                    <a href="#" class="blue-link">Add to list</a>
                    <a href="#" class="blue-link">Watch now</a>
                </div>
                <label class="custom-checkmark">
                Remember my answer
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
</div>
<!-- remove modal -->
<div id="remove-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content width-override">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="far fa-times-circle"></i>
                    Remove
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="close-link" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body modal-body--center">
                <p>Permanently remove property from future searches?</p>
                <div class="modal-blue-links">
                    <a href="#" class="blue-link">Yes</a>
                    <a href="#" class="blue-link">No</a>
                </div>
                <label class="custom-checkmark">
                Remember my answer
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="http://l8u.9b2.myftpupload.com/wp-content/themes/theoffercompany/main.js?rand=<?= uniqid(); ?>"></script>

