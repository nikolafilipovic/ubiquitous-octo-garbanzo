<!-- <div id="root"> -->
<?php
    /*
    Template Name: Evaluation Unlocked
    */
      get_header(nomenu);
       function example_function(){
            if ( is_user_logged_in() ) {
                $user = wp_get_current_user();
                return $user->exists();
            }
         } 
         add_action('init', 'example_function');
         $user_status = example_function();
         if ($user_status){
            $us = 1;
         }else{
            $us = 0;
         }     
         // echo $us;
      $template_directory_uri = "/wp-content/themes/theoffercompany";
      if (!isset($_GET['street_address']) || !isset($_GET['city']) || !isset($_GET['zip'])){
            ?>
           <!--Turned off for now  
	           <script type="text/javascript">
                window.location="/evaluation/";
            </script>---->
            <?
      }
      $street_address = $_GET['street_address'];
      $state = $_GET['state'];
      $zip = $_GET['zip'];
      $city = $_GET['city'];
      $property_area = $_GET['property_area'];

      $agent = file_get_contents("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=".$zip);
      $agent = json_decode($agent,true);
      $agent = $agent[0];
    ?>
<div class="eval-unlocked-header-container">
    <div class="faded">
        <div class="main-header transparent">
            <div class="container">
                <div id="menu-opener"><span>Menu</div>
                <div class="logo d-none d-md-block"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $template_directory_uri; ?>/images/logo.png"
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
                            $slide_nav .= wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );

                            echo( $slide_nav );
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="eval-unlocked-header">
            <div class="eval-unlocked-header-content">
                <span class="status"><i class="black-dot"></i>Off Market</span>
                <h3><?= $street_address ?>,</h3>
                <p><?= $city ?>, <?= $state ?> <?= $zip ?></p>
                <!-- <p><strong>Estimate: $<?= number_format($_GET['estimate'],2); ?></strong></p>
                <div class="property-info"><span class="beds"><?= $_GET['beds'] ?> Beds</span><i class="fas fa-circle"></i><span class="baths"><?= $_GET['baths'] ?>
                        Baths</span><i class="fas fa-circle"></i><span class="sqft"><?= $_GET['property_area']; ?> Sq Ft</span></div> -->
            </div>
        </div>
    </div>
