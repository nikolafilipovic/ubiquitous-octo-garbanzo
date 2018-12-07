<?php
  /*
    Template Name: Questionaire
  */

  get_header(nomenu);
?>
<style>
  #wrapper {
    height: calc(100vh - 55px);
  }
</style>
<div id="wrapper" class="makeanoffer">
  <div class="wrapperTop">
    <a href="#"><i class="far fa-angle-left" aria-hidden="true"></i>Back</a>
  </div>
  <div class="wrapper quest-wrapper">
    <div class="quest-faded">
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
        <!-- zasto mi ovo radi kad stavim pagefour nakon pageone?? -->
          <div class="container-fluid h-100">
            <div class="row h-100">
              <div class="col-12 my-auto mod">
                <div class="wrapperMid">
                  <h1>Request your offers</h1>
                  <h5>Does your kitchen have any of these features?</h5>
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