/* Move the Page Container and expand the Menu */
function openMenu() {
    jQuery( '#page-container' ).toggleClass( 'move' );
    jQuery( '#menu-opener' ).toggleClass( 'hide' );
    jQuery( '#overlay' ).toggleClass( 'open' );
    jQuery( '#slide-out-nav' ).toggleClass( 'open' );
    jQuery( 'div.logo' ).toggleClass( 'slide' );
}
/* Change the search option */
function searchOption(option) {
    if (option === "buy") {
        jQuery( '#input-group' ).removeClass( 'sell' );
        jQuery( '#input-group' ).removeClass( 'estimate' );
        jQuery( 'span.sell' ).removeClass( 'active' );
        jQuery( 'span.estimate' ).removeClass( 'active' );
        jQuery( '#input-group' ).toggleClass( 'buy' );
        jQuery( 'span.buy' ).toggleClass( 'active' );
    } else if (option === "sell") {
        jQuery( '#input-group' ).removeClass( 'buy' );
        jQuery( '#input-group' ).removeClass( 'estimate' );
        jQuery( 'span.buy' ).removeClass( 'active' );
        jQuery( 'span.estimate' ).removeClass( 'active' );
        jQuery( '#input-group' ).toggleClass( 'sell' );
        jQuery( 'span.sell' ).toggleClass( 'active' );
    } else if (option === "estimate") {
        jQuery( '#input-group' ).removeClass( 'buy' );
        jQuery( '#input-group' ).removeClass( 'sell' );
        jQuery( 'span.buy' ).removeClass( 'active' );
        jQuery( 'span.sell' ).removeClass( 'active' );
        jQuery( '#input-group' ).toggleClass( 'estimate' );
        jQuery( 'span.estimate' ).toggleClass( 'active' );
    } else {
        return true;
    }
}
/* Initialize the triggers */
jQuery(document).ready(function(){
    jQuery( '#menu-opener' ).click(function() {
        openMenu();
    });
    jQuery( '#menu-closer' ).click(function() {
        openMenu();
    });
    jQuery( 'span.buy' ).click(function() {
        searchOption("buy");
    });
    jQuery( 'span.sell' ).click(function() {
        searchOption("sell");
    });
    jQuery( 'span.estimate' ).click(function() {
        searchOption("estimate");
    });
    jQuery(".owl-carousel").owlCarousel({    
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
    if (jQuery(window).width() < 770) {
        jQuery( "#before-cta" ).after(function() {
            return '<div class="d-xl-none d-lg-none d-md-none d-sm-block d-block cta-insert"> <h1>Be the first to know!</h1> <p>New homes are getting added every 2 minutes. Save your search and be the first to know. </p> <a href="" class="btn btn-primary btn-block cta">Save search <i class="fas fa-arrow-right"></i></a> </div>';
          });
     }else{
         return;
     }
 })