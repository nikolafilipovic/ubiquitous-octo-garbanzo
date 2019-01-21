<div id="root">
<?php
	/*
		Template Name: Search Homes Dev
	*/
	get_header('listing');
	$template_directory_uri = "/wp-content/themes/theoffercompany";
	if (isset($_GET['overlay']) && isset($_GET['id'])){
		if ($_GET['overlay'] == 1 && isset($_GET['id']) ){
			$overlay = 1;
			$property_id = $_GET['id'];			
		}else{
			$overlay = 0;
			$property_id = 0;			
		}

	}else{
		$overlay = 0;
		$property_id = 0;		
	}
?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/theoffercompany/modal.css">
<style>
      .offer-link {
    width: 25%;
}
	.close-link2 {
	    margin-left: auto !important;
	    margin-top: -8px !important;
	}


	.offer-link{
		margin-right: 10px !important;
	}



	body {
		background: rgb( 255,255,255 );
	}

	#home_search_dropdown {
		display: none;
		background: rgb( 255,255,255 );
		border: 1px solid rgb( 222,222,222 );
		position: fixed;
		top: 80px;
		left: 2px;
		z-index: 1;
	}

		#home_search_dropdown .section {

		}

			#home_search_dropdown .header {
				text-transform: uppercase;
				font-size: 12px;
				color: rgb( 180,180,180 );
				padding-left: 30px;
				padding-top: 10px;
				position: relative;

			}
				#home_search_dropdown .header:before {
					content: "\f102";
					font-family: "dashicons";
					position: absolute;
					top: 9px;
					left: 8px;
					font-size: 17px;
				}

			#home_search_dropdown .items {
				
			}

			#home_search_dropdown .item {
				font-size: 12px;
				color: rgb( 70,155,181 );
				padding-top: 5px;
				padding-left: 30px;
				cursor: pointer;
			}
				#home_search_dropdown .item:hover {
					background: rgb( 243,243,251 );
				}

				#home_search_dropdown .item:hover .sub_text {
					color: rgb( 180,180,180 );
				}

				#home_search_dropdown .item .sub_text {
					font-size: 11px;
					color: rgb( 210,210,210 );
					line-height: 9px;
					border-bottom: 1px solid rgb( 235,235,235 );
					padding-bottom: 12px;
				}
				.lifestyle-news-image {
					border-radius:5px; 
					width:100%; 
					max-height:210px; 
					height:100%;
				}

	#search-homes #filterDropdown .fields .form-group .custom-select {
		padding: 0px 0px 0px 10px;
	}

	#search-homes #filterDropdown .fields .form-group .custom-select,
	#search-homes #filterDropdown .fields .form-group .form-control.input,
	.lh-featured-props #filterDropdown .fields .form-group .custom-select,
	.lh-featured-props #filterDropdown .fields .form-group .form-control.input,
	.sch-t-pic-info #filterDropdown .fields .form-group .custom-select,
	.sch-t-pic-info #filterDropdown .fields .form-group .form-control.input,
	#search-homes #filterDropdown .fields .form-group .input-group.dual {
		max-width: 220px;
	}

	.hidden {
	  display: none;
	}

	.contact-agent-form .offer-link.disabled {
		pointer-events: none;
		background: rgb( 200,200,200 );
	}

	.contact-agent-form .offer-link.disabled i {
		display: none;
	}

	#listing-area {
		height: calc( 100% - 105px );
	}

</style>
<div id="modalvue">
<div class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header" style="padding: 0px !important">
        <!-- <button class="modal-close" style="z-index: 10002 !important; color: black !important; margin-top: 15px !important; font-size: 18px; padding: 5px;"><i class="fal fa-times"></i></button> -->
        <!-- <a href="#" id="close2"  class="close-link modal-close"><i class="fal fa-times"></i></a>  -->
        <!-- <h2 class="modal-heading">
        	
        </h2> -->
         <header class="modal-menu b-shadow">
			<div class="go-back d-block d-md-none">
				<i class="far fa-chevron-left fasback"></i>
				<a href="#">Back</a>
			</div>
			<div class="various-link d-none d-md-flex">
				<div class="offer-link">
					<a :href="'/make-an-offer?id='+mls.id">Make an offer</a>
					<i class="far fa-arrow-right fasarrow"></i>
				</div>
				<div class="offer-link">
					<a :href="'/schedule-tour?id='+mls.id">Schedule tour</a>
					<i class="far fa-arrow-right fasarrow"></i>
				</div>
				
				<div class="faw-options">
					<a href="#">
					<i class="far fa-heart" ></i> Save</a>
					&nbsp;
					<a href="#" data-toggle="modal" data-target="#share-modal">
					<i class="fal fa-share-alt"></i> Share</a>
					<a href="#" data-toggle="modal">
					<i class="vt fal fa-vr-cardboard"></i> Virtual Tour</a>
					<a href="#" data-toggle="modal">
					<i class="far fa-times-circle"></i> Remove</a>
					<a href="#" id="close2"  class="close-link2 modal-close2"><i class="fal fa-times"></i></a> 
				</div>
			</div>
		</header>
      </div>
      <div class="modal-body" >
        <div class="modal-content">
          	<!-- Experiment -->
				    <div class="container-fluid override-fluid">
				         <!-- <header class="modal-menu b-shadow">
				            <div class="go-back d-block d-md-none">
				                <i class="far fa-chevron-left fasback"></i>
				                <a href="#">Back</a>
				            </div>
				            <div class="various-link d-none d-md-flex">
				                <div class="offer-link">
				                    <a href="/make-an-offer?id=20626>">Make an offer</a>
				                    <i class="far fa-arrow-right fasarrow"></i>
				                </div>
				                <div class="offer-link">
				                    <a href="/schedule-tour?id=20626">Schedule tour</a>
				                    <i class="far fa-arrow-right fasarrow"></i>
				                </div>
				               
				                <div class="faw-options">
				                    <a href="#" style="margin-right: 10px;">
				                    <i class="far fa-heart" ></i> Save</a>
				                    &nbsp;
				                    <a href="#" style="margin-right: 10px;" data-toggle="modal" data-target="#share-modal">
				                    <i class="fal fa-share-alt"></i> Share</a>
				                    
				                    
				                    <a href="#" id="close2"  class="close-link"><i class="fal fa-times"></i></a> 
				                </div>
				            </div>
				        </header> -->
				        <div class="row no-gutters">
				            <div class="col-12 col-md-7">
				                <figure class="lh-img-holder">
				                    <img id="img0" :src="img0"  alt="" class="d-md-block d-none">
				                    <figcaption class="d-md-none d-block">
										<span id="counter"></span>
										<div class="owl-carousel owl-theme lh-responsive-slider">
											<div class="item"><img id="img0" :src="img0" alt=""></div>
											<div class="item"><img id="img1" :src="img1" alt=""></div>
											<div class="item"><img id="img2" :src="img2" alt=""></div>
											<div class="item"><img id="img3" :src="img3" alt=""></div>
										</div>
				                        <span><i class="fas fa-vr-cardboard"></i> Virtual tour</span>
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
				                        <h1 class="lh-name" style="font-size: 1.549rem !important;">{{mls.address_full}}</h1>
				                        <p class="lh-street">{{mls.address_city}}, {{mls.address_state}} {{mls.address_postalCode}}</p>
				                        <span class="font-padding-stilization">{{mls.property_bedrooms}} bds </span>
				                        <span class="small-dot">&#8226;</span>
				                        <span class="font-padding-stilization">{{mls.property_bathrooms}} ba </span>
				                        <span class="small-dot">&#8226;</span>
				                        <span class="font-padding-stilization">{{mls.property_area}} sqft </span>
				                        <div class="d-none d-md-block lh-house-details">
				                            <p class="lh-house lh-house--desktop" v-if="mls.openhouse_id">Open House <strong>{{ mls_openhouse_date_string }}</strong></p>
				                            <i class="fas fa-phone agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization"><a href="#">Call
				                            Agent</a></span>
				                            <i class="fas fa-comment-alt-dots agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">
				                                <a href="#">Text
				                            Agent</a></span>
				                        </div>
				                    </div>
				                    <div class="col-12 col-md-5">
				                        <div class="map-price row no-gutters">
				                            <div class="col-6 col-md-12">
				                                <span class="crimson-dot"></span>
				                                <strong class="small-imp house-for-sale">FOR SALE</strong>
				                                <h1 class="lh-money">${{mls.listPrice}}</h1>
				                                <a :href="'/prequalify/?id='+mls.id" class="large-link">Get pre-qualified
				                                <i class="far fa-arrow-right fasarrow"></i>
				                                </a>
				                            </div>
				                            <div class="col-6 col-md-12 d-flex lh-map">
				                                <a @click="showPropertyMap()" v-bind:class="{ hidden: property_map_visible }"><img src="/wp-content/themes/theoffercompany/images/map.png" /></a>
				                            </div>
				                        </div>
                    				</div>
				        		</div>
				        		<div v-bind:class="{ hidden: ! property_map_visible }" style="width: 100%; min-width: 100px; height: 300px; margin-bottom: 20px;">
				        			<div id="property_map_wrapper" style="width: 100%; height: 100%"></div>
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
									<div class="vr-iframe">
										<iframe id="vt" :src="mls.virtualTourUrl" style="width: 100%; min-height: 550px;"></iframe>
									</div>
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
				                                            <strong>{{mls.property_type}}</strong>
				                                        </div>
				                                    </div>
				                                    <div class="row no-gutters">
				                                        <div class="col-6">
				                                            <span>Stories:</span>
				                                        </div>
				                                        <div class="col-6 text-right">
				                                            <strong>{{mls.property_stories}}</strong>
				                                        </div>
				                                    </div>
				                                    <div class="row no-gutters">
				                                        <div class="col-6">
				                                            <span>Beds:</span>
				                                        </div>
				                                        <div class="col-6 text-right">
				                                            <strong>{{mls.property_bedrooms}}</strong>
				                                        </div>
				                                    </div>
				                                    <div class="row no-gutters">
				                                        <div class="col-6">
				                                            <span>Baths:</span>
				                                        </div>
				                                        <div class="col-6 text-right">
				                                            <strong>{{mls.property_bathrooms}}</strong>
				                                        </div>
				                                    </div>
				                                    <div class="row no-gutters">
				                                        <div class="col-6">
				                                            <span>SqFt:</span>
				                                        </div>
				                                        <div class="col-6 text-right">
				                                            <strong>{{mls.property_area}}</strong>
				                                        </div>
				                                    </div>
				                                    <div class="row no-gutters">
				                                        <div class="col-7">
				                                            <span>
				                                            Year Built:
				                                            </span>
				                                        </div>
				                                        <div class="col-5 text-right">
				                                            <strong>{{mls.property_yearBuilt}}</strong>
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
				                                            <strong>{{mls.property_pool}}</strong>
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
				                                            <strong>{{mls.property_lotSize}}</strong>
				                                        </div>
				                                    </div>
				                                    <div class="row no-gutters">
				                                        <div class="col-6">
				                                            Garage spaces:
				                                        </div>
				                                        <div class="col-6 text-right">
				                                            <strong>{{mls.property_garageSpaces}}</strong>
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
				                                            <strong>{{mls.property_fireplaces}}</strong>
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
				                            <strong>{{mls.property_laundryFeatures}}</strong>
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
				                            <strong>{{mls.property_roof}}</strong>
				                        </div>
				                        <div class="lh-details-block">
				                            <p>Fencing*</p>
				                            <strong>-</strong>
				                        </div>
				                        <div class="lh-details-block">
				                            <p>Cooling</p>
				                            <strong>{{mls.property_cooling}}</strong>
				                        </div>
				                        <div class="lh-details-block">
				                            <p>Heating</p>
				                            <strong>{{mls.property_heating}}</strong>
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
				                                <a :href="'/agent-profile/?id='+agent.agent_id">{{mls.agent_firstName}} {{mls.agent_lastName}}</a>, License #357382, <a href="#">{{mls.office_name}}</a> inc.<br>
				                                {{mls.office_contact_office}}, Source: {{mls.mls_provider_name}} <a href="#">MLS Disclaimer</a>
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

				                <!--computation-->

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
				                                    <a :href="'/prequalify/?id='+mls.id">Get pre-qualified</a>
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
				                                        <input type="text" class="form-control"  :value="mls.rawListPrice" />
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
				                                            <input type="text" class="form-control" v-model="home_insurance"  />
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
				                                        <input type="text" class="form-control" v-model="mls.association_fee" />
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
											<div class="row">
												<div class="col-6">
													<div class="lifestyle-news-image" style="background: url(/wp-content/themes/theoffercompany/images/property-1.png);"></div>
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
												<div class="col-6">
													<div class="lifestyle-news-image" style="background: url(/wp-content/themes/theoffercompany/images/property-2.png)"></div>
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
				                        </div>
				                    </div>
				                    <div class="d-flex flex-column justify-content-center">
				                        <div class="offer-link">
				                            <a href="https://app.monstercampaigns.com/c/bejnpumprltfhvgoqdd6/">Get updates</a>
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
				                        <a :href="'/selling-options/?street_address='+mls.address_full+'&city='+mls.address_city+'&state='+mls.address_state">Selling options
				                        <i class="far fa-arrow-right fasarrow"></i>
				                        </a>
				                    </div>
				                </div>
				                <!-- property-slider -->
				        	</div>
				        	<div class="col-12 col-md-4 contact-agent">
				                <!-- <h1 class="contact-agent-title">Contact Agent</h1> -->
				                <strong class="small-imp">CONTACT AGENT</strong>
				                <div class="contact-agent-prev row no-gutters">
				                    <div class="col-2">
				                        <img :src="agent.photo" />
				                    </div>
				                    <div class="col-10 contact-agent-details">
				                        <h2 class="contact-agent-prev-name">{{agent.first_name}} {{agent.last_name}}</h2>
				                        <i class="fas fa-star"></i>
				                        <i class="fas fa-star"></i>
				                        <i class="fas fa-star"></i>
				                        <i class="fas fa-star"></i>
				                        <i class="fas fa-star"></i>
				                        <p><a :href="'sms:'+agent.phone">{{agent.phone}}</a></p>
				                        <p><a :href="'email:'+agent.email"> {{agent.email}}</a></p>
				                        <div class="contact-agent-controlls d-block d-md-none">
				                            <i class="fas fa-phone agent-phone"></i><span class="font-padding-stilization">Call</span>
				                            <i class="fas fa-comment-alt agent-text"></i><span class="font-padding-stilization">Text</span>
				                        </div>
				                    </div>
				                </div>
				                <form class="contact-agent-form" v-on:submit.prevent="onSubmit">
				                    <div class="form-group">
				                        <div class="has-person-left">
				                            <input type="text" class="form-control" placeholder="Name" v-model="contact_name" />
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <div class="has-phone-left">
				                            <input type="text" class="form-control" placeholder="Phone" v-model="contact_phone" />
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <div class="has-mail-left">
				                            <input type="text" class="form-control" placeholder="Email" v-model="contact_email" />
				                        </div>
				                    </div>
				                    <div class="input-group">
				                        <textarea class="form-control" placeholder="Question" v-model="contact_question"></textarea>
				                    </div>
				                    <div class="another-contact mt-4">
				                        <img src="/wp-content/themes/theoffercompany/images/man.png" />
				                        <div class="preferred-lender">
				                            <p>Preferred lender</p>
				                            <h2 class="contact-agent-prev-name">{{agent.lender_fname}} {{agent.lender_lname}}</h2>
				                        </div>
				                    </div>
				                    <div class="form-check d-flex justify-content-center">
				                        <div>
				                            <label class="custom-checkmark">
				                            I want financing information
				                            <input type="checkbox" v-model="contact_allow_email">
				                            <span class="checkmark"></span>
				                            </label>
				                        </div>
				                    </div>
				                    <div  v-bind:class="{ disabled: contact_agent_form_submitted, 'offer-link': true }">
				                        <button @click="submitContactForm" >{{ contact_agent_form_button_text }}</button>
				                        <i class="far fa-arrow-right fasarrow"></i>
				                    </div>
				                </form>
				            </div>

				        </div>
				       	
				    </div><!--container-->

          	<!---------------->
        </div>
      </div>
    </div>
  </div>
