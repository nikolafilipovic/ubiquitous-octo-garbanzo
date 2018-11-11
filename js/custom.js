/* Move the Page Container and expand the Menu */
function openMenu() {
    jQuery('#page-container').toggleClass('move');
    jQuery('#menu-opener').toggleClass('hide');
    jQuery('#overlay').toggleClass('open');
    jQuery('#slide-out-nav').toggleClass('open');
    jQuery('div.logo').toggleClass('slide');
}
/* Open Filter */
function openFilter() {
    jQuery('#filterOverlay').toggleClass('closed');
}
/* Change the search option */
function searchOption(option) {
    if (option === "buy") {
        jQuery('#input-group').removeClass('sell');
        jQuery('#input-group').removeClass('estimate');
        jQuery('span.sell').removeClass('active');
        jQuery('span.estimate').removeClass('active');
        jQuery('#input-group').toggleClass('buy');
        jQuery('span.buy').toggleClass('active');
    } else if (option === "sell") {
        jQuery('#input-group').removeClass('buy');
        jQuery('#input-group').removeClass('estimate');
        jQuery('span.buy').removeClass('active');
        jQuery('span.estimate').removeClass('active');
        jQuery('#input-group').toggleClass('sell');
        jQuery('span.sell').toggleClass('active');
    } else if (option === "estimate") {
        jQuery('#input-group').removeClass('buy');
        jQuery('#input-group').removeClass('sell');
        jQuery('span.buy').removeClass('active');
        jQuery('span.sell').removeClass('active');
        jQuery('#input-group').toggleClass('estimate');
        jQuery('span.estimate').toggleClass('active');
    } else {
        return true;
    }
}
/* Div height */
function docFill() {
    if (jQuery(window).width() > 960) {
        var areaHeight = jQuery(window).height() - 114;
        jQuery("#map-area").css("height", areaHeight);
        jQuery("#listing-area").css("height", areaHeight);
    } else {
        return true;
    }
};

function docFilterFill() {
    if (jQuery(window).width() < 960) {
        var areaHeightFilter = jQuery(window).height() - 63;
        jQuery("#filter-body").css("height", areaHeightFilter);
    } else {
        return true;
    }
};
/* Initialize the triggers */
jQuery(document).ready(function () {
    /*
     var ctx = document.getElementById('lh-chart').getContext('2d');

     var data = {
        datasets: [{
           data: [75, 10, 10, 5] 
        }]
     };

     var doughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options
     }); */
    var ctx = document.getElementById('lh-chart').getContext('2d');

     function drawChartText(chart, text, fontOpts) {
        if(!fontOpts) fontOpts = {};
        var width = chart.chart.width,
        height = chart.chart.height,
        ctx = chart.chart.ctx, 
        fontSize = (height / 114).toFixed(2);

        font = "";
        font += (fontOpts.style || "normal") + " ";
        font += (fontOpts.weight || "normal") + " ";
        font += (fontOpts.size || fontSize + "em") + " ";
        font += "Graphik Regular, sans-serif";


        ctx.restore();
            ctx.font = font;
            ctx.textBaseline = "middle";

            var textX = Math.round(width / 2 - ctx.measureText(text).width/2),
                textY = height / 2;
                
        textY += fontOpts.offsetY || 0;
        ctx.fillText(text, textX, textY);
        ctx.save();
    }

     Chart.pluginService.register({
         beforeDraw: function(chart) { 
            drawChartText(chart, "$1,994", {weight: "bold", offsetY: 15});
            drawChartText(chart, "YOUR PAYMENT", {size: "1em", offsetY: -15});
        }
     });

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: [
                "P&I",
                "Insurace",
                "Taxes",
                "PMI",
                "HOA"
            ],
            datasets: [{
                data: [1642, 67, 226, 0, 60],
                backgroundColor: [
                    "#25aae1",
                    "#0075ed",
                    "#88d6f4",
                    "#6da2e4",
                    "#d3dff8"
                ],
                borderWidth: [0,0,0,0,0]
            }]
        },
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 85,
            tooltips: {
                callbacks: {
                    label: function(item, data) {
                        var label = data.labels[item.index];
                        var val   = data.datasets[0].data[item.index];
                        return label + ": $" + val;
                    }
                }
            }
        }
    });

    jQuery(function () {
        jQuery('[data-toggle="tooltip"]').tooltip();
    });

    // to be replaced later
    var openModal = jQuery("#open-modal");
    var $ = jQuery;

    jQuery('#menu-closer.listing').click(function () {
        openMenu();
    });
    jQuery('#menu-closer').click(function () {
        openMenu();
    });
    jQuery('#menu-opener').click(function () {
        openMenu();
    });
    jQuery('span.buy').click(function () {
        searchOption("buy");
    });
    jQuery('span.sell').click(function () {
        searchOption("sell");
    });
    jQuery('span.estimate').click(function () {
        searchOption("estimate");
    });
    jQuery('#menu-closer').click(function () {
        openMenu();
    });
    jQuery('#applyTop').click(function () {
        openFilter();
    });
    jQuery('#applyBottom').click(function () {
        openFilter();
    });
    jQuery('#openFilterBtn').click(function () {
        openFilter();
    });
    jQuery(".nav-item").dropdown();
    jQuery(".owl-carousel-landing").owlCarousel({
        loop: true,
        responsiveClass: true,
        nav: true,
        margin: 10,
        responsive: {
            0: {
                items: 1,
                nav: true
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
    if (jQuery(window).width() < 770) {
        jQuery("#before-cta").after(function () {
            return '<div class="d-xl-none d-lg-none d-md-none d-sm-block d-block cta-insert"> <h1>Be the first to know!</h1> <p>New homes are getting added every 2 minutes. Save your search and be the first to know. </p> <a href="" class="btn btn-primary btn-block cta">Save search <i class="fas fa-arrow-right"></i></a> </div>';
        });
    } else {
        return;
    }
    docFill();
    docFilterFill();
})
jQuery(window).resize(docFill);
jQuery(window).resize(docFilterFill);