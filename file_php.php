<?php 
/**
 * Template Name: file_php
 * Method use file "file_php"
 * Edit page Wordpress
 * Use fast edition
 * List expandable set template "file_php"
 * Necessarily update page (panel admin Wordpress) !!!!!!
 */

/**
 * Author: Ryszard Jaklewicz
 * Plik samodzielny dolaczany w celu dodania dowolnej funkcjonalnosci np kodu PHP
 */

/** 
 * Include header Wordpress
 * 
 */
 
get_header();

 /**
  * Bellow any code php
  */



/**
 * Examples array
 */


$args = array(
  'taxonomy'     => 'category',
  'orderby'      => 'name',
  'show_count'   => 0,
  'pad_counts'   => 0,
  'hierarchical' => 1,
  'title_li'     => 'Categories'
);
?>
 
<ul>
<?php wp_list_categories( $args ); ?>
</ul>


<?php

 /**
  * Example get data for database Wordpress
  */
$examples_data = $wpdb->get_results("SELECT post_title FROM uslugiitwp_posts") or die('Error3');
    echo '<br>';
    foreach($examples_data as $single)
    {
		echo $single->post_title;
        echo '<br><br>';
    }


/**
 * Include footer Wordpress
 */
get_footer();
?>



