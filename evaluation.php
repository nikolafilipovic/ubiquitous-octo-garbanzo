<?php
    /*
    Template Name: Evaluation
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
global $wpdb;

    // function
function sendPostRequestJson($base_url, $properties, $returns_json = true)
{

    $json_string = json_encode($properties);

    $response = file_get_contents(
        $base_url,
        null,
        stream_context_create(
            [
                "http" => [
                    "protocol_version" => 1.1,
                    "method" => "POST",
                    "header" => "Content-type: application/json\r\n" .
                        "Connection: close\r\n" .
                        "Content-length: " . strlen($json_string) . "\r\n",
                    "content" => $json_string,
                ],
            ]
        )
    );

    if (!$response)
        return false;

    if ($returns_json) {
        try {
            $data = json_decode($response);
        } catch (Exception $error) {
            return false;
        }

        if (!$data) {
            return false;
        } else {
            return $data;
        }
    } else {
        return $response;
    }
}

$zap_data = [
    "email" => "test@gmail.com"
];
$zap_url = "https://hooks.zapier.com/hooks/catch/3497148/q0ax2r/";
sendPostRequestJson($zap_url, $zap_data);

if (isset($_POST['signin'])) {
    extract($_POST);
    $username = $login_username;
    $password = $login_password;
    $creds = array();
    $creds['user_login'] = $username;
    $creds['user_password'] = $password;
    $creds['remember'] = true;
    $user = wp_signon($creds, false);
    if (is_wp_error($user)) {
        echo 'woops';
        echo $user->get_error_message();
    } else {
        $url = "/evaluation-unlocked/" . $params;
        ?>
<script type="text/javascript">
    window.location = "<?= $url; ?>";
</script>
<?php

    }
}

if (isset($_POST['register'])) {
    extract($_POST);


    $username = $register_email;
    $password = $register_password;
    $email_address = $register_email;
    if (!username_exists($username)) {
        $user_id = wp_create_user($username, $password, $email_address);
        $user = new WP_User($user_id);
        $user->set_role('subscriber');
        //login
        $creds = array();
        $creds['user_login'] = $username;
        $creds['user_password'] = $password;
        $creds['remember'] = true;
        $user = wp_signon($creds, false);
        if (is_wp_error($user)) {
            echo 'woops';
            echo $user->get_error_message();
        } else {
            // echo 'success';
            $url = "/evaluation-unlocked/" . $params;
            ?>
<script type="text/javascript">
    window.location = "<?= $url; ?>";
</script>
<?php
            // echo "<script>window.location='/evaluation-unlocked/'".$params."</script>";
            // var_dump($user);
        }

        
        // run it before the headers and cookies are sent
        // add_action( 'init', 'custom_login' );
    } else {
        echo 'username exist';
    }


}
get_header('nomenu');

$template_directory_uri = "/wp-content/themes/theoffercompany";

     //  function is_user_logged_in() {
     //    $user = wp_get_current_user();
     
     //    return $user->exists();
     // }
     // $user_status = is_user_logged_in();
     // var_dump($user_status);



function example_function()
{
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        echo $user->user_email;
        return $user->exists();
    }
}
add_action('init', 'example_function');
$user_status = example_function();
if ($user_status) {
    $us = 1;
} else {
    $us = 0;
}     
     // echo $user;


$api_key = "edba$7dDdf6ffe88ff9!120oCd";
$url = "http://data-api.smartzip-services.com:80/properties/details.json";
$properties = [
    "api_key" => $api_key,
    "street_address" => (!empty($_GET["street_address"])) ? urlencode($_GET["street_address"]) : "",
    "city" => (!empty($_GET["city"])) ? urlencode($_GET["city"]) : "",
    "state" => (!empty($_GET["state"])) ? urlencode($_GET["state"]) : "",
    "zip" => (!empty($_GET["zip"])) ? urlencode($_GET["zip"]) : "",
];
$params = "?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=";
$params2 = "?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=";
$params = $params . "&api_key=$properties[api_key]";
$api_url = $url . $params;

$data = file_get_contents($api_url);
$data = json_decode($data, true);

if (array_key_exists("analytics", $data)) {
            // echo "with analytics";
    $property = $data['property'];
    $analytics = $data['analytics'];
            //get agent for the current zip
    $data_agent = file_get_contents("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=" . $property['zip']);
    $data_agent = json_decode($data_agent, true);
    $data_agent = $data_agent[0];
    $zip = $property['zip'];
    $status = true;
    $sqft = $property['property_attributes']['sqft'];
    $beds = round($property['property_attributes']['beds']);
    $baths = round($property['property_attributes']['baths']);
    $estimate = $analytics['avm_high'];
} else {
            // echo "no data available";
            //set default agent

    $data_agent = file_get_contents("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=85255");
    $data_agent = json_decode($data_agent, true);
    $data_agent = $data_agent[0];
    $zip = "";
    $sqft = 0;
    $beds = 0;
    $baths = 0;
    $estimate = 0;
    $status = false;
}
?>
<div class="eval-header-container">
    <div class="faded">
        <div class="link-container">
            <a href="/" class="go-back">
                <i class="far fa-chevron-left"></i>
                Back
            </a>
        </div>
        <div class="main-header transparent">
            <div class="container">
                <div id="menu-opener"><span>Menu</div>
                <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $template_directory_uri; ?>/images/logo.png"
                            alt="" /></a></div>
            </div>
            <div class="slide-out-container" id="slide-out-nav">
                <p class="menu-title">Menu</p>
                <span class="close-menu" id="menu-closer"><i class="fal fa-times"></i></span>
                <a href="" class="btn btn-primary btn-block nav-login-btn">My account or register <i class="fal fa-arrow-right"></i></a>
                <div class="navigation">
                    <ul>
                        <?php
        $slide_nav = '';
        $slide_menu_class = 'et_mobile_menu';

        $slide_nav = wp_nav_menu(
            array(
                'theme_location' => 'primary-menu',
                'container' => '',
                'fallback_cb' => '',
                'echo' => false,
                'items_wrap' => '%3$s'
            )
        );
        $slide_nav .= wp_nav_menu(array('theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s'));

        echo ($slide_nav);
        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="eval-header">
            <?php if ($status) : ?>
            <div class="eval-header-content">
                <p>The Offer Company values</p>
                <h3 class="text-center">
                    <?= $property['address']; ?>
                </h3>
                <p>
                    <?= $property['city'] ?>,
                    <?= $property['state'] ?>
                    <?= $property['zip'] ?> at</p>
                <h1>$
                    <?= number_format($analytics['avm_high'], 0); ?>
                </h1>
            </div>
            <?php else : ?>
            <div class="eval-header-content" style="width: 500px;">

                <h3 class="text-center">Get an instant, online home value estimate.</h3>
                <div class="search-field search-desktop-field">
                    <div class="input-group buy" id="input-group">
                        <input type="text" class="form-control" id="landing-search" placeholder="Enter addresss, neighborhood, city or zip...">
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
</div>
<div class="eval-body">
    <h1 class="title">Compare home value</h1>
    <p class="sub-title">Compare our estimate to dozens of the top home buying companies.</p>
    <div class="eval-floating-container">
        <div class="eval-floating-block np-top">
            <div class="brand-logos">
                <img src="/wp-content/themes/theoffercompany/images/opendoor.png" alt="Opendoor">
                <img src="/wp-content/themes/theoffercompany/images/offerpad.png" alt="Offerpad">
                <img src="/wp-content/themes/theoffercompany/images/zillow.png" alt="Zillow">
            </div>
            <hr>
            <p>Estimates ready in 48 hours right to your email.</p>
            <a href="/questionaire/<?php echo " ?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip";
                ?>" class="btn btn-block">Compare Estimates <i class="far fa-arrow-right"></i></a>
            <a href="/selling-options/<?php echo " ?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip";
                ?>" class="btn btn-block inverted">No, I'm ready to sell now <i class="far fa-arrow-right"></i></a>
        </div>
    </div>
    <h1 class="questions">Can I answer any questions?</h1>
    <div class="eval-contact-agent">
        <div class="contact-agent-pic">
            <img src="<?= $data_agent['photo'] ?>" class="agent-pic" alt="agent">
        </div>
        <div class="contact-details">
            <h2 class="contact-agent-prev-name">
                <?= $data_agent['first_name'] . ' ' . $data_agent['last_name'] ?>
            </h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>
                <?= $data_agent['phone'] ?>
            </p>
            <p>
                <?= $data_agent['email'] ?>
            </p>
            <div class="call-chat-write">
                <a href="tel:<?= $data_agent['phone'] ?>"><i class="fas fa-phone agent-phone agent-phone-rotate"></i></a>
                <a href="sms:<?= $data_agent['phone'] ?>"><i class="fas fa-comment-alt agent-phone"></i></a>
                <a href="mailto:<?= $data_agent['email'] ?>"> <i class="fas fa-envelope agent-phone"></i></a>
            </div>
        </div>
    </div>
    <h1 class="title reports">Detailed home report</h1>
    <div class="reports-wrapper">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-md-inline-block d-none ">
                    <div class="outline">
                        <h3>Property details</h3>
                        <div class="line" style="width: 85%;"></div>
                        <div class="line" style="width: 65%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 95%;"></div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 report-content">
                    <?php if ($us == 1) : ?>
                    <i class="far fa-lock-alt lock"></i>
                    <p>See property details, comparable home insights and neighborhood trends.</p>
                    <a href="/evaluation-unlocked/<?= " ?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip&property_area=$sqft&beds=$beds&baths=$baths&estimate=$estimate";
                        ?>" class="btn btn-block" id="locked">I'm the owner. Show me! <i class="far fa-arrow-right"></i></a>
                    <?php else : ?>
                    <i class="far fa-lock-alt lock"></i>
                    <p>See property details, comparable home insights and neighborhood trends.</p>
                    <a href="#" data-toggle="modal" data-target="#unlock-modal" class="btn btn-block" id="locked">I'm
                        the owner. Show me! <i class="far fa-arrow-right"></i></a>

                    <?php endif; ?>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-md-inline-block d-none">
                    <div class="outline">
                        <h3>Neighborhood trends</h3>
                        <div class="line" style="width: 85%;"></div>
                        <div class="line" style="width: 65%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 45%;"></div>
                        <div class="line" style="width: 95%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODALS -->
<div id="unlock-modal" class="modal fade unlock" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content width-override">
            <div class="multi-step">
                <div class="step" id="initial">
                    <div class="modal-header">
                        <h5 class="modal-title">Sign in or register to unlock</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="close-link" aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="post">

                        <input type="hidden" name="params" value="<?= " ?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip&property_area=$sqft&beds=$beds&baths=$baths&estimate=$estimate";
                            ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                    <!-- <input type="text" name="register_username" class="form-control" placeholder="Username"> -->
                                    <input type="email" name="register_email" class="form-control" placeholder="Email"
                                        style="margin-top: 5px">
                                    <input type="password" name="register_password" class="form-control" placeholder="Password"
                                        style="margin-top: 5px">

                                    <!-- <button href="#" class="btn btn-block" name="register" type="submit" data-toggle="modal"
                                        data-target="#reg-modal" id="reg-button">Register <i class="far fa-arrow-right"></i></button> -->
                                    <a href="#" class="btn btn-block step-toggler" data-triger="#register">Register <i
                                            class="far fa-arrow-right"></i></a>
                                    <a href="#" class="btn btn-block step-toggler" data-triger="#login">Login <i class="far fa-arrow-right"></i></a>
                            </div>
                            <hr>
                            <div class="sphere-container">
                                <p>Or connect with</p>
                                <a class="sphere sphere--fb">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="sphere sphere--googl">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="step" id="login">
                    <div class="modal-header">
                        <h5 class="modal-title">Welcome back!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="close-link" aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="post">
                        <input type="hidden" name="params" value="<?= " ?street_address=$properties[street_address]&state=$properties[state]&city=$properties[city]&zip=$zip&property_area=$sqft&beds=$beds&baths=$baths&estimate=$estimate";
                            ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                    <input type="email" name="login_username" class="form-control" placeholder="Username"
                                        value="">
                                <div class="spacer-1rem"></div>
                                    <input type="password" name="login_password" class="form-control" placeholder="Password"
                                        value="">
                                <button class="btn btn-block" type="submit" name="signin">Sign in <i class="far fa-arrow-right"></i></button>
                                <a href="#" class="help-link">Forgot password?</a>
                            </div>
                            <hr>
                            <div class="sphere-container">
                                <p>Or connect with</p>
                                <a class="sphere sphere--fb">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="sphere sphere--googl">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="step" id="signup">
                    <div class="modal-header">
                        <h5 class="modal-title">Create a password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="close-link" aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p class="message">Create a password to access your account any time.</p>
                            <div class="spacer-1rem"></div>
                            <div class="has-key-left">
                                <input type="password" class="form-control" placeholder="Password" value="">
                            </div>
                            <a href="#" class="btn btn-block step-toggler">Submit <i class="far fa-arrow-right"></i></a>
                            <a href="#" class="help-link">Terms of use</a>
                        </div>
                    </div>
                </div>
                <div class="step" id="register">
                    <div class="eval-register-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="close-link" aria-hidden="true">×</span>
                            </button>
                            <h1>Welcome to The Offer Company!</h1>

                            <div class="links">
                                <a href="#">Sign in</a>
                                <a href="#" class="active">New Account</a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="wrapperForm">
                                <form class="lh-form">
                                    <div class="row no-gutters">
                                        <div class="form-group col-6 pr-2">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="form-group col-6">
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>

                                    <div class="row no-gutters">
                                        <div class="form-group col-12">
                                            <input type="text" class="form-control" placeholder="Mobile phone">
                                        </div>
                                    </div>

                                    <div class="row no-gutters">
                                        <div class="form-group col-12">
                                            <input type="text" class="form-control" placeholder="Enter email...">
                                        </div>
                                    </div>

                                    <div class="row no-gutters">
                                        <div class="form-group col-12">
                                            <input type="text" class="form-control" placeholder="Create password">
                                        </div>
                                    </div>

                                    <a data-triger="#pagesix" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                                    <a href="#" class="terms">Terms of Use</a>

                                    <div class="border-word">
                                        <span>OR</span>
                                        <div class="hr"></div>
                                    </div>

                                    <a class="offer-link offer-link--fb" href="#" class="continue-fb">
                                        <i class="fab fa-facebook-square"></i>
                                        Continue with Facebook
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<script type="text/javascript">
    jQuery("#locked").on("click", function (e) {
        e.preventDefault();
        url = jQuery(this).attr('href');
        us = <?= $us; ?>;
        if (us == 1) {
            window.location = url;
        }
    });
</script>


<script>
    let default_geo = {
        latitude: 33.45,
        longitude: -112.065,
    };

    jQuery(".buy").on("click", function () {
        jQuery("#mode").val('buy');
    });

    jQuery(".sell").on("click", function () {
        jQuery("#mode").val('sell');
    });

    jQuery(".estimate").on("click", function () {
        jQuery("#mode").val('estimate');
    });


    // This example retrieves autocomplete predictions programmatically from the
    // autocomplete service, and displays them as an HTML list.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initService() {
        var displaySuggestions = function (predictions, status) {
            if (status != google.maps.places.PlacesServiceStatus.OK) {
                alert(status);
                return;
            }
            let input_el = jQuery(".search-desktop-field");
            let x = input_el.offset().left;
            let y = (input_el.offset().top + input_el.outerHeight());
            let width = input_el.outerWidth();

            let parent = jQuery("#home_search_dropdown .items");
            parent.html("");

            jQuery("#home_search_dropdown")
                .css({
                    top: y,
                    left: x,
                    width: width,
                })
                .slideDown();

            // document.getElementById('results').innerHTML = "";
            predictions.forEach(function (prediction) {
                console.log(prediction);
                // var li = document.createElement('li');
                // li.appendChild(document.createTextNode(prediction.description));
                // document.getElementById('results').appendChild(li);
                parent.append(
                    `
              <div class="item">
                <div class="main_text">${ prediction.description }</div>
                <div class="sub_text"></div>
              </div>
            `
                );
            });
            parent.append(
                `
              <div class="itemm">
                <div class="main_text">&nbsp;</div>
                <div class="sub_text"></div>
              </div>
            `
            );
            parent.append(
                `
              <div class="itemm">
                <div class="main_text">&nbsp;</div>
                <div class="sub_text"></div>
              </div>
            `
            );

        };

        jQuery("#reg-button").on("click", function (e) {
            e.preventDefault();
        });

        //clicking an item on google autocomplete module
        jQuery("#landing-search").on("blur", function () {
            jQuery("#home_search_dropdown").slideUp();
        });
        jQuery("#home_search_dropdown .items").on("click", ".item", function () {
            let el = jQuery(this);
            let address = el.find(".main_text").text();
            let full_address = address;
            jQuery("#landing-search").val(full_address).trigger("change").blur();
            jQuery("#home_search_dropdown").slideUp();

            //console.log(mode);

            var res = full_address.split(",");
            var arr = [];
            for (i = 0; i < 4; i++) {
                arr.push(res.pop());
            }
            let country = arr[0];
            let state = arr[1];
            let city = arr[2];
            let street_address = arr[3];

            window.location = "/evaluation/?country=" + country + "&state=" + state + "&city=" + city +
                "&street_address=" + street_address;



        });

        var service = new google.maps.places.AutocompleteService();
        var query = document.getElementById('landing-search');
        query.addEventListener('keyup', function () {
            search_field = this.value;
            service.getQueryPredictions({
                input: search_field,
                location: new google.maps.LatLng(parseFloat(default_geo.latitude), parseFloat(
                    default_geo.longitude)),
                radius: 10000
            }, displaySuggestions);
        });

    }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaSZpfZpwVHh1sc7hV0FOLf7c96sInpsI&libraries=places&callback=initService"
    async defer></script>
<?php get_footer(); ?>