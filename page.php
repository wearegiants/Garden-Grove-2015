<?php Themewrangler::setup_page();get_header(/***Template Name: Front Page */); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="frame" id="main-wrap">

<div id="map-deal" class="bit-1">
<?php the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) ); ?>
<?php if( have_rows('map_notes') ):
while ( have_rows('map_notes') ) : the_row(); ?>

<div class="bit-5 item"><?php the_sub_field('map_notes_node'); ?></div>

<?php endwhile;
else : endif; ?>
</div>

<div class="bit-66" id="main">
<?php get_template_part('templates/page', 'content'); ?>
<?php include('templates/flex-content.php'); ?>

<?php if(is_page(68)): ?>
<?php include locate_template('templates/sponsors.php');?>
<?php endif; ?>

</div>
<div class="bit-3" id="side"><?php get_sidebar(); ?></div>
</div>
<?php get_footer(); ?>