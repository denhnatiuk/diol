<?php
/**
 * Title: Diol Header
 * Slug: Diol/Header
 * Categories: Diol, Header
 * Block Types: core/template-part/header
 */
?>

<div class="container site-header">
<!-- wp:area { id: "header" } -->
<?php
if ( ! has_header_video() ) {
  if ( ! has_header_image() ) {
    echo 'has no header image';
    the_custom_header_markup();
  } else {
  ?><img 
      src="<?php header_image(); ?>" 
      height="<?php echo esc_html( get_custom_header()->height ); ?>" 
      width="<?php echo esc_html( get_custom_header()->width ); ?>" 
      alt="" 
    /><?php
  }
} else {
	if ( is_header_video_active() && ! empty(get_header_video_url() ) ) {
		echo esc_url(
			wp_video_shortcode(
				array(
					'src'      => get_header_video_url(),
					'poster'   => '',
					'loop'     => true, // str. "off" by default
					'autoplay' => 'true', // str. "off" by default
					'preload'  => 'metadata',
					'height'   => 480,
					'width'    => ! empty( $content_width ) ? $content_width : 640,
					'class'    => '', // 'class' attr of `<video>` elem. 'wp-video-shortcode' by default
					'id'       => '', // 'id' attr of `<video>` elem. 'video-{$post_id}-{$instances}' by default
				)
			)
		);
		the_custom_header_markup();
	}
}
	//TODO: add if/else branding statements
	// get_template_part('template-parts/pbheader', 'branding' );?>

<?php
	wp_get_nav_menus();
?>
<!-- /wp:area -->
</div>
