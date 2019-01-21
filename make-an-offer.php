<?php
    /*
        Template Name: Make an offer
    */
    get_header(nomenu);
    $current_user = wp_get_current_user();
    if ($current_user->exists()){
      $wp_user_id = $current_user->ID;  
      $str = file_get_contents("http://portal.theoffercompany.com/api/getUserAgentFromWp.php?id=".$wp_user_id);
      $user_agent = json_decode($str,true);
      if (!$user_agent){

        $user_agent['id'] = 0;
        $user_agent['user_id'] = 0;
        $user_agent['useragent_fname'] = '';
        $user_agent['useragent_lname'] = '';
        $user_agent['useragent_email'] = '';
        $user_agent['useragent_phone'] = '';
      }
    }else{
      $wp_user_id = 0;
      $user_agent['id'] = 0;
      $user_agent['user_id'] = 0;
      $user_agent['useragent_fname'] = '';
      $user_agent['useragent_lname'] = '';
      $user_agent['useragent_email'] = '';
      $user_agent['useragent_phone'] = '';
    }
    // print_r($user_agent); 
    $mls_id = $_GET['id'];
    $data = file_get_contents("http://portal.theoffercompany.com/api/getMlsDetails.php?id=".$mls_id);
    $data = json_decode($data,true);

    $agent = file_get_contents("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=".$data['address_postalCode']);
    $agent = json_decode($agent,true);
    $agent = $agent[0];


    // print_r($agent);
?>
<style>
  #wrapper {
    height: 100vh;
    overflow: hidden;
  }
</style>
<div id="wrapper" class="makeanoffer">
    <div class="wrapperTop">
      <a href="#" onclick="goBack()"><i class="far fa-angle-left" aria-hidden="true"></i> Back</a>
		<script>
