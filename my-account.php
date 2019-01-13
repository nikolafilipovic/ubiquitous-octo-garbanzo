<?php
/*
Template Name: My Account
*/
  get_header(nomenu);
?>
<div id="my-account">
    <div class="container-fluid">
        <div class="row">
            <div class="go-back">
                <a href="#"><i class="far fa-chevron-left"></i> Back</a>
                <p>My Account</p>
            </div>
        </div>
    </div>
    <div class="container content">
        <div class="row section">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <h1 class="segment-title">My Account</h1>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="profile-photo">
                            <img src="/wp-content/themes/theoffercompany/images/rafael_profile.png" alt="Rafael Nadal">
                            <div class="hover-overlay"><p>Edit Photo</p></div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="profile">
                            <h1>Rafael Nadal</h1>
                            <h6>Email</h6>
                            <p>rafael.nadal@atp.com</p>
                            <h6>Phone</h6>
                            <p>+45 424 2499 345</p>
                            <h6>Password</h6>
                            <p>&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;</p>
                            <a href="#" class="btn btn-block" data-toggle="modal" data-target="#edit-modal">Edit <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content width-override">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Edit information
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="close-link" aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body modal-body--center">
                                <label class="lh-label">Email</label>
                                <div class="form-group mt-1">
                                    <input type="email" class="form-control" />
                                </div>
                                <label class="lh-label">Phone</label>
                                <div class="form-group mt-1">
                                    <input type="text" class="form-control"/>
                                </div>
                                <label class="lh-label">Password</label>
                                <div class="form-group mt-1">
                                    <input type="password" class="form-control"/>
                                </div>
                                <label class="lh-label">Confirm password</label>
                                <div class="form-group mt-1">
                                    <input type="password" class="form-control"/>
                                </div>
                                <a href="#" class="btn btn-block">Save <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h1 class="segment-title collapsable toggle-collapse" data-target="#agent-info">My agent <i class="far fa-chevron-up faup d-md-none d-inline-block"></i></h1>
                <div class="agent-info collapse show" id="agent-info">
                    <input type="radio" name="radio-group" id="TOCAgent" checked><label for="TOCAgent">The Offer Company Agent</label>
                    <input type="radio" name="radio-group" id="OwnAgent"><label for="OwnAgent">I'm already working with an agent</label>
                    <div class="myaccount-contact-agent">
                        <div class="contact-agent-pic">
                            <img src="/wp-content/themes/theoffercompany/images/agent.png" class="agent-pic" alt="agent">
                        </div>
                        <div class="contact-details">
                            <h2 class="contact-agent-prev-name">Anette Brown</h2>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <p>602-448-7377</p>
                            <p>annete@theofferco.com</p>

                            <div class="call-chat-write">
                            <i class="fas fa-phone agent-phone agent-phone-rotate"></i>
                            <i class="fas fa-comment-alt agent-phone"></i>
                            <i class="fas fa-envelope agent-phone"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="d-md-none d-block">Already working with an agent? <i class="far fa-plus"></i></h6>
                    <form class="contact-agent-form d-md-none d-block">
                        <div class="form-group">
                            <div class="has-person-left">
                            <input type="text" class="form-control" placeholder="Agent name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="has-phone-left">
                            <input type="text" class="form-control" placeholder="Agent number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="has-mail-left">
                            <input type="text" class="form-control" placeholder="Agent email">
                            </div>
                        </div>
                        <a class="offer-link">Save</a>
                        <h5 class="d-md-none d-block"><i class="far fa-check-circle"></i> Successfully saved.</h5>
                    </form>
                </div>
            </div>
        </div>
        <div class="row section">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="segment-title collapsable center toggle-collapse" data-target="#home-offers">My home offers <i class="far fa-chevron-up faup d-md-none d-inline-block"></i></h1>
                <div class="home-offers collapse show" id="home-offers">
                    <h3>Buying but need to sell first?</h3>
                    <h4>We have two great options to choose from.</h4>
                    <a class="offer-link">Selling options <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row section">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="segment-title collapsable center toggle-collapse d-md-none d-inline-block" data-target="#home-offers-items">My home offers <i class="far fa-chevron-up faup d-md-none d-inline-block"></i></h1>
                <div class="home-offers-items collapse show" id="home-offers-items">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    Offer 1
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Offer price</p>
                                            <h6>$675,000</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Closing date</p>
                                            <h6>27 / 11 / 2018</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Payment type</p>
                                            <h6>Wire</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Home inspection</p>
                                            <h6>Yes</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Appraisal</p>
                                            <h6>Yes</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Need to sell home</p>
                                            <h6>No</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Sale "as is"</p>
                                            <h6>Yes</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p>Notes</p>
                                    <h6>This house is perfect for us but our budget is limited unfortunately, would like to get it for $675k if possible. Looking forward to your reply.</h6>
                                    <div class="d-none d-md-block quick-contact">
                                        <i class="fas fa-phone agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Call Annete</span>
                                        <i class="fas fa-comment-alt-dots agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Text Annete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    Offer 2
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Offer price</p>
                                            <h6>$675,000</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Closing date</p>
                                            <h6>27 / 11 / 2018</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Payment type</p>
                                            <h6>Wire</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Home inspection</p>
                                            <h6>Yes</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Appraisal</p>
                                            <h6>Yes</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Need to sell home</p>
                                            <h6>No</h6>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                            <p>Sale "as is"</p>
                                            <h6>Yes</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p>Notes</p>
                                    <h6>This house is perfect for us but our budget is limited unfortunately, would like to get it for $675k if possible. Looking forward to your reply.</h6>
                                    <div class="d-none d-md-block quick-contact">
                                        <i class="fas fa-phone agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Call Annete</span>
                                        <i class="fas fa-comment-alt-dots agent-round round-blue"></i><span class="agent-phone-text font-padding-stilization">Text Annete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="segment-title collapsable center toggle-collapse" data-target="#sales-calculator">Sales proceeds calculator <i class="far fa-chevron-up faup d-md-none d-inline-block"></i></h1>
                <div class="sales-calculator collapse show" id="sales-calculator">
                    <div class="mobile-estimate d-md-none d-block">
                        <p>Estimated sale price</p>
                        <h6>$1,788,000</h6>
                        <i class="fal fa-chevron-down"></i>
                        <p>Estimated proceeds</p>
                        <h5>$596,935</h5>
                        <hr>
                    </div>
                    <div class="desktop-estimate d-md-block d-none">
                        <div class="row no-gutters">
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7 left">
                                <p>Estimated sale price</p>
                                <h6>$1,788,000</h6>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 right">
                                <p>Estimated proceeds</p>
                                <h6>$596,935</h6>
                            </div>
                        </div>
                    </div>
                    <div class="fields">
                        <form class="lh-form">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <label class="lh-label">Estimated sale price</label>
                                    <div class="form-group mt-1">
                                        <div class="has-dollar-left">
                                            <input type="text" class="form-control" placeholder="1,788,000" />
                                        </div>
                                    </div>
                                    <label class="lh-label">Estimated mortgage balance</label>
                                    <div class="form-group mt-1">
                                        <div class="has-dollar-left">
                                            <input type="text" class="form-control" placeholder="448,307" />
                                        </div>
                                    </div>
                                    <label class="lh-label">Agent comission</label>
                                    <div class="form-group mt-1">
                                        <div class="has-amp-right">
                                            <input type="text" class="form-control" placeholder="6" />
                                        </div>
                                    </div>
                                    <label class="lh-label">Transfer or excise tax</label>
                                    <div class="form-group mt-1">
                                        <div class="has-amp-right">
                                            <input type="text" class="form-control" placeholder="0" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <label class="lh-label">Title insurance</label>
                                    <div class="form-group mt-1">
                                        <div class="has-dollar-left">
                                            <input type="text" class="form-control" placeholder="3,560" />
                                        </div>
                                    </div>
                                    <label class="lh-label">Escrow fees</label>
                                    <div class="form-group mt-1">
                                        <div class="has-dollar-left">
                                            <input type="text" class="form-control" placeholder="$2,284" />
                                        </div>
                                    </div>
                                    <label class="lh-label">Misc fees</label>
                                    <div class="form-group mt-1">
                                        <div class="has-dollar-left">
                                            <input type="text" class="form-control" placeholder="$4,068" />
                                        </div>
                                    </div>
                                </div>
                                <a class="offer-link">Calculate</a>
                            </div>
                            <p>All calculations and costs are estimates. Please consult a professional to determine your exact proceeds.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="segment-title collapsable center toggle-collapse" data-target="#saved-homes">Saved homes <i class="far fa-chevron-up faup d-md-none d-inline-block"></i></h1>
                <h6 class="sub-title">3 homes</h6>
                <div class="saved-homes collapse show" id="saved-homes">
                    <h2>Share easily with others</h2>
                    <a class="offer-link" data-toggle="modal" data-target="#share-saved-homes-modal">Invite people now</a>
                    <div class="saved-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="shadow-saved">
                                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-1.png)">
                                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                                            <h1 class="property-price">$425,000</h1>
                                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                        </div>
                                        <div class="property-links">
                                            <a class="offer-link">Make an Offer <i class="far fa-arrow-right fasarrow"></i></a>
                                            <a class="offer-link">Schedule Tour <i class="far fa-arrow-right fasarrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="shadow-saved">
                                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-2.png)">
                                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                                            <div class="last-call"><span class="badge badge-success"><i class="far fa-dot-circle"></i> Last Call</span></div>
                                            <h1 class="property-price">$425,000</h1>
                                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                        </div>
                                        <div class="property-links">
                                            <a class="offer-link">Make an Offer <i class="far fa-arrow-right fasarrow"></i></a>
                                            <a class="offer-link">Schedule Tour <i class="far fa-arrow-right fasarrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="shadow-saved">
                                        <div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url(/wp-content/themes/theoffercompany/images/property-3.png)">
                                            <span class="time-on-market"><i class="fal fa-vr-cardboard"></i>5 days on the market</span>
                                            <a href="#" class="favourite"><i class=" far fa-heart"></i></a>
                                            <span class="sale-type"><i class="red-dot"></i>House for Sale</span>
                                            <h1 class="property-price">$425,000</h1>
                                            <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,2...</span></div>
                                            <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                        </div>
                                        <div class="property-links">
                                            <a class="offer-link">Make an Offer <i class="far fa-arrow-right fasarrow"></i></a>
                                            <a class="offer-link">Schedule Tour <i class="far fa-arrow-right fasarrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pre-approval">
                <a class="offer-link">Get pre-approved <i class="far fa-arrow-right fasarrow"></i></a>
            </div>
        </div>
        <div class="separator d-md-block d-none"></div>
        <div class="row section">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h1 class="segment-title collapsable toggle-collapse" data-target="#saved-searches">Saved searches <i class="far fa-chevron-up faup d-md-none d-inline-block"></i></h1>
                <div class="saved-searches collapse show" id="saved-searches">
                    <p>Phoenix, AZ</p>
                    <h6>For Sale, Foreclosure, 3+ Bedrooms</h6>
                    <input type="radio" name="radio-group2" id="Instant"><label for="Instant">Instant</label> <input type="radio" name="radio-group2" id="Daily" checked><label for="Daily">Daily</label><p class="delete"><i class="fal fa-times"></i> Delete</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h1 class="segment-title collapsable toggle-collapse" data-target="#saved-vr-tours">Saved virtual tours <i class="far fa-chevron-up faup d-md-none d-inline-block"></i></h1>
                <div class="saved-vr-tours collapse show" id="saved-vr-tours">
                    <input type="radio" name="radio-group3" id="Multiple" checked><label for="Multiple">Add multiple tours to list</label> 
                    <input type="radio" name="radio-group3" id="Individual"><label for="Individual">Watch individual tour when clicked</label>
                    <p class="save">Save</p>
                    <a class="offer-link">Start tour <i class="far fa-arrow-right fasarrow"></i></a>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6">
                            <div class="vr-house" style="background: url(/wp-content/themes/theoffercompany/images/vr-house-1.png)"><i class="fal fa-times"></i></div>
                            <p class="vr-address">4549 E Cheyenne Dr, Proenix, AZ</p>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6">
                            <div class="vr-house" style="background: url(/wp-content/themes/theoffercompany/images/vr-house-2.png)"><i class="fal fa-times"></i></div>
                            <p class="vr-address">4549 E Cheyenne Dr, Proenix, AZ</p>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6">
                            <div class="vr-house" style="background: url(/wp-content/themes/theoffercompany/images/vr-house-3.png)"><i class="fal fa-times"></i></div>
                            <p class="vr-address">4549 E Cheyenne Dr, Proenix, AZ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- MODALS -->
    <div id="share-saved-homes-modal" class="modal fade share-saved-homes" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content width-override">
                <div class="modal-header">
                    <h5 class="modal-title">Share saved homes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="close-link" aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p class="message">Shopping with someone else? Enter the email address and we'll notify them every time you save a home.</p>
                        <div class="spacer-1rem"></div>
                        <div class="has-mail-left">
                            <input type="text" class="form-control" placeholder="Email" value="">
                        </div>
                        <a href="#" class="btn btn-block step-toggler">Start sharing <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>