</div>
<!--
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
                    <form method="post" class="lh-form">
                      <input type="hidden" name="street_address" value="<?= $properties['street_address']; ?>">
                      <input type="hidden" name="state" value="<?= $properties['state']; ?>">
                      <input type="hidden" name="city" value="<?= $properties['city']; ?>">
                      <input type="hidden" name="zip" value="<?= $properties['zip']; ?>">
                      <input type="hidden" name="property_area" value="<?= $sqft; ?>">
                      <input type="hidden" name="beds" value="<?= $beds; ?>">
                      <input type="hidden" name="baths" value="<?= $baths; ?>">
                      <input type="hidden" name="estimate" value="<?= $estimate; ?>">
                      <input type="hidden" name="params" value="<?= "?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip&property_area=$sqft&beds=$beds&baths=$baths&estimate=$estimate"; ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="has-mail-left">
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
                      <input type="hidden" name="street_address" value="<?= $properties['street_address']; ?>">
                      <input type="hidden" name="state" value="<?= $properties['state']; ?>">
                      <input type="hidden" name="city" value="<?= $properties['city']; ?>">
                      <input type="hidden" name="zip" value="<?= $properties['zip']; ?>">
                      <input type="hidden" name="property_area" value="<?= $sqft; ?>">
                      <input type="hidden" name="beds" value="<?= $beds; ?>">
                      <input type="hidden" name="baths" value="<?= $baths; ?>">
                      <input type="hidden" name="estimate" value="<?= $estimate; ?>">
                    <input type="hidden" name="params" value="<?= "?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip&property_area=$sqft&beds=$beds&baths=$baths&estimate=$estimate"; ?>">
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
-->
<div class="clearfix"></div>
<div id="search-homes">
	<div class="container-fluid">
		<div class="row d-xl-block d-lg-block d-md-none d-sm-none d-none desktop-fields">
			<div class="col-xl-12 col-lg-12 col-md-12 desktop-fields-column">
				<div class="search-desktop-field">
					<div class="input-group homes-search-field" id="input-group">
						<input type="text" class="form-control" id="homes-search-desktop-field" placeholder="Search by address, city or zip...">
						<div class="input-group-prepend">
							<div class="input-group-text geo_trigger">
								<i class="fas fa-map-marker-alt"></i>
							</div>
						</div>
					</div>
					<div id="home_search_dropdown">
						<div class="section">
							<div class="header">Addresses</div>
							<div class="items">
							</div>
						</div>
					</div>
				</div>
				<div class="dropdown desktop">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="listingDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-circle color red"></i><i class="fas fa-circle color green"></i>Listing type <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="listingDropdownDesktop" id="listingDropdownDesktopMenu">
						<a class="dropdown-item primary-item" href="#">
							<input class="dropdown-checkbox parent-checkbox" id="for_sale" type="checkbox" name="for_sale">
							<label for="for_sale">
								<i class="fas fa-circle color red"></i>For Sale
							</label>
						</a>
						<div class="subtypes" data-parent="for_sale">
							<a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="coming_soon" type="checkbox" name="coming_soon"><label for="coming_soon">Coming Soon</label></a>
							<a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="new_construction" type="checkbox" name="new_construction"><label for="new_construction">New Construction</label></a>
							<a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="open_house" type="checkbox" name="open_house"><label for="open_house">Open Houses</label></a>
							<a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="virtual_tour" type="checkbox" name="virtual_tour"><label for="virtual_tour">Virtual Tours</label></a>
						</div>
						<a class="dropdown-item primary-item" href="#">
							<input class="dropdown-checkbox parent-checkbox is_value" id="foreclosure" type="checkbox" name="foreclosure">
							<label for="foreclosure" class="checkbox_trigger">
								<i class="fas fa-circle color blue"></i>Foreclosure
							</label>
						</a>
						<div class="subtypes" data-parent="foreclosure"></div>
						<a class="dropdown-item primary-item" href="#">
							<input class="dropdown-checkbox parent-checkbox is_value" id="rentals" type="checkbox" name="rentals">
							<label for="rentals" class="checkbox_trigger">
								<i class="fas fa-circle color green"></i>Rentals 
							</label>
						</a>
						<div class="subtypes" data-parent="last_call"></div>
						<a class="dropdown-item primary-item" href="#">
							<input class="dropdown-checkbox parent-checkbox is_value" id="sold" type="checkbox" name="sold">
							<label for="sold" class="checkbox_trigger">
								<i class="fas fa-circle color yellow"></i>Sold
							</label>
						</a>
						<div class="subtypes" data-parent="sold"></div>
					</div>
				</div>
				<div class="dropdown desktop">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="priceDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Price <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu price" aria-labelledby="priceDropdownDesktop">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Min" id="price_min">
							<input type="text" class="form-control" placeholder="Max" id="price_max">
						</div>
					</div>
				</div>
				<div class="dropdown desktop">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="bedroomsDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						0+ Bedrooms <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu bedrooms" aria-labelledby="bedroomsDropdownDesktop">
						<div class="dropdown-wrapper" id="beds_picker">
							<a class="dropdown-item custom ignore_defaults" href="#" data-value="">Any</a>
							<a class="dropdown-item custom ignore_defaults" href="#" data-value="1">1+</a>
							<a class="dropdown-item custom ignore_defaults" href="#" data-value="2">2+</a>
							<a class="dropdown-item custom ignore_defaults" href="#" data-value="3">3+</a>
							<a class="dropdown-item custom ignore_defaults" href="#" data-value="4">4+</a>
							<a class="dropdown-item custom-checkbox" href="#">
								<input class="dropdown-checkbox" id="bedrooms_exact" type="checkbox" name="bedrooms_exact">
								<label for="bedrooms_exact">Use exact match</label>
							</a>
						</div>
					</div>
				</div>
				<div class="dropdown desktop">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="homeTypeDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Home type (<span id="home_type_count">5</span>) <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="homeTypeDropdownDesktop" id="homeTypeDropdownDesktop">
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon13" type="checkbox" name="house" checked><label for="comingSoon13">Houses</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon14" type="checkbox" name="condo" checked><label for="comingSoon14">Condos</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon15" type="checkbox" name="land"><label for="comingSoon15">Land</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon16" type="checkbox" name="manufactured"><label for="comingSoon16">Manufactured</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon60" type="checkbox" name="town_house"><label for="comingSoon60">Town Houses</label></a>
					</div>
				</div>
				<div class="dropdown desktop">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="filtersDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						More filters <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu" id="filterDropdown" aria-labelledby="filtersDropdownDesktop">
						<div class="fields">
							<div class="form-group">
								<label>Bathrooms</label>
								<select class="custom-select" id="baths">
									<option selected value="">0+</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
									<option value="4">4+</option>
								</select>
							</div>
							<div class="form-group">
								<label>Square feet</label>
								<div class="input-group dual">
									<input type="text" class="form-control" placeholder="Min" id="area_min">
									<input type="text" class="form-control" placeholder="Max" id="area_max">
								</div>
							</div>
							<div class="form-group">
								<label>Lot size</label>
								<select class="custom-select" id="lot_size_min">
									<option value="" selected>Any</option>
									<option value="2000">2000+ sqft</option>
									<option value="3000">3000+ sqft</option>
									<option value="4000">4000+ sqft</option>
									<option value="5000">5000+ sqft</option>
									<option value="6000">6000+ sqft</option>
									<option value="10890">.25+ acres</option>
									<option value="21780">.50+ acres</option>
									<option value="43560">1+ acres</option>
									<option value="87120">2+ acres</option>
									<option value="217800">5+ acres</option>
									<option value="435600">10+ acres</option>
								</select>
							</div>
							<div class="form-group">
								<label>Year built</label>
								<div class="input-group dual">
									<input type="text" class="form-control" placeholder="Min" id="year_min">
									<input type="text" class="form-control" placeholder="Max" id="year_max">
								</div>
							</div>
							<div class="form-group">
								<label>Max HOA</label>
								<select class="custom-select" id="max_hoa">
									<option value="" selected>Any</option>
									<option value="100">$100/mo</option>
									<option value="200">$200/mo</option>
									<option value="300">$300/mo</option>
									<option value="400">$400/mo</option>
									<option value="500">$500/mo</option>
								</select>
							</div>
							<div class="form-group">
								<label>Days on market</label>
								<select class="custom-select" id="days_on_market">
									<option value="" selected>Any</option>
									<option value="1">1 day</option>
									<option value="7">7 days</option>
									<option value="14">14 days</option>
									<option value="30">30 days</option>
									<option value="90">90 days</option>
									<option value="180">6 months</option>
									<option value="360">12 months</option>
									<option value="720">24 months</option>
									<option value="1080">36 months</option>
								</select>
							</div>
							<div class="form-group">
								<label>Features</label>
								<input type="text" class="form-control input" placeholder="Golf, pool, waterfront..." id="features">
							</div>
							<!--
							<a class="btn btn-primary btn-block apply" href="#" id="applyBottom">Apply</a>
							-->
						</div>
					</div>
				</div>
				<div class="dropdown desktop">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="filtersDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Sort: <span id="sort_type_button">Highest price</span> <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="filtersDropdownDesktop" id="sort_types">
						<a class="dropdown-item active" href="#" data-value="price_high">Highest price</a>
						<a class="dropdown-item" href="#" data-value="beds_high">Bedrooms</a>
						<a class="dropdown-item" href="#" data-value="baths_high">Bathrooms</a>
						<a class="dropdown-item" href="#" data-value="area_high">Square Feet</a>
						<a class="dropdown-item" href="#" data-value="days_on_market_high">Days on Market</a>
					</div>
				</div>
				<a href="#" id="toggle_map" class="desktop-fields-map">List</a>
			</div>
		</div>
		<div class="row d-xl-none d-lg-none d-md-block d-sm-block d-block mobile-fields">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<input class="form-control search" type="search" placeholder="Search address, city or zip..." aria-label="Search">
				<div class="dropdown listing">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="listingDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<input class="search-checkbox parent-checkbox" id="listing" type="checkbox" value="Nothing">
						<label for="listing"><i class="fas fa-circle color red"></i>For sale <i class="fal fa-angle-down"></i></label>
					</button>
					<div class="dropdown-menu" aria-labelledby="listingDropdown">
						<a class="dropdown-item" href="#" data-keepOpenOnClick><input class="dropdown-checkbox" id="comingSoon17" type="checkbox" value="Nothing"><label for="comingSoon17">Coming soon</label></a>
						<a class="dropdown-item" href="#" data-keepOpenOnClick><input class="dropdown-checkbox" id="comingSoon18" type="checkbox" value="Nothing"><label for="comingSoon18">Last Call</label></a>
						<a class="dropdown-item" href="#" data-keepOpenOnClick><input class="dropdown-checkbox" id="comingSoon19" type="checkbox" value="Nothing"><label for="comingSoon19">New construction</label></a>
						<a class="dropdown-item" href="#" data-keepOpenOnClick><input class="dropdown-checkbox" id="comingSoon20" type="checkbox" value="Nothing"><label for="comingSoon20">Open houses</label></a>
						<a class="dropdown-item" href="#" data-keepOpenOnClick><input class="dropdown-checkbox" id="comingSoon21" type="checkbox" value="Nothing"><label for="comingSoon21">Virtual tour</label></a>
					</div>
				</div>
				<div class="dropdown foreclosures">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="foreclosuresDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<input class="search-checkbox parent-checkbox" id="foreclosures" type="checkbox" value="Nothing">
						<label for="foreclosures"><i class="fas fa-circle color blue"></i><span>Foreclosures</span> <i class="fal fa-angle-down"></i></label>
					</button>
					<div class="dropdown-menu" aria-labelledby="foreclosuresDropdown">
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon22" type="checkbox" value="Nothing"><label for="comingSoon22">Pre-foreclosure</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon23" type="checkbox" value="Nothing"><label for="comingSoon23">Short sale</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon24" type="checkbox" value="Nothing"><label for="comingSoon24">Bank owned</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon25" type="checkbox" value="Nothing"><label for="comingSoon25">Auction</label></a>
					</div>
				</div>
				<div class="dropdown lastcall">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="RentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<input class="search-checkbox parent-checkbox" id="listing" type="checkbox" value="Nothing">
						<label for="listing"><i class="fas fa-circle color green"></i>For Rent <i class="fal fa-angle-down"></i></label>
					</button>
					<div class="dropdown-menu" aria-labelledby="RentDropdown">
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon26" type="checkbox" value="Nothing"><label for="comingSoon26">Houses</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon27" type="checkbox" value="Nothing"><label for="comingSoon27">Apartments</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon28" type="checkbox" value="Nothing"><label for="comingSoon28">Condos</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon29" type="checkbox" value="Nothing"><label for="comingSoon29">Townhouses</label></a>                    
					</div>
				</div>
				<div class="dropdown sold">
					<button class="btn btn-secondary" type="button">
						<input class="search-checkbox" id="sold" type="checkbox" value="Nothing">
						<label for="sold"><i class="fas fa-circle color yellow"></i>Sold</label>
					</button>
				</div>
				<div class="price-field">
					<h3>Price</h3>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Min">
						<input type="text" class="form-control" placeholder="Max">
					</div>
				</div>
				<div class="dropdown bedrooms">
					<h3>Bedrooms</h3>
					<button class="btn btn-secondary dropdown-toggle" type="button" id="bedroomsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Any <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="bedroomsDropdown">
						<div class="dropdown-wrapper">
							<a class="dropdown-item custom" href="#">Any</a>
							<a class="dropdown-item custom" href="#">1+</a>
							<a class="dropdown-item custom" href="#">2+</a>
							<a class="dropdown-item custom" href="#">3+</a>
							<a class="dropdown-item custom" href="#">4+</a>
							<a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="comingSoon30" type="checkbox" value="Nothing"><label for="comingSoon30">Use exact match</label></a>
						</div>
					</div>
				</div>
				<div class="dropdown hometype">
					<h3>Home type</h3>
					<button class="btn btn-secondary dropdown-toggle" type="button" id="hometypeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Any <i class="fal fa-angle-down"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="hometypeDropdown">
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon31" type="checkbox" value="Nothing"><label for="comingSoon31">Houses</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon32" type="checkbox" value="Nothing"><label for="comingSoon32">Condos</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon33" type="checkbox" value="Nothing"><label for="comingSoon33">Land</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon34" type="checkbox" value="Nothing"><label for="comingSoon34">Manufactured</label></a>
						<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon58" type="checkbox" value="Nothing"><label for="comingSoon58">Townhomes</label></a>
					</div>
				</div>
				<div class="search-links">
					<a href="#" id="openFilterBtn">Filters</a>
					<a href="#">Sort</a>
					<a href="#">Map</a>
					<a href="#" id="save-search">Save search</a>
				</div>
			</div>
		</div>
	</div>
	<div class="filter-overlay closed" id="filterOverlay">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 filter-header">
					<a href="#" class="apply" id="applyTop">Apply</a>
					<p>145 Results</p>
					<a href="#" class="reset">Reset</a>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 filter-body" id="filter-body">
					<div class="accordion" id="accordionFilters">
						<div class="card">
							<div class="card-header" id="headingOne">
								<button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<input class="search-checkbox" id="comingSoon36" type="checkbox" value="Nothing">
									<label for="comingSoon36"><i class="fas fa-circle color red"></i>For Sale <i class="fal fa-angle-down"></i></label>
								</button>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFilters">
								<div class="card-body">
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon37" type="checkbox" value="Nothing"><label for="comingSoon37">Coming soon</label></a>
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon38" type="checkbox" value="Nothing"><label for="comingSoon38">Last Call</label></a>
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon39" type="checkbox" value="Nothing"><label for="comingSoon39">New construction</label></a>
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon40" type="checkbox" value="Nothing"><label for="comingSoon40">Open houses</label></a>
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon41" type="checkbox" value="Nothing"><label for="comingSoon41">Virtual tour</label></a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<button class="btn btn-secondary collapsed" type="button">
									<input class="search-checkbox" id="comingSoon42" type="checkbox" value="Nothing">
									<label for="comingSoon42"><i class="fas fa-circle color blue"></i>Foreclosures <i class="fal fa-info-circle info"></i></label>
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<input class="search-checkbox" id="comingSoon43" type="checkbox" value="Nothing">
									<label for="comingSoon43"><i class="fas fa-circle color green"></i>For Rent<i class="fal fa-angle-down"></i></label>
								</button>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFilters">
								<div class="card-body">
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon44" type="checkbox" value="Nothing"><label for="comingSoon44">Houses</label></a>
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon45" type="checkbox" value="Nothing"><label for="comingSoon45">Apartments</label></a>
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon46" type="checkbox" value="Nothing"><label for="comingSoon46">Condos</label></a>
									<a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon47" type="checkbox" value="Nothing"><label for="comingSoon47">Townhouses</label></a>  
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<input class="search-checkbox" id="comingSoon48" type="checkbox" value="Nothing">
									<label for="comingSoon48"><i class="fas fa-circle color yellow"></i>Sold </label>
								</button>
							</div>
						</div>
					</div>
					<div class="other-fields">
						<div class="price-field">
							<h3>Price</h3>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Min">
								<input type="text" class="form-control" placeholder="Max">
							</div>
						</div>
						<div class="room-field">
							<h3>Bedrooms</h3>
							<div class="dropdown-wrapper">
								<a class="dropdown-item custom studio" href="#">Studio</a>
								<a class="dropdown-item custom" href="#">1+</a>
								<a class="dropdown-item custom" href="#">2+</a>
								<a class="dropdown-item custom" href="#">3+</a>
								<a class="dropdown-item custom" href="#">4+</a>
								<a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="comingSoon49" type="checkbox" value="Nothing"><label for="comingSoon49">Use exact match</label></a>
							</div>
						</div>
						<div class="home-field">
							<h3>Home Type</h3>
							<div class="dropdown-wrapper">
								<a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="comingSoon50" type="checkbox" value="Nothing"><label for="comingSoon50">Houses</label></a>
								<a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="comingSoon51" type="checkbox" value="Nothing"><label for="comingSoon51">Condos</label></a>
								<a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="comingSoon52" type="checkbox" value="Nothing"><label for="comingSoon52">Land</label></a>
								<a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="comingSoon53" type="checkbox" value="Nothing"><label for="comingSoon53">Manufactured</label></a>
								<a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="comingSoon54" type="checkbox" value="Nothing"><label for="comingSoon54">Townhomes</label></a>
							</div>
						</div>
						<div class="fields">
							<div class="form-group">
								<label>Bathrooms</label>
								<select class="custom-select" id="comingSoon55">
									<option selected>0+</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
								</select>
							</div>
							<div class="form-group">
								<label>Square feet</label>
								<div class="input-group dual">
									<input type="text" class="form-control" placeholder="Min">
									<input type="text" class="form-control" placeholder="Max">
								</div>
							</div>
							<div class="form-group">
								<label>Lot size</label>
								<select class="custom-select" id="comingSoon56">
									<option selected>Any</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
								</select>
							</div>
							<div class="form-group">
								<label>Year built</label>
								<div class="input-group dual">
									<input type="text" class="form-control" placeholder="Min">
									<input type="text" class="form-control" placeholder="Max">
								</div>
							</div>
							<div class="form-group">
								<label>Max HOA</label>
								<select class="custom-select" id="comingSoon57">
									<option selected>Any</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
								</select>
							</div>
							<div class="form-group">
								<label>Days on market</label>
								<select class="custom-select" id="comingSoon58" style="max-width: 54%;">
									<option selected>Any</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
								</select>
							</div>
							<div class="form-group">
								<label>Features</label>
								<input type="text" class="form-control input" placeholder="Golf, pool, waterfront...">
							</div>
							<a class="btn btn-primary btn-block apply" href="#" id="applyBottom">Apply</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row" id="main_content">
			<div class="col-xl-6 d-xl-block col-lg-6 d-lg-block col-md-6 d-md-block col-sm-12 col-12 d-none" id="map-area">
				<div class="map-wrapper"></div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 property-list" id="listing-area">
				<div class="row" id="properties">
					<div class="col-xl-12 col-lg-12 col-md-12 d-lg-block d-md-block d-none listing-heading">
						<h3 class="location-name"><span class="city_text"></span> <span class="state_text"></span> Real Estate</h3>
						<p class="location-info"><span class="properties_amount_text"></span> homes for sale</p>
						<a href="#" class="save-search">Save Search</a>
					</div>
				</div>
				<div class="row pagination">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div>
							<ul class="pagination" id="pagination">
								<li class="page-item ignore" data-page="next"><a class="page-link next" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<footer class="footer">   
						<div class="bottom-footer">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 footer-copyright">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo"><img src="<?php echo $template_directory_uri; ?>/images/footer-logo.png" alt=""/></a>
										<span>© <?php echo date('Y'); ?> The Offer Company</span>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 footer-social">
										<a href="#"><span class="social-icon"><i class="fab fa-facebook-f"></i></span></a>
										<a href="#"><span class="social-icon"><i class="fab fa-twitter"></i></span></a>
										<a href="#"><span class="social-icon"><i class="fab fa-instagram"></i></span></a>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 footer-contact">
										<h3>(888) 398-4855</h3>
										<span><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></span>
									</div>
								</div>
							</div>
						</div>
					</footer>
				</div>
			</div>
		</div>
	</div>
