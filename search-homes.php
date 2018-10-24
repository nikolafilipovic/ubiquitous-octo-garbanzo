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
<div id="search-homes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input class="form-control search" type="search" placeholder="Search address, city or zip..." aria-label="Search">
                <div class="dropdown listing">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="listingdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="search-checkbox" id="listing" type="checkbox" value="Nothing">
                        <label for="listing"><i class="fas fa-circle color red"></i>Listing type <i class="fas fa-angle-down"></i></label>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="listingdropdown">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Any price
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        0+ Bedrooms
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home Type (2)
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All filters
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort: Highest Price
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <a href="#"> Map</a>
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