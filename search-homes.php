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
<div class="container-fluid">
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
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
                <a class="nav-link" href="#">or</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
            </ul>
        </div>
        </nav>
    </div>
</div>
<!--   <div class="row">
    <div class="d-block d-sm-none col-sm-12 col-xs-12">
        <form class="form-inline col-sm-12 col-xs-12">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
</div> -->
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 d-sm-block d-xs-none ">
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6">
    <ul>
        <li class="nav-item dropdown"><h5>Listing type</h5>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
    </ul>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-xs-6">
    <ul>
        <li class="nav-item dropdown"><h5>Any price</h5>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
    </ul>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-xs-6">
    <ul>
        <li class="nav-item dropdown"><h5>Bedrooms</h5>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
    </ul>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-6 col-sm-6 col-xs-6">
    <ul>
        <li class="nav-item dropdown"><h5>Home Type</h5>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
    </ul>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-xs-6">
    <ul>
        <li class="nav-item dropdown"><h5>All filters</h5>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
    </ul>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6">
    <ul>
        <li class="nav-item dropdown"><h5>Sort: Highest</h5>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
    </ul>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-xs-6">
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
<?php
    get_footer();
?>