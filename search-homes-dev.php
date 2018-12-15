<?php
	/*
		Template Name: Search Homes Dev
	*/
	get_header('listing');
	$template_directory_uri = "/wp-content/themes/theoffercompany";

	/*
	Hey you!

	Just wanted to give you a heads up for the code you'll be working on.
	There are a couple of notes, for when you start connecting it to the system.

		1. Mind the checkboxes. They all need to have unique IDs in order to give you any sensible data and to actually work.
		2. Try not to move classes and IDs around, as the elements are inheriting parent classes.
		3. You will have to repeat some parameters. Unfortunately I couldn't find a decent solution to cram in so many elements in so many places and don't repeat the code :/

		If you need any help with this, please feel free to reach out to me, and I'd be more than happy to help out.

		Good luck :)

		P.S. I've left the Google Maps API implemented, just remove the iframe from the wrapper.
	*/
?>
<style>

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

	#search-homes #pagination .active a {
		background: rgb( 0,172,237 );
		color: rgb( 255,255,255 );
		pointer-events: none;
	}

	#main_content {
		width: 100%;
	}

	.geo_trigger {
		cursor: pointer;
	}
/*
	.time-on-market a {
		color: rgb( 255,255,255 );
	}
*/
</style>
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
							<input class="dropdown-checkbox parent-checkbox is_value" id="last_call" type="checkbox" name="last_call">
							<label for="last_call" class="checkbox_trigger">
								<i class="fas fa-circle color green"></i>Last call
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
								<div class="input-group dual">
									<input type="text" class="form-control" placeholder="Min" id="lot_size_min">
									<input type="text" class="form-control" placeholder="Max" id="lot_size_max">
								</div>
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
									<option selected value="">Any</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
								</select>
							</div>
							<div class="form-group">
								<label>Days on market</label>
								<select class="custom-select" id="days_on_market" style="max-width: 54%;">
									<option selected value="">Any</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
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

