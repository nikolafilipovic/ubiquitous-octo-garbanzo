<?php
    /*
    Template Name: Selling Options
    */
      get_header(nomenu);
      $api_key = "edba$7dDdf6ffe88ff9!120oCd";
      $url = "http://data-api.smartzip-services.com:80/properties/details.json";
      $properties = [
            "api_key" => $api_key,
            "street_address" => ( ! empty( $_GET["street_address"] ) ) ? urlencode($_GET["street_address"]) : "",
            "city" => ( ! empty( $_GET["city"] ) ) ? urlencode($_GET["city"]) : "",
            "state" => ( ! empty( $_GET["state"] ) ) ? urlencode($_GET["state"]) : "",
            "zip" => ( ! empty( $_GET["zip"] ) ) ? urlencode($_GET["zip"]) : "",
      ];
      $params = "?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=";
      $params = $params."&api_key=$properties[api_key]";
      $api_url = $url.$params;

      $data = file_get_contents($api_url);
      $data = json_decode($data,true);

      if (array_key_exists("analytics",$data)){
            // echo "with analytics";
            $property = $data['property'];
            $analytics = $data['analytics'];
            //get agent for the current zip
            $data_agent = file_get_contents("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=".$property['zip']);
            $data_agent = json_decode($data_agent,true);
            $data_agent = $data_agent[0];
            $zip = $property['zip'];
            $status = true;
      }else{
            // echo "no data available";
            //set default agent
            $data_agent = file_get_contents("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=85255");
            $data_agent = json_decode($data_agent,true);
            $data_agent = $data_agent[0];
            $zip = "";
            $status = false;
      }
    ?>
<div class="sopt-header-container">
    <div class="faded">
        <div class="link-container">
            <a href="/" class="go-back">
            <i class="far fa-chevron-left"></i>
            Back
            </a>
        </div>
        <?php if ($status): ?>
            <div class="sopt-header" style="padding-bottom: 50px;">
                <img src="/wp-content/themes/theoffercompany/images/logo.png" class="d-none d-md-block" alt="logo">
                <!-- <h1>Selling Options</h1> -->
                <br>
                <p>We offer two dramatically different selling options. You decide which works best for you.</p>
                <!-- <p>The Offer Company values</p> -->
                <h3 class="text-center" style="color: #fff"><?= $property['address']; ?></h3>
                <p><?= $property['city'] ?>, <?= $property['state'] ?> <?= $property['zip'] ?></p>
                <!---<h1 style="margin-top: -15px;">$<?= number_format($analytics['avm_high'],0); ?></h1>--->
            </div>
        <?php else: ?>
            <div class="sopt-header">
                <img src="/wp-content/themes/theoffercompany/images/logo.png" class="d-none d-md-block" alt="logo">
                <h1>Selling Options</h1>
                <!-- <p>We offer two dramatically different selling options. You decide which works best for you.</p> -->
                <div class="search-field search-desktop-field">
                        <div class="input-group buy" id="input-group">
                            <input type="text" style="width: 500px !important;" class="form-control" id="landing-search" placeholder="Enter addresss, neighborhood, city or zip...">
                            <div class="input-group-prepend" style="border-radius: 0px 5px 5px 0px; background-color: #fff; border-left: 0px">
                                <div class="input-group-text"><i class="far fa-search" id="search-button"></i></div>
                            </div>
                            <br>
                            <div id="home_search_dropdown" style="z-index: 99999 !important;">
                              <div class="section">
                                <div class="header">Addresses</div>
                                <div class="items"></div>
                              </div>
                            </div>
                        </div>

                    </div>
            </div>

        <?php endif; ?>
    </div>
