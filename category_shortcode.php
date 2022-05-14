<?php
   /*
   Plugin Name: Categories for Current Post Shortcode
   Plugin URI: https://github.com/ifyouwillit/Category-Shortcode-For-WordPress
   description: Plugin that creates a shortcode [cat_with_description] to display all categories for the current post.
  a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mendel Kurland
   Author URI: https://ifyouwillit.com
   License: GPL2
   */

   function mwm_category_with_description( $atts, $content = null ) {
    $cat="<div class='category_container'>";
    foreach((get_the_category()) as $category){
        $cat=$cat."<div class='category_name'>".$category->name."</div>";
        $cat=$cat."<div class='category_description'>".category_description($category)."</div>";
        }
        $cat="</div">;
   return $cat;
}

add_shortcode("cat_with_description", "mwm_category_with_description");
?>