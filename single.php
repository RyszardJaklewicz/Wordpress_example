<?php
/**
* Author: Ryszard Jaklewicz
* File display single post
*/
get_header(); 

while (have_posts()) : the_post();
    ?>
    <article class="post_article post_article_single">
        <div class="post_article_content">
            <h1 class="post_article_title"><?php the_title(); ?></h1>
            <ul class="post_article_info">
				<!-- Date -->
                <li>Dodano: <?php the_time('d.m.Y'); ?></li>
				<!-- Posts author -->
				<?php if(1==2){ ?>
                <li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><?php echo the_author_meta('display_name'); ?></a></li>
				<?php } ?>
				<!-- Display info comment -->
				<?php if(1==2){ ?>
                <li><?php comments_popup_link('Brak komentarzy', '1 komentarz', '% Comments'); ?></li>
				<?php } ?>
            </ul>

            <div class="post_article_img" style="background: url('<?php the_post_thumbnail_url('large'); ?>') center center no-repeat; background-size: cover"></div>

			<!-- Display content single posts (Wpis) -->
            <div class="text_post"><?php the_content(); ?></div>
        </div>
    </article>
    <?php
endwhile;

get_footer(); 

?>