</div>
<div id="root">
<div class="eval-unlocked-body">
    <div class="eval-unlocked-floating-container">
        <div class="eval-unlocked-floating-block">
            <h1>Comparable home insights</h1>
            <p class="desc">This estimate looks at recently sold homes with similar features to this home, like it's location, square footage, bedrooms and bathrooms.</p>
            <p class="avg">Avg. sold price <span>${{info.avg_price.toFixed(0)}}</span></p>
            <p class="avg">Avg. price/sqft <span>${{info.avg_price_per_square_foot.toFixed(0)}}</span></p>
            <p class="avg">Avg. days on market <span>36 days</span></p>
            <p class="comp">Comparable homes <span>$/sqft</span></p>
            <div class="comp-homes">
                <div class="comp-item" v-for="(property,index) in properties" v-if="index < property_count">
                    <div class="ch-img">
                        <div class="ch-background-img"  :style="'background-image: url('+property.image+')'"></div>
                    </div>
                    <div class="info">
                        <small>SOLD {{newDate(property.sales_closeDate)}}</small>
                        <p class="highlighted">${{property.listPrice.toFixed(0)}}</p>
                        <div class="property-info">
                            <span class="beds">{{property.property_bedrooms}} bd</span>
                            <span class="dot">•</span>
                            <span class="baths">{{property.property_bathrooms}} ba</span>
                            <span class="dot">•</span>
                            <span class="sqft">{{property.property_area}} Sq Ft</span>
                        </div>
                        <p class="location">{{property.address_full}}</p>
                    </div>
                    <p class="price-sqft">${{getPricePerFoot(property.listPrice,property.property_area)}}</p>
                </div>

                


            </div>
            <div class="see-more" v-if="see_more">
                <a href="#" @click.prevent="showMore()">
                    <i class="fas fa-plus"></i>
                    See more
                </a>
            </div>
        </div>

        <div class="eval-unlocked-floating-block neighboorhood-trends" style="margin-top: 0 !important;">
            <h1 class="heading-center">Neighborhood trends</h1>
            <div class="comp-homes">
                

                <div class="comp-item" v-for="(property2,index2) in properties2" v-if="index2 < property_count2">
                    <div class="ch-img  ch-circle">
                        <div class="ch-background-img ch-bg-img" :style="'background-image: url('+property2.image+')'"></div>
                    </div>
                    <div class="info">
                        <p class="highlighted">{{property2.address_full}}</p>
                        <p class="new-info">${{property2.listPrice.toFixed(0)}}</p>
                        <p class="location">{{property2.distance.toFixed(1)}} mi away</p>
                    </div>
                </div>

               


            </div>
            <div class="see-more" v-if="see_more2">
                <a href="#" @click.prevent="showMore2()">
                    <i class="fas fa-plus"></i>
                    See more
                </a>
            </div>
        </div>
    </div>

    <h1 class="questions">Can I answer any questions?</h1>
    <div class="eval-unlocked-contact-agent">
        <div class="contact-agent-pic">
            <img src="<?= $agent['photo'] ?>" class="agent-pic" alt="agent">
        </div>
        <div class="contact-details">
            <h2 class="contact-agent-prev-name"><?= $agent['first_name'].' '.$agent['last_name'] ?></h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p><?= $agent['phone'] ?></p>
            <p><?= $agent['email'] ?></p>
            <div class="call-chat-write">
                <a href="tel:<?= $agent['phone'] ?>"><i class="fas fa-phone agent-phone agent-phone-rotate"></i></a>
                <a href="sms:<?= $agent['phone'] ?>"><i class="fas fa-comment-alt agent-phone"></i></a>
                <a href="mailto:<?= $agent['email'] ?>"><i class="fas fa-envelope agent-phone"></i></a>
            </div>
        </div>
    </div>

    <div class="row-blue-adv">
        <div class="blue-adv">
            <h2>Thinking of selling your home?</h2>
            <p>We've made it simple.</p>
            <p>Get the best price for your home and save the hassle of repairs, showings and months of uncertainly.</p>
            <a href="/selling-options/<?= "?street_address=$street_address&state=$state&city=$city&zip=$zip&property_area=$property_area"; ?>">
                Selling options
                <i class="far fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
</div><!--root-->
<?php get_footer(); ?>
<!-- </div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
<script type="text/javascript">
    new Vue({
        el:'#root',
        data:{
            street_address : "<?= $street_address; ?>",
            city : "<?= $city; ?>",
            state : "<?= $state; ?>",
            zip : "<?= $zip; ?>",
            property_area : <?= $property_area ?>,
            properties: [],
            properties2: [],
            info:{},
            info2:{},
            see_more:true,
            see_more2:true,
            property_count:3,
            property_count2: 3,
        },
        created: function(){
            this.loadEvaluate(this.state,this.city,this.street_address,this.zip,this.property_area);
            this.loadNearby(this.state,this.city,this.street_address,this.zip,this.property_area);
        },
        methods:{
            loadEvaluate: function(state,city,street_address,zip,property_area){
                // console.log(state);
                axios.get("http://portal.theoffercompany.com/api/evaluateAddress.php?state="+state+"&city="+city+"&street_address="+street_address+"&zip="+zip+"&property_area="+property_area)
                .then(response =>{
                    // data = response.data;
                    this.properties = response.data.properties;
                    this.info = response.data.info;
                });
            },
            loadNearby: function(state,city,street_address,zip,property_area){
                axios.get("http://portal.theoffercompany.com/api/evaluateMlsAddress.php?state="+state+"&city="+city+"&street_address="+street_address+"&zip="+zip+"&property_area="+property_area)
                .then(response =>{
                    // data = response.data;
                    this.properties2 = response.data.properties;
                    this.info2 = response.data.info;
                    console.log(this.properties2);
                    console.log(this.info2);
                });
            },
            showMore: function(){
                this.property_count = 6;
                this.see_more = false;
            },
            showMore2: function(){
                this.property_count2 = 6;
                this.see_more2 = false;
            },
            getPricePerFoot:function(listPrice,property_area){
                new_price = listPrice/property_area;
                return new_price.toFixed(0);
            },
            newDate: function(dt){
                let a = moment(dt).format('MM/DD/YY');
                return a;
            }
        }
    });
</script>
