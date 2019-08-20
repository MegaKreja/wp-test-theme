<?php
/*Template Name: Blog*/
get_header();

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
);

// The Query
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<div>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<a href="'. get_the_permalink() .'">' . get_the_title() . '</a>';
        echo '<p>' . get_the_content() . '</p>';
        echo '<p>' . get_the_excerpt() . '</p>';
        echo '<p>' . get_author_name() . '</p>';
    }
    echo '</div>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();?>
<?php

get_footer();
?>