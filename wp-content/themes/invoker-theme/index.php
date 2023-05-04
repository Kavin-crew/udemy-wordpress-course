<?php
// start header
get_header();
// end header

while(have_posts()) {
    the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<hr>
<?php }

// end footer
get_footer();
// start footer
?>