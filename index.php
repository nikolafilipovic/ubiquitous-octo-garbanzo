<?php
    $default_posts_per_page = get_option( 'posts_per_page' );
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $wpb_all_query = new WP_Query(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'paged' => $paged,
      'posts_per_page' => $default_posts_per_page
    )); 

    render_view([
      "posts"        => $wpb_all_query->posts,
      "max_pages"    => $wpb_all_query->max_num_pages,
      "current_page" => $paged
    ], "blog");
?>