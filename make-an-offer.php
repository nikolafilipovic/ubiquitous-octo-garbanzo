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
                <h5>Let's get started. Who is making the offer?</h4>
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
              <div class="formBlock formBorderMid step-toggler" data-triger="#pagetwo">
                <div class="formCircle">
                  <i class="fal fa-user-circle"></i>
                </div>
                <h4>Buyers Agent</h4>
                <div class="formArrow">
                  <i class="far fa-arrow-right" aria-hidden="true"></i>
                </div>
              </div>
              <div class="formBlock formBorderBot step-toggler" data-triger="#pagetwo">
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
              <div class="formBlock formBorderTop step-toggler" data-triger="#pagethree">
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
                      <a data-triger="#step-3" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                  </form>
                </div>
                <div class="personBlock">
                    <div class="iconBlock" style="background-image: url(/wp-content/themes/theoffercompany/images/agent.png);"></div>
                    <div class="infoBlock">
                      <h6>Anette Brown</h6>
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
    </div>
    <!-- Novi block -->
    <div class="wrapper" id="pagefour">
      <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="wrapperMid">
                  <h1>Success!</h1>
                  <h3>Anette Brown will contact you shortly.</h3>
                </div>
              <div class="personBlock">
                <div class="iconBlock"></div>
                <div class="infoBlock">
                  <h6>Anette Brown</h6>
                  <p class="infoblockName">Licensed agent</p>
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
    <!-- Novi block -->
    <div class="wrapper" id="pagefive">
      <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="wrapperMid">
        <h1>Invite your agent</h1>
        <h3>We'll send your agent a link with your request to make an offer on this property.</h3>
      </div>
      <div class="wrapperForm wrapperFormBigger">
        <form class="" action="#" method="post">
          <legend class="legend">Your informaiton</legend>
          <div class="wrapperFormText">
            <input type="text" name="Name" class="formMR" placeholder="Name" />
          </div>
          <div class="wrapperFormText">
            <input type="text" name="Last Name" class="input2" value="" placeholder="Last name" />
          </div>
            <input type="email" class="formFullWidth" name="" value="" placeholder="Email"/>
        </form>
        <form class="" action="#" method="post">
          <legend class="legend">Your agents informaiton</legend>
          <div class="wrapperFormText">
            <input type="text" name="Name" class="formMR" value="" placeholder="Name" />
          </div>
          <div class="wrapperFormText">
            <input type="text" name="Last Name" class="input2" value="" placeholder="Last name" />
            
          </div>
          <input type="email" class="formFullWidth" name="" value="" placeholder="Email"/>
          <button  class="formSubmitFull" type="submit">Submit<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </form>
      </div>
            </div>  
        </div>  
      </div>
    </div>
    <!-- Novi block -->
    <div class="wrapper" id="pagesix">
      <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="wrapperMid">
                    <h1>Success!</h1>
                    <h3>An email has been sent to your agent.</h3>
                </div>
                <div class="goBack">
                   <p><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Go back</a></p>
                </div>
            </div>  
        </div>  
      </div>
    </div>
    <!-- Novi block -->
    <div class="wrapper" id="pageseven">
      <div class="wrapperMid wrapperMidSmall">
        <h1 class="hSmallMargin">Financial terms</h1>
      </div>
      <div class="wrapperForm  wrapperFormDekstop">
        <form class="formsLeft" action="index.html" method="post">
            <div class="wrapperFormText">
                <legend class="legend">Purchase price</legend>
                <input type="text" class="formMR" name="purPrice" value="" placeholder="$"/>
            </div>
            <div class="wrapperFormText">
                 <legend class="legend">Earnest money</legend>
                 <input type="text" class="" name="earnMoney" value="" placeholder="$"/>
            </div>
        </form>
        <form class="formsLeft">
            <div class="wrapperFormText">
                <legend class="legend">Down payment</legend>
                <input type="text" class="" name="purPrice" value="" placeholder="%" />
            </div>
            <div class="wrapperFormText">
                <legend class="legend">Loan amount</legend>
                <input type="text" class="" name="earnMoney" value="" placeholder="$"/>
            </div>
        </form>
        
        <div class="wrapperForm formsLeft wrapperFormRadio">
          <form action="" class="formsLeft">
            <input type="radio" name="choice" id=""><p>Conventional</p>
            <input type="radio" name="choice" id=""><p>FHA</p>
            <input type="radio" name="choice" id=""><p>VA</p>
            <input type="radio" name="choice" id=""><p>CASH</p>
          </form>
        </div>
        <div>
        </div>
      </div>
      <div id="wrapperFooter" class="">
        <h3>Make an offer</h3>
        <div id="footerIcons"></div>
        
      </div>
    </div>
    <!-- novi block -->
    <div class="wrapper" id="pageeight">
      <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="wrapperMid smallerH1">
                    <h1>Contingecies</h1>
                </div>
                <div class="radioForms wrapperForm radioFormsVertical">
                <div class="radioForm radioBlock">
                    <h5>Appraisal</h5>
                  <form action="" method="post">
                    <input type="radio" name="choice" id="" ><p>Yes</p>
                    <input type="radio" name="choice" id="" ><p>No</p>
                  </form> 
                </div>
                <div class="radioForm radioBlock radioBlock1">
                    <h5>Home inspection</h5>
                  <form action="" method="post" class="formSmall">
                    <input type="radio" name="choice" id="" ><p>Yes</p>
                    <input type="radio" name="choice" id="" ><p>No</p>
                  </form>
                </div>
                <div class="radioForm radioBlock">
                    <h5>Sale of another property</h5>
                  <form action="" method="post">
                    <input type="radio" name="choice" id="" ><p>Yes</p>
                    <input type="radio" name="choice" id="" ><p>No</p>
                  </form>
                </div>
                <div class="radioForm radioBlock radioBlock1">
                    <h5>Is offer"as is"</h5>
                  <form action="" method="post" class="formSmall">
                    <input type="radio" name="choice" id="" ><p>Yes</p>
                    <input type="radio" name="choice" id="" ><p>No</p>
                  </form>
                </div>
                
              </div>
              <div class="radioForms">
                <h5>Other terms</h5>
                <form action="" method="post">
                  <input type="text" name="" id="" class="textForm" placeholder="Type here...">
                </form>
              </div>
              <div class="buttons">
                <form action="" method="post">
                  <button  class="formSubmitFull" type="submit"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</button>
                  <button  class="formSubmitFull" type="submit">Next<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </form>
              </div>
            </div>
            <div id="wrapperFooter" class="">
                <h3>Make an offer</h3>
                <div id="footerIcons"></div>
                
            </div>
        </div>  
      </div>
    </div>
    <!-- novi block -->
    <div class="wrapper" id="pagenine">
      <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="wrapperMid">
                    <h1>Offer documents</h1>
                    <p>Please upload purchase contract and proof of funds or pre qualification letter</p>
                </div>
                <div class="Blokovi">
                  <p>PurchaseContract.pdf</p>
                  <i class="fas fa-times"></i>
                </div>
                <div class="Blokovi BlokoviNC">
                  <p>Upload file</p>
                  <i class="fas fa-upload"></i>
                </div>
                <div class="buttons">
                    <form action="" method="post">
                      <button  class="formSubmitFull" type="submit"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</button>
                      <button  class="formSubmitFull" type="submit">Next<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div id="wrapperFooter" class="">
                <h3>Make an offer</h3>
                <div id="footerIcons"></div>
                
            </div>
        </div>  
      </div>
   </div>
   <!-- novi block -->
   <div class="wrapper" id="pageten">
     <div class="container-fluid h-100">
        <div class="row h-100">
             <div class="col-12 my-auto">
                <div class="wrapperMid">
       <h1>Verify your offer details</h1>
     </div>
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
       <p class="">Other terms: I'd make no further comments, offer is ready to be submitted and everything is great. Thanks a lot, looking forward to see your reply!
       </p>
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
       
     <div class="buttons">
        <form action="" method="post">
          <button  class="formSubmitFull" type="submit"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</button>
          <button  class="formSubmitFull" type="submit">Submit offer<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </form>
    </div>
             </div>
        </div>  
     </div>
   </div>
    <!-- novi block -->
   <div class="wrapper" id="lastPage">
      <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="wrapperMid">
                   <h1>Success! Thank you for submitting your offer for</h1>
                   <h2>11249 E Sonrisa Ave</h2>
                   <h5>Mesa, AZ 85212</h5>
                   <h3>Please check your inbox for conformation email.</h3>
                   <h3>Please feel free to contact me anytime.</h3>
                </div>
                <div class="personBlock">
                    <div class="iconBlock"></div>
                    <div class="infoBlock">
                      <h6>Anette Brown</h6>
                      <p class="infoblockName">Licensed agent</p>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <p>602-448-7377</p>
                      <span>anette@theofferco.com</span>
                    </div>
                    
                </div>
                <div id="button1"><a href="">Close</a></div>
            </div>  
        </div>  
     </div>
   </div>
    <!-- novi block -->
   <div class="wrapper" id="FirstPage">
      <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="wrapperMid">
        <h1>Welcome!</h1>
        <h3>Let's make an offer on</h3>
        <h2>1249 E Sonrisa Ave</h2>
        <h3>Mesa, AZ 85212</h3>
      </div>
      <div class="wrapperForm">
        <form class="" action="#" method="post">
            <legend class="legend">Submitting agent</legend>
          <div class="wrapperFormText formInput">
            <input type="text" name="Name" class="formMR" value="Strahinja" placeholder="Name" />
          </div>
          <div class="wrapperFormText">
            <input type="text" name="Last Name" class="" value="" placeholder="Last name" />
          </div>
          <input type="text" class="formFullWidth formMR" name="" value="" placeholder="Phone"/>
          <input type="email" class="formFullWidth" name="" value="" placeholder="Email"/>
          <button  class="formSubmitFull" type="submit">Next<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </form>
      </div>
      <div class="personBlock">
        <div class="iconBlock"></div>
        <div class="infoBlock">
          <h6>Anette Brown</h6>
          <p class="infoblockName">Licensed agent</p>
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
</div> <!-- /WRAPPER ID-->
<?php
    get_footer();
?>
