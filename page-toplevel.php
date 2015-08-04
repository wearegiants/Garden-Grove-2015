<?php Themewrangler::setup_page();get_header(/***Template Name: Top Level  */); ?>

<?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination

$the_query = new WP_Query( array( 
'post_type'      => 'page',
'paged'          => $paged,
'orderby'        => 'menu_order',
'post_parent'    => $post->ID,
'posts_per_page' => 20) 
); ?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<section class="page-section">
<?php get_template_part('templates/page', 'header'); ?>
<div class="frame"><?php the_content(); ?></div>
</section>
<?php endwhile; wp_reset_postdata(); // Rest Data ?>

<?php get_footer(); ?>