<?php 
/*
Template Name: example_wp_query1
*/

get_header();

// The Query

/**
 * Przekazanie do zapytania gdzie cat to nazwa kolumny w tabeli przeszukiwanej
 * 4 to wartosc jaka kolumna przyjmie
 */


   $args = array('cat' => 4);
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
         $category_posts->the_post();
?>

         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_content() ?></div>

<?php
      endwhile;
   else:
?>

      Oops, there are no posts.

<?php
   endif;

/**
 * ############################################################################### 
 */


//$the_query = new WP_Query( 'category_name=movies' );
$the_query = new WP_Query( 'post_title=Portfolio' );
 
// The Loop
if ( $the_query->have_posts() ) {
        echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
        echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

get_footer(); 

?>