<?php
  if(post_password_required()) {
    return;
  }

  $args = array(
    'status'  => 'approve',
    'post_id' => $post->ID
  );

  $comments_query = new WP_Comment_Query;
  $comments = $comments_query->query($args);

  if($comments): 
    foreach($comments as $comment): ?>

<div class="one-comment">
  <div class="d-flex align-items-center">
    <div class="pic">
      <img src="/wp-content/themes/theoffercompany/images/userdefault.png" alt="userdefault" />
    </div>
    <h2>
      <?= $comment->comment_author ?>
    </h2>
  </div>

  <p>
    <?= $comment->comment_content ?>
  </p>

  <div class="heart-date">
    <div class="hearts">
      <i class="far fa-heart not-hearted"></i>
      <span class="not-hearted">4</span>
      <i class="fas fa-heart"></i>
      <span>4</span>
    </div>

    <div class="date">
      <p>
        <?= human_time_diff(get_comment_time( 'U' ),  current_time( 'timestamp' )) ?> ago
      </p>
    </div>
  </div>

</div>
<?php endforeach; endif; ?>
<div class="post-comment-form">
  <form class="make-comment-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( $user_ID ) : ?>

    <p class="logged-in">Logged in as
      <span class="login-user">
        <?php echo $user_identity; ?></span>.
      <a href="<?php echo wp_logout_url(get_permalink()); ?>">Log out <i class="fa fa-angle-right"></i></a>
    </p>

    <?php else : ?>

    <p class="comment-form-author fa">
    <input type="text" name="author" class="author" autocomplete="off" tabindex="1" <?php if ($req) echo
      "aria-required='true'" ; ?> placeholder="Name"/>
  </p>

  <p class="comment-form-email fa">
    <input type="email" name="email" class="email" autocomplete="off" tabindex="2" <?php if ($req) echo
      "aria-required='true'" ; ?> placeholder="E-Mail"/>
  </p>

  <?php endif; ?>


    <div class="input-group">
      <textarea class="form-control" placeholder="Join the discussion..." name="comment"></textarea>
    </div>

    <div class="offer-link">
      <button type="submit" name="submit">Post comment</button>
      <i class="far fa-arrow-right fasarrow"></i>
      <?php comment_id_fields(); ?>
    </div>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
</div>