</div>
</div> <!-- #et-main-area -->
</div> <!-- #page-container -->
</div><!--root-->

<canvas id="icon_canvas" style="display: none;"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/search_homes.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"
	integrity="sha256-+nuEu243+6BveXk5N+Vbr268G+4FHjUOEcfKaBqfPbc="
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script type="text/javascript">
	var vm,vm2;
	vm = new Vue({
		el:'#modalvue',
		data:{
			mls:{},
			mls_openhouse_date: "",
			agent:{},
			mls_id:20626,
			img0:'',
            img1:'',
            img2:'',
            img3:'',
            img4:'',
            remarks_preview:'',
            remarks_placeholder:'',
            preview:true,
            tourStatus:true,
            hoa:false,
            downpayment_percentage:20,
            downpayment:0,
            pmi:0,
            include_pmi:false,
            loan_amount:0,
            hide_tax:false,
            tax_taxAnnualAmount:0,
            contact_name: '',
            contact_email: '',
            contact_phone: '',
            contact_question: '',
            contact_allow_email: false,
            contact_agent_form_button_text: "Contact Agent",
            contact_agent_form_submitted: false,
            is_logged_in: <?php echo ( ! is_user_logged_in() ) ? "false" : "true"; ?>,
            property_map_visible: false,
		},
		created: function(){
			this.loadMLS(this.mls_id);
			this.loadAgent(85353);
		},
		methods: {
			loadMLS: function(mls_id){
				this.property_map_visible = false;
				axios.get("http://portal.theoffercompany.com/api/getMlsDetails.php?id="+mls_id)
                .then(response => {
                    data = response.data;
                    this.img0 = data.images[0];
                    this.img1 = data.images[1];
                    this.img2 = data.images[2];
                    this.img3 = data.images[3];
                    this.img4 = data.images[4];
                    this.mls = data;
                    // this.mls.listPrice = new Intl.NumberFormat( "en-US", { style: "currency", currency: "USD" }).format( data.listPrice ).replace( /\.00$/, "" );

                    this.mls.rawListPrice = data.listPrice;
                    this.remarks_preview = this.mls.remarks.substring(0,500);
                    this.remarks_placeholder = this.remarks_preview;
                    if (this.mls.virtualTourUrl == null){
                        this.tourStatus = false;
                    }
                    if (this.mls.association_fee > 0){
                        this.hoa = true;
                    }else{
                        this.hoa = false;
                    }
                    //calculation
                     this.downpayment = this.mls.rawListPrice * (this.downpayment_percentage/100);
                    this.downpayment = this.downpayment.toFixed(2);
                    this.home_insurance = this.home_insurance_percentage * this.mls.rawListPrice;
                    this.home_insurance = this.home_insurance.toFixed(2);
                    if (this.downpayment_percentage.toFixed(2) < 20){
                        this.include_pmi = true;
                        this.loan_amount = this.mls.rawListPrice - this.downpayment;
                        this.loan_amount = this.loan_amount.toFixed(2);                        
                    }                    
                   
                    if (this.mls.association_fee > 0){
                        this.hoa = true;
                    }else{
                        this.hoa = false;
                    }

                    this.formatOpenHouseDate();
                });
                // console.log(this.mls.virtualTourUrl);
                // console.log(this.tourStatus);
                console.log(this.mls);
			},
			loadAgent: function(zip){
              axios.get("http://portal.theoffercompany.com/api/getAgentDetails.php?zip="+zip)
              .then(response => {
                    // console.log(response.data);
                    if (response.data.length == 0){
                        // console.log('no data available');
                        axios.get("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=85353")
                        .then(response =>{
                            agent_data = response.data[0];
                            this.agent = agent_data;
                            this.remarks_preview = this.remarks.substring(0,500);
                        });
                    }else{
                        
                        agent_data = response.data[0];
                        this.agent = agent_data;
                    }
              });    
            },
            showReview: function(){
                this.preview = false;
                this.remarks_placeholder = this.mls.remarks;
            },
            getDownPayment: function(){
                
                this.downpayment = this.mls.rawListPrice * (this.downpayment_percentage / 100);
                this.downpayment = this.downpayment.toFixed(2);
                if (this.downpayment_percentage < 20){
                        this.include_pmi = true;
                        this.loan_amount = this.mls.rawListPrice - this.downpayment;
                        this.loan_amount = this.loan_amount.toFixed(2);
                        this.pmi = (this.loan_amount * 0.0075) / 12;
                        this.pmi = this.pmi.toFixed(2);
                        console.log(this.pmi);
                }else{
                    this.include_pmi = false;
                    this.pmi = 0;
                }
            },
            getDownPaymentPercentage: function(){
                this.downpayment_percentage = (this.downpayment/this.mls.rawListPrice) * 100; 
                this.downpayment_percentage = this.downpayment_percentage.toFixed(2);
                if (this.downpayment_percentage < 20){
                        this.include_pmi = true;
                        this.loan_amount = this.mls.rawListPrice - this.downpayment;
                        this.loan_amount = this.loan_amount.toFixed(2);
                        this.pmi = (this.loan_amount * 0.0075) / 12;
                        this.pmi = this.pmi.toFixed(2);
                        console.log(this.pmi);
                }else{
                    this.include_pmi = false;
                    this.pmi = 0;
                }
            },
			test: function(str){
				alert(str);
			},
			submitContactForm: function(){
				console.log( "submitContactForm" )
				let self = this;

				let data = {
					contact_name: self.contact_name,
					contact_email: self.contact_email,
					contact_phone: self.contact_phone,
					contact_question: self.contact_question,
					agent_id: self.agent.id,
					contact_allow_email: self.contact_allow_email,
				};

				self.contact_agent_form_button_text = "Sending...";
				self.contact_agent_form_submitted = true;

				console.log( "data", data )

				axios.get( "https://hooks.zapier.com/hooks/catch/3497148/0enqim/", {
						params: data,
					})
					.then( ( response ) => {
						console.log( "submitContactForm success", response )
						self.contact_agent_form_button_text = "Sent!";
						self.contact_agent_form_submitted = true;

						self.contact_name = "";
						self.contact_email = "";
						self.contact_phone = "";
						self.contact_question = "";
						self.contact_allow_email = false;
					})
					.catch( ( error ) => {
						console.log( "submitContactForm error", error );
						self.contact_agent_form_button_text = "Error, try again";
						self.contact_agent_form_submitted = false;
					});
			},
			onSubmit: function(){
				//console.log( "onSubmit" )
			},
			formatOpenHouseDate: function() {

				if ( ! this.mls.openhouse_id ) {
					return "";
				}

				let start = moment( this.mls.openhouse_start );
				let end = moment( this.mls.openhouse_end );

				this.mls_openhouse_date_string = start.format( "ddd, MMM D • h:mma - " ) + end.format( "h:mma" );

			},
			showPropertyMap: function(){
				this.property_map_visible = true;

				let coords = {
					lat: parseFloat( this.mls.geo_lat ),
					lng: parseFloat( this.mls.geo_lng ),
				};
				let map = new google.maps.Map( $( "#property_map_wrapper" ).get( 0 ), {
						zoom: 16,
						center: coords,
					});

				let marker = new google.maps.Marker({
								map: map,
								position: coords,
							});

				marker.setMap( map );
			},
		}
	});

