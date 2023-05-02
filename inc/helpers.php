<?php
// defined( 'abspath' ) or die( 'no script kiddies please ' );

function pb_get_package_version ( $file_path )
{
  $json = file_get_contents( $file_path );
  $json_data = json_decode( $json, true );
  return $json_data [ 'version' ];
}


