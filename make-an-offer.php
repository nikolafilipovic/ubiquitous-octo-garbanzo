<?php
    /*
        Template Name: Make an offer
    */
    get_header(nomenu);
?>
<style>
  #wrapper {
    height: 100vh;
    overflow: hidden;
  }
</style>
<div id="wrapper" class="makeanoffer">
    <div class="wrapperTop">
      <a href="#"><i class="far fa-angle-left" aria-hidden="true"></i> Back</a>
    </div>
    <div class="wrapper multi-step">
      <div class="step" id="pageone">
        <!-- Container-Fluid znaci da container bude od ivice do ivice. h-100 znaci da uzme visinu od 100% -->
        <div class="container-fluid h-100 mod">
          <!-- h-100 znaci da uzme visinu od 100% -->
          <div class="row h-100">
            <!-- my-auto znaci da centrira y (vertikalno) marginama po sredini. -->
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Make an offer on</h1>
                <h2>11249 E Sonrisa Ave</h2>
                <h3>Mesa, AZ 85212</h3>
                <hr/>
                <h5>Let's get started. Who is making the offer?</h5>
              </div>
              <div class="wrapperBlocks">
                <div class="formBlock formBorderTop step-toggler" data-triger="#pagetwo">
                  <div class="formCircle">
                    <i class="fal fa-key farot"></i>
                  </div>
                  <h4>Buyer</h4>
                  <div class="formArrow">
                    <i class="far fa-arrow-right" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="formBlock formBorderMid step-toggler" data-triger="#pageseven">
                  <div class="formCircle">
                    <i class="fal fa-user-circle"></i>
                  </div>
                  <h4>Buyers Agent</h4>
                  <div class="formArrow">
                    <i class="far fa-arrow-right" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="formBlock formBorderBot step-toggler" data-triger="#pagetwelwe">
                  <div class="formCircle">
                      <i class="fal fa-hand-holding-usd"></i>
                  </div>
                  <h4>Investor</h4>
                  <div class="formArrow">
                    <i class="far fa-arrow-right" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
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
      <div  class="step" id="pagethree">
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
      <div class="step" id="pageseven">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Welcome!</h1>
                <h5>Let's make an offer on</h5>
                <h2>1249 E Sonrisa Ave</h2>
                <h5>Mesa, AZ 85212</h5>
              </div>
              <div class="wrapperForm">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <p>Submitting agent</p>
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
                  <a data-triger="#pageeight" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
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
                  <div class="circles">
                    <a href="#" class="rotate"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-comment-alt-dots"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="step" id="pageeight">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Financial terms</h1>
              </div>
              <div class="wrapperForm ">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-2">
                      <p>Purchase price</p>
                      <div class="has-dollar-left">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <p>Ernest Money</p>
                      <div class="has-dollar-left">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-2">
                      <p>Down payment</p>
                      <div class="has-dollar-left">
                        <input type="text" class="form-control">
                      </div>              </div>
                    <div class="form-group col-6">
                      <p>Loan amount</p>
                      <div class="has-amp-right">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="radio-choice">
                    <input type="radio" name="radio-group" id="Conventional"><label for="Conventional">Conventional</label>
                    <input type="radio" name="radio-group" id="FHA"><label for="FHA">FHA</label>
                    <input type="radio" name="radio-group" id="VA"><label for="VA">VA</label>
                    <input type="radio" name="radio-group" id="cash"><label for="cash">CASH</label>
                  </div>
                  <div class="form-group">
                    <p>Close of escrow</p>
                    <div class="has-calendar-right">
                        <input type="text" class="form-control" placeholder="Pick a date">
                    </div>            
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-8 pr-2">
                      <p>Acceptance deadline</p>
                      <div class="has-calendar-right">
                        <input type="text" class="form-control" placeholder="Pick a date">
                      </div>  
                    </div>
                    <div class="form-group col-4">
                      <div class="lh-custom-select-wrap">
                        <select name="cars" class="lh-custom-select" placeholder="Time">
                          <option selected>10-year</option>
                          <option>20-year</option>
                          <option>30-year</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-1">
                      <a data-triger="#pageseven" class="offer-link step-toggler" href="#"><i class="far fa-arrow-left right"></i> Back</a>
                    </div>
                    <div class="form-group col-6 pl-1">
                      <a data-triger="#pagenine" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div id="wrapperFooter">
              <div class="container-fluid">
                <div class="row no-gutters">
                  <div class="col-6">
                    <h3>Make an offer</h3>
                  </div>
                  <div class="col-6">
                    <i class="number one active">1</i>
                    <i class="number two">2</i>
                    <i class="number">3</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step" id="pagenine">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Contingecies</h1>
              </div>
              <div class="wrapperForm ">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-1">
                      <p>Apraisal</p>
                      <input type="radio" name="radio-group" id="Yes1"><label for="Yes1">Yes</label>
                      <input type="radio" name="radio-group" id="No1"><label for="No1">No</label>
                    </div>
                    <div class="form-group col-6 pl-1">
                      <p>Home Inspection</p>
                      <input type="radio" name="radio-group" id="Yes2"><label for="Yes2">Yes</label>
                      <input type="radio" name="radio-group" id="No2"><label for="No2">No</label>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-8 pr-1">
                      <p>Sale of another property</p>
                      <input type="radio" name="radio-group" id="Yes3"><label for="Yes3">Yes</label>
                      <input type="radio" name="radio-group" id="No3"><label for="No3">No</label>
                    </div>
                    <div class="form-group col-4 pl-1">
                      <p class="as-is">Is offer "as is"</p>
                      <input type="radio" name="radio-group" id="Yes4"><label for="Yes4">Yes</label>
                      <input type="radio" name="radio-group" id="No4"><label for="No4">No</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Other terms</p>
                    <div class="input-group">
                      <textarea class="form-control" placeholder="Type here..."></textarea>
                    </div>         
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-1">
                      <a data-triger="#pageeight" class="offer-link step-toggler" href="#"><i class="far fa-arrow-left right"></i> Back</a>
                    </div>
                    <div class="form-group col-6 pl-1">
                      <a data-triger="#pageten" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div id="wrapperFooter">
              <div class="container-fluid">
                <div class="row no-gutters">
                  <div class="col-6">
                    <h3>Make an offer</h3>
                  </div>
                  <div class="col-6">
                    <i class="number one active">1</i>
                    <i class="number two active">2</i>
                    <i class="number">3</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="step" id="pageten">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
                <div class="wrapperMid">
                    <h1>Offer documents</h1>
                    <p>Please upload purchase contract and proof of funds or pre qualification letter</p>
                </div>
                <div class="wrapperForm">
                  <form class="lh-form">
                    <div class="Blokovi">
                      <p>PurchaseContract.pdf</p>
                      <i class="fal fa-times"></i>
                    </div>
                    <div class="Blokovi BlokoviNC">
                      <p>Upload file</p>
                      <i class="fal fa-upload"></i>
                    </div>
                    <div class="row no-gutters">
                      <div class="form-group col-6 pr-1">
                        <a data-triger="#pagenine" class="offer-link step-toggler" href="#"><i class="far fa-arrow-left right"></i> Back</a>
                      </div>
                      <div class="form-group col-6 pl-1">
                        <a data-triger="#pageeleven" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div id="wrapperFooter">
                <div class="container-fluid">
                  <div class="row no-gutters">
                    <div class="col-6">
                     <h3>Make an offer</h3>
                    </div>
                    <div class="col-6">
                      <i class="number one active">1</i>
                     <i class="number two active">2</i>
                      <i class="number active">3</i>
                    </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <div class="step" id="pageeleven">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Verify your offer details</h1>
              </div>
              <div class="wrapperForm">
                <div class="tables">
                  <div class="tableFloat">
                    <table id="smallTable">
                      <th>Submitting agent</th>
                      <tr>
                        <td>Full Name:</td>
                        <td>Rupert Murdoch</td>
                      </tr>
                      <tr>
                        <td>Phone:</td>
                        <td>713 - 550 - 000</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>rupert.murdoch@gmail.com</td>
                      </tr>
                    </table>
                    <table id="smallTable1">
                      <th>Financial terms</th>
                      <tr>
                        <td>Purchase price:</td>
                        <td>$2,545,000</td>
                      </tr>
                      <tr>
                        <td>Earnest money:</td>
                        <td>$5,689,000</td>
                      </tr>
                      <tr>
                        <td>Payment method:</td>
                        <td>VA</td>
                      </tr>
                      <tr>
                        <td>Down paymment:</td>
                        <td>$1,267,000</td>
                      </tr>
                      <tr>
                        <td>Loan amount:</td>
                        <td>$1,345,000</td>
                      </tr>
                      <tr>
                        <td>Close of escrow:</td>
                        <td>10.18.2018</td>
                      </tr>
                      <tr>
                        <td>Acceptance deadline:</td>
                        <td>12.26.2018, 6PM</td>
                      </tr>
                    </table>
                  </div>
                  <div class="tableFloat">
                    <table id="smallTable2">
                      <th>Contingecies</th>
                      <tr>
                        <td>Appraisal:</td>
                        <td>No</td>
                      </tr>
                      <tr>
                        <td>Home inspection:</td>
                        <td>Yes</td>
                      </tr>
                      <tr>
                        <td>Sale of another property:</td>
                        <td>No</td>
                      </tr>
                      <tr>
                        <td>Is offer"as is":</td>
                        <td>Yes</td>
                      </tr>
                    </table>
                    <p><b>Other terms:</b> I'd make no further comments, offer is ready to be submitted and everything is great. Thanks a lot, looking forward to see your reply</p>
                    <table id="smallTable3">
                      <th>Offer documents</th>
                        <tr>
                          <td>PurchaseContract.pdf</td>
                        </tr>
                        <tr>
                          <td>ProofOfFunds, 10-19-18.pdf</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <form class="lh-form">
                    <div class="row no-gutters">
                      <div class="form-group col-6 pr-1">
                        <a data-triger="#pageten" class="offer-link step-toggler" href="#"><i class="far fa-arrow-left right"></i> Back</a>
                      </div>
                      <div class="form-group col-6 pl-1">
                        <a data-triger="#finalstep" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>  
        </div>
      <div class="step" id="pagetwelwe">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Welcome!</h1>
                <h5>Let's make an offer on</h5>
                <h2>1249 E Sonrisa Ave</h2>
                <h5>Mesa, AZ 85212</h5>
              </div>
              <div class="wrapperForm">
                <form class="lh-form">
                  <div class="row no-gutters">
                    <p>Submitting agent</p>
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
                  <a data-triger="#finalstep" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
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
                  <div class="circles">
                    <a href="#" class="rotate"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-comment-alt-dots"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="step" id="finalstep">
        <div class="container-fluid h-100">
          <div class="row h-100">
            <div class="col-12 my-auto mod">
              <div class="wrapperMid">
                <h1>Success! Thank you for submitting your offer for</h1>
                <h2>11249 E Sonrisa Ave</h2>
                <h5 class="push-down">Mesa, AZ 85212</h5>
                <h6>Please check your inbox for conformation email.</h6>
                <h5>Please feel free to contact me anytime.</h5>
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
                  <div class="circles">
                    <a href="#" class="rotate"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-comment-alt-dots"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="wrapperForm">
                <a class="offer-link" href="#">Close</a>
              </div>
            </div>  
          </div>  
        </div>
      </div>
  </div>
<?php
    get_footer(nomenu);
?>
