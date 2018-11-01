<?php 
/*
Template Name: List Homes
*/
  get_header(); 
?>
<div class="lh-wrapper">
  <div class="container-fluid">
    <header class="go-back b-shadow">
      <i class="fas fa-chevron-left fasback"></i>
      <a href="#">Back</a>
    </header>

    <figure class="lh-img">
        <img src="/wp-content/themes/theoffercompany/images/property-1.png" alt="Propery-1">
      <figcaption>
        <span>Virtual tour</span>
        <span>1 / 27</span>
      </figcaption>
    </figure> 

    <div class="offer-link-group b-shadow">
      <div class="offer-link">
        <a href="#">Make an offer</a>
        <i class="fas fa-arrow-right fasarrow"></i>
      </div>

      <div class="offer-link">
        <a href="#">Schedule tour</a>
        <i class="fas fa-arrow-right fasarrow"></i>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>