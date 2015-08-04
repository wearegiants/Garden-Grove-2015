   
  <div class="event-group">
  
    <div class="event-desc frame"><div class="bit-1"><?php the_sub_field('events_block_description'); ?></div></div>
    <?php if( have_rows('events_block_events') ): while ( have_rows('events_block_events') ) : the_row(); ?>
        
    <div class="event-item frame">
      <div class="bit-3">
        <div class="row">
        
        <?php 
        
        $field = get_sub_field_object('event_category');
        $value = get_sub_field('event_category');
        $label = $field['choices'][ $value ];
        
        ?>
        
        <div class="bit-4"><i class="ss-icon <?php echo $value; ?>"></i></div>
        <?php if ( get_sub_field( 'all_day' ) ): ?>
        <div class="bit-75"><span class="time">All Day</span></div>
        <?php else: // field_name returned false ?>
        <div class="bit-75"><span class="time"><?php the_sub_field('event_time_start'); ?>-<?php the_sub_field('event_time_end'); ?></span></div>
        <?php endif; // field_name ?>
        </div>
      </div>
      <div class="bit-66"><?php the_sub_field('event_title'); ?></div>
    </div>
    <?php endwhile;  else : echo ('Bummer, no events'); endif; ?>
 
  </div><!-- Event Group -->

