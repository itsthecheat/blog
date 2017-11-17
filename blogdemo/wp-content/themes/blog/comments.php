<?php
//Get only the approved comments
$args = array(
    'status' => 'approve',
    'fields' => '',
    'post_id' => get_the_ID()
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
wp_list_comments(array(), $comments);
?>

<!-- The comment form -->
<?php
  $commenter = wp_get_current_commenter();
  $req = get_option( 'require_name_email' );
  $aria_req = ( $req ? " aria-required='true'" : '');
  $fields = array(
    'author' => '<p class="comment-form-author">' . '<label for "author">' . __('Name') . '</label>' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id ="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
  );

  $comments_args = array(
    'fields' => $fields,
    'title_reply_to' => 'Share your thoughts',
    'comment_notes_before' => '<p class="comment-notes">' . __(' ') . ( $req ? $required_text : '' ) . '</p>',
  );


  comment_form($comments_args);
  ?>
