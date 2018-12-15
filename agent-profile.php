<div id="root">
<input type="hidden" id="agent_id" name="agent_id" value="<?= $_GET['id'] ?>">
<?php
/*
Template Name: Agent Profile
*/
  get_header(nomenu);
?>
<div class="container-fluid">
    <div class="row">
        <div class="go-back">
            <a href="#"><i class="far fa-chevron-left"></i> Back</a>
            <p>Agent profile</p>
        </div>
    </div>
</div>
<div id="agent-profile">
    <div class="container content">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 main">
                <div class="agent-pic-rating">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <img :src="agent.photo" alt="Anette Brown">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                            <h1 v-cloak>{{agent.first_name}} {{agent.last_name}}</h1>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                            <p>4.7 <span>/ 5</span></p>
                        </div>
                    </div>
                </div>
                <div class="buttons-call-text">
                    <div class="one">
                        <i class="fas fa-phone rotate"></i>
                        <p><a :href="'tel:'+agent.phone">Call Agent</a></p>
                    </div>
                    <div class="one">
                        <i class="fas fa-comment-alt-dots"></i>
                        <p><a :href="'sms:'+agent.phone">Text Agent</a></p>
                    </div>
                </div>
                <h3>Welcome!</h3>
                <p class="paragraph"><b>Specialities:</b> Buyer's Agent, Listing Agent, Relocation, Consulting, Property management.</p>
                <p class="paragraph">Annete is a highly skilled dedicated Real Estate agent that brings results! With a great deal of sales experience, out of the box thinking and endless caring, Annette guides her clients all the way to their Real Estate goals. Phoenix, AZ area is Annette's expertise. So, whether you buy/sell or invest in this area, join our trustful family...</p>
                <section class="sphere-container spaced">
                    <a class="sphere-small sphere--fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="sphere-small sphere--twitt">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="sphere-small sphere--in">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="sphere-small sphere--pinta">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </section>
                <div class="plus-button">
                    <i class="fas fa-plus"></i>
                    More
                </div>
                <div class="pref-lender">
                    <h3>Preferred Lender</h3>
                    <img src="/wp-content/themes/theoffercompany/images/man.png">
                    <div class="text" v-cloak>
                        <p>{{agent.lender_fname}} {{agent.lender_lname}}</p>
                        <a href="#">Get pre-qualified <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="listing-results">
                    <div class="choices">
                        <p class="active">Active listings <span>(5)</span></p>
                        <p @click="getPendingProperties()">Under contract <span>(5)</span></p>
                    </div>
                    <div class="results">
                        <div class="legend d-md-none d-block">
                            <p>Property Address</p>
                            <p class="price">Price</p>
                        </div>
                        <div v-for="property in properties" class="result-item">
                            <img :src="property.images[0]" alt="Property 1">
                            <p>{{property.address_full}}</p>
                            <p class="price">${{property.listPrice}}</p>
                        </div>
                        
                        <a href="#" class="btn btn-block">Check your home's value <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="property-slider lh-property-slider">
                    <h1 class="list-home-title text-center">Ahwatukee Lifestyle</h1>
                    <p class="list-home-subtitle text-center">Get weekly updates about what's happening in Ahwatukee.</p>
                    <div class="row justify-content-center no-gutters">
                        <div class="col-11 col-md-9 col-lg-12 m-auto">
                            <div class="owl-carousel owl-carousel-lh">
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-1.png)">
                                </div>
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-2.png)">
                                </div>
                            </div>
                            <div class="lifestyle-news mb-4">
                                <small class="small-imp">Upgrading home</small>
                                <p>Prep for 'Prost!' Season 9 Bavarian Style Homes to Inspire Oktoberfest</p>
                                <div class="review-by">
                                    <img src="/wp-content/themes/theoffercompany/images/chrisbrown.png" alt="review" />
                                    <p>Chris Brown</p>
                                    <small>on 25 Oct 2018</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blue-bg mb-4">
                        <p>Don't miss a thing in Ahwatukee!</p>
                        <small>Join our growing community who get weekly updates about what's happening.</small>
                        <a href="#">Get updates
                        <i class="far fa-arrow-right fasarrow"></i>
                        </a>
                    </div>
                </div>
                <h3>Ratings & reviews</h3>
                <a href="#" class="btn btn-block">Write a review</a>
                <hr>
                <div class="reviews">
                    <div class="review-item">
                        <div class="review-heading">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <p>Higly recommended!</p>
                            <span>10/23/2018 <i class="fas fa-dot"></i> Strahinja.S</span>
                            <span>Des Moines, Iowa</span>
                        </div>
                        <div class="review-rates">
                            <div class="enclosure"><p>Local knowledge: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Process expertise: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Responsiveness: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Negotiation skills: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="paragraph">Annete is a highly skilled dedicated Real Estate agent that brings results! With a great deal of sales experience, out of the box thinking and endless caring, Annette guides her clients all the way to their Real Estate goals. Phoenix, AZ area is Annette's expertise. So, whether you buy/sell or invest in this area, join our trustful family...</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-heading">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <p>Higly recommended!</p>
                            <span>10/23/2018 <i class="fas fa-dot"></i> Strahinja.S</span>
                            <span>Des Moines, Iowa</span>
                        </div>
                        <div class="review-rates">
                            <div class="enclosure"><p>Local knowledge: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Process expertise: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Responsiveness: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Negotiation skills: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="paragraph">Annete is a highly skilled dedicated Real Estate agent that brings results! With a great deal of sales experience, out of the box thinking and endless caring, Annette guides her clients all the way to their Real Estate goals. Phoenix, AZ area is Annette's expertise. So, whether you buy/sell or invest in this area, join our trustful family...</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-heading">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <p>Higly recommended!</p>
                            <span>10/23/2018 <i class="fas fa-dot"></i> Strahinja.S</span>
                            <span>Des Moines, Iowa</span>
                        </div>
                        <div class="review-rates">
                            <div class="enclosure"><p>Local knowledge: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Process expertise: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Responsiveness: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="enclosure"><p>Negotiation skills: </p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="paragraph">Annete is a highly skilled dedicated Real Estate agent that brings results! With a great deal of sales experience, out of the box thinking and endless caring, Annette guides her clients all the way to their Real Estate goals. Phoenix, AZ area is Annette's expertise. So, whether you buy/sell or invest in this area, join our trustful family...</p>
                        </div>
                    </div>
                    <div class="plus-button">
                        <i class="fas fa-plus"></i>
                        Read more reviews
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 sidebar">
                <div class="contact-agent">
                    <strong class="small-imp">CONTACT AGENT</strong>
                    <div class="contact-agent-prev row no-gutters">
                        <div class="col-2" v-cloak>
                            <img :src="agent.photo" />
                        </div>
                        <div class="col-10 contact-agent-details">
                            <h2 class="contact-agent-prev-name" v-cloak>{{agent.first_name}} {{agent.last_name}}</h2>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <p v-cloak>{{agent.phone}}</p>
                            <p v-cloak>{{agent.email}}</p>
                            <div class="contact-agent-controlls d-block d-md-none">
                                <i class="fas fa-phone agent-phone"></i><span class="font-padding-stilization"><a :href="'tel:'+agent.phone">Call</a></span>
                                <i class="fas fa-comment-alt agent-text"></i><span class="font-padding-stilization"><a :href="'sms:'+agent.phone">Text</a></span>
                            </div>
                        </div>
                    </div>
                    <form class="contact-agent-form">
                        <div class="form-group">
                            <div class="has-person-left">
                                <input type="text" class="form-control" placeholder="Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="has-phone-left">
                                <input type="text" class="form-control" placeholder="Phone" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="has-mail-left">
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                        </div>
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Question"></textarea>
                        </div>
                        <div class="offer-link">
                            <button>Contact Agent</button>
                            <i class="far fa-arrow-right fasarrow"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="http://l8u.9b2.myftpupload.com/wp-content/themes/theoffercompany/agent.js?rand=<?= uniqid(); ?>"></script>