</div>
<div class="sopt-body">
    <div class="sopt-floating-container">
        <div class="sopt-floating-block">
            <h1><i class="fal fa-paper-plane"></i> Fastrack Home Sale</h1>
            <p>Get dozens of offers from top home buying companies.</p>
            <div class="brand-logos">
                <img src="/wp-content/themes/theoffercompany/images/opendoor.png" alt="Opendoor">
                <img src="/wp-content/themes/theoffercompany/images/offerpad.png" alt="Offerpad">
                <img src="/wp-content/themes/theoffercompany/images/zillow.png" alt="Zillow">
            </div>
            <hr>
            <p>Offers ready in 48 hours right to your email.</p>
            <ul>
                <li><span>Sell in as little as 5 days</span></li>
                <li><span>Fair market cash offers</span></li>
                <li><span>No Repairs needed</span></li>
                <li><span>No showings needed</span></li>
                <li><span>No open houses needed</span></li>
                <li><span>No appraisal needed</span></li>
                <li><span>Pictures recommended</span></li>
                <li><span>Home inspection required</span></li>
            </ul>
            <?php if ($status == 1): ?>
                <a href="/questionaire/<?php echo "?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip"; ?>" class="btn btn-block">Get Started <i class="far fa-arrow-right"></i></a>
            <?php endif; ?>
        </div>
        <div class="sopt-floating-block second featured">
            <h1><i class="fal fa-home"></i> Max Value Home Sale</h1>
            <p>Sell your home for the highest price with out comprehensive selling strategy.</p>
            <div class="container expandables">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse1" ria-expanded="false" aria-controls="collapse1"><i class="fal fa-plus"></i> Days to sell</h3>
                        <div class="collapse multi-collapse" id="collapse1">
                            <p>Based on your local market conditions, we estimate your home will be under contract in <b>26</b> days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse2" ria-expanded="false" aria-controls="collapse2"><i class="fal fa-plus"></i> Team approach</h3>
                        <div class="collapse multi-collapse" id="collapse2">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse3" ria-expanded="false" aria-controls="collapse3"><i class="fal fa-plus"></i> Professional photography</h3>
                        <div class="collapse multi-collapse" id="collapse3">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse4" ria-expanded="false" aria-controls="collapse4"><i class="fal fa-plus"></i> Luxury yard sign & rider</h3>
                        <div class="collapse multi-collapse" id="collapse4">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse5" ria-expanded="false" aria-controls="collapse5"><i class="fal fa-plus"></i> Distinctive brochures</h3>
                        <div class="collapse multi-collapse" id="collapse5">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse6" ria-expanded="false" aria-controls="collapse6"><i class="fal fa-plus"></i> Custom property website</h3>
                        <div class="collapse multi-collapse" id="collapse6">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse7" ria-expanded="false" aria-controls="collapse7"><i class="fal fa-plus"></i> Facebook & google adwords</h3>
                        <div class="collapse multi-collapse" id="collapse7">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse8" ria-expanded="false" aria-controls="collapse8"><i class="fal fa-plus"></i> Premier exposure</h3>
                        <div class="collapse multi-collapse" id="collapse8">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse9" ria-expanded="false" aria-controls="collapse9"><i class="fal fa-plus"></i> Virtual tour marketing</h3>
                        <div class="collapse multi-collapse" id="collapse9">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse10" ria-expanded="false" aria-controls="collapse10"><i class="fal fa-plus"></i> Just listed mailing</h3>
                        <div class="collapse multi-collapse" id="collapse10">
                            <p>Based on your local market conditions, we estimate your home will be under contract in <b>26</b> days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse11" ria-expanded="false" aria-controls="collapse11"><i class="fal fa-plus"></i> Just listed mega open house</h3>
                        <div class="collapse multi-collapse" id="collapse11">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse12" ria-expanded="false" aria-controls="collapse12"><i class="fal fa-plus"></i> Local agent preview email</h3>
                        <div class="collapse multi-collapse" id="collapse12">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse13" ria-expanded="false" aria-controls="collapse13"><i class="fal fa-plus"></i> Local brokerage network</h3>
                        <div class="collapse multi-collapse" id="collapse13">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse14" ria-expanded="false" aria-controls="collapse14"><i class="fal fa-plus"></i> International exposure</h3>
                        <div class="collapse multi-collapse" id="collapse14">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse15" ria-expanded="false" aria-controls="collapse15"><i class="fal fa-plus"></i> Pre-marketing e-mail blas</h3>
                        <div class="collapse multi-collapse" id="collapse15">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse16" ria-expanded="false" aria-controls="collapse16"><i class="fal fa-plus"></i> Featured listings</h3>
                        <div class="collapse multi-collapse" id="collapse16">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse17" ria-expanded="false" aria-controls="collapse17"><i class="fal fa-plus"></i> Staging</h3>
                        <div class="collapse multi-collapse" id="collapse17">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse18" ria-expanded="false" aria-controls="collapse18"><i class="fal fa-plus"></i> Broker tours</h3>
                        <div class="collapse multi-collapse" id="collapse18">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                        <h3 class="collapsed" data-toggle="collapse" data-target="#collapse19" ria-expanded="false" aria-controls="collapse19"><i class="fal fa-plus"></i> Accurate feedback</h3>
                        <div class="collapse multi-collapse" id="collapse19">
                            <p>Based on your local market conditions, we estimate your home will be under contract in 26 days once we announce its availability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($status == 1): ?>
                <a href="#" class="btn btn-block">Get Started <i class="far fa-arrow-right"></i></a>
            <?php endif; ?>
        </div>
    </div>
    <?php if($status): ?>
    <h1 class="questions">Can I answer any questions?</h1>
    <div class="sopt-contact-agent">
        <div class="contact-agent-pic">
            <img src="<?= $data_agent['photo'] ?>" class="agent-pic" alt="agent">
        </div>
        
            <div class="contact-details">
                <h2 class="contact-agent-prev-name"><?= $data_agent['first_name'].' '.$data_agent['last_name'] ?></h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p><?= $data_agent['phone'] ?></p>
                <p><?= $data_agent['email'] ?></p>
                <div class="call-chat-write">
                    <a href="tel:<?= $data_agent['phone'] ?>"><i class="fas fa-phone agent-phone agent-phone-rotate"></i></a>
                    <a href="sms:<?= $data_agent['phone'] ?>"><i class="fas fa-comment-alt agent-phone"></i></a>
                   <a href="mailto:<?= $data_agent['email'] ?>"> <i class="fas fa-envelope agent-phone"></i></a>
                </div>
            </div>
        
    </div>
    <?php endif; ?>
