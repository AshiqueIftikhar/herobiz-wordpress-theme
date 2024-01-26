<?php
// index.php- Loads all blog posts

get_header();

    if(have_posts()):
        while(have_posts()):
            the_post();
            get_template_part('template-parts/post/content');
        endwhile;
    endif;

get_footer();