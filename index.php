<?php
    $wpb_all_query = new WP_Query(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1
    )); 
?>

<?php 
  render_view(null, null);
?>

<?php if($wpb_all_query->have_posts()): ?>
  <ul>
    <?php while($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>