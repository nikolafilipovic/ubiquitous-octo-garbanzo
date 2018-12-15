<?php /* Template Name: List Homes Dev */

get_header( nomenu );

function getPropertyDetails( $id ) {
	$url = "https://portal.theoffercompany.com/api/getProperty.php?id=" . urlencode( $id );
	try {
		set_error_handler(
			create_function(
				'$severity, $message, $file, $line',
				'throw new ErrorException($message, $severity, $severity, $file, $line);'
			)
		);

		$error = NULL;
		try {
			$json = @file_get_contents( $url );
		}
		catch ( Exception $err ) {
			$error = $err;
		}

		restore_error_handler();
		$data = json_decode( $json );
		return $data;
	} catch ( Exception $error ) {
	   return FALSE;
	}
}

$property_id = ( ! empty( $_GET["id"] ) ) ? $_GET["id"] : FALSE;

if ( $property_id ) {
	$data = getPropertyDetails( $property_id );
	if ( empty( $data->success ) || ! empty( $data->error ) ) {
		throw new Exception( "Error: " . $data->error );
	}
	$property = $data->data;
}

/*

stdClass Object
(
    [id] => 20626
    [privateRemarks] => 
    [property_roof] => Foam
    [property_cooling] => Refrigeration
    [property_style] => 
    [property_area] => 12628
    [property_bathsFull] => 9
    [property_bathsHalf] => 
    [property_stories] => 3
    [property_fireplaces] => 
    [property_flooring] => Carpet,Tile,Stone
    [property_heating] => Electric Heat
    [property_bathrooms] => 9
    [property_foundation] => 
    [property_laundryFeatures] => Dryer Included,Washer Included,Inside Laundry
    [property_occupantName] => 
    [property_ownerName] => 
    [property_lotDescription] => City Light View(s),North/South Exposure,Mountain View(s)
    [property_pool] => Heated Pool,Pool - Private
    [property_subType] => SingleFamilyResidence
    [property_bedrooms] => 6
    [property_interiorFeatures] => 
    [property_lotSize] => 2 - 4.9 Acres
    [property_areaSource] => Owner
    [property_maintenanceExpense] => 
    [property_additionalRooms] => 
    [property_exteriorFeatures] => Balcony/Deck(s),Separate Guest House,Sport Court(s),Pvt Yrd(s)/Crtyrd(s),Patio,Covered Patio(s)
    [property_water] => 
    [property_view] => 
    [property_lotSizeArea] => 94482
    [property_subdivision] => Copeland Hill 2
    [property_construction] => Block
    [property_parking_leased] => 
    [property_parking_spaces] => 6
    [property_parking_description] => Attch'd Gar Cabinets,Gated Parking,Dir Entry frm Garage,Electric Door Opener
    [property_lotSizeAreaUnits] => 
    [property_type] => RES
    [property_garageSpaces] => 6
    [property_bathsThreeQuarter] => 
    [property_accessibility] => 
    [property_acres] => 
    [property_occupantType] => 
    [property_subTypeText] => Single Family - Detached
    [property_yearBuilt] => 1983
    [mlsId] => 56644185
    [terms] => 
    [showingInstructions] => 
    [office_contact_email] => 
    [office_contact_office] => (480) 287-5200
    [office_contact_cell] => 
    [office_name] => Russ Lyon Sotheby's International Realty
    [office_servingName] => Russ Lyon Sotheby's International Realty
    [office_brokerid] => lyon19
    [leaseTerm] => 
    [disclaimer] => 
    [address_crossStreet] => Camelback and 56th Street
    [address_state] => AZ
    [address_country] => United States
    [address_postalCode] => 85018
    [address_streetName] => E VALLE VISTA Road
    [address_streetNumberText] => 5400
    [address_city] => Phoenix
    [address_streetNumber] => 5400
    [address_full] => 5400 E VALLE VISTA Road #5
    [address_unit] => 5
    [agreement] => Cash,1031 Exchange,Conventional
    [listDate] => 
    [agent_lastName] => Walsh
    [agent_firstName] => Marta
    [agent_id] => mw015
    [agent_contact_email] => 
    [agent_contact_office] => 
    [agent_contact_cell] => 
    [modified] => 2018-11-26 03:47:01
    [school_middleSchool] => Ingleside Middle School
    [school_highSchool] => Arcadia High School
    [school_elementarySchool] => Hopi Elementary School
    [school_district] => 048 - Scottsdale Unified District
    [photos] => ["http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195041595663000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195912221435000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195015890644000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195004556697000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195008404004000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031204743570080000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194901451954000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194434738670000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194559171333000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194554414525000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194628276736000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194702371146000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194658372727000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194644131691000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194640029995000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194727780400000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194720084499000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194731598613000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194711430749000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194654150647000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194752263274000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194748268677000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194521045642000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194538676400000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194456814337000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194504800176000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194509360576000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194616297090000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194405685966000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194400988296000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194326625342000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194347997649000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194334774916000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194330529714000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194242727889000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194310798285000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194317890067000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195026880482000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031204711969159000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194819269880000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195032291464000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195021839042000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194938878887000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194914451167000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194919149787000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195124901685000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195109947367000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031204419832997000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195937250411000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195923628719000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195858100741000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195827944975000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195950545406000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195724841942000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194849395356000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195743095791000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031204347947892000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031195753735343000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031204617604084000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194910415332000000-o.jpg","http:\/\/cdn.photos.sparkplatform.com\/az\/20181031194814747628000000-o.jpg"]
    [listPrice] => 4999000
    [listingId] => 5850573
    [mls_status] => Active
    [mls_area] => 12628
    [mls_daysOnMarket] => 
    [mls_originatingSystemName] => 
    [mls_statusText] => Active
    [mls_areaMinor] => 
    [geo_county] => Maricopa
    [geo_lat] => 33.51033200
    [geo_lng] => -111.96261600
    [geo_marketArea] => 12628
    [geo_directions] => North on 56th St. West on Wonderview Rd. Take right on Valle Vista Rd to gate, 2nd home to right. GPS may not take you to the gate.
    [tax_taxYear] => 2018
    [tax_taxAnnualAmount] => 25765
    [tax_id] => 172-50-027-Q
    [coAgent] => 
    [leaseType] => 
    [virtualTourUrl] => https://player.vimeo.com/video/298003934
    [remarks] => Certain homes just take your breath away. This one has it all. Right at the top of Camelback mountain the views are the very best in all of the Valley. Timeless contemporary architecture. The master suite has a upper level observatory room/meditation room surrounded by stunning views from every direction. Entertaining space featuring game room, restaurant style sunken bar & movie screening area. Office and conference room. 6 car garage. Professional standard Gym with locker room. Lighted Sports Court. Heated Pool & Spa. 2 separate guest casitas. Gated enclave of one of a kind view properties on the south slope of the Camelback mountain, and also privately gated motor court. These Camelback mountain estates rarely come on to the market!
    [association_fee] => 800
    [association_name] => Vista Grande 1
    [association_amenities] => Common Area Maint
    [coAgent_lastName] => Walsh
    [coAgent_contact_email] => 
    [coAgent_contact_office] => 
    [coAgent_contact_cell] => 
    [coAgent_firstName] => Matt
    [coAgent_id] => mw432
    [sales_closeDate] => 
    [sales_office_contact] => 
    [sales_office_name] => 
    [sales_office_servingName] => 
    [sales_office_brokerid] => 
    [sales_closePrice] => 
    [sales_agent_lastName] => 
    [sales_agent_contact] => 
    [sales_agent_firstName] => 
    [sales_agent_id] => 
    [sales_contractDate] => 
    [status] => 
    [added] => 2018-11-28 21:45:05
    [updated] => 2018-11-28 21:45:05
)

*/

