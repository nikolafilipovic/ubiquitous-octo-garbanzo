<div class="one-post row no-gutters">
          <div class="col-12 col-md-5">
            <div class="one-post-image" 
            style="background-image: url(<?= get_the_post_thumbnail_url($post) ?>);">
            </div>
            <div class="play round-blue">
              <i class="fas fa-play"></i>
            </div>
          </div>
          <div class="col-12 col-md-7 right-side">
            <small class="small-imp">
              <?php
                $categories = get_the_category($post->ID);
                $names = [];
                foreach($categories as $category) {
                  if($category->name !== 'popular') {
                    $names[] = $category->name;
                  }
                }
                echo implode(" ", $names);
              ?>
            </small>
            <a href="<?= get_the_permalink($post->ID) ?>">
              <?= $post->post_title ?>
            </a>
            <div class="review-by">
              <img src="<?= get_avatar_url($post->post_author) ?>" alt="review" />
              <p><?= get_author_name($post->post_author) ?></p>
              <small>on <?= format_blog_date($post->post_date, "d M Y") ?></small>
            </div>
          </div>
        </div>