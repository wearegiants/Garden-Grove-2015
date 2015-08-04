<?php Themewrangler::setup_page();get_header(); ?>
<div class="page-header frame">
  <h1 class="thehand"><?php _e( 'Dang, nothing here', 'blankslate' ); ?></h1>
</div>
<div class="frame" id="main-wrap">
<div class="bit-66" id="main">
<div class="page-content frame">
<?php _e( "Bummer, we couldn't find what you were looking for.", 'blankslate' ); ?>
</div>
<?php include('templates/flex-content.php'); ?>
</div>
<div class="bit-3" id="side"><?php get_sidebar(); ?></div>
</div>
<?php get_footer(); ?>