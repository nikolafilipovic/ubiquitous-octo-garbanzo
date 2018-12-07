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
    <div class="quest-faded multi-step">
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
      <div class="step" id="pagetwo">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Are you working with a real estate agent?</h1>
              </div>
              <div class="wrapperBlocks">
                <div class="formBlock formBorderTop step-toggler" data-triger="#pagefive">
                  <div class="formCircle">
                    <i class="fas fa-check"></i>
                  </div>
                  <h4>Yes</h4>
                  <div class="formArrow">
                    <i class="far fa-arrow-right" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="formBlock formBorderBot step-toggler" data-triger="#pagethree">
                  <div class="formCircle">
                    <i class="fas fa-times faml"></i>
                  </div>
                  <h4>No</h4>
                  <div class="formArrow">
                    <i class="far fa-arrow-right" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step" id="pagethree">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>We can write up the offer for you.</h1>
              </div>
              <div class="wrapperMid">
                <h3>Please provide the informaiton below and Annete will contact you within 5 minutes.</h3>
              </div>
              <div class="wrapperForm">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <a data-triger="#pagefour" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                </form>
              </div>
              <div class="personBlock">
                <div class="iconBlock" style="background-image: url(/wp-content/themes/theoffercompany/images/agent.png);"></div>
                <div class="infoBlock">
                  <h6>Anette Brown</h6>
                  <p class="licensed">Licensed Agent</p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <p>602-448-7377</p>
                  <span>anette@theofferco.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step" id="pagefour">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Success!</h1>
                <h3>Anette Brown will contact you shortly.</h3>
              </div>
              <div class="personBlock">
                <div class="iconBlock" style="background-image: url(/wp-content/themes/theoffercompany/images/agent.png);"></div>
                <div class="infoBlock">
                  <h6>Anette Brown</h6>
                  <p class="licensed">Licensed Agent</p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <p>602-448-7377</p>
                  <span>anette@theofferco.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step" id="pagefive">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Invite your agent</h1>
                <h3>We'll send your agent a link with your request to make an offer on this property.</h3>
              </div>
              <div class="wrapperForm">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <p>Your information</p>
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="row no-gutters">
                    <p>Your agents information</p>
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <a data-triger="#pagesix" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step" id="pagesix">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Success!</h1>
                <h3>An email has been sent to your agent.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>