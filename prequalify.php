<?php
  /*
    Template Name: Prequalify
  */

  get_header(nomenu);
?>
<style>
  html {margin-top: 0px !important;}
  .instruction {display:none !important;}
  .gform_body{width:50%; margin: auto;}
</style>

<div id="wrapper" class="makeanoffer">
  <div class="wrapper quest-wrapper">
    <div class="quest-faded quest-faded-100">
      <div class="wrapperTop quest-WT">
        <a href="#"><i class="far fa-angle-left" aria-hidden="true"></i>Back</a>
      </div>
	  
	 <!--- <div class="steps multi-step">
        <div class="step" id="pageone">
          <div class="container-fluid h-100 mod">
            <div class="row h-100">
              <div class="col-12 my-auto mod">
			  	<?php echo do_shortcode("[gravityform id=15 title=false description=false]"); ?>
			  	</div>
			  </div>
			</div>
		</div>
	 </div>--->
	  
     <div class="steps multi-step">
        <div class="step" id="pageone">
          <div class="container-fluid h-100 mod">
            <div class="row h-100">
              <div class="col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Pre qualification</h1>
                  <h5>Let's get started. Are you a first time homebuyer?*</h5>
                </div>
              </div>
			  
			  <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="homebuyer-yes"><label for="homebuyer-yes">Yes</label>

                        <input type="radio" name="radio-group" id="homebuyer-no"><label for="homebuyer-no">No</label>

                      </div>

                      <a data-triger="#pagetwo" class="offer-link fixed-width step-toggler with-margin-top" href="#">Next
                        <i class="far fa-arrow-right"></i></a>
                    </div>
                  </form>
                </div>
			 
            </div>
          </div>
        </div>
        <div class="step" id="pagetwo">
          <div class="container-fluid h-100">
            <div class="row h-100 d-block">
              <div class="flexed col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                  <h5 class="smaller-margin">Do you have a real estate agent?*</h5>
                </div>

                <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="estate-agent-yes"><label for="estate-agent-yes">Yes</label>

                        <input type="radio" name="radio-group" id="estate-agent-no"><label for="estate-agent-no">No</label>

                      </div>

                      <a data-triger="#pagethree" class="offer-link fixed-width step-toggler with-margin-top" href="#">Next
                        <i class="far fa-arrow-right"></i></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="step" id="pagethree">
          <div class="container-fluid h-100">
            <div class="row h-100 d-block">
              <div class="flexed col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                  <h5 class="smaller-margin">How will you use your new home?*</h5>
                </div>

                <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="Primary-residence"><label for="Primary-residence">Primary residence</label>

                        <input type="radio" name="radio-group" id="Second-home"><label for="Second-home">Second home</label>

                        <input type="radio" name="radio-group" id="Investment-property"><label for="Investment-property">Investment property</label>
                      </div>

                      <a data-triger="#pagefour" class="offer-link fixed-width step-toggler with-margin-top" href="#">Next
                        <i class="far fa-arrow-right"></i></a>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="step" id="pagefour">
          <div class="container-fluid h-100">
            <div class="row h-100 d-block">
              <div class="flexed col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                  <h5 class="smaller-margin">Are you or your spouse a veteran or active military?</h5>
                </div>

                 <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="active-military-yes"><label for="active-military-yes">Yes</label>

                        <input type="radio" name="radio-group" id="active-military-no"><label for="active-military-no">No</label>

                      </div>

                      <a data-triger="#pagefive" class="offer-link fixed-width step-toggler with-margin-top" href="#">Next
                        <i class="far fa-arrow-right"></i></a>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="step" id="pagefive" data-on-enter="removeOldBackground">
          <div class="container-fluid h-100">
            <div class="row h-100">
              <div class="col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                </div>
              </div>
			  
              <div class="wrapperForm">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <div class="form-group col-12">
                      <input type="text" placeholder="How much do you have for a down payment?" class="form-control" value="">
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-12">
                      <input type="text" placeholder="What's your annual income before taxes?" class="form-control" value="">
                    </div>
                  </div>
                  <a data-triger="#pagesix" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="step" id="pagesix" data-on-enter="removeOldBackground">
          <div class="container-fluid h-100">
            <div class="row h-100 d-block">
              <div class="flexed col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                  <h5 class="smaller-margin">What's your estimated credit score?*</h5>
                </div>

                <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="Excellent"><label for="Excellent">Excellent</label>

                        <input type="radio" name="radio-group" id="Good"><label for="Good">Good</label>

                        <input type="radio" name="radio-group" id="Average"><label for="Average">Average</label>
						
						<input type="radio" name="radio-group" id="Poor"><label for="Poor">Poor</label>

                        <input type="radio" name="radio-group" id="Bad"><label for="Bad">Bad</label>
                      </div>

                      <a data-triger="#pageseven" class="offer-link fixed-width step-toggler with-margin-top" href="#">Next
                        <i class="far fa-arrow-right"></i></a>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="step" id="pageseven" data-on-enter="removeOldBackground">
          <div class="container-fluid h-100">
            <div class="row h-100 d-block">
              <div class="flexed col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                  <h5 class="smaller-margin">Are you self-employed?*</h5>
                </div>

                 <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="self-employed-yes"><label for="self-employed-yes">Yes</label>

                        <input type="radio" name="radio-group" id="self-employed-no"><label for="self-employed-no">No</label>

                      </div>

                      <a data-triger="#pageeight" class="offer-link fixed-width step-toggler with-margin-top" href="#">Next
                        <i class="far fa-arrow-right"></i></a>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="step" id="pageeight" data-on-enter="removeOldBackground">
          <div class="container-fluid h-100">
            <div class="row h-100 d-block">
              <div class="flexed col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                  <h5 class="smaller-margin">Have you had a bankruptcy, foreclosure, or short sale in the past 7 years?*</h5>
                </div>

                 <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="bankruptcy-yes"><label for="bankruptcy-yes">Yes</label>

                        <input type="radio" name="radio-group" id="bankruptcy-no"><label for="bankruptcy-no">No</label>

                      </div>

                      <a data-triger="#last-page" class="offer-link fixed-width step-toggler with-margin-top" href="#">Continue browsing
                        <i class="far fa-arrow-right"></i></a>
                    </div>
                  </form>
                </div>
				<div class="wrapperMid">
                  <h5 class="smaller-margin">A preferred lender will call you to discuss your options. By clicking continue you authorize The Offer Company to send the information you provided.</h5>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="complete-bar-footer">
      <p>0% complete</p>
    </div>
  </div>
</div>
</div>