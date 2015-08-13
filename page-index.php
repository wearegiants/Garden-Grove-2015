<?php Themewrangler::setup_page();get_header(/***Template Name: Home */); ?>

<?php 
  $image_map      = get_field('route_map');
  $image_events   = get_field('events_programming');
  $image_involved = get_field('get_involved');
  $image_mailing  = get_field('join_our_mailing_list');
  $image_gallery  = get_field('photo_gallery');
  $image_about    = get_field('about_us');
  $image_logo     = get_field('home_graphic');
  $external_image = get_field('external_link_image');
  
  $size = 'large';
  $medium_map = $image_map['sizes'][ $size ];
  $medium_involved = $image_involved['sizes'][ $size ];
  $medium_events   = $image_events['sizes'][ $size ];
  $medium_mailing  = $image_mailing['sizes'][ $size ];
  $medium_gallery  = $image_gallery['sizes'][ $size ];
  $medium_about    = $image_about['sizes'][ $size ];
  $medium_logo     = $image_logo['sizes'][ $size ];
  $medium_bg       = $external_image['sizes'][ $size ];
  
?>


  <div id="section_home" class="section">
    <div class="frame wide">
      <div class="bit-4 side text-center color-towergreen"><p>A DOWNTOWN<span class="thehand">OPEN STREETS</span>EVENT</p></div>
      <div class="bit-2 middle">
        <br>
        <img class="img-responsive centered" src="/assets/img/gg-tagline.svg" alt="Garden Grove Re:Imagined" />
        <img class="img-responsive" src="<?php echo $medium_logo; ?>" alt="Garden Grove Re:Imagined" /><br>
        <img class="img-responsive centered" src="/assets/img/gg-tagline_alt.svg" alt="Garden Grove Re:Imagined" />
      </div>
      <div class="bit-4 side right text-center color-towergreen"><p>Saturday<span class="thehand">OCT 10, 2015</span>3pm-10pm</p></div>
    </div>
    <div id="parallax">
      <ul id="scene" class="scene" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15">
        <li class="layer" data-depth="0.1"><div class="cloud_upper"></div></li>
        <li class="layer" data-depth="0.15"><div class="cloud_lower_rear"></div></li>
        <li class="layer" data-depth=".2"><div class="cloud_lower_front"></div></li>
      </ul>
    </div>
  </div><!--Parallax-->

  <div id="section_city">
    <div class="section section-left"></div>
    <div class="section section-middle text-center"><span></span></div>
    <div class="section section-right"></div>
  </div>
  
  <div id="section_desc" class="section">
    <?php get_template_part('templates/page', 'content'); ?>
  </div>
  
  <div id="section_content" class="section">
    <div class="frame">
    
      <div class="bit-1"><div class="item" id="block-route">
          <div class="bit-4 towergreen"><a class="meta" href="/about/about-reimagine-garden-grove/">Event Map <span>Learn More</span></a></div>
          <div class="bit-75" id="mapbg" style="background-image: url(<?php echo $medium_map; ?>);"></div>
      </div></div>
      
      <div class="bit-2"><div class="item" id="block-events" style="background-image: url(<?php echo $medium_events; ?>);">
        <a class="meta" href="/events-schedule-map/">EVENT SCHEDULE<span>Learn More</span></a>
        <div class="thumb orangegrove"></div>
      </div></div>
      
      <div class="bit-2"><div class="item" id="block-involved" style="background-image: url(<?php echo $medium_involved; ?>);">
        <a class="meta" href="/get-involved/local-business-opportunities/">Get Involved<span>Learn More</span></a>
        <div class="thumb orangegrove"></div>
      </div></div>
      
      <div class="bit-1"><div class="item" id="block-mailing" style="background-image: url(<?php echo $medium_mailing; ?>);">
        <div class="meta">
          Stay updated on Re:Imagine Garden Grove<em>Join our Mailing List</em><span class="bit-2 signup bit-center"><?php echo do_shortcode('[mc4wp_form]');?></span>
          
        </div>
        <div class="thumb towergreen"></div>
      </div></div>
      
      <div class="bit-3"><div class="item" id="block-gallery" style="background-image: url(<?php echo $medium_gallery; ?>);">
        <a class="meta" href="/gallery">Photo Gallery<span>Learn More</span></a>
        <div class="thumb skybluedark"></div>
      </div></div>
      
      <div class="bit-66"><div class="item" id="block-about" style="background-image: url(<?php echo $medium_about; ?>);">
        <a class="meta" href="/about/about-reimagine-garden-grove/">About Re:Imagine Garden Grove<span>Learn More</span></a>
        <div class="thumb gardengreen"></div>
      </div></div>

      <?php if(get_field('module_toggle')):?>
      <div class="bit-1"><div class="item" id="block-about" style="background-image: url(<?php echo $medium_bg ; ?>);">
        <a class="meta" href="<?php the_field('external_link_url'); ?>"><?php the_field('external_link_title');?><span>Learn More</span></a>
        <div class="thumb gardengreen"></div>
      </div></div>
      <?php endif; ?>
      
    </div>
  </div><!--Content-->

<?php get_footer(); ?>