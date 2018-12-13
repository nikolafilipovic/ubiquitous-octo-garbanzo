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
                <a href="#" class="desktop-fields-map">List</a>
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
                        <a href="#" class="save-search">Save Search</a>
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