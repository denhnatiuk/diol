<?php
/**
 * Title: Pb Footer
 * Slug: Pb-Footer
 * Categories: Pb
 * Block Types: core/template-part/footer
 */
?>

	<div 
		id="<?php echo esc_html( wp_get_theme()->get( 'TextDomain' ) ); ?>-footscripts" 
		class="sr-only" >
	</div>
	<?php wp_footer(); ?>