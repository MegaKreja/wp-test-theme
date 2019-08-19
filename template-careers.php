<?php
/*Template Name: Careers*/
get_header();
query_posts(array(
   'post_type' => 'careers'
)); ?>
<?php
while (have_posts()) : the_post(); ?>
<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
<p><?php the_excerpt(); ?></p>
<?php endwhile;
get_footer();
?>