<?php
/**
 * Description:    Hero Header Block
 *
 * @package        diol
 * @since          1.0.0
 * @author         Den Hnatiuk
 * @copyright      Copyright © 2023, Den Hnatiuk(@denhnatiuk)
 * @link           https://denyshnatiuk.github.io/diol/
 * @license        https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0.0
 *
 * @return void
 */

add_action( 'init', 'diol_register_block_patterns', 9 );
function diol_register_block_patterns ()
{

  // Custom Categories
    $block_pattern_categories = array(
    'diol' => array( 'label' => esc_html__( 'Diol Patterns', 'diol' ) ),
    'pages'    => array( 'label' => esc_html__( 'Pages', 'diol' ) ),
  );

    $block_pattern_categories = apply_filters( 'diol_block_pattern_categories', $block_pattern_categories );

  foreach ( $block_pattern_categories as $name => $props ) 
    {
    if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) 
        {
      register_block_pattern_category( $name, $props );
    }
  }

  // Custom Blocks

  $block_patterns = array(    
    // 'header-default',
    'hero-header-banner',
    // 'inner-banner',
    // 'our-services',
    // 'about-company',          
    // 'hidden-404',
    // 'sidebar',    
    // 'footer-default',
    'color-schema'
  );

  $block_patterns = apply_filters( 'diol_block_patterns', $block_patterns );

  foreach ( $block_patterns as $block_pattern ) {
    $pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

    register_block_pattern( 'diol/' . $block_pattern, require $pattern_file );
     // register_block_pattern( string $pattern_name, array $pattern_properties )
  }

}

