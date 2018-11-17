<?php
/*
Template Name: Finy my Local Pro
*/
  get_header(nomenu);
?>

<div class="fmlp-header-container">
  <div class="faded">
    <div class="fmlp-header">
      <img src="/wp-content/themes/theoffercompany/images/logo.png" alt="logo">
      <h1>Find my pro</h1>
      <div class="enterzip">
        <div class="landing-search">
          <div class="search-field">
            <div class="input-group buy" id="input-group">
              <input type="text" class="form-control" id="landing-search" placeholder="Enter address, neighborhood, city or zip...">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class="offer-link">Submit</a>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>