<canvas id="icon_canvas" style="display: none;"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/search_homes.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"
	integrity="sha256-+nuEu243+6BveXk5N+Vbr268G+4FHjUOEcfKaBqfPbc="
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>  
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
				<div class="col-xl-{BOOTSTRAP_COLUMNS_XL} col-lg-{BOOTSTRAP_COLUMNS_LG} col-md-{BOOTSTRAP_COLUMNS_MD} col-sm-{BOOTSTRAP_COLUMNS_SM} col-{BOOTSTRAP_COLUMNS_DF} column-item property" data-index="{INDEX}" data-url="{URL}" id="mls{MLS_ID}">
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
					full: "",
				},
				listing_types: [ "for_sale", "coming_soon", "new_construction", "open_house", "virtual_tour" ],
				price_min: "",
				price_max: "",
				bedrooms: "",
				bedrooms_exact: false,
				property_types: [],
				bathrooms: "",
				area_min: "",
				area_max: "",
				lot_size_min: "",
				lot_size_max: "",
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
			this.results_limit = 500;
			this.search_distance = 1609; // 1 mile in kilometers
			this.map_visible = true;
			this.map_node;

			this.init();
		}

		SearchPage.prototype.getJsonFromUrl = function( url = false ) {
			//console.log( "getJsonFromUrl", url );
			let result = {};
			let query = url || location.search.substr( 1 );

			if ( ! query )
				return result;

			query.split( "&" ).forEach( function( part ) {
				let item = part.split( "=" );
				result[ item[0] ] = decodeURIComponent( item[1] );
			});

			return result;
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
			let hidden = "";
			if ( property.virtualTourUrl == "" ) {
				hidden = "hidden";
			} else {
				hidden = "";
			}
			html = html.replace( "{HIDDEN}", hidden );

			let mls_id = property.id;
			html = html.replace( "{MLS_ID}", mls_id );

			let image = JSON.parse( property.photos )[0] || "";
				html = html.replace( "{IMAGE}", image );
			let time_on_market = property.mls_daysOnMarket || "unknown days";
				// html = html.replace( "{TIME_ON_MARKET}", time_on_market );
			let now_date = moment( Date.now() );
			let added_date = moment( property.added, "YYYY-MM-DD" );
			let days = now_date.diff( added_date, "days" );
			html = html.replace( "{TIME_ON_MARKET}", days );

			let price = new Intl.NumberFormat( "en-US", { style: "currency", currency: "USD" }).format( property.listPrice ).replace( /\.00$/, "" ) || "";
				html = html.replace( "{PRICE}", price );
			let beds = property.property_bedrooms + " beds" || "";
				html = html.replace( "{BEDS}", beds );
			let full_baths = property.property_bathsFull || 0;
			let half_baths = property.property_bathsHalf || 0;
			let baths = ( half_baths ) ? full_baths + "." + half_baths : full_baths;
			if ( ! baths )
				baths = "";
			else
				baths += " baths";
				html = html.replace( "{BATHS}", baths );
			let area = property.property_area + " ft²" || "";
				html = html.replace( "{AREA}", area );
			let address = property.address_full + " " + property.address_state + " " + property.address_postalCode;
				html = html.replace( "{ADDRESS}", address );
			let url = "/home-listing/?property=" + address.replace( /[^a-zA-Z0-9]/g, "_" ).replace( /_+/g, "_" ) + "&id=" + property.id;
				html = html.replace( "{URL}", url );
			let sale_type = "";
			// property type switcher for when we figure out how to categorize these
//			if ( something === for sale )
				sale_type = '<span class="sale-type"><i class="dot red-dot"></i>House for Sale</span>';
//			else if ( something === foreclosure )
//				sale_type = '<span class="sale-type"><i class="dot blue-dot"></i>Foreclosure</span>';
//			else if ( something === foreclosure )
//				sale_type = '<span class="sale-type"><i class="dot green-dot"></i>For Rent</span>';
			html = html.replace( "{SALE_TYPE}", sale_type );

			html = html.replace( "{INDEX}", index );

			return html;
		};

		SearchPage.prototype.resetSearchOptionsView = function() {
			console.log( "resetSearchOptionsView" );
			let self = this;
			$( "#homes-search-desktop-field" ).val( this.search_params.address.full );
			$( "#listingDropdownDesktopMenu .primary-item .parent-checkbox" ).prop( "checked", false );
			$( '#listingDropdownDesktopMenu .sub input[type="checkbox"]' ).prop( "checked", false );
			this.search_params.listing_types.forEach( ( type ) => {
				$( `#listingDropdownDesktopMenu input[type="checkbox"][name="${ type }"]` ).prop( "checked", true );
			});
			$( "#price_min" ).val( this.search_params.price_min );
			$( "#price_max" ).val( this.search_params.price_max );
			$( "#beds_picker .dropdown-item" ).removeClass( "active" ).first().addClass( "active" );
			$( "#bedrooms_exact" ).prop( "checked", this.search_params.bedrooms_exact );
			$( '#homeTypeDropdownDesktop input[type="checkbox"]' ).prop( "checked", true ).trigger( "change" );
			$( "#area_min" ).val( this.search_params.area_min );
			$( "#area_max" ).val( this.search_params.area_max );
			$( "#lot_size_min" ).val( this.search_params.lot_size_min );
			$( "#lot_size_max" ).val( this.search_params.lot_size_max );
			$( "#year_built_min" ).val( this.search_params.year_built_min );
			$( "#year_built_max" ).val( this.search_params.year_built_max );
			$( "#max_hoa" ).val( this.search_params.max_hoa );
			$( "#days_on_market" ).val( this.search_params.days_on_market );
			$( "#features" ).val( this.search_params.features );
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

		SearchPage.prototype.stateNameToCode = function( state_name ) {
			//console.log( "stateNameToCode", state_name );

			let codes = {
				"Alabama": "AL",
				"Alaska": "AK",
				"Arizona": "AZ",
				"Arkansas": "AR",
				"California": "CA",
				"Colorado": "CO",
				"Connecticut": "CT",
				"Delaware": "DE",
				"District": "DC",
				"Florida": "FL",
				"Georgia": "GA",
				"Hawaii": "HI",
				"Idaho": "ID",
				"Illinois": "IL",
				"Indiana": "IN",
				"Iowa": "IA",
				"Kansas": "KS",
				"Kentucky": "KY",
				"Louisiana": "LA",
				"Maine": "ME",
				"Maryland": "MD",
				"Massachusetts": "MA",
				"Michigan": "MI",
				"Minnesota": "MN",
				"Mississippi": "MS",
				"Missouri": "MO",
				"Montana": "MT",
				"Nebraska": "NE",
				"Nevada": "NV",
				"New": "NH",
				"New": "NJ",
				"New": "NM",
				"New": "NY",
				"North": "NC",
				"North": "ND",
				"Ohio": "OH",
				"Oklahoma": "OK",
				"Oregon": "OR",
				"Pennsylvania": "PA",
				"Rhode": "RI",
				"South": "SC",
				"South": "SD",
				"Tennessee": "TN",
				"Texas": "TX",
				"Utah": "UT",
				"Vermont": "VT",
				"Virginia": "VA",
				"Washington": "WA",
				"West": "WV",
				"Wisconsin": "WI",
				"Wyoming": "WY",
			};

			return codes[ state_name ] || false;
		};

		SearchPage.prototype.countryCodeToName = function( country_code ) {
			//console.log( "countryCodeToName", country_code );

			let codes = {
				"USA": "United States",
			};

			return codes[ country_code ] || false;
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

			//let city = ( this.properties.length ) ? this.properties[0].address_city : "";
			$( ".city_text" ).text( this.search_params.address.city );
			//let state = ( this.properties.length ) ? this.properties[0].address_state : "";
			$( ".state_text" ).text( this.search_params.address.state );
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

//			if ( this.search_params.address )
//				params.push([ "1", "ADDRESS", this.search_params.address ]);

			if ( this.search_params.address.street_number )
				params.push([ "address_streetNumberText", "LIKE", this.search_params.address.street_number ]);

			if ( this.search_params.address.street )
				params.push([ "address_streetName", "LIKE", this.search_params.address.street ]);

			if ( this.search_params.address.city )
				params.push([ "address_city", "LIKE", this.search_params.address.city ]);

			if ( this.search_params.address.county ) {;
				let search = this.search_params.address.county.replace( /\s?county\s?/i, "" )
				params.push([ "geo_county", "LIKE", search ]);
			}

			if ( this.search_params.address.state )
				params.push([ "address_state", "LIKE", this.search_params.address.state ]);

			if ( this.search_params.address.state_full ) {
				let code = this.stateNameToCode( this.search_params.address.state_full );
				if ( code )
					params.push([ "address_state", "LIKE", code ]);
			}

			if ( this.search_params.address.zip )
				params.push([ "address_postalCode", "LIKE", this.search_params.address.zip ]);

			if ( this.search_params.address.country ) {
				let search = this.countryCodeToName( this.search_params.address.country );
				params.push([ "address_country", "LIKE", search ]);
			}

			if ( this.search_params.listing_types ) {
				let options = this.search_params.listing_types.map( ( item ) => {

					// for sale
					if ( item === "coming_soon" ) {
						return false; //[ "property_subType", "=", item ];
					}
					else if ( item === "new_construction" ) {
						return [ "remarks", "LIKE", "new construction" ];
					}
					else if ( item === "open_house" ) {
						return [ "1", "OPEN_HOUSE", "" ];
					}
					else if ( item === "virtual_tour" ) {
						return [ "virtualTourUrl", "NOT NULL", "" ];
					}
					else if ( item === "last_call" ) {
						return false; //[ "remarks", "LIKE", "new construction" ];
					}
					// foreclosure
					else if ( item === "foreclosure" ) {
						return false; //[ "remarks", "LIKE", "new construction" ];
					}
					// sold
					else if ( item === "sold" ) {
						return false; //[ "remarks", "LIKE", "new construction" ];
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
					if ( item === "house" )
						item = "SingleFamilyResidence";
					else if ( item === "condo" )
						item = "Apartment";
				//	else if ( item === "land" )
				//		item = "SingleFamilyResidence";
				//	else if ( item === "manufactured" )
				//		item = "SingleFamilyResidence";
					else if ( item === "town_house" )
						item = "Townhouse";
					else
						item = "";
					return ( item ) ? [ "property_subType", "=", item ] : false ;
				}).filter( item => item );
				let group = {
					group: true,
					comparator: "OR",
					options: options,
				};
				params.push( group );
			}

			if ( this.search_params.bathrooms )
				params.push([ "property_bathrooms", "=", this.search_params.bathrooms ]);

			if ( this.search_params.area_min )
				params.push([ "property_area", ">=", this.search_params.area_min ]);

			if ( this.search_params.area_max )
				params.push([ "property_area", "<=", this.search_params.area_max ]);

			if ( this.search_params.lot_size_min )
				params.push([ "property_lotSizeArea", ">=", this.search_params.lot_size_min ]);

			if ( this.search_params.lot_size_max )
				params.push([ "property_lotSizeArea", "<=", this.search_params.lot_size_max ]);

			if ( this.search_params.year_min )
				params.push([ "property_yearBuilt", ">=", this.search_params.year_min ]);

//			if ( this.search_params.max_hoa )
//				params.push([ "", "", this.search_params.max_hoa ]);

			if ( this.search_params.days_on_market )
				params.push([ "mls_daysOnMarket", "=", this.search_params.days_on_market ]);

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
						this.properties = response.data;
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

		SearchPage.prototype.handleAutocomplete = function( predictions, status ) {

			if ( status != google.maps.places.PlacesServiceStatus.OK ) {
				console.error( "Autocomplete Fail:", status );
				return;
			}
			
			this.updateAddressDropdown( true, predictions );

		}

		SearchPage.prototype.parseGoogleAutocompletePlace = function( prediction ) {

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

		}

		SearchPage.prototype.initTriggers = function() {
			console.log( "initTriggers" );
			let self = this;

			// address
			$( "#homes-search-desktop-field" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val();
				self.search_params.address.full = val;
				/*
				self.search();
				*/
				if ( val.length < 3 ) {
					return;
				}
				if ( $( "#homes-search-desktop-field" ).is( ":focus" ) ) {
					autocompleteService.getQueryPredictions( {
						input: self.search_params.address.full,
						location: new google.maps.LatLng( parseFloat( default_geo.latitude ), parseFloat( default_geo.longitude ) ),
						radius: 10000,
					}, self.handleAutocomplete.bind( self ) );
				}
			}) );

		

			// skip if type is undefined
			
/*
			autocompleteService.addListener( "place_changed", function(){
				console.log( "place_changed", arguments );
			});
*/
			// address
			$( "#homes-search-desktop-field" ).on( "blur", function() {
				self.updateAddressDropdown( false );
			});

			// autocomplete click
			$( "#home_search_dropdown .items" ).on( "click", ".item", function() {
				let el = $(this);
				
				self.search_params.address.full = el.find( ".main_text" ).text() || "";
				self.search_params.address.locale = el.find( ".sub_text" ).text() || "";
				self.search_params.address.street_number = el.attr( "data-street_number" ) || "";
				self.search_params.address.street = el.attr( "data-street" ) || "";
				self.search_params.address.city = el.attr( "data-city" ) || "";
				self.search_params.address.county = el.attr( "data-county" ) || "";
				self.search_params.address.state = el.attr( "data-state" ) || "";
				self.search_params.address.zip = el.attr( "data-zip" ) || "";
				self.search_params.address.country = el.attr( "data-country" ) || "";
				self.search_params.address.name = el.attr( "data-name" ) || "";

				$( "#homes-search-desktop-field" ).val( self.search_params.address.full + " " + self.search_params.address.locale ).blur();
				self.search();
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

			// price_min
			$( "#price_min" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.price_min = val;
				self.search();
			}) );

			// price_max
			$( "#price_max" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.price_max = val;
				self.search();
			}) );

			// bedrooms
			$( "#beds_picker" ).on( "click", "a.ignore_defaults", function(){
				let el = $(this);
				let val = el.attr( "data-value" ) || null;
				$( "#beds_picker a" ).removeClass( "active" );
				el.addClass( "active" );
				self.search_params.bedrooms = val;
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
				self.search_params.bathrooms = val;
				self.search();
			});

			// area_min
			$( "#area_min" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.area_min = val;
				self.search();
			}) );

			// area_max
			$( "#area_max" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.area_max = val;
				self.search();
			}) );

			// lot_size_min
			$( "#lot_size_min" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.lot_size_min = val;
				self.search();
			}) );

			// lot_size_max
			$( "#lot_size_max" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.lot_size_max = val;
				self.search();
			}) );

			// lot_size
			$( "#lot_size" ).on( "change", function(){
				let val = $(this).attr( "data-value" ) || null;
				self.search_params.lot_size = val;
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
			$( "#max_hoa" ).on( "change", function(){
				let val = $(this).attr( "data-value" ) || null;
				self.search_params.max_hoa = val;
				self.search();
			});

			// lot_size
			$( "#days_on_market" ).on( "change", function(){
				let val = $(this).attr( "data-value" ) || null;
				self.search_params.days_on_market = val;
				self.search();
			});

			// features
			$( "#features" ).on( "change input", $.debounce( self.debounce_time, function(){
				let val = $(this).val() || null;
				self.search_params.features = val;
				self.search();
			}) );

			// pagination
			$( "#pagination" ).on( "click", "li:not( .active )", function() {
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
				window.location.href = url;
			});

			// browser geolocation
			$( ".geo_trigger" ).click( function(){
				let el = $(this);
				if ( location.protocol !== "https" ) {
					alert( "HTTPS required for geolocation" );
				}
				else if ( ! self.user_coords.latitude ) {
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
			}, ( error ) => {
				alert( error.message );
				console.error( error.message );
			});
		};

		SearchPage.prototype.search = function() {
			console.log( "search" );

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
			this.search_params.address.state = "AZ";
			this.search_params.address.country = "USA";

			let url_params = this.getJsonFromUrl();
			try {
				if ( url_params.search ) {
					let data = JSON.parse( url_params.search );
					this.search_params = { ...this.search_params, ...data };
				}
			} catch ( error ) {}

			this.search_params.address.full = this.search_params.address.full || this.search_params.address.city + " " + this.search_params.address.state;

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
			console.log( "createMapMarker", latitude, longitude, title, listing_type, price, highlight );

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
			console.log( "addMapMarker", latitude, longitude, title, listing_type, price, highlight );

			let marker = this.createMapMarker( latitude, longitude, color, title, listing_type, price, highlight );

			this.map_markers.push( marker );
		};

		SearchPage.prototype.clearMapMarkers = function() {
			console.log( "clearMapMarkers", this.map_markers );

			this.map_markers.forEach( ( marker ) => {
				marker.setMap( null );
			});
			this.map_markers = [];
		};

		SearchPage.prototype.spliceSingleMapMarker = function( search_index ) {
			console.log( "spliceSingleMapMarker", search_index );

			let marker = this.map_markers.filter( ( marker, index ) => {
				return ( index === search_index );
			});

			this.map_markers = this.map_markers.filter( ( marker, index ) => {
				return ( index != search_index );
			});

			return marker;
		};

		SearchPage.prototype.updateMapBounds = function( lat = 32, lng = -112, zoom = 1 ) {
			console.log( "updateMapBounds", this.map_markers );

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
			console.log( "updatePaginationView" );

			$( "#pagination .page-item:not( .ignore )" ).remove();
			$( "#pagination .page-item.ignore" ).css({
				"display": "none",
			});
		};

		SearchPage.prototype.updatePaginationView = function() {
			console.log( "updatePaginationView" );

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
			console.log( "changePage", page );

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
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaSZpfZpwVHh1sc7hV0FOLf7c96sInpsI&callback=initMap&libraries=places"></script> -->
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