</script>
<script>

	$("div").delegate(".vt", "click", function(e){
		e.stopPropagation();
	});
	$(".vt").on("click",function(e){
		alert('tour');
		e.preventDefault();
		e.stopPropagation();
	});
	//(function($){

		function SearchPage() {
			console.log( "SearchPage" );
			this.search_endpoint = "http://portal.theoffercompany.com/api/getMlsResults.php";
			this.property_template = `
				<div class="col-xl-{BOOTSTRAP_COLUMNS_XL} col-lg-{BOOTSTRAP_COLUMNS_LG} col-md-{BOOTSTRAP_COLUMNS_MD} col-sm-{BOOTSTRAP_COLUMNS_SM} col-{BOOTSTRAP_COLUMNS_DF} column-item property modal-toggle" data-index="{INDEX}" data-addr="{ADDR}" data-url="{URL}" mls-id="{MLS_ID2}" id="mls{MLS_ID}" postal="{POSTAL}">
					<div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url( {IMAGE} )">
						<span class="time-on-market"><a href="{TOUR}" target="_blank" class="{HIDDEN}"><i class="vt fal fa-vr-cardboard"></i></a>{TIME_ON_MARKET} days on the market</span>
						<a href="#" class="favourite"><i class=" far fa-heart"></i></a>
						{SALE_TYPE}
						<h1 class="property-price">{PRICE}</h1>
						<div class="property-info">
							<span class="beds">{BEDS}</span><i class="fas fa-circle"></i>
							<span class="baths">{BATHS}</span><i class="fas fa-circle"></i>
							<span class="sqft">{AREA}</span>
						</div>
						<span class="property-address">{ADDRESS}</span>    
					</div>
				</div>
			`;
			this.properties = [];
			this.search_params = {
				address: {
					street_number: "",
					street: "",
					city: "",
					county: "",
					state: "",
					zip: "",
					country: "",
					name: "",
					full: "",
					locale: "",
				},
				listing_types: [ "for_sale", "coming_soon", "new_construction", "open_house", "virtual_tour" ],
				price_min: "",
				price_max: "",
				bedrooms: "",
				bedrooms_exact: false,
				property_types: [ "house", "condo", "land", "manufactured", "town_house" ],
				bathrooms: "",
				area_min: "",
				area_max: "",
				lot_size_min: "",
			//	lot_size_max: "",
				year_min: "",
				year_max: "",
				max_hoa: "",
				days_on_market: "",
				features: "",
				geo_lat: "",
				geo_lng: "",
			};
			this.user_coords = {
				latitude: "",
				longitude: "",
			};
			this.debounce_time = 500;
			this.map_markers = [];
			this.results_per_page = 19;
			this.current_page = 1;
			this.sort_type = "price_high";
			this.enable_search = true;
			this.results_limit = 200;
			this.search_distance = 1609; // 1 mile in kilometers
			this.map_visible = true;
			this.map_node;

			this.init();
		}

		SearchPage.prototype.getJsonFromUrl = function( url = false ) {
			//console.log( "getJsonFromUrl", url );
			let result = {};
			let query = url || location.search.substr( 1 );

			if ( ! query ) {
				return result;
			}

			query.split( "&" ).forEach( function( part ) {
				let item = part.split( "=" );
				result[ item[0] ] = decodeURIComponent( item[1] );
			});

			return result;
		}

		SearchPage.prototype.createPermalink = function() {
			//console.log( "createPermalink" );
			let base_url = location.protocol + '//' + location.host + location.pathname;
			let vals = {};
			for ( prop in this.search_params ) {
				if ( this.search_params[ prop ].length ) {
					console.log( "vals[ " + prop  + " ]", vals[ prop ] );
					vals[ prop ] = this.search_params[ prop ];
				}
				else if ( this.search_params[ prop ] ) {
					let val = {};
					for ( let key in this.search_params[ prop ] ) {
						if ( this.search_params[ prop ][ key ].length ) {
							val[ key ] = this.search_params[ prop ][ key ];
						}
					}
					vals[ prop ] = val;
				}
			}
			return base_url + "?search=" + encodeURIComponent( JSON.stringify( vals ) );
		}

		SearchPage.prototype.updateUrl = function( url ) {
			//console.log( "updateUrl" );
			window.history.replaceState( "", "", url );
		}

		SearchPage.prototype.fillPropertyTemplate = function( property, index ) {
			console.log( "fillPropertyTemplate", property, index );
			let html = this.property_template;
			let bootstrap_columns = {
					XL: ( this.map_visible ) ? 6 : 3,
					LG: ( this.map_visible ) ? 6 : 4,
					MD: ( this.map_visible ) ? 6 : 6,
					SM: ( this.map_visible ) ? 12 : 12,
					DF: ( this.map_visible ) ? 12 : 12,
				};
				html = html.replace( /{BOOTSTRAP_COLUMNS_XL}/g, bootstrap_columns.XL );
				html = html.replace( /{BOOTSTRAP_COLUMNS_LG}/g, bootstrap_columns.LG );
				html = html.replace( /{BOOTSTRAP_COLUMNS_MD}/g, bootstrap_columns.MD );
				html = html.replace( /{BOOTSTRAP_COLUMNS_SM}/g, bootstrap_columns.SM );
				html = html.replace( /{BOOTSTRAP_COLUMNS_DF}/g, bootstrap_columns.DF );
			let tour = property.virtualTourUrl;
			html = html.replace( "{TOUR}", tour );

			let address_full = property.address_full;
			html = html.replace("{ADDR}",address_full);

			let hidden = ( ! property.virtualTourUrl ) ? "hidden" : "show";
			html = html.replace("{HIDDEN}",hidden);

			let mls_id = property.id;
			html = html.replace( "{MLS_ID}", mls_id );
			html = html.replace("{MLS_ID2}",mls_id);

			let postal = property.address_postalCode;
			html = html.replace("{POSTAL}",postal);

			let image = JSON.parse( property.photos )[0] || "";
				html = html.replace( "{IMAGE}", image );
			let time_on_market = property.mls_daysOnMarket || "unknown days";
				// html = html.replace( "{TIME_ON_MARKET}", time_on_market );
			let b = moment(Date.now());
			let a = moment(property.added, 'YYYY-MM-DD');
			let days = b.diff(a, 'days');
			html = html.replace( "{TIME_ON_MARKET}", days );

			let price = new Intl.NumberFormat( "en-US", { style: "currency", currency: "USD" }).format( property.listPrice ).replace( /\.00$/, "" ) || "";
				html = html.replace( "{PRICE}", price );
			let beds = property.property_bedrooms + " beds" || "";
				html = html.replace( "{BEDS}", beds );
			let full_baths = property.property_bathsFull || 0;
			let half_baths = property.property_bathsHalf || 0;
			let baths = ( half_baths ) ? full_baths + "." + half_baths : full_baths;
				baths += ( ! baths ) ? "" : " baths";
				html = html.replace( "{BATHS}", baths );
			let area = property.property_area + " ft²" || "";
				html = html.replace( "{AREA}", area );
			let address = property.address_full + " " + property.address_state + " " + property.address_postalCode;
				html = html.replace( "{ADDRESS}", address );
			let url = "/home-listing/?property=" + address.replace( /[^a-zA-Z0-9]/g, "_" ).replace( /_+/g, "_" ) + "&id=" + property.id;
				html = html.replace( "{URL}", url );
			let sale_type = "";
			// property type switcher for when we figure out how to categorize these

			let property_label = "";
			if ( property.property_subType === "ManufacturedHome" ) {
				property_label = "Manufactured Home";
			} else if ( property.property_subType === "Apartment" ) {
				property_label = "Condo";
			} else if ( property.property_type === "LND" ) {
				property_label = "Land";
			} else if ( property.property_subType === "SingleFamilyResidence" ) {
				property_label = "House";
			} else if ( property.property_subType === "Townhouse" ) {
				property_label = "Town House";
			}

			if ( this.search_params.listing_types.indexOf( "coming_soon" ) !== -1
				|| this.search_params.listing_types.indexOf( "new_construction" ) !== -1
				|| this.search_params.listing_types.indexOf( "open_house" ) !== -1
				|| this.search_params.listing_types.indexOf( "virtual_tour" ) !== -1
			) {
				sale_type = `<span class="sale-type"><i class="dot red"></i>${ property_label } for Sale</span>`;
			}
			else if ( this.search_params.listing_types.indexOf( "foreclosure" ) !== -1 ) {
				sale_type = `<span class="sale-type"><i class="dot blue"></i>${ property_label } Foreclosure</span>`;
			}
			else if ( this.search_params.listing_types.indexOf( "rentals" ) !== -1 ) {
				sale_type = `<span class="sale-type"><i class="dot green"></i>${ property_label } For Rent</span>`;
			}
			else if ( this.search_params.listing_types.indexOf( "sold" ) !== -1 ) {
				sale_type = `<span class="sale-type"><i class="dot orange"></i>${ property_label } Sold</span>`;
			}
			html = html.replace( "{SALE_TYPE}", sale_type );

			html = html.replace( "{INDEX}", index );

			return html;
		};

		SearchPage.prototype.createAddressText = function() {

			return Object.keys( this.search_params.address ).filter( ( key ) => {
				return ( key !== "full" && key !== "locale" && this.search_params.address[ key ].length );
			}).map( ( key ) => {
				return this.search_params.address[ key ];
			}).join( " " );
		};

		SearchPage.prototype.resetSearchOptionsView = function() {
			console.log( "resetSearchOptionsView" );
			let self = this;
			$( "#homes-search-desktop-field" ).val( self.createAddressText() );
			$( "#listingDropdownDesktopMenu .primary-item .parent-checkbox" ).prop( "checked", false );
			$( '#listingDropdownDesktopMenu .sub input[type="checkbox"]' ).prop( "checked", false );
			this.search_params.listing_types.forEach( ( type ) => {
				$( `#listingDropdownDesktopMenu input[type="checkbox"][name="${ type }"]` ).prop( "checked", true );
			});
			$( "#price_min" ).val( this.search_params.price_min );
			$( "#price_max" ).val( this.search_params.price_max );
			$( "#beds_picker .dropdown-item" ).removeClass( "active" ).first().addClass( "active" );
			$( "#bedrooms_exact" ).prop( "checked", this.search_params.bedrooms_exact );
			//$( '#homeTypeDropdownDesktop input[type="checkbox"]' ).prop( "checked", true ).trigger( "change" );
			$( "#area_min" ).val( this.search_params.area_min );
			$( "#area_max" ).val( this.search_params.area_max );
			$( "#lot_size_min" ).val( this.search_params.lot_size_min );
			//$( "#lot_size_max" ).val( this.search_params.lot_size_max );
			$( "#year_built_min" ).val( this.search_params.year_built_min );
			$( "#year_built_max" ).val( this.search_params.year_built_max );
			$( "#max_hoa" ).val( this.search_params.max_hoa );
			$( "#days_on_market" ).val( this.search_params.days_on_market );
			$( "#features" ).val( this.search_params.features );
			$( `#homeTypeDropdownDesktop input[type="checkbox"]` ).prop( "checked", false );
			this.search_params.property_types.forEach( ( type ) => {
				$( `#homeTypeDropdownDesktop input[type="checkbox"][name="${ type }"]` ).prop( "checked", true ).trigger( "change" );
			});
		};

		SearchPage.prototype.resetSearchView = function() {
			console.log( "resetSearchView" );
			$( "#properties .property" ).remove();
			this.clearMapMarkers();
		};

		SearchPage.prototype.getPropertyListingType = function( property ) {
			//console.log( "getPropertyListingType", property );
			return "for_sale";
		};

		SearchPage.prototype.updateSearchView = function( update_zoom = true, highlight_index = false ) {
			console.log( "updateSearchView", this.properties );

			let lat = map.getCenter().lat();
			let lng = map.getCenter().lng();
			let zoom = map.getZoom();
			this.resetSearchView();

			this.properties.filter( ( property, index ) => {
					let min = ( ( this.current_page - 1 ) * this.results_per_page );
					let max = ( this.current_page * this.results_per_page );
					return ( ( index >= min ) && ( index <= max ) );
				})
				.forEach( ( property, index ) => {
					let html = this.fillPropertyTemplate( property, index );
					$( "#properties" ).append( html );
					let color = this.getPropertyColor( this.getPropertyListingType( property ) );
					if ( highlight_index !== false ) {
						this.addMapMarker( property.geo_lat, property.geo_lng, color, property.address_full, this.getPropertyListingType( property ), property.listPrice, true );
					} else {
						this.addMapMarker( property.geo_lat, property.geo_lng, color, property.address_full, this.getPropertyListingType( property ), property.listPrice );
					}
				});

			let city = ( this.properties.length ) ? this.properties[0].address_city : "";
			$( ".city_text" ).text( city );
			let state = ( this.properties.length ) ? this.properties[0].address_state : "";
			$( ".state_text" ).text( state );
			let properties_amount_text = this.properties.length;
			if ( this.properties.length === this.results_limit )
				properties_amount_text += "+";
			$( ".properties_amount_text" ).text( properties_amount_text );
			if ( update_zoom ) {
				this.updateMapBounds( lat, lng, zoom );
			}
			$( "#listing-area" ).animate({ scrollTop: 0 }, 500 );
		};

		SearchPage.prototype.formatSearchParams = function() {
			console.log( "formatSearchParams", this.search_params );
			
			let params = [];

			if ( this.search_params.address ) {

				const address_map = {
					state: "address_state",
					country: "address_country",
					zip: "address_postalCode",
					street: "address_streetName",	
					street_number: "address_streetNumberText",
					city: "address_city",
				};
				//params.push([ "1", "ADDRESS", this.search_params.address ]);
				Object.keys( this.search_params.address )
					.filter( ( key ) => {
						return this.search_params.address[ key ].length && address_map[ key ];
					})
					.forEach( ( key ) => {
						//console.log( "keys", key, this.search_params.address[ key ] )
						let val = this.search_params.address[ key ];
						if ( key === "country" && val === "USA" ) {
							val = "United States";
						}
						params.push( [ address_map[ key ], "LIKE", val ] );
					});
			}

			if ( this.search_params.listing_types ) {
				console.log( "this.search_params.listing_types", this.search_params.listing_types )
				let options = this.search_params.listing_types.map( ( item ) => {

					// for sale
					if ( item === "coming_soon" ) {
						return false; //[ "property_subType", "=", item ];
					}
					else if ( item === "new_construction" ) {
						return [ "remarks", "LIKE", "new construction" ];
					}
					else if ( item === "open_house" ) {
						let compare_string = "OPEN_HOUSE_ONLY";
						this.search_params.listing_types.some( ( param ) => {
							if ( param !== open_house ) {
								compare_string = "OPEN_HOUSE_OTHERS";
								return true;
							}
						});
						return [ "1", compare_string, "" ];
					}
					else if ( item === "virtual_tour" ) {
						return [ "virtualTourUrl", "NOT NULL", "" ];
					}
					// rentals
					else if ( item === "rentals" ) {
						return [ "property_type", "=", "RNT" ];
					}
					// foreclosure
					else if ( item === "foreclosure" ) {
						return [ "remarks", "LIKE", "foreclosure" ];
					}
					// sold
					else if ( item === "sold" ) {
						return [ "mls_status", "=", "Closed" ];
					}

					else {
						return false;
					}

				}).filter( item => item );

				if ( options.length ) {

					let group = {
						group: true,
						comparator: "OR",
						options: options,
					};

					params.push( group );

				}
			}

			if ( this.search_params.price_min )
				params.push([ "listPrice", ">=", this.search_params.price_min ]);

			if ( this.search_params.price_max )
				params.push([ "listPrice", "<=", this.search_params.price_max ]);

			if ( this.search_params.bedrooms ) {
				let comparator = ( this.search_params.bedrooms_exact ) ? "=" : ">=";
				params.push([ "property_bedrooms", comparator, this.search_params.bedrooms ]);
			}

			if ( this.search_params.property_types ) {
				let options = this.search_params.property_types.map( ( item ) => {
					let type = "property_subType";
					if ( item === "house" )
						item = "SingleFamilyResidence";
					else if ( item === "condo" )
						item = "Apartment";
					else if ( item === "land" ) {
						type = "property_type";
						item = "LND";
					}
					else if ( item === "manufactured" )
						item = "ManufacturedHome";
					else if ( item === "town_house" )
						item = "Townhouse";
					else
						item = "";
					return ( item ) ? [ type, "=", item ] : false ;
				}).filter( item => item );
				let group = {
					group: true,
					comparator: "OR",
					options: options,
				};
				params.push( group );
			}

			if ( this.search_params.bathrooms )
				params.push([ "property_bathrooms", ">=", this.search_params.bathrooms ]);

			if ( this.search_params.area_min )
				params.push([ "property_area", ">=", this.search_params.area_min ]);

			if ( this.search_params.area_max )
				params.push([ "property_area", "<=", this.search_params.area_max ]);

			if ( this.search_params.lot_size_min )
				params.push([ "property_lotSizeArea", ">=", this.search_params.lot_size_min ]);
/*
			if ( this.search_params.lot_size_max )
				params.push([ "property_lotSizeArea", "<=", this.search_params.lot_size_max ]);
*/
			if ( this.search_params.year_min )
				params.push([ "property_yearBuilt", ">=", this.search_params.year_min ]);

			if ( this.search_params.year_max )
				params.push([ "property_yearBuilt", "<=", this.search_params.year_max ]);

			if ( this.search_params.max_hoa )
				params.push([ "association_fee", "<=", this.search_params.max_hoa ]);

			if ( this.search_params.days_on_market ) {
				let days = this.search_params.days_on_market;
				console.log( "days", days )
				console.log( "moment( new Date() ).subtract( days, 'days' ) ]).format( 'YYYY-MM-DD HH:mm:ss' )", moment( new Date() ).subtract( days, "days" ).format( "YYYY-MM-DD HH:mm:ss" ) )
				params.push([ "added", ">=", moment( new Date() ).subtract( days, "days" ).format( "YYYY-MM-DD HH:mm:ss" ) ]);
			}

			if ( this.search_params.features ) {
				this.search_params.features.split( /\s?,\s?/ ).forEach( ( feature ) => {
					if ( /pool/i.test( feature ) ) {
						params.push([ "property_pool", "LIKE", "POOL" ]);
						params.push([ "property_pool", "NOT LIKE", "NO POOL" ]);
					}
					else if ( /golf/i.test( feature ) )
						params.push([ "property_lotDescription", "LIKE", "golf" ]);
					else
						params.push([ "1", "FEATURES", feature ]);
				});
			}

			if ( this.search_params.geo_lat && this.search_params.geo_lng )
				params.push([ "1", "GEO", [ this.search_params.geo_lat, this.search_params.geo_lng, this.search_distance ].join( "," ) ]);

			return params;
		};

		SearchPage.prototype.parsePropertiesData = function( properties ) {
			return properties.map( ( property ) => {
				return property;
			});
		};

		SearchPage.prototype.getSearchResults = function() {
			console.log( "getSearchResults" );
			
			return new Promise( ( resolve, reject ) => {

				$.ajax({
					type: "POST",
					url: this.search_endpoint,
					data: {
						q: this.formatSearchParams(),
						sort: this.sort_type,
						limit: this.results_limit,
					},
					success: ( response ) => {
						this.properties = this.parsePropertiesData( response.data );
						return resolve();
					},
					error: ( error ) => {
						console.log( "error", error );
						return reject();
					},
					dataType: "json",
				});
			});

		};

		SearchPage.prototype.getlistingTypeVals = function() {

			let vals = [];
			$( '#listingDropdownDesktopMenu input[type="checkbox"]' ).each( function(){

				let el = $(this);

				let check_state = ( el.prop( "checked" ) ) ? true : false;
				if ( ! check_state ) {
					return;
				}

				if ( el.hasClass( "parent-checkbox" ) ) {
					if ( el.hasClass( "is_value" ) ) {
						vals.push( el.attr( "name" ) );
					}
				}
				else {
					vals.push( el.attr( "name" ) );
				}
			});

			return vals;
		};

		SearchPage.prototype.changeListingCategoryView = function( parent_input ) {
			console.log( "changeListingCategoryView", parent_input )

			$( "#listingDropdownDesktopMenu .primary-item .parent-checkbox" ).each( function(){
				let parent = $(this);
				if ( parent.is( parent_input ) ) {
					parent.prop( "checked", true );
					return;
				}
				parent.prop( "checked", false );
				parent.parent().parent().find( `.subtypes[data-parent="${ parent.attr( "name" ) }"] input[type="checkbox"]` ).prop( "checked", false );
			});

		};

		SearchPage.prototype.updateAddressDropdown = function( show = true, predictions = [] ) {
			console.log( "updateAddressDropdown", predictions )

			if ( show === false ) {
				$( "#home_search_dropdown" ).slideUp();
				return;
			}

			let input_el = $( ".search-desktop-field" );
			let x = input_el.offset().left;
			let y = ( input_el.offset().top + input_el.outerHeight() );
			let width = input_el.outerWidth();

			let parent = $( "#home_search_dropdown .items" );
				parent.html( "" );
			predictions.forEach( ( prediction ) => {

				console.log( "prediction", prediction )
				let parts = this.parseGoogleAutocompletePlace( prediction );
				console.log( "parts", parts )

				parent.append( `
					<div class="item"
						data-street_number="${ parts.street_number || "" }"
						data-street="${ parts.street || "" }"
						data-city="${ parts.city || "" }"
						data-county="${ parts.county || "" }"
						data-state="${ parts.state || "" }"
						data-zip="${ parts.zip || "" }"
						data-country="${ parts.country || "" }"
						data-name="${ parts.name || "" }">
						<div class="main_text">${ parts.address_full || "" }</div>
						<div class="sub_text">${ parts.address_locale || "" }</div>
					</div>
				` );
			});

			$( "#home_search_dropdown" )
				.css({
					top: y,
					left: x,
					width: width,
				})
				.slideDown();

		};

		SearchPage.prototype.parseGoogleAutocompletePlace = function( prediction ) {
			console.log( "parseGoogleAutocompletePlace", prediction )

			if ( typeof prediction.types === "undefined" ) {
				return false;
			}

			let maps = {
				street_address: [
					"street_number",
					"street",
					"city",
					"state",
				],
				postal_code: [
					"city",
					"state",
					"zip",
					"country",
				],
				route: [
					"street",
					"city",
					"state",
					"country",
				],
				establishment: [
					"name",
					"street",
					"city",
					"state",
					"country",
				],
				establishment_b: [
					"name",
					"city",
					"state",
					"country",
				],
				locality: [
					"city",
					"state",
					"country",
				],
				administrative_area_level_1: [
					"state_full",
					"country",
				],
				administrative_area_level_2: [
					"county",
					"state",
					"country",
				],
				natural_feature: [
					"name",
					"state",
					"country",
				],
			};

			let data = {
				address_full: prediction.structured_formatting.main_text,
				address_locale: prediction.structured_formatting.secondary_text,
			};

			let identifiers = [];
			for ( let prop in maps ) {
				if ( prediction.types.includes( prop ) === true ) {
					identifiers.push( prop );
				}
			}

			if ( ! identifiers.length )
				return false;

			console.log( "identifiers", identifiers )

			identifiers.some( ( identifier ) => {

				let map = maps[ identifier ];
				let mapped = {};
				console.log( "map", map )
				console.log( "prediction.terms", prediction.terms )
				try {
					map.forEach( ( val, index ) => {
						console.log( "index", index )
						mapped[ val ] = prediction.terms[ index ].value;
					});
				} catch ( error ) {
					identifier = identifier + "_b";
					console.log( "new_identifier", identifier )
					if ( error.toString() === "TypeError: prediction.terms[index] is undefined" && typeof maps[ identifier ] !== "undefined" ) {
						try {
							map = maps[ identifier ];
							mapped = {};
							map.forEach( ( val, index ) => {
								console.log( "index", index )
								mapped[ val ] = prediction.terms[ index ].value;
							});
						} catch ( error ) {
							return false;
						}
					}
					else {
						return false;
					}
				}

				data = { ...data, ...mapped };

				return true;
			});

			return data;

		};

		SearchPage.prototype.handleAutocomplete = function( predictions, status ) {

			if ( status != google.maps.places.PlacesServiceStatus.OK ) {
				console.error( "Autocomplete Fail:", status );
				return;
			}
			
			this.updateAddressDropdown( true, predictions );

		}

		SearchPage.prototype.initTriggers = function() {
			console.log( "initTriggers" );
			let self = this;

			// address
			$( "#homes-search-desktop-field" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val();
				//self.search_params.address = val;
				self.search();
				if ( val.length <= 3 ) {
					return;
				}
				if ( $( "#homes-search-desktop-field" ).is( ":focus" ) ) {
					autocompleteService.getQueryPredictions( {
						input: val,
						location: new google.maps.LatLng( parseFloat( default_geo.latitude ), parseFloat( default_geo.longitude ) ),
						radius: 10000,
					}, self.handleAutocomplete.bind( self ) );
				}
			}) );

			// address
			$( "#homes-search-desktop-field" ).on( "blur", function() {
				self.updateAddressDropdown( false );
			});

			// autocomplete click
			$( "#home_search_dropdown .items" ).on( "click", ".item", function(){
				let el = $(this);

				let address = {
					street_number: el.attr( "data-street_number" ),
					street: el.attr( "data-street" ),
					city: el.attr( "data-city" ),
					county: el.attr( "data-county" ),
					state: el.attr( "data-state" ),
					zip: el.attr( "data-zip" ),
					country: el.attr( "data-country" ),
					name: el.attr( "data-name" ),
					full: el.find( ".main_text" ).text(),
					locale: el.find( ".sub_text" ).text(),
				};

				$( "#homes-search-desktop-field" ).val( self.createAddressText() ).trigger( "change" ).blur();

				self.search_params.address = address;
			});

			// listing_types group
			$( "#listingDropdownDesktopMenu .primary-item .parent-checkbox" ).on( "change", function(){
				console.log( "listingDropdownDesktopMenu group" );
				let el = $(this);
				let check_state = ( el.prop( "checked" ) ) ? true : false;
				el.parent().parent().find( `.subtypes[data-parent="${ el.attr( "name" ) }"] input[type="checkbox"]` ).prop( "checked", check_state );

				// if checked, uncheck all other parent categories
				if ( check_state ) {
					self.changeListingCategoryView( el );
				}

				self.search_params.listing_types = self.getlistingTypeVals();
				self.search();
			});

			// listing_types single
			$( "#listingDropdownDesktopMenu .subtypes .sub input" ).on( "change", function(){
				console.log( "listingDropdownDesktopMenu single" );
				let el = $(this);
				if ( el.prop( "checked" ) ) {
					self.changeListingCategoryView( el.parent().parent().parent().find( `.parent-checkbox[name="${ el.parent().parent().attr( "data-parent" ) }"]` ) );
				}
				self.search_params.listing_types = self.getlistingTypeVals();
				self.search();
			});

			// bathrooms fuzzy
			$( "#baths" ).on( "change", function(){
				let val = $(this).val() || null;
				self.search_params.bathrooms = parseInt( val, 10 );
				self.search();
			});

			// price_min
			$( "#price_min" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.price_min = parseInt( val.replace( /,/g, "" ), 10 );
				self.search();
			}) );

			// price_max
			$( "#price_max" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.price_max = parseInt( val.replace( /,/g, "" ), 10 );
				self.search();
			}) );

			// bedrooms
			$( "#beds_picker" ).on( "click", "a.ignore_defaults", function(){
				let el = $(this);
				let val = el.attr( "data-value" ) || null;
				$( "#beds_picker a" ).removeClass( "active" );
				el.addClass( "active" );
				self.search_params.bedrooms = parseInt( val, 10 );
				self.search();
			});

			// bedrooms exact
			$( "#bedrooms_exact" ).on( "change", function(){
				self.search_params.bedrooms_exact = ( $(this).prop( "checked" ) ) ? true : false;
			});

			// property_types
			$( "#homeTypeDropdownDesktop input" ).on( "change", function(){

				self.search_params.property_types = [];

				$( "#homeTypeDropdownDesktop input:checked" ).each( function(){
					let el = $(this);
					let type = el.attr( "name" );
					self.search_params.property_types.push( type );
				});

				$( "#home_type_count" ).text( self.search_params.property_types.length );

				self.search();
			});

			// bathrooms
			$( "#beds_picker" ).on( "change", function(){
				let val = $(this).attr( "data-value" ) || null;
				self.search_params.bathrooms = parseInt( val, 10 );
				self.search();
			});

			// area_min
			$( "#area_min" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.area_min = parseInt( val, 10 );
				self.search();
			}) );

			// area_max
			$( "#area_max" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.area_max = parseInt( val, 10 );
				self.search();
			}) );

			// lot_size_min
			$( "#lot_size_min" ).on( "change", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.lot_size_min = parseInt( val, 10 );
				self.search();
			}) );

			// lot_size_max
			/*
			$( "#lot_size_max" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.lot_size_max = parseInt( val, 10 );
				self.search();
			}) );
			*/
			// lot_size
			$( "#lot_size" ).on( "change", function(){
				let val = $(this).attr( "data-value" ) || null;
				self.search_params.lot_size = parseInt( val, 10 );
				self.search();
			});

			// year_min
			$( "#year_min" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.year_min = val;
				self.search();
			}) );

			// year_max
			$( "#year_max" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.year_max = val;
				self.search();
			}) );

			// lot_size
			$( "#max_hoa" ).on( "change", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.max_hoa = parseInt( val.replace( /,/g, "" ), 10 );
				self.search();
			}) );

			// lot_size
			$( "#days_on_market" ).on( "change", function(){
				let val = $(this).val() || null;
				self.search_params.days_on_market = parseInt( val, 10 );
				self.search();
			});

			// features
			$( "#features" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.features = val;
				self.search();
			}) );

			// pagination
			$( "#pagination" ).on( "click", "li", function() {
				let page = $(this).attr( "data-page" );
				if ( page === "next" )
					page = ( self.current_page + 1 );
				self.changePage( page );
			});

			// sort_type
			$( "#sort_types" ).on( "click", "a", function() {
				let el = $(this);
				$( "#sort_types a" ).removeClass( "active" );
				el.addClass( "active" );
				$( "#sort_type_button" ).text( el.text() );
				self.sort_type = el.attr( "data-value" );
				self.search();
			});

			// property hover
			$( "#properties" ).on( "mouseover", ".property", function(){

				let el = $(this);
				let search_index = el.attr( "data-index" );

				let marker = self.map_markers[ search_index ];
				let min = ( ( self.current_page - 1 ) * self.results_per_page );
				let max = ( self.current_page * self.results_per_page );

				let property = self.properties.filter( ( property, index ) => {
					return ( ( index >= min ) && ( index <= max ) );
				})[ search_index ];

				let color = self.getPropertyColor( self.getPropertyListingType( property ) );
				marker.setIcon( self.createMarkerIcon( color, property.listPrice, true ) );
				marker.setZIndex( 100 );
			});

			// property unhover
			$( "#properties" ).on( "mouseout", ".property", function(){
				let el = $(this);
				let search_index = el.attr( "data-index" );
				let marker = self.map_markers[ search_index ];
				let min = ( ( self.current_page - 1 ) * self.results_per_page );
				let max = ( self.current_page * self.results_per_page );
				let property = self.properties.filter( ( property, index ) => {
					return ( ( index >= min ) && ( index <= max ) );
				})[ search_index ];
				let color = self.getPropertyColor( self.getPropertyListingType( property ) );
				marker.setIcon( self.createMarkerIcon( color, property.listPrice ) );
				marker.setZIndex( 0 );
			});

			// property click
			$( "#properties" ).on( "click", ".property", function(){
				let el = $(this);
				let url = el.attr( "data-url" );
				//window.location.href = url;
			});
			//
			$(document).ready(function(){
				let overlay = <?= $overlay; ?>;
				let property_id = <?= $property_id; ?>;
				
				if (overlay == 1){
					vm.loadMLS(property_id);
					let zip = vm.mls.address_postalCode;
					vm.loadAgent(zip);					
					$( ".modal" ).toggleClass( "is-visible" );
					$( "body" ).toggleClass( "noscroll" );
				}
			});
			// toggle modal
			$( "body" ).on( "click", ".modal-toggle", function(){
				mls_url = $(this).attr('data-url');
				modal_heading = $(this).attr('data-addr');
				mls_id = $(this).attr('mls-id');
				zip_code = $(this).attr('postal');
				vm.loadMLS(mls_id);
				vm.loadAgent(zip_code);
				new_url = 'http://l8u.9b2.myftpupload.com'+mls_url;
				$("#modal-preview").attr('src',new_url);
				// alert(mls_url);
				// setTimeout(function(){ 
					$( ".modal" ).toggleClass( "is-visible" );
					$( "body" ).toggleClass( "noscroll" );
				// }, 1000);
				// $(".modal-heading").html(modal_heading);
			});

			$("body").on("click",".modal-overlay",function(){
				$( ".modal" ).removeClass( "is-visible" );
				$( "body" ).removeClass( "noscroll" );
				$("#modal-preview").attr('src','');
			});

			$("body").on("click",".modal-close",function(e){
				e.stopPropagation();
				$( ".modal" ).removeClass( "is-visible" );
				$( "body" ).removeClass( "noscroll" );
				$("#modal-preview").attr('src','');
			});

			$("body").on("click",".modal-close2",function(){
				$( ".modal" ).removeClass( "is-visible" );
				$( "body" ).removeClass( "noscroll" );
				$("#modal-preview").attr('src','');
			});

			// browser geolocation
			$( ".geo_trigger" ).click( function(){
				let el = $(this);
				if ( ! self.user_coords.latitude ) {
					self.updateGeoFromBrowser();
				}
			})

			// toggle map
			$( "#toggle_map" ).click( function(){
				let el = $( this );
				let toggle_text = "List";
				if ( self.map_visible ) {
					$( "#map-area" ).hide();
					map_el = $( "#map-area" ).detach();
					toggle_text = "Map";
					$( "#listing-area" ).removeClass( "col-xl-6 col-lg-6 col-md-6" ).addClass( "col-xl-12 col-lg-12 col-md-12" );
				}
				else {
					$( "#main_content" ).prepend( map_el );
					map_el = null;
					$( "#listing-area" ).removeClass( "col-xl-12 col-lg-12 col-md-12" ).addClass( "col-xl-6 col-lg-6 col-md-6" );
				}
				el.text( toggle_text );
				self.map_visible = ( ! self.map_visible );
				self.updateSearchView();
			});

		};

		SearchPage.prototype.updateGeoFromBrowser = function() {
			console.log( "updateGeoFromBrowser" );

			navigator.geolocation.getCurrentPosition( ( position ) => {
				this.user_coords.latitude = position.coords.latitude;
				this.user_coords.longitude = position.coords.longitude;
				this.search_params.geo_lat = position.coords.latitude;
				this.search_params.geo_lng = position.coords.longitude;

				this.search();
			});
		};

		SearchPage.prototype.search = function() {
			console.log( "search" );

			this.updateUrl( this.createPermalink() );

			if ( ! this.enable_search ) {
				return new Promise( ( resolve, reject ) => {
					return resolve();
				});
			}
			else {
				return new Promise( ( resolve, reject ) => {
					this.getSearchResults()
						.then( () => {
							this.updateSearchView();
							this.current_page = 1;
							this.updatePaginationView();
							return resolve();
						});
				});
			}
		};

		SearchPage.prototype.init = function() {
			console.log( "init" );

			this.search_params.address.city = "Phoenix";

			let url_params = this.getJsonFromUrl();
			console.log( "url_params", url_params )
			try {
				if ( url_params.search ) {
					let data = JSON.parse( url_params.search );
					console.log( "data", data )
					this.search_params = { ...this.search_params, ...data };
				}
			} catch ( error ) {}

			console.log( "search_params", this.search_params )

			this.enable_search = false;
			this.initTriggers();
			this.resetSearchOptionsView();
			this.enable_search = true;
			this.search()
				.then( () => {
					this.updatePaginationView();
				});

			// hide geo buttons if browser doesn not support it
			if ( ! navigator.geolocation ) {
				$( ".geo_trigger" ).hide();
			}
		};

		SearchPage.prototype.createMarkerIcon = function( background, price = null, highlight = false ) {

			let canvas, context;
			let scale = window.devicePixelRatio;
			let iconScale = 1;
			if ( highlight ) {
				scale = scale * 1.5;
				iconScale = 1.5;
			}

			let width = 50;
			let height = 60;

			canvas = document.getElementById( "icon_canvas" );
			context = canvas.getContext( "2d" );

			// highlight
			if ( highlight ) {
				context.filter = "blur( 20px )";
				context.fillStyle = "rgb( 0,172,237 )";
				context.fillRect( 15 * scale, 15 * scale, 35 * scale, 45 * scale );
				context.filter = "blur( 0px )";
			}

			canvas.width = width * scale;
			canvas.height = height * scale;
			context.clearRect( 0, 0, canvas.width, canvas.height );

			// circle
			context.beginPath();
			context.arc( 25 * scale, 25 * scale, 8 * scale, 0 * scale, ( 2 * Math.PI ) );
			context.stroke();
			context.strokeStyle = "rgb( 255,255,255 )";
			context.lineWidth = 3 * scale;
			context.fillStyle = background;
			context.shadowColor = "rgba( 0,0,0, 0.3 )";
			context.shadowBlur = 8 * scale;
			context.shadowOffsetX = 2 * scale;
			context.shadowOffsetY = 2 * scale;
			context.fill();
			context.stroke();
			context.shadowBlur = 0;
			context.shadowColor = "transparent";

			if ( price ) {

				// text box
				context.fillStyle = "white";
				context.shadowColor = "rgba( 0,0,0, 0.3 )";
				context.shadowBlur = 8 * scale;
				context.shadowOffsetX = 2 * scale;
				context.shadowOffsetY = 2 * scale;
				context.fillRect( 5 * scale, 37 * scale, 44 * scale, 18 * scale );
				context.shadowBlur = 0;
				context.shadowColor = "transparent";

				let price_text = ( parseInt( price ) / 1000 );
				if ( price_text >= 1000 ) {
					price_text = ( price_text / 1000 ).toFixed( 2 ) + "m";
				}
				else {
					price_text = price_text.toFixed( 0 );
					price_text += "k";
				}

				// text
				context.font = "bold " + ( 12 * scale ) + "px Arial";
				context.fillStyle = "black";
				context.textAlign = "center";
				context.fillText( price_text, 27 * scale, 50 * scale );
			}

			let size1 = new google.maps.Size( width * scale, height * scale );
			let origin = new google.maps.Point( 0, 0 );
			let anchor = new google.maps.Point( ( width / 2 ) * iconScale, ( height / 2 ) * iconScale );
			let size2 = new google.maps.Size( width * iconScale, height * iconScale );

			return new google.maps.MarkerImage( canvas.toDataURL(), size1, origin, anchor, size2 );
		}

		SearchPage.prototype.getPropertyColor = function( listing_type ) {
			//console.log( "getPropertyColor", listing_type );

			let color = "black";
			if ( listing_type === "for_sale" )
				color = "red";
			if ( listing_type === "foreclosure" )
				color = "blue";
			if ( listing_type === "last_call" )
				color = "green";
			if ( listing_type === "sold" )
				color = "yellow";

			return color;
		};

		SearchPage.prototype.createMapMarker = function( latitude, longitude, color = "", title = "", listing_type = "for_sale", price = null, highlight = false ) {
			//console.log( "createMapMarker", latitude, longitude, title, listing_type, price, highlight );

			let icon = this.createMarkerIcon( color, price, highlight );

			return new google.maps.Marker({
				position: { lat: parseFloat( latitude ), lng: parseFloat( longitude ) },
				map: map,
				title: title,
				icon: icon,
				flat: true,
			});
		};

		SearchPage.prototype.addMapMarker = function( latitude, longitude, color = "", title = "", listing_type = "for_sale", price = null, highlight = false ) {
			//console.log( "addMapMarker", latitude, longitude, title, listing_type, price, highlight );

			let marker = this.createMapMarker( latitude, longitude, color, title, listing_type, price, highlight );

			this.map_markers.push( marker );
		};

		SearchPage.prototype.clearMapMarkers = function() {
			//console.log( "clearMapMarkers", this.map_markers );

			this.map_markers.forEach( ( marker ) => {
				marker.setMap( null );
			});
			this.map_markers = [];
		};

		SearchPage.prototype.spliceSingleMapMarker = function( search_index ) {
			//console.log( "spliceSingleMapMarker", search_index );

			let marker = this.map_markers.filter( ( marker, index ) => {
				return ( index === search_index );
			});

			this.map_markers = this.map_markers.filter( ( marker, index ) => {
				return ( index != search_index );
			});

			return marker;
		};

		SearchPage.prototype.updateMapBounds = function( lat = 32, lng = -112, zoom = 1 ) {
			//console.log( "updateMapBounds", this.map_markers );

			if ( ! this.map_markers.length ) {
				map.setZoom( zoom );
				map.setCenter({ lat: lat, lng: lng });
				return;
			}

			let bounds = new google.maps.LatLngBounds();
			this.map_markers.forEach( ( marker ) => {
				bounds.extend( marker.position );
			});

			map.fitBounds( bounds );
		};

		SearchPage.prototype.clearPaginationView = function() {
			//console.log( "clearPaginationView" );

			$( "#pagination .page-item:not( .ignore )" ).remove();
			$( "#pagination .page-item.ignore" ).css({
				"display": "none",
			});
		};

		SearchPage.prototype.updatePaginationView = function() {
			//console.log( "updatePaginationView" );

			this.clearPaginationView();

			if ( this.properties.length ) {
				$( "#pagination .page-item.ignore" ).css({
					"display": "inline-block",
				});
			}

			for ( let i = 1; i <= Math.ceil( this.properties.length / this.results_per_page ); i++ ) {
				let classes = ( i === 1 ) ? "page-item active" : "page-item"; 
				$( "#pagination li" ).last().before( `<li class="${ classes }" data-page="${ i }"><a class="page-link">${ i }</a></li>` );
			}
		};

		SearchPage.prototype.changePage = function( page ) {
			//.log( "changePage", page );

			$( "#pagination li.active" ).removeClass( "active" );
			$( `#pagination li[data-page="${ page }"]` ).addClass( "active" );

			this.current_page = page;
			this.updateSearchView();
		};

