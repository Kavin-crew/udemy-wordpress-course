<!-- corresponding file names -->
header.php = for header
footer.php = for footer
index.php = for blog posts
page.php = for pages
single.php = for specific post/single post


<?php
//////////////////////////////////////////////////////////////////
// for sample loop for displaying post
while(have_posts()) {
    the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<hr>
<?php }


have_posts(); //collection of post
the_post(); //specific post
the_permalink(); //slug/permalink of the post
the_title();  //post title
the_content(); //post description/content


// html tags
body_class(); //added in body tag to let wordpress add classes in the body tag


//////////////////////////////////////////////////////////////////
// for another wordpress functions
wp_header(); // to link/import files from functions.php for the css/cdn
wp_footer(); // to link/import files from functions.php for the footer like javascript/jquery


get_stylesheet_uri(); //get the url of the css with no arguements in the themes folder

get_theme_file_uri(); //is equals to current themes folder
get_theme_file_uri('/images/slider/1.jpg'); //is sample for images
get_theme_file_uri('/build/index.js') // for the location of the file


// in functions.php
wp_enqueue_style('randomnamehere', get_stylesheet_uri()); //importing for css/cdn files
wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true); //for importing js files
add_action('wp_enqueue_scripts', 'functionnamehere');
?>


