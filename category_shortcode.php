<?php
   /*
   Plugin Name: Category Shortcode
   Plugin URI: https://mywebmedic.com
   description: >-
  a plugin to create awesomeness and spread joy
   Version: 1
   Author: Mendel Kurland
   Author URI: https://ifyouwillit.com
   License: GPL2
   */

   function cat( $atts, $content = null ) {
    foreach((get_the_category()) as $category){
        $cat=$cat.$category->name."<br>";
        $cat=$cat.category_description($category);
        }
   return $cat;
}

add_shortcode("cat_with_description", "cat");
?>