/*
		function GoogleMapsAutocomplete() {

			this.autocomplete;
			this.componentForm = {
				street_number: "short_name",
				route: "long_name",
				locality: "long_name",
				administrative_area_level_1: "short_name",
				country: "long_name",
				postal_code: "short_name",
			};
			this.selectHandler;
			this.allow_geo = false;
			this.geo;

			this.init();
		}

		GoogleMapsAutocomplete.prototype.init = function() {

			// Create the autocomplete object, restricting the search to geographical
			// location types.
			this.autocomplete = new google.maps.places.Autocomplete(
				( document.getElementById( "homes-search-desktop-field" ) ),
				{ types: [ "geocode" ] }
			);

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			this.autocomplete.addListener( "place_changed", () => {
				let place = this.autocomplete.getPlace();
				this.selectHandler( place );
			});

		};

		// Bias the autocomplete object to the user's geographical location,
		// as supplied by the browser's navigator.geolocation object.
		GoogleMapsAutocomplete.prototype.geolocate = function() {

			if ( this.allow_geo && navigator.geolocation ) {

				navigator.geolocation.getCurrentPosition( ( position ) => {

					this.setGeo( position.coords );

				});
			}
		};


		GoogleMapsAutocomplete.prototype.registerSelectHandler = function( handler ) {

			this.selectHandler = handler;
		};

		GoogleMapsAutocomplete.prototype.configureGeo = function( allow = true, element = null, event = null, geo = null ) {

			let self = this;

			// manual geo
			if ( geo ) {

				self.geo = {
					latitude: parseFloat( geo.latitude ),
					longitude: parseFloat( geo.longitude ),
					accuracy: geo.accuracy,
				};

				let geolocation = {
					lat: self.geo.latitude,
					lng: self.geo.longitude
				};
				
				let circle = new google.maps.Circle({
					center: geolocation,
					radius: self.geo.accuracy,
				});

				self.autocomplete.setBounds( circle.getBounds() );

			}

			// browser geo
			if ( allow ) {

				self.allow_geo = allow;

				if ( self.allow_geo ) {
					$( element ).on( event, function(){
						self.geolocate();
					});
				}
			}
		};
*/


	//})(jQuery);

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaSZpfZpwVHh1sc7hV0FOLf7c96sInpsI&callback=initMap&libraries=places"></script>
<script>

		let default_geo = {
			latitude: 33.45,
			longitude: -112.065,
		};

		let map;
		let autocompleteService;
		function initMap() {

			map = new google.maps.Map( $( "#map-area .map-wrapper" ).get( 0 ), {
				zoom: 9,
				center: {
					lat: parseFloat( default_geo.latitude ),
					lng: parseFloat( default_geo.longitude ),
				},
			});

			autocompleteService = new google.maps.places.AutocompleteService();
		}

		initMap();

		let a;
		try {
			a = new SearchPage();
		} catch( e ) {
			console.error( e );
		}

</script>


</body>
</html>