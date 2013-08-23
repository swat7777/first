<?php
/*файл дополнительного функционала*/
//функция добавления боковой панели
if ( function_exists('register_sidebar') )
	register_sidebar(
    array(
        'name'=>'sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name'=>'sidebar2',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
         )
     );
//функция добавления меню
function register_my_menus(){
    register_nav_menus(
        array('info-links-top'=>'info-links-top', 'site-nav' => 'site-nav', 'menu' => 'menu')
    );
}
if (function_exists('register_nav_menus')){
	add_action( 'init', 'register_my_menus' );
}


function mytheme_comment($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment; 
	switch ( $comment->comment_type ) :
		case '' :
?>
	   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>">
				<div class="comment-author vcard">
					<?php edit_comment_link( __( 'Редактировать' ), ' ' ); ?>
					<?php echo get_avatar( $comment->comment_author_email, $args['avatar_size']); ?>
					<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
				</div>
				
				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
				</div>
				
<?php if ($comment->comment_approved == '0') : ?>
				<div class="comment-awaiting-verification"><?php _e('Your comment is awaiting moderation.') ?></div>
			 <br />
<?php endif; ?>
				<?php comment_text() ?>
				<div class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
			</div>
		 
<?php
		break;
		case 'pingback'  :
		case 'trackback' :
?>
			<li class="post pingback">
				<?php comment_author_link(); ?>
				<?php edit_comment_link( __( 'Редактировать' ), ' ' ); ?>
<?php
		break;
	endswitch;
}
//Включаем поддержку миниатюр
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
function my_post_image_html( $html, $post_id, $post_image_id ) {
  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
  return $html;
}

?>