<?php
/**
* A Simple Category Template
*/
print("category.php");
get_header(); ?> 
 
<section id="primary" class="site-content">
<div id="content" role="main">
 

<?php

$info_category = get_the_category();
var_dump($info_category);

get_sidebar(); 

?>

</div>
</section>
<?php get_footer(); ?>