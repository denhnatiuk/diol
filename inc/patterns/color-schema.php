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

return array(
  'title'      => esc_html__( 'Color Schema', 'diol' ),
  'categories' => array( 'diol', 'Color Schema' ),
  'content'    => '<!-- wp:cover { "url":"' . esc_url( get_theme_file_uri( '/assets/images/hero-header-banner.jpg' ) ) . '","id":3531 ,"dimRatio":40,"focalPoint":{"x":0.5,"y":0.5},"minHeight":650,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}}} --><!-- /wp:cover -->',
);

$inner_content ='
<div 
class="wp-block-cover is-light" 
style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:650px">

<span 
  aria-hidden="true" 
  class="wp-block-cover__background has-background-dim-40 has-background-dim">
</span>

<img 
  class="wp-block-cover__image-background wp-image-3531" 
  alt="" 
  src="' . esc_url( get_theme_file_uri( '/assets/images/hero-header-banner.jpg' ) ) . '" 
  style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"
/>

<div class="wp-block-cover__inner-container">
  
  <!-- wp:group {
    "style":{
      "spacing":{
        "padding":{
          "top":"var:preset|spacing|50"
          ,"right":"var:preset|spacing|50"
          ,"bottom":"var:preset|spacing|50"
          ,"left":"var:preset|spacing|50"
        }
        ,"blockGap":"0"
        ,"margin":{
          "top":"var:preset|spacing|50"
        }
      }
    }
    ,"className":"Banner-Caption"
    ,"layout":{
      "type":"constrained"
      ,"contentSize":""
      ,"justifyContent":"center"
    }
  } -->

    <div 
      class="wp-block-group Banner-Caption" 
      style="
        margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

      <!-- wp:heading {
        "textAlign":"left"
        ,"style":{
          "typography":{
            "fontSize":"45px"
            ,"textTransform":"none"
            ,"fontStyle":"normal"
            ,"fontWeight":"700"
          }
          ,"spacing":{
            "margin":{
              "bottom":"var:preset|spacing|60"
            }
          }
        }
        ,"textColor":"foreground"
        ,"fontFamily":"carnival-lite-Poppins"
      } -->
      
        <h2 class="has-text-align-left has-foreground-color has-text-color has-carnival-lite-poppins-font-family" style="margin-bottom:var(--wp--preset--spacing--60);font-size:45px;font-style:normal;font-weight:700;text-transform:none">Reliable Cleaning<br>Agency With Best<br>Equipment</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {
        "style":{
          "typography":{
            "fontSize":"16px"
          }
          ,"spacing":{
            "margin":{
              "bottom":"var:preset|spacing|60"
            }
          }
        }
        ,"textColor":"foreground"
      } -->
      
        <p 
          class="has-foreground-color has-text-color"
          style="margin-bottom:var(--wp--preset--spacing--60);font-size:16px">
          
          Facilisis fermentum erat nec platea venenatis 
          <br>
          massa malesuada nibh maecenas congue magna.

        </p>

      <!-- /wp:paragraph -->

      <!-- wp:buttons -->

        <div class="wp-block-buttons">
        
          <!-- wp:button {
            "backgroundColor":"foreground"
            ,"textColor":"primary"
            ,"style":{
              "typography":{"fontSize":"16px"}
            }
            ,"className":"is-style-fill"
          } -->

            <div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:16px">

              <a class="wp-block-button__link has-primary-color has-foreground-background-color has-text-color has-background wp-element-button">
                
                Discover More

              </a>

            </div>

          <!-- /wp:button -->

        </div>

      <!-- /wp:buttons -->
    </div>
  <!-- /wp:group -->
</div>
</div>
';