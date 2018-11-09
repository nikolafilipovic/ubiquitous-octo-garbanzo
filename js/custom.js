/* Move the Page Container and expand the Menu */
function slideOutMenu(option) {
    if (option ==="open") {
        jQuery("#page-container").addClass("move");
        jQuery("#menu-opener").addClass("hide");
        jQuery("#overlay").addClass("open");
        jQuery("#slide-out-nav").addClass("open");
        jQuery("div.logo").addClass("slide");
    } else if (option ==="close") {
        jQuery("#page-container").removeClass("move");
        jQuery("#menu-opener").removeClass("hide");
        jQuery("#overlay").removeClass("open");
        jQuery("#slide-out-nav").removeClass("open");
        jQuery("div.logo").removeClass("slide");
    } else {
        console.log("Initiated event that doesn't have a required option.");
    }
}
/* Open Filter */
function openFilter() {
    jQuery("#filterOverlay").toggleClass("closed");
}
/* Open Filter */
function changeHeart(parentElement) {
    jQuery(parentElement).children().toggleClass("far");
    jQuery(parentElement).children().toggleClass("active");
    jQuery(parentElement).children().toggleClass("fas");
}
/* Change the search option */
function searchOption(option) {
    if (option ==="buy") {
        jQuery("#input-group").removeClass("sell");
        jQuery("#input-group").removeClass("estimate");
        jQuery("span.sell").removeClass("active");
        jQuery("span.estimate").removeClass("active");
        jQuery("#input-group").toggleClass("buy");
        jQuery("span.buy").toggleClass("active");
    } else if (option ==="sell") {
        jQuery("#input-group").removeClass("buy");
        jQuery("#input-group").removeClass("estimate");
        jQuery("span.buy").removeClass("active");
        jQuery("span.estimate").removeClass("active");
        jQuery("#input-group").toggleClass("sell");
        jQuery("span.sell").toggleClass("active");
    } else if (option ==="estimate") {
        jQuery("#input-group").removeClass("buy");
        jQuery("#input-group").removeClass("sell");
        jQuery("span.buy").removeClass("active");
        jQuery("span.sell").removeClass("active");
        jQuery("#input-group").toggleClass("estimate");
        jQuery("span.estimate").toggleClass("active");
    } else {
        console.log("Initiated event that doesn't have a required option.")
    }
}
function showCTA() {
    if (jQuery(window).width() < 770) {
        jQuery("#before-cta").after(function() {
            return '<div class="d-xl-none d-lg-none d-md-none d-sm-block d-block cta-insert"> <h1>Be the first to know!</h1> <p>New homes are getting added every 2 minutes. Save your search and be the first to know. </p> <a href="" class="btn btn-primary btn-block cta">Save search <i class="fas fa-arrow-right"></i></a> </div>';
          });
     }else{
        console.log("Initiated event that doesn't have a required option.")
     }
}
/* Div height */
function docFill(){
    if (jQuery(window).width() > 960) {
        var areaHeight = jQuery(window).height() - 114;
        jQuery("#map-area").css("height",areaHeight);
        jQuery("#listing-area").css("height",areaHeight);
    } else {
        console.log("Initiated event that doesn't have a required option.")
    }
};
function docFilterFill(){
    if (jQuery(window).width() < 960) {
        var areaHeightFilter = jQuery(window).height() - 63;
        jQuery("#filter-body").css("height",areaHeightFilter);
    } else {
        console.log("Initiated event that doesn't have a required option.")
    }
};
function loadSliders() {
    jQuery(".owl-carousel-landing").owlCarousel({    
        loop:true,
        responsiveClass:true,
        nav:true,
        margin:10,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });
    jQuery(".owl-carousel-lh").owlCarousel({    
        loop:true,
        dots: false,
        responsiveClass: true,
        nav: true,
        margin: 10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1,
                nav: true
            },
            1000:{
                items:2,
                nav: false,
                loop: false
            }
        }
    });
}

/* Initialize the triggers */
jQuery(document).ready(function(){

    jQuery("#menu-opener").click(function() {
        slideOutMenu("open");
    });
    jQuery(".close-menu").click(function() {
        slideOutMenu("close");
    });
    jQuery(function () {
        jQuery('[data-toggle="tooltip"]').tooltip();
    });
    jQuery(".dropdown-item.custom").click(function() {
        jQuery(this).toggleClass("active");
    });
    jQuery(".favourite").click(function() {
        changeHeart(this);
    });
    jQuery("span.buy").click(function() {
        searchOption("buy");
    });
    jQuery("span.sell").click(function() {
        searchOption("sell");
    });
    jQuery("span.estimate").click(function() {
        searchOption("estimate");
    });
    jQuery("#applyTop").click(function() {
        openFilter();
    });
    jQuery("#applyBottom").click(function() {
        openFilter();
    });
    jQuery("#openFilterBtn").click(function() {
        openFilter();
    });

    // to be replaced later
    var openModal = jQuery("#open-modal");
    var $ = jQuery;

    jQuery(".nav-item").dropdown();
    loadSliders();
     showCTA();
     docFill();
     docFilterFill();
 })
 jQuery(document).resize(function(){
    showCTA();
    docFill();
    docFilterFill();
 })
