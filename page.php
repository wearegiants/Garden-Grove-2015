<?php Themewrangler::setup_page();get_header(/***Template Name: Front Page */); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="frame" id="main-wrap">


<?php if ( has_post_thumbnail() ): ?>
<?php the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) ); ?>
<hr class="invisible">
<?php endif; ?>

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