?>
<div class="lh-wrapper">
	<div class="container-fluid override-fluid">
		<header class="modal-menu b-shadow">
			<div class="go-back d-block d-md-none">
				<i class="far fa-chevron-left fasback"></i>
				<a href="#">Back</a>
			</div>
			<div class="various-link d-none d-md-flex">
				<div class="offer-link">
					<a href="#">Make an offer</a>
					<i class="far fa-arrow-right fasarrow"></i>
				</div>
				<div class="offer-link">
					<a href="#">Schedule tour</a>
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
					<a href="#" class="close-link"><i class="fal fa-times"></i></a>
				</div>
			</div>
		</header>
		<div class="row no-gutters">
			<div class="col-12 col-md-7">
				<figure class="lh-img-holder">
					<img src="/wp-content/themes/theoffercompany/images/pexels-photo-259593.jpeg" alt="Propery-1">
					<figcaption class="d-md-none">
						<span><i class="fas fa-vr-cardboard"></i> Virtual tour</span>
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
						<h1 class="lh-name">11249 E Sonrisa Ave</h1>
						<p class="lh-street">Mesa, AZ 85212</p>
						<span class="font-padding-stilization">3 bds </span>
						<span class="small-dot">&#8226;</span>
						<span class="font-padding-stilization">2 ba </span>
						<span class="small-dot">&#8226;</span>
						<span class="font-padding-stilization">1,209 sqft </span>
						<div class="d-none d-md-block lh-house-details">
							<p class="lh-house lh-house--desktop">Open House <strong>Fri, Oct 12 &#8226; 11:00am - 2:00pm</strong></p>
							<i class="fas fa-phone agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Call
							Agent</span>
							<i class="fas fa-comment-alt-dots agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Text
							Agent</span>
						</div>
					</div>
					<div class="col-12 col-md-5">
						<div class="map-price row no-gutters">
							<div class="col-6 col-md-12">
								<span class="crimson-dot"></span>
								<strong class="small-imp house-for-sale">FOR SALE</strong>
								<h1 class="lh-money">$425,000</h1>
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
						<p class="agent-phone-text d-flex align-items-center">Call Agent</p>
					</div>
					<div class="col-6">
						<i class="fas fa-comment-alt-dots round-blue agent-round"></i>
						<p class="agent-phone-text d-flex align-items-center">Text Agent</p>
					</div>
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
										<div class="col-7">
											<span>
											Year Built:
											</span>
										</div>
										<div class="col-5 text-right">
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
								<a href="#">Samuel Shechter</a>, License #357382, <a href="#">Quicksilver Realty</a> inc.<br>
								(404) 624-6362, Source: First Multiple Listing Service. <a href="#">MLS Disclaimer</a>
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
										<input type="text" class="form-control" value="398,900" />
									</div>
								</div>
							</div>
							<label class="lh-label">Down payment</label>
							<div class="row no-gutters">
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
										<input type="text" class="form-control" value="4,627" />
									</div>
								</div>
							</div>
							<div class="mb-3">
								<label class="custom-checkmark">
								Include taxes/insurance
								<input type="checkbox">
								<span class="checkmark"></span>
								</label>
							</div>
							<label class="lh-label">Property tax</label>
							<div class="row no-gutters mb-1">
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
							<div class="mb-3">
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
						<a href="#">Selling options
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
					<div class="another-contact mt-4">
						<img src="/wp-content/themes/theoffercompany/images/man.png" />
						<div class="preferred-lender">
							<p>Preferred lender</p>
							<h2 class="contact-agent-prev-name">David Houze</h2>
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