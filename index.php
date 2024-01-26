<?php
// index.php- Loads all blog posts

get_header();

    if(have_posts()):
        while(have_posts()):
            the_post();
            // Doing rest of the stuff
        endwhile;
    endif;

get_footer();