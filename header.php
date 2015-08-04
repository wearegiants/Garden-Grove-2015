<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">
<header id="header">
<div class="frame">
<div class="bit-10" id="wrapHome"><a href="/"><i class="ss-icon ss-gizmo notranslate">Home</i></a></div>
<div class="bit-80 sm-hide text-center" id="wrapNav">
<?php wp_nav_menu( array( 'container' => false, 'walker' => new clean_nav() ) ); ?>
</div>
<div class="bit-10 text-right" id="wrapLang">
  <ul id="languages">
    <li>
      <a class="lang">Lang.</a>
      <ul class="sub-menu">
        <li><?php echo do_shortcode('[google-translator]'); ?><li>
      </ul>
    </li>
  </ul>
</div>
</div>
</header><!--Header-->

<section id="content-wrap">
<section id="content" role="main" <?php body_class();?>>
