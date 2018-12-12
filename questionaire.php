<?php
  /*
    Template Name: Questionaire
  */

  get_header(nomenu);
?>
<style>
  #wrapper {
    height: 100vh;
  }
</style>
<div id="wrapper" class="makeanoffer">
  <div class="wrapper quest-wrapper">
    <div class="quest-faded">
      <div class="wrapperTop quest-WT">
        <a href="#"><i class="far fa-angle-left" aria-hidden="true"></i>Back</a>
      </div>
      <div class="steps multi-step">
        <div class="step" id="pageone">
          <!-- Container-Fluid znaci da container bude od ivice do ivice. h-100 znaci da uzme visinu od 100% -->
          <div class="container-fluid h-100 mod">
            <!-- h-100 znaci da uzme visinu od 100% -->
            <div class="row h-100">
              <!-- my-auto znaci da centrira y (vertikalno) marginama po sredini. -->
              <div class="col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Title goes here</h1>
                  <p>5 minutes to complete</p>
                  <h5>Please confirm the following facts about your home.</h5>
                </div>
              </div>
              <div class="wrapperForm">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <div class="form-group col-12">
                      <input type="text" class="form-control" value="2595 W Sunset Dr, New River, AZ 85087">
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" value="4">
                      <p class="placeholder">Bedrooms</p>

                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" value="2">
                      <p class="placeholder">Bathrooms</p>
                    </div>
                  </div>

                  <div class="row no-gutters">
                    <div class="form-group col-12">
                      <input type="text" class="form-control" value="980">
                      <p class="placeholder">sqft</p>
                    </div>
                  </div>
                  <a data-triger="#pagefour" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                </form>
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
                  <h5 class="smaller-margin">Does your kitchen have any of these features?</h5>
                </div>

                <div class="wrapperForm">
                  <div class="checkboxes">
                    <div class="cb-first-group">
                      <label class="custom-checkmark">
                        Kitchen island
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>

                      <label class="custom-checkmark">
                        New cabinets
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>

                      <label class="custom-checkmark">
                        Tile backsplash
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>

                      <label class="custom-checkmark">
                        Double oven
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>

                    <div class="cb-second-group">
                      <label class="custom-checkmark">
                        Built-in microwave
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>

                      <label class="custom-checkmark">
                        Walk-in pantry
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>

                      <label class="custom-checkmark">
                        None of the above
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>

                </div>
                <a data-triger="#pagefour" class="offer-link fixed-width step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
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
                  <h5 class="smaller-margin">What is the condition of your master bathroom?</h5>
                  <hr>
                  <p class="bath-desc">We're most interested in your shower, vanity, toilet, countertops and floor.</p>
                </div>

                <div class="wrapperForm">
                  <form class="radiobuttons">
                    <div class="rb-flex-container">
                      <div class="rb-labels-group">
                        <input type="radio" name="radio-group" id="Repairs"><label for="Repairs">Needs repairs</label>

                        <input type="radio" name="radio-group" id="Corrections"><label for="Corrections">Some chips,
                          stains, cracks or loose pieces</label>

                        <input type="radio" name="radio-group" id="Perfect"><label for="Perfect">Near perfect
                          condition</label>
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
                  <h5 class="smaller-margin">Whatelse should we know about your home?</h5>
                  <hr>
                  <p class="bath-desc">Please tell us about any upgrades that would add value that were not already
                    covered. (optional)</p>
                </div>

                <div class="wrapperForm">
                  <form class="textbox">
                    <div class="input-group">
                      <textarea class="form-control" placeholder="New water heater,etc"></textarea>
                    </div>

                    <a data-triger="#pagefour" class="offer-link fixed-width step-toggler with-margin-top" href="#">Next
                      <i class="far fa-arrow-right"></i></a>
                  </form>
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