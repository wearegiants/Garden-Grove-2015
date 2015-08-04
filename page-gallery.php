<?php Themewrangler::setup_page();get_header(/***Template Name: Gallery */); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="frame" id="main-wrap">
<?php get_template_part('templates/page', 'content'); ?>
<?php include('templates/flex-content.php'); ?>
<?php 

$images = get_field('gallery');

if( $images ): ?>
<div id="gallery" data-layout="<?php the_field('gallery_config'); ?>">
<?php foreach( $images as $image ): ?>
<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endforeach; ?>
</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>