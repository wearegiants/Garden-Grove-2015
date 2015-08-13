<?php  $images = get_field('sponsors'); if( $images ): ?>
<div class="frame">
<?php foreach( $images as $image ): ?>
<div class="sponsor bit-3">
   <a href="<?php echo $image['caption']; ?>">
      <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>
   </a>
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>