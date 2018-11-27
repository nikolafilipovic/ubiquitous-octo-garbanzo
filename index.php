<?php
    $default_posts_per_page = get_option( 'posts_per_page' );
    $wpb_all_query = new WP_Query(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => $default_posts_per_page
    )); 


    // echo "<H1>Max page: " . $wpb_all_query->max_num_pages;
    
    render_view([
      "posts" => $wpb_all_query->posts,
    ], "blog");
?>