<?php
/*
Template Name: Find my Local Pro
*/
  get_header(nomenu);
?>

<div class="fmlp-header-container">
  <div class="faded">
    <div class="link-container">
      <a href="#" class="go-back">
        <i class="far fa-chevron-left"></i>
        Back
      </a>
    </div>
    <div class="fmlp-header">
      <img src="/wp-content/themes/theoffercompany/images/logo.png" class="d-none d-md-block" alt="logo">
      <h1>Find my pro</h1>
      <div class="enterzip-group">
        <div class="enterzip">
          <div class="landing-search">
            <div class="search-field">
              <div class="input-group buy" id="input-group">
                <input type="text" class="form-control" id="landing-search" placeholder="Enter your zip code">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="offer-link">
            Submit
            <i class="far fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="fmlp-body">
  <div class="fmlp-floating-container">
    <div class="fmlp-floating-block">
      <div class="one-row">
        <h2>Service from start to finish</h2>
        <p>Each Offer Company Agent is supported by a team so you'll get on-demand service from touring to close</p>
      </div>

      <div class="one-row">
        <h2>Expert negotiators</h2>
        <p>Each Offer Company Agent is a local expert. Our agents use local knowledge and proprietary data to negotiate
          the best deal for you.</p>
      </div>

      <div class="one-row">
        <h2>We have your back</h2>
        <p>Each Offer Company Agents are customer advocates. We're accountable for helping our clients buy and sell the
          right home, at the right price.</p>
      </div>
    </div>

    <div class="fmlp-floating-block block--smaller">
      <h1>Find my pro</h1>
      <div class="enterzip enterzip--inset">
        <div class="form-group mb-0 mt-0">
          <div class="input-group-prepend">
            <input type="text" class="form-control" placeholder="Enter your zip code" />
            <i class="fas fa-map-marker-alt"></i>
            </div>
          </div>
        </div>
        <a href="#" class="offer-link">
          Submit
          <i class="far fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>