<?php

/**
 * Simple Templating function
 *
 * @param $file   - Path to the PHP file that acts as a template.
 * @param $args   - (optional) Associative array of variables to pass to the template file.
 * @return string - Output of the template file. Likely HTML.
 *
 * Source: http://www.daggerhart.com/create-simple-php-templating-function/
 */
function template( $file, $args=array() ){
   // ensure the file exists
   if ( !file_exists( $file ) ) {
      return '';
   }

   // Make values in the associative array easier to access by extracting them
   if ( is_array( $args ) ){
      extract( $args );
   }

   // buffer the output (including the file is "output")
   ob_start();
   include $file;
   return ob_get_clean();
}

?>
