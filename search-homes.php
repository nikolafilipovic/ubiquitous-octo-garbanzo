<?php
    /*
        Template Name: Search Homes
    */
    get_header('listing');
?>
<style>
    .main-header {
        background: black;
    }
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
                            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="listingDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-circle color red"></i><i class="fas fa-circle color green"></i>Listing type <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="listingDropdownDesktop">
                        <a class="dropdown-item" href="#">Buy</a>
                        <a class="dropdown-item" href="#">Sell</a>
                        <a class="dropdown-item" href="#">Lease</a>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="priceDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Any price <i class="fas fa-angle-down"></i>
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
                        0+ Bedrooms <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu bedrooms" aria-labelledby="bedroomsDropdownDesktop">
                        <div class="dropdown-wrapper">
                            <a class="dropdown-item custom" href="#">Any</a>
                            <a class="dropdown-item custom" href="#">+</a>
                            <a class="dropdown-item custom" href="#">2+</a>
                            <a class="dropdown-item custom" href="#">3+</a>
                            <a class="dropdown-item custom" href="#">4+</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="homeTypeDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home type (2) <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="homeTypeDropdownDesktop">
                        <a class="dropdown-item" href="#">?</a>
                        <a class="dropdown-item" href="#">?</a>
                        <a class="dropdown-item" href="#">?</a>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="filtersDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All filters <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="filtersDropdownDesktop">
                        <a class="dropdown-item" href="#">?</a>
                    </div>
                </div>
                <div class="dropdown desktop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="filtersDropdownDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort: Highest price <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="filtersDropdownDesktop">
                        <a class="dropdown-item" href="#">Lowest price</a>
                        <a class="dropdown-item active" href="#">Highest price</a>
                    </div>
                </div>
                <a href="#" class="desktop-fields-map">Map</a>
            </div>
        </div>
        <div class="row d-xl-none d-lg-none d-md-block d-sm-block d-block mobile-fields">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input class="form-control search" type="search" placeholder="Search address, city or zip..." aria-label="Search">
                <div class="dropdown listing">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="listingDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="search-checkbox" id="listing" type="checkbox" value="Nothing">
                        <label for="listing"><i class="red-dot"></i>Sale type <i class="fas fa-angle-down"></i></label>
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
                        <div class="dropdown-wrapper">
                            <a class="dropdown-item custom" href="#">Any</a>
                            <a class="dropdown-item custom" href="#">+</a>
                            <a class="dropdown-item custom" href="#">2+</a>
                            <a class="dropdown-item custom" href="#">3+</a>
                            <a class="dropdown-item custom" href="#">4+</a>
                            <a class="dropdown-item custom-checkbox" href="#"><input class="dropdown-checkbox" id="virtualTour" type="checkbox" value="Nothing"><label for="virtualTour">Use exact match</label></a>
                        </div>
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
            <div class="col-xl-6 d-xl-block col-lg-6 d-lg-block col-md-6 d-md-block col-sm-12 col-12 d-none">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425342.1915312503!2d-112.40523308786538!3d33.605671055512104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b12ed50a179cb%3A0x8c69c7f8354a1bac!2sPhoenix%2C+AZ%2C+USA!5e0!3m2!1sen!2srs!4v1540947283725" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe><!-- ovde ide mapa -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 property-list">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 d-lg-block d-md-block d-none listing-heading">
                        <h3 class="location-name">Atlanta GA Real Estate</h3>
                        <p class="location-info">266 homes for sale</p>
                        <a href="#" class="save-search">Save Search</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-1.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item" id="before-cta">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-2.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <i class="favourite far fa-heart"></i>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-3.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <i class="favourite far fa-heart"></i>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-1.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <i class="favourite far fa-heart"></i>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-2.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <i class="favourite far fa-heart"></i>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-3.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <i class="favourite far fa-heart"></i>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-1.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <i class="favourite far fa-heart"></i>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-2.png)">
                            <span class="time-on-market"><i class="fas fa-vr-cardboard"></i>5 days on the market</span>
                            <i class="favourite far fa-heart"></i>
                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                            <h1 class="property-price">$425,000</h1>
                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-xl-none d-lg-none d-md-none d-sm-block d-block pagination">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div>
                    <ul class="pagination ">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link next" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
<?php
    get_footer();
?>