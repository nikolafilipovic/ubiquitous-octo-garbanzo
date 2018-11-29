<?php
  if(post_password_required()) {
    return;
  }
?>

<h1>Comments</h1>

<?php 
wp_list_comments();
comment_form(array('title_reply'=>'Leave a Comment',
                   'comment_notes_before'=>'',
                   'comment_notes_after'=>''));
?>