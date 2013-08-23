<?php
/*Шаблон комментариев*/
     $args = array(
	 'avatar_size'       => 45,
	 'reply_text'       => 'Ответить на комментарий',
	 'callback'          => 'mytheme_comment',
    ); ?>  

<h3>Комментарии к посту «<?php the_title();?>»</h3>
<div class="main-list-comments">	
	<ul>
		<?php wp_list_comments($args); ?>
	</ul>
</div>

<?php if (!comments_open()){?>
	<p class="nocomments">Комментарии запрещены</p>
<?php }else{ ?>
		<?php if (!get_comments_number()) :?>
			<p class="nocomments">Комментариев пока нет, будьте первым.</p>
		<?php endif;?>
<?php } ?>

<?php
$fields =  array(
	'author' => '<div id="author-data"><p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
	'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
	'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label>' .
	            '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p></div>',
);

$comments_args = array(
		'fields' => $fields,
        'comment_notes_after' => '',
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="" rows="8" aria-required="true"></textarea></p>'
);

comment_form($comments_args);

?>