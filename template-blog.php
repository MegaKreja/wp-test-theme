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
        echo '<h3>' . get_the_title() . '</h3>';
        echo '<p>' . get_the_content() . '</p>';
        echo '<p>' . get_the_excerpt() . '</p>';
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