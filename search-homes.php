<?php
    /*
        Template Name: Search Homes
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
<div class="clearfix"></div>
<div id="search-homes">
    <div class="container-fluid">
        <div class="row d-xl-block d-lg-block d-md-none d-sm-none d-none desktop-fields">
            <div class="col-xl-12 col-lg-12 col-md-12 desktop-fields-column">
                <div class="search-desktop-field">
                    <div class="input-group homes-search-field" id="input-group">
                        <input type="text" class="form-control" id="homes-search-desktop-field" placeholder="Search by address, city or zip...">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-search"></i></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="listingDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-circle color red"></i><i class="fas fa-circle color green"></i>Listing type <i class="fal fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="listingDropdownDesktop" id="listingDropdownDesktopMenu">
                        <a class="dropdown-item primary-item" href="#"><input class="dropdown-checkbox parent-checkbox" id="comingSoon" type="checkbox" value="Nothing"><label for="comingSoon"><i class="fas fa-circle color red"></i>For Sale</label></a>
                        <div>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon1" type="checkbox" value="Nothing"><label for="comingSoon1">Coming Soon</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon2" type="checkbox" value="Nothing"><label for="comingSoon2">New Construction</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon3" type="checkbox" value="Nothing"><label for="comingSoon3">Open Houses</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon4" type="checkbox" value="Nothing"><label for="comingSoon4">Virtual Tours</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="lastCall" type="checkbox" value="Nothing"><label for="lastCall" data-toggle="tooltip" data-placement="right" id="lastcall-tooltip" title="24 hour notice to make an offer before these homes goes under contract.">Last call <i class="fal fa-info-circle info"></i></label></a>
                        </div>
                        <a class="dropdown-item primary-item" href="#"><input class="dropdown-checkbox parent-checkbox" id="newConstruction" type="checkbox" value="Nothing"><label for="newConstruction" data-toggle="tooltip" data-placement="right" id="foreclosure-tooltip" title="The lender has initiated foreclosure proceedings and an auction date has been scheduled on these properties. These properties are not found on multiple listing service (MLS)."><i class="fas fa-circle color blue"></i>Foreclosures <i class="fal fa-info-circle info"></i></label></a>
                        <div>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon5" type="checkbox" value="Nothing"><label for="comingSoon5">Pre-foreclosure</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon6" type="checkbox" value="Nothing"><label for="comingSoon6">Short sale</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon7" type="checkbox" value="Nothing"><label for="comingSoon7">Bank owned</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon8" type="checkbox" value="Nothing"><label for="comingSoon8">Auction</label></a>
                        </div>
                        <a class="dropdown-item primary-item" href="#"><input class="dropdown-checkbox parent-checkbox" id="forRent" type="checkbox" value="Nothing"><label for="forRent"><i class="fas fa-circle color green"></i>For Rent </label></a>
                        <div>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon10" type="checkbox" value="Nothing"><label for="comingSoon10">Houses</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon11" type="checkbox" value="Nothing"><label for="comingSoon11">Apartments</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon12" type="checkbox" value="Nothing"><label for="comingSoon12">Condos</label></a>
                            <a class="dropdown-item sub" href="#"><input class="dropdown-checkbox" id="comingSoon9" type="checkbox" value="Nothing"><label for="comingSoon9">Townhouses</label></a>
                        </div>
                        <a class="dropdown-item primary-item" href="#"><input class="dropdown-checkbox parent-checkbox" id="virtualTour" type="checkbox" value="Nothing"><label for="virtualTour"><i class="fas fa-circle color yellow"></i>Sold</label></a>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="priceDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Any price <i class="fal fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu price" aria-labelledby="priceDropdownDesktop">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Min">
                            <input type="text" class="form-control" placeholder="Max">
                        </div>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="bedroomsDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        0+ Bedrooms <i class="fal fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu bedrooms" aria-labelledby="bedroomsDropdownDesktop">
                        <div class="dropdown-wrapper">
                            <a class="dropdown-item custom" href="#">Any</a>
                            <a class="dropdown-item custom" href="#">1+</a>
                            <a class="dropdown-item custom" href="#">2+</a>
                            <a class="dropdown-item custom" href="#">3+</a>
                            <a class="dropdown-item custom" href="#">4+</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="homeTypeDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home type (2) <i class="fal fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="homeTypeDropdownDesktop" id="homeTypeDropdownDesktop">
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon13" type="checkbox" value="Nothing" checked><label for="comingSoon13">Houses</label></a>
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon14" type="checkbox" value="Nothing" checked><label for="comingSoon14">Condos</label></a>
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon15" type="checkbox" value="Nothing"><label for="comingSoon15">Land</label></a>
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon16" type="checkbox" value="Nothing"><label for="comingSoon16">Manufactured</label></a>
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon60" type="checkbox" value="Nothing"><label for="comingSoon60">Town Houses</label></a>
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
                                <select class="custom-select" id="inputGroupSelect02">
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
                                <select class="custom-select" id="inputGroupSelect02">
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
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option selected>Any</option>
                                    <option value="1">1+</option>
                                    <option value="2">2+</option>
                                    <option value="3">3+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Days on market</label>
                                <select class="custom-select" id="inputGroupSelect02" style="max-width: 54%;">
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
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="filtersDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort: Highest price <i class="fal fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="filtersDropdownDesktop">
						<a class="dropdown-item active" href="#">Highest price</a>
                        <a class="dropdown-item" href="#">Bedrooms</a>
                        <a class="dropdown-item" href="#">Bathrooms</a>
                        <a class="dropdown-item" href="#">Square Feet</a>
                        <a class="dropdown-item" href="#">Days on Market</a>
                    </div>
                </div>
                <a href="#" class="desktop-fields-map" data-toggle="modal" data-target="#save-search-modal">List</a>
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
        <div class="row">
            <div class="col-xl-6 d-xl-block col-lg-6 d-lg-block col-md-6 d-md-block col-sm-12 col-12 d-none" id="map-area">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425342.1915312503!2d-112.40523308786538!3d33.605671055512104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b12ed50a179cb%3A0x8c69c7f8354a1bac!2sPhoenix%2C+AZ%2C+USA!5e0!3m2!1sen!2srs!4v1540947283725" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe><!-- ovde ide mapa -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 property-list" id="listing-area">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 d-lg-block d-md-block d-none listing-heading">
                        <h3 class="location-name">Atlanta GA Real Estate</h3>
                        <p class="location-info">266 homes for sale</p>
                        <a href="#" class="save-search" id="saveSearch">Save Search</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-1.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item" id="before-cta">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-2.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-3.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-1.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-2.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-3.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-1.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-2.png)">
                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                </div>
				<div class="row pagination">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div>
							<ul class="pagination">
							<li class="page-item"><a class="page-link active" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#">...</a></li>
							<li class="page-item"><a class="page-link next" href="#">Next</a></li>
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
<div class="list-homes-popup">
	<div class="lh-wrapper">
		<div class="container-fluid override-fluid">
			<header class="modal-menu b-shadow">
				<div class="go-back d-block d-md-none">
					<i class="far fa-chevron-left fasback"></i>
					<a href="#" id="close-lh">Back</a>
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
						<a href="#" class="close-link" id="CloseLink"><i class="fal fa-times"></i></a>
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
</div>
<!-- MODALS -->
	<div id="save-search-modal" class="modal fade unlock" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content width-override">
                <div class="multi-step">
                    <div class="step" id="initial">
                        <div class="modal-header">
                            <h5 class="modal-title">Sign in or register to save search</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="close-link" aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="has-mail-left">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <a href="#" class="btn btn-block step-toggler" data-triger="#login">Submit <i class="far fa-arrow-right"></i></a>
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
                    </div>
                    <div class="step" id="login">
                        <div class="modal-header">
                            <h5 class="modal-title">Welcome back!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="close-link" aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="has-mail-left">
                                    <input type="text" class="form-control" placeholder="Email" value="knownuser@coolcompany.com">
                                </div>
                                <div class="spacer-1rem"></div>
                                <div class="has-key-left">
                                    <input type="password" class="form-control" placeholder="Password" value="">
                                </div>
                                <a href="#" class="btn btn-block step-toggler" data-triger="#signup">Sign in <i class="far fa-arrow-right"></i></a>
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
                                <a href="#" class="btn btn-block step-toggler" data-triger="#done">Submit <i class="far fa-arrow-right"></i></a>
                                <a href="#" class="help-link">Terms of use</a>
                            </div>
                        </div>
                    </div>
                    <div class="step" id="done">
                        <div class="modal-header">
                            <h5 class="modal-title">Your search was saved!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="close-link" aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <p class="message">You can modify your saved searches in My Account.</p>
                                <a href="#" class="btn btn-block step-toggler" data-triger="#done">Go to My Account <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    /**
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 2,
          center: new google.maps.LatLng(2.8,-187.3),
          mapTypeId: 'terrain'
        });

        // Create a <script> tag and set the USGS URL as the source.
        var script = document.createElement('script');
        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script);
      }

      // Loop through the results array and place a marker for each
      // set of coordinates.
      window.eqfeed_callback = function(results) {
        for (var i = 0; i < results.features.length; i++) {
          var coords = results.features[i].geometry.coordinates;
          var latLng = new google.maps.LatLng(coords[1],coords[0]);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
        }
      }
      */
</script>
<!--<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>-->
</div> <!-- #et-main-area -->
</div> <!-- #page-container -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>