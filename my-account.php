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
                            <a href="#" class="btn btn-block">Edit <i class="far fa-arrow-right"></i></a>
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
    </div>
</div>
<?php get_footer(); ?>