function goBack() {
  window.history.go(-1);
}
</script>
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
                <h2><?= $data['address_full'] ?></h2>
                <h3><?= $data['address_city'] ?>, <?= $data['address_state'] ?> <?= $data['address_postalCode'] ?></h3>
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
                <form class="lh-form" id="contact_form">
                  <input type="hidden" name="method" value="buyer">
                  <input type="hidden" name="street_address" value="<?= $data['address_full'] ?>">
                  <input type="hidden" name="state" value="<?= $data['address_state'] ?>">
                  <input type="hidden" name="city" value="<?= $data['address_city'] ?>">
                  <input type="hidden" name="zip" value="<?= $data['address_postalCode'] ?>">
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" name="fname" placeholder="First name">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                    <a data-triger="#pagefour" id="contact_submit" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                </form>
              </div>
              <div class="personBlock">
                  <div class="iconBlock" style="background-image: url(<?= $agent['photo'] ?>);"></div>
                  <div class="infoBlock">
                    <h6><?= $agent['first_name'].' '.$agent['last_name'] ?></h6>
                    <p class="licensed">Licensed Agent</p>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <p><?= $agent['phone'] ?></p>
                    <span><?= $agent['email'] ?></span>
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
                <h3><?= $agent['first_name'].' '.$agent['last_name'] ?> will contact you shortly.</h3>
              </div>
              <div class="personBlock">
                <div class="iconBlock" style="background-image: url(<?= $agent['photo'] ?>);"></div>
                <div class="infoBlock">
                  <h6><?= $agent['first_name'].' '.$agent['last_name'] ?></h6>
                  <p class="licensed">Licensed Agent</p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <p><?= $agent['phone'] ?></p>
                  <span><?= $agent['email'] ?></span>
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
                <form class="lh-form" id="contact_form_buyer_yes">
                  <input type="hidden" name="method" value="buyer_with_own_agent">
                  <input type="hidden" name="street_address" value="<?= $data['address_full'] ?>">
                  <input type="hidden" name="state" value="<?= $data['address_state'] ?>">
                  <input type="hidden" name="city" value="<?= $data['address_city'] ?>">
                  <input type="hidden" name="zip" value="<?= $data['address_postalCode'] ?>">
                  <div class="row no-gutters">
                    <p>Your information</p>
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" name="fname" placeholder="First name">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="row no-gutters">
                  <p>Your agents information</p>
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" placeholder="First name" name="agent_fname" value="<?= $user_agent['useragent_fname'] ?>">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" placeholder="Last Name" name="agent_lname" value="<?= $user_agent['useragent_lname'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" name="agent_email" value="<?= $user_agent['useragent_email'] ?>">
                  </div>
                  <a data-triger="#pagesix" id="contact_submit_buyer_yes" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
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
    <div id="root">
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
                <form class="lh-form" id="agent_form">
                  <div class="row no-gutters">
                    <p>Submitting agent</p>
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" placeholder="First name" v-model="buyer.fname" name="agent_fname">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" placeholder="Last Name" v-model="buyer.lname" name="agent_lname">
                    </div>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" name="agent_phone" v-model="buyer.phone">
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" name="agent_email" v-model="buyer.email">
                  </div>
                  <a data-triger="#pageeight" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                </form>
              </div>
              <div class="personBlock">
                <div class="iconBlock" style="background-image: url(<?= $agent['photo'] ?>);"></div>
                <div class="infoBlock">
                  <h6><?= $agent['first_name'].' '.$agent['last_name'] ?></h6>
                  <p class="licensed">Licensed Agent</p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <p><?= $agent['phone'] ?></p>
                  <span><?= $agent['email'] ?></span>
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
                        <input type="text" name="purchase_price" v-model="finance.purchase_price" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <p>Ernest Money</p>
                      <div class="has-dollar-left">
                        <input type="text" name="earnest_money" v-model="finance.earnest_money" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-2">
                      <p>Down payment</p>
                      <div class="has-dollar-left">
                        <input type="text" name="down_payment" v-model="finance.down_payment" class="form-control">
                      </div>              </div>
                    <div class="form-group col-6">
                      <p>Loan amount</p>
                      <div class="has-amp-right">
                        <input type="text" name="loan_amount" v-model="finance.loan_amount" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="radio-choice">
                    <input type="radio" name="payment_method" value="Conventional" v-model="finance.payment_method" id="Conventional"><label for="Conventional">Conventional</label>
                    <input type="radio" name="radio-group" value="FHA" v-model="finance.payment_method" id="FHA"><label for="FHA">FHA</label>
                    <input type="radio" name="radio-group" value="VA" v-model="finance.payment_method" id="VA"><label for="VA">VA</label>
                    <input type="radio" name="radio-group" value="Cash" v-model="finance.payment_method" id="cash"><label for="cash">CASH</label>
                  </div>
                  <div class="form-group">
                    <p>Close of escrow</p>
                    <div class="has-calendar-right">
                        <input type="text" class="form-control" placeholder="Pick a date" name="close_of_escrow" v-model="finance.close_of_escrow">
                    </div>            
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-8 pr-2">
                      <p>Acceptance deadline</p>
                      <div class="has-calendar-right">
                        <input type="text" class="form-control" placeholder="Pick a date" name="deadline" v-model="finance.deadline">
                      </div>  
                    </div>
                    <div class="form-group col-4">
                      <div class="lh-custom-select-wrap">
                        <select name="time" v-model="finance.time" class="lh-custom-select" placeholder="Time">
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
                      <input type="radio" value="Yes" name="appraisal" v-model='contingencies.appraisal' id="Yes1"><label for="Yes1">Yes</label>
                      <input type="radio" value="No" name="appraisal" v-model='contingencies.appraisal' id="No1"><label for="No1">No</label>
                    </div>
                    <div class="form-group col-6 pl-1">
                      <p>Home Inspection</p>
                      <input type="radio" value="Yes" name="home_inspection" v-model="contingencies.home_inspection" id="Yes2"><label for="Yes2">Yes</label>
                      <input type="radio" value="No" name="home_inspection" v-model="contingencies.home_inspection" id="No2"><label for="No2">No</label>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-8 pr-1">
                      <p>Sale of another property</p>
                      <input type="radio" name="sale_of_another_property" value="Yes" v-model="contingencies.sale_of_another_property" id="Yes3"><label for="Yes3">Yes</label>
                      <input type="radio" name="sale_of_another_property" value="No" v-model="contingencies.sale_of_another_property" id="No3"><label for="No3">No</label>
                    </div>
                    <div class="form-group col-4 pl-1">
                      <p class="as-is">Is offer "as is"</p>
                      <input type="radio" name="as_is" v-model="contingencies.as_is" value="Yes" id="Yes4"><label for="Yes4">Yes</label>
                      <input type="radio" name="as_is" v-model="contingencies.as_is" value="No" id="No4"><label for="No4">No</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Other terms</p>
                    <div class="input-group">
                      <textarea name="other_terms" v-model="contingencies.other_terms" class="form-control" placeholder="Type here..."></textarea>
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
                        <td>{{buyer.fname}} {{buyer.lname}}</td>
                      </tr>
                      <tr>
                        <td>Phone:</td>
                        <td>{{buyer.phone}}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>{{buyer.email}}</td>
                      </tr>
                    </table>
                    <table id="smallTable1">
                      <th>Financial terms</th>
                      <tr>
                        <td>Purchase price:</td>
                        <td>${{finance.purchase_price}}</td>
                      </tr>
                      <tr>
                        <td>Earnest money:</td>
                        <td>${{finance.earnest_money}}</td>
                      </tr>
                      <tr>
                        <td>Payment method:</td>
                        <td>{{finance.payment_method}}</td>
                      </tr>
                      <tr>
                        <td>Down paymment:</td>
                        <td>${{finance.down_payment}}</td>
                      </tr>
                      <tr>
                        <td>Loan amount:</td>
                        <td>${{finance.loan_amount}}</td>
                      </tr>
                      <tr>
                        <td>Close of escrow:</td>
                        <td>{{finance.close_of_escrow}}</td>
                      </tr>
                      <tr>
                        <td>Acceptance deadline:</td>
                        <td>{{finance.deadline}}</td>
                      </tr>
                    </table>
                  </div>
                  <div class="tableFloat">
                    <table id="smallTable2">
                      <th>Contingecies</th>
                      <tr>
                        <td>Appraisal:</td>
                        <td>{{contingencies.appraisal}}</td>
                      </tr>
                      <tr>
                        <td>Home inspection:</td>
                        <td>{{contingencies.home_inspection}}</td>
                      </tr>
                      <tr>
                        <td>Sale of another property:</td>
                        <td>{{contingencies.sale_of_another_property}}</td>
                      </tr>
                      <tr>
                        <td>Is offer"as is":</td>
                        <td>{{contingencies.as_is}}</td>
                      </tr>
                    </table>
                    <p><b>Other terms:</b> {{contingencies.other_terms}}</p>
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
                      <form method="post" id="contact_form_buyer_agent">
                      <input type="hidden" name="method" value="buyer_agent">

                      <input type="hidden" name="fname" :value="buyer.fname">
                      <input type="hidden" name="lname" :value="buyer.lname">
                      <input type="hidden" name="email" :value="buyer.email">
                      <input type="hidden" name="phone" :value="buyer.phone">

                      <input type="hidden" name="purchase_price" :value="finance.purchase_price">
                      <input type="hidden" name="earnest_money" :value="finance.earnest_money">
                      <input type="hidden" name="down_payment" :value="finance.down_payment">
                      <input type="hidden" name="loan_amount" :value="finance.loan_amount">                      
                      <input type="hidden" name="payment_method" :value="finance.payment_method">
                      <input type="hidden" name="close_of_escrow" :value="finance.close_of_escrow">
                      <input type="hidden" name="deadline" :value="finance.deadline">
                      <input type="hidden" name="time" :value="finance.time">

                      <input type="hidden" name="appraisal" :value="contingencies.appraisal">
                      <input type="hidden" name="home_inspection" :value="contingencies.home_inspection">
                      <input type="hidden" name="sale_of_another_property" :value="contingencies.sale_of_another_property">
                      <input type="hidden" name="as_is" :value="contingencies.as_is">
                      <input type="hidden" name="other_terms" :value="contingencies.other_terms">


                      <div class="form-group col-6 pl-1" id="hey">
                        <a @click.prevent="passData()" data-triger="#finalstep" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                      </div>
                      </form>
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
                    <p>Investor</p>
                    <div class="form-group col-6 pr-2">
                      <input type="text" class="form-control" placeholder="First name" v-model="investor.fname">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" placeholder="Last Name" v-model="investor.lname">
                    </div>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" v-model="investor.phone">
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" v-model="investor.email">
                  </div>
                  <a data-triger="#pagethirteen" class="offer-link step-toggler" href="#" >Next <i class="far fa-arrow-right"></i></a>
                </form>
              </div>
              <div class="personBlock">
                <div class="iconBlock" style="background-image: url(<?= $agent['photo'] ?>);"></div>
                <div class="infoBlock">
                  <h6><?= $agent['first_name'].' '.$agent['last_name'] ?></h6>
                  <p class="licensed">Licensed Agent</p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <p><?= $agent['phone'] ?></p>
                  <span><?= $agent['email'] ?></span>
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
      <div class="step" id="pagethirteen">
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
                        <input type="text" name="purchase_price" v-model="investor_finance.purchase_price" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <p>Ernest Money</p>
                      <div class="has-dollar-left">
                        <input type="text" name="earnest_money" v-model="investor_finance.earnest_money" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-2">
                      <p>Down payment</p>
                      <div class="has-dollar-left">
                        <input type="text" name="down_payment" v-model="investor_finance.down_payment" class="form-control">
                      </div>              </div>
                    <div class="form-group col-6">
                      <p>Loan amount</p>
                      <div class="has-amp-right">
                        <input type="text" name="loan_amount" v-model="investor_finance.loan_amount" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="radio-choice">
                    <input type="radio" name="payment_method" value="Conventional" v-model="investor_finance.payment_method" id="Conventional"><label for="Conventional">Conventional</label>
                    <input type="radio" name="radio-group" value="FHA" v-model="investor_finance.payment_method" id="FHA"><label for="FHA">FHA</label>
                    <input type="radio" name="radio-group" value="VA" v-model="investor_finance.payment_method" id="VA"><label for="VA">VA</label>
                    <input type="radio" name="radio-group" value="Cash" v-model="investor_finance.payment_method" id="cash"><label for="cash">CASH</label>
                  </div>
                  <div class="form-group">
                    <p>Close of escrow</p>
                    <div class="has-calendar-right">
                        <input type="text" class="form-control" placeholder="Pick a date" name="close_of_escrow" v-model="investor_finance.close_of_escrow">
                    </div>            
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-8 pr-2">
                      <p>Acceptance deadline</p>
                      <div class="has-calendar-right">
                        <input type="text" class="form-control" placeholder="Pick a date" name="deadline" v-model="investor_finance.deadline">
                      </div>  
                    </div>
                    <div class="form-group col-4">
                      <p>Time</p>
                      <div class="lh-custom-select-wrap">
                        <select name="time" v-model="investor_finance.time" class="lh-custom-select" placeholder="Time">
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
                      <a data-triger="#pagefourteen" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="step" id="pagefourteen">
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
                      <input type="radio" value="Yes" name="appraisal" v-model='investors_contingencies.appraisal' id="Yes1"><label for="Yes1">Yes</label>
                      <input type="radio" value="No" name="appraisal" v-model='investors_contingencies.appraisal' id="No1"><label for="No1">No</label>
                    </div>
                    <div class="form-group col-6 pl-1">
                      <p>Home Inspection</p>
                      <input type="radio" value="Yes" name="home_inspection" v-model="investors_contingencies.home_inspection" id="Yes2"><label for="Yes2">Yes</label>
                      <input type="radio" value="No" name="home_inspection" v-model="investors_contingencies.home_inspection" id="No2"><label for="No2">No</label>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-8 pr-1">
                      <p>Sale of another property</p>
                      <input type="radio" name="sale_of_another_property" value="Yes" v-model="investors_contingencies.sale_of_another_property" id="Yes3"><label for="Yes3">Yes</label>
                      <input type="radio" name="sale_of_another_property" value="No" v-model="investors_contingencies.sale_of_another_property" id="No3"><label for="No3">No</label>
                    </div>
                    <div class="form-group col-4 pl-1">
                      <p class="as-is">Is offer "as is"</p>
                      <input type="radio" name="as_is" v-model="investors_contingencies.as_is" value="Yes" id="Yes4"><label for="Yes4">Yes</label>
                      <input type="radio" name="as_is" v-model="investors_contingencies.as_is" value="No" id="No4"><label for="No4">No</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Other terms</p>
                    <div class="input-group">
                      <textarea name="other_terms" v-model="investors_contingencies.other_terms" class="form-control" placeholder="Type here..."></textarea>
                    </div>         
                  </div>
                  <div class="row no-gutters">
                    <div class="form-group col-6 pr-1">
                      <a data-triger="#pageeight" class="offer-link step-toggler" href="#"><i class="far fa-arrow-left right"></i> Back</a>
                    </div>
                    <div class="form-group col-6 pl-1">
                      <a data-triger="#pagefifteen" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="step" id="pagefifteen">
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
                        <a data-triger="#pagesixteen" class="offer-link step-toggler" href="#">Next <i class="far fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              
            </div>
          </div>  
        </div>

      <div class="step" id="pagesixteen">
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
                        <td>{{investor.fname}} {{investor.lname}}</td>
                      </tr>
                      <tr>
                        <td>Phone:</td>
                        <td>{{investor.phone}}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>{{investor.email}}</td>
                      </tr>
                    </table>
                    <table id="smallTable1">
                      <th>Financial terms</th>
                      <tr>
                        <td>Purchase price:</td>
                        <td>${{investor_finance.purchase_price}}</td>
                      </tr>
                      <tr>
                        <td>Earnest money:</td>
                        <td>${{investor_finance.earnest_money}}</td>
                      </tr>
                      <tr>
                        <td>Payment method:</td>
                        <td>{{investor_finance.payment_method}}</td>
                      </tr>
                      <tr>
                        <td>Down paymment:</td>
                        <td>${{investor_finance.down_payment}}</td>
                      </tr>
                      <tr>
                        <td>Loan amount:</td>
                        <td>${{investor_finance.loan_amount}}</td>
                      </tr>
                      <tr>
                        <td>Close of escrow:</td>
                        <td>{{investor_finance.close_of_escrow}}</td>
                      </tr>
                      <tr>
                        <td>Acceptance deadline:</td>
                        <td>{{investor_finance.deadline}}</td>
                      </tr>
                    </table>
                  </div>
                  <div class="tableFloat">
                    <table id="smallTable2">
                      <th>Contingecies</th>
                      <tr>
                        <td>Appraisal:</td>
                        <td>{{investors_contingencies.appraisal}}</td>
                      </tr>
                      <tr>
                        <td>Home inspection:</td>
                        <td>{{investors_contingencies.home_inspection}}</td>
                      </tr>
                      <tr>
                        <td>Sale of another property:</td>
                        <td>{{investors_contingencies.sale_of_another_property}}</td>
                      </tr>
                      <tr>
                        <td>Is offer"as is":</td>
                        <td>{{investors_contingencies.as_is}}</td>
                      </tr>
                    </table>
                    <p><b>Other terms:</b> {{investors_contingencies.other_terms}}</p>
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
                        <a  data-triger="#finalstep" @click.prevent="zapInvestor()" class="offer-link step-toggler" href="#">Submit <i class="far fa-arrow-right"></i></a>
                      </div>
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>  
        </div>





      </div><!--root-->
      
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
                <div class="iconBlock" style="background-image: url(<?= $agent['photo'] ?>);"></div>
                <div class="infoBlock">
                  <h6><?= $agent['first_name'].' '.$agent['last_name'] ?></h6>
                  <p class="licensed">Licensed Agent</p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <p><?= $agent['phone'] ?></p>
                  <span><?= $agent['email'] ?></span>
                  <div class="circles">
                    <a href="#" class="rotate"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-comment-alt-dots"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="wrapperForm">
                <a class="offer-link step-toggler" data-triger="#pageone"  href="#">Close</a>
              </div>
            </div>  
          </div>  
        </div>
      </div>
    </div>
  </div><!-- wrapper -->
