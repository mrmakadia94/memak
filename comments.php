<h3 id="comments">
	<?php comments_number( esc_html__( 'no responses' ,'memak' ), esc_html__( 'one response' ,'memak' ), esc_html__( '% responses' ,'memak' ) ); esc_html_e( ' for ' ,'memak'); the_title(); ?>
</h3>
<?php the_comments_pagination( array(
	'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'memak' ) . '</span>',
	'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'memak' ) . '</span>',
) );
?>
<ol class="commentlist">
	<?php wp_list_comments(); ?>
	<?php comment_form(); ?>
</ol>