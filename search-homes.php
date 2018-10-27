<?php
    /*
        Template Name: Search Homes
    */
    get_header();
?>
<style>
    .main-header {
        background: black;
    }
</style>
<div class="clearfix"></div>
<div id="search-homes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input class="form-control search" type="search" placeholder="Search address, city or zip..." aria-label="Search">
                <div class="dropdown listing">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="listingDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="search-checkbox" id="listing" type="checkbox" value="Nothing">
                        <label for="listing"><i class="fas fa-circle color red"></i>Listing type <i class="fas fa-angle-down"></i></label>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="listingDropdown">
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="comingSoon" type="checkbox" value="Nothing"><label for="comingSoon">Coming soon</label></a>
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="newConstruction" type="checkbox" value="Nothing"><label for="newConstruction">New construction</label></a>
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="openHouses" type="checkbox" value="Nothing"><label for="openHouses">Open houses</label></a>
                        <a class="dropdown-item" href="#"><input class="dropdown-checkbox" id="virtualTour" type="checkbox" value="Nothing"><label for="virtualTour">Virtual tour</label></a>
                    </div>
                </div>
                <div class="dropdown foreclosures">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="foreclosuresDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="search-checkbox" id="foreclosures" type="checkbox" value="Nothing">
                        <label for="foreclosures"><i class="fas fa-circle color blue"></i>Foreclosures <i class="fas fa-angle-down"></i></label>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="foreclosuresDropdown">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
                </div>
                <div class="dropdown lastcall">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="lastcallDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="search-checkbox" id="lastcall" type="checkbox" value="Nothing">
                        <label for="lastcall"><i class="fas fa-circle color green"></i>Last Call <i class="fas fa-info-circle info"></i><i class="fas fa-angle-down"></i></label>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="lastcallDropdown">
                        <p class="dropdown-item">Last call to make offers. These homes will <br/>go under contract in 24 hours.</p>
                    </div>
                </div>
                <div class="dropdown sold">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="soldDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="search-checkbox" id="sold" type="checkbox" value="Nothing">
                        <label for="sold"><i class="fas fa-circle color yellow"></i>Sold <i class="fas fa-angle-down"></i></label>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="soldDropdown">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
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
                        Any <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="bedroomsDropdown">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
                </div>
                <div class="dropdown hometype">
                    <h3>Home type</h3>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="hometypeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Any <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="hometypeDropdown">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
                </div>
                <div class="search-links">
                    <a href="#" id="filters">Filters</a>
                    <a href="#">Sort</a>
                    <a href="#">Map</a>
                    <a href="#" id="save-search">Save search</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <!-- ovde ide mapa -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 property-list">
                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-1.png)">
                    <span class="time-on-market">5 days on the market</span>
                    <span class="sale-type">House for Sale</span>
                    <h1 class="property-price">$425,000</h1>
                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                </div>
                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-2.png)">
                    <span class="time-on-market">5 days on the market</span>
                    <span class="sale-type">House for Sale</span>
                    <h1 class="property-price">$425,000</h1>
                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                </div>
                <div class="cta-insert">
                    <h1>Be the first to know!</h1>
                    <p>New homes are getting added every 2 minutes.
                    Save your search and be the first to know.
                    </p>
                    <a href="" class="btn btn-primary btn-block cta">Save search <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-3.png)">
                    <span class="time-on-market">5 days on the market</span>
                    <span class="sale-type">House for Sale</span>
                    <h1 class="property-price">$425,000</h1>
                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pagination">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <nav aria-label="Pagination">
                <ul class="pagination ">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link next" href="#">Next</a></li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>