<?php Themewrangler::setup_page();get_header(/***Template Name: Front Page */); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="frame" id="main-wrap">

<?php if( have_rows('map_notes') ):
echo '<div id="map-deal" class="bit-1">';
the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) );
while ( have_rows('map_notes') ) : the_row(); ?>

<div class="bit-5 item"><?php the_sub_field('map_notes_node'); ?></div>

<?php endwhile;
echo '</div>';
else : endif; ?>

<div class="bit-66" id="main">
<?php get_template_part('templates/page', 'content'); ?>
<?php include('templates/flex-content.php'); ?>
</div>
<div class="bit-3" id="side"><?php get_sidebar(); ?></div>
</div>
<?php get_footer(); ?>