<?php
    get_footer(nomenu);
?>
<script type="text/javascript">
  $("#hey").on("click",function(e){
    e.preventDefault();
    alert('yehey');
  });
  $("#contact_submit").on("click",function(e){
    e.preventDefault();
    let frmData = $("#contact_form").serializeArray();
    
    // alert(info);
    $.ajax({
      type:'POST',
      url:'http://l8u.9b2.myftpupload.com/wp-content/themes/theoffercompany/ajax_make_an_offer.php',
      data:frmData,
      success: function(data){
        alert(data);
      }
    });
  });

  $("#contact_submit_buyer_yes").on("click",function(){
    let frmData = $("#contact_form_buyer_yes").serializeArray();
    // alert(frmData);
    $.ajax({
      type:'POST',
      url:'http://l8u.9b2.myftpupload.com/wp-content/themes/theoffercompany/ajax_make_an_offer.php',
      data:frmData,
      success: function(data){
        alert(data);
      }
    });
  });


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script type="text/javascript">
  Vue.config.devtools = true;
  vm1 = new Vue({
    el:'#root',
    data:{
      buyer:{
        fname:'',
        lname:'',
        email:'',
        phone:'',
      },
      finance:{
        purchase_price:'',
        earnest_money:'',
        down_payment:'',
        loan_amount:'',
        payment_method:'',
        close_of_escrow:'',
        deadline:'',
        time:''
      },
      contingencies:{
        appraisal:'',
        home_inspection:'',
        sale_of_another_property:'',
        as_is:'',
        other_terms:''
      },
      investor:{
        fname:'',
        lname:'',
        email:'',
        phone:'',
      },
      investor_finance:{
        purchase_price:'',
        earnest_money:'',
        down_payment:'',
        loan_amount:'',
        payment_method:'',
        close_of_escrow:'',
        deadline:'',
        time:''
      },
      investors_contingencies:{
        appraisal:'',
        home_inspection:'',
        sale_of_another_property:'',
        as_is:'',
        other_terms:''
      },
      offer_documents:''
    },
    methods:{
       
      passData: function(){
        let data = {
          method:'buyer_agent',
          street_address: '<?= $data['address_full'] ?>',
          city:'<?= $data['address_city'] ?>',
          state:'<?= $data['address_state'] ?>',
          zip:'<?= $data['address_postalCode'] ?>',
          fname: this.buyer.fname,
          lname: this.buyer.lname,
          email: this.buyer.email,
          phone: this.buyer.phone,
          purchase_price: this.finance.purchase_price,
          earnest_money: this.finance.earnest_money,
          down_payment: this.finance.down_payment,
          loan_amount: this.finance.loan_amount,
          payment_method: this.finance.payment_method,
          close_of_escrow: this.finance.close_of_escrow,
          deadline: this.finance.deadline,
          time: this.finance.time,
          appraisal: this.contingencies.appraisal,
          home_inspection: this.contingencies.home_inspection,
          sale_of_another_property: this.contingencies.sale_of_another_property,
          as_is:this.contingencies.as_is,
          other_terms: this.contingencies.other_terms
       };
        axios.get('https://hooks.zapier.com/hooks/catch/3497148/wawpat/', {
          params:data    
        })
        .then(res => {
             console.log(res)
        })
        .catch(error => {
             console.log(error)
        })
      },
      zapInvestor: function(){
        let data = {
          method: 'investor',
            street_address: '<?= $data['address_full'] ?>',
            city:'<?= $data['address_city'] ?>',
            state:'<?= $data['address_state'] ?>',
            zip:'<?= $data['address_postalCode'] ?>',
            fname: this.investor.fname,
            lname: this.investor.lname,
            email: this.investor.email,
            phone: this.investor.phone,
            purchase_price: this.investor_finance.purchase_price,
            earnest_money: this.investor_finance.earnest_money,
            down_payment: this.investor_finance.down_payment,
            loan_amount: this.investor_finance.loan_amount,
            payment_method: this.investor_finance.payment_method,
            close_of_escrow: this.investor_finance.close_of_escrow,
            deadline: this.investor_finance.deadline,
            time: this.investor_finance.time,
            appraisal: this.investors_contingencies.appraisal,
            home_inspection: this.investors_contingencies.home_inspection,
            sale_of_another_property: this.investors_contingencies.sale_of_another_property,
            as_is:this.investors_contingencies.as_is,
            other_terms: this.investors_contingencies.other_terms   
        };
        axios.get('https://hooks.zapier.com/hooks/catch/3497148/wawpat/', {
            params: data                      
        })
        .then(res => {
             console.log(res)
        })
        .catch(error => {
             console.log(error)
        })
      }
    }
  });
</script>