</div>
<style>
  .et_pb_section_1{
    z-index: 0 !important;
  }
  .et_pb_section_2{
    z-index: 0 !important;
  }
 #home_search_dropdown {
        display: none;
        background: rgb( 255,255,255 );
        border: 1px solid rgb( 222,222,222 );
        position: fixed;
        top: 80px;
        left: 2px;
        z-index: 9999 !important;
      }

    #home_search_dropdown .section {

    }

      #home_search_dropdown .header {
        text-transform: uppercase;
        font-size: 12px;
        color: rgb( 180,180,180 );
        padding-left: 30px;
        padding-top: 10px;
        position: relative;

      }
        #home_search_dropdown .header:before {
          content: "\f102";
          font-family: "dashicons";
          position: absolute;
          top: 9px;
          left: 8px;
          font-size: 17px;
        }

      #home_search_dropdown .items {
        
      }

      #home_search_dropdown .item {
        font-size: 12px;
        color: rgb( 70,155,181 );
        padding-top: 5px;
        padding-left: 30px;
        cursor: pointer;
      }
        #home_search_dropdown .item:hover {
          background: rgb( 243,243,251 );
        }

        #home_search_dropdown .item:hover .sub_text {
          color: rgb( 180,180,180 );
        }

        #home_search_dropdown .item .sub_text {
          font-size: 11px;
          color: rgb( 210,210,210 );
          line-height: 9px;
          border-bottom: 1px solid rgb( 235,235,235 );
          padding-bottom: 12px;
        }
</style>

   <script>
      let default_geo = {
        latitude: 33.45,
        longitude: -112.065,
      };
      
      jQuery(".buy").on("click",function(){
        jQuery("#mode").val('buy');
      });
     
     jQuery(".sell").on("click",function(){
        jQuery("#mode").val('sell');
      });
     
     jQuery(".estimate").on("click",function(){
        jQuery("#mode").val('estimate');
      });
     
     
      // This example retrieves autocomplete predictions programmatically from the
      // autocomplete service, and displays them as an HTML list.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initService() {
        var displaySuggestions = function(predictions, status) {
          if (status != google.maps.places.PlacesServiceStatus.OK) {
            alert(status);
            return;
          }
          let input_el = jQuery( ".search-desktop-field" );
          let x = input_el.offset().left;
          let y = ( input_el.offset().top + input_el.outerHeight() );
          let width = input_el.outerWidth();

          let parent = jQuery( "#home_search_dropdown .items" );
          parent.html( "" );

          jQuery( "#home_search_dropdown" )
          .css({
            top: y,
            left: x,
            width: width,
          })
          .slideDown();
          
          // document.getElementById('results').innerHTML = "";
          predictions.forEach(function(prediction) {
            console.log(prediction);
            // var li = document.createElement('li');
            // li.appendChild(document.createTextNode(prediction.description));
            // document.getElementById('results').appendChild(li);
            parent.append( `
              <div class="item">
                <div class="main_text">${ prediction.description }</div>
                <div class="sub_text"></div>
              </div>
            ` );
          });
          parent.append( `
              <div class="itemm">
                <div class="main_text">&nbsp;</div>
                <div class="sub_text"></div>
              </div>
            ` );
          parent.append( `
              <div class="itemm">
                <div class="main_text">&nbsp;</div>
                <div class="sub_text"></div>
              </div>
            ` );
          
         
        };

        //clicking an item on google autocomplete module
        jQuery("#landing-search").on("blur",function(){
          jQuery("#home_search_dropdown").slideUp();
        });
        jQuery( "#home_search_dropdown .items" ).on( "click", ".item", function(){
          let el = jQuery(this);
          let address = el.find( ".main_text" ).text();
          let full_address = address;
          jQuery( "#landing-search" ).val( full_address ).trigger( "change" ).blur();
          jQuery("#home_search_dropdown").slideUp();
          
          //console.log(mode);
          
            var res = full_address.split(",");
            var arr = [];
            for (i=0; i<4; i++){
              arr.push(res.pop());
            }
            let country = arr[0];
            let state = arr[1];
            let city = arr[2];
            let street_address = arr[3];            
            
              window.location="/selling-options/?country="+country+"&state="+state+"&city="+city+"&street_address="+street_address;
            
          
          
        });

        var service = new google.maps.places.AutocompleteService();
        var query = document.getElementById('landing-search');
        query.addEventListener('keyup',function(){
            search_field = this.value;
            service.getQueryPredictions({ 
            input: search_field,
            location: new google.maps.LatLng( parseFloat( default_geo.latitude ), parseFloat( default_geo.longitude ) ),
            radius: 10000 
          }, displaySuggestions);
        });
        
      }
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaSZpfZpwVHh1sc7hV0FOLf7c96sInpsI&libraries=places&callback=initService"
        async defer></script>
<?php get_footer(); ?>