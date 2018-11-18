/* This is a duct tape patch for a strange loop where responsiveTasks() is getting executed every 2 seconds on iOS */ 
var taskAllowance = 1;

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
    jQuery("body").toggleClass("noscroll");
}
/* Icons.. */
function changeHeart(parentElement) {
    jQuery(parentElement).children().toggleClass("far");
    jQuery(parentElement).children().toggleClass("active");
    jQuery(parentElement).children().toggleClass("fas");
}
function changeVR(parentElement) {
    jQuery(parentElement).toggleClass("fal");
    jQuery(parentElement).toggleClass("active");
    jQuery(parentElement).toggleClass("fas");
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
function responsiveTasks() {
    if (taskAllowance == 1) {
        var screenRes = jQuery(window).width();
        if (screenRes < 770) {
            jQuery("#before-cta").after(function() {
                return '<div class="d-xl-none d-lg-none d-md-none d-sm-block d-block cta-insert"> <h1>Be the first to know!</h1> <p>New homes are getting added every 2 minutes. Save your search and be the first to know. </p> <a href="" class="btn btn-primary btn-block cta">Save search <i class="far fa-arrow-right"></i></a> </div>';
              });
        } else {
            console.log("Initiated event that doesn't have a required option.");
        }
        if (screenRes < 321) {
            jQuery("#foreclosuresDropdown label span").text(function(i, text) {
                return text.replace("Foreclosures", "Foreclo...");
            });
        } else {
            console.log("Initiated event that doesn't have a required option.");
        }
        taskAllowance = 0;
    } else {
        console.log("Method was already executed once.");
    }
}
/* Div height */
function docFill() {
    var elementHeight = 0;
    if (jQuery("#wpadminbar").length) {
        elementHeight = 143;
    } else {
        elementHeight = 111;
    }
    if (jQuery(window).width() > 960) {
        var areaHeight = jQuery(window).height() - elementHeight;
        jQuery("#map-area").css("height", areaHeight);
        jQuery("#listing-area").css("height", areaHeight);
    } else {
        console.log("Initiated event that doesn't have a required option.")
    }
};

function docFilterFill() {
    if (jQuery(window).width() < 960) {
        var areaHeightFilter = jQuery(window).height() - 63;
        jQuery("#filter-body").css("height", areaHeightFilter);
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
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
    jQuery(".owl-carousel-lh").owlCarousel({
        loop: true,
        dots: false,
        responsiveClass: true,
        nav: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 2,
                nav: false,
                loop: false
            }
        }
    });
}

/* Initialize the triggers */
jQuery(document).ready(function(){
    if(typeof multistep !== 'undefined') {
        multistep.init();
    }
    if(typeof multislider !== 'undefined') {
        multislider.init();
    }
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
    jQuery(".fa-vr-cardboard").click(function() {
        changeVR(this);
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
    jQuery("#openFilterBtn").click(function() {
        openFilter();
    });

    jQuery('.toggle-collapse').click(function() {
        var elem = jQuery(jQuery(this).data('target'));
        var notifyElem = jQuery(jQuery(this).data('notify'));

        if(elem.hasClass('show')) {
            $(this).find('i').css({
                transform: 'rotate(180deg)',
                color: '#cbd3dd'
            });
            if(notifyElem) {
                notifyElem.addClass('hide-before');
            }
        } else {
            $(this).find('i').css({
                transform: 'rotate(0)',
                color: '#17acee'
            });
            if(notifyElem) {
                notifyElem.removeClass('hide-before');
            }
        }
        elem.collapse("toggle");
    });

    // to be replaced later
    var openModal = jQuery("#open-modal");
    var $ = jQuery;

    jQuery(".nav-item").dropdown();
    loadSliders();
    responsiveTasks();
    docFilterFill();
    docFill();
 });
jQuery(document).resize(function(){
    docFill();
    docFilterFill();
    responsiveTasks();
 });
jQuery(document).delegate(".dropdown-menu", "click", function(e) {
    console.log("Stopping propagation for dropdown.");
    e.stopPropagation();
});
jQuery(document).on('change', 'input:checkbox', function (e) {
    if (jQuery(window).width() < 990) {
        jQuery(this).closest(".dropdown").find(".parent-checkbox").attr("checked", "checked");
    } else {
        //Select parent on desktop. Couldn't get jQuery to catch the parent element.
    }
});
jQuery(document).on('change', '.dropdown-checkbox', function (e) {
    if (jQuery(window).width() < 990) {
        jQuery(this).closest(".card").find(".search-checkbox").attr("checked", "checked");
    } else {
        //Select parent on desktop. Couldn't get jQuery to catch the parent element.
    }
});
