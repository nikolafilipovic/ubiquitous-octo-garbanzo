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
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
        <img src="/wp-content/themes/theoffercompany/images/menu_icon.png" width="32" height="32" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Buy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sell</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Estimate</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mortgage</a>
        </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">My account</a>
        </li>
        <li class="nav-item">
            <p class="nav-link">or</p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li>
        </ul>
    </div>
</nav>
<!--   <div class="row">
    <div class="d-block d-sm-none col-sm-12 col-xs-12">
        <form class="form-inline col-sm-12 col-xs-12">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
</div> -->
</div>
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
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <!-- ovde ide mapa -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="row">
                <div class="col-xl-10 col-lg-10">
                <!-- Mesto za adresu (Atlanta  GA Real Estate) -->
                </div>
                <div class="col-xl-2 col-lg-2">
                <!-- save search -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                    <!-- mesto za slike kuca -->
                    </div>
                    <div class="col-xl-6 col-lg-6">
                    <!-- mesto za slike kuca -->
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="d-block d-sm-none">
            <nav aria-label="Page navigation example">
                <ul class="pagination ">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>