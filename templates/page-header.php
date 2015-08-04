  <div class="page-header frame">
    <h1 class="thehand">
      <?php the_title(); ?>
    </h1>
        
    
    
    <?php /* Creates a menu for pages beneath the level of the current page */
    if (is_page() and ($notfound != '1')) {
    $current_page = $post->ID;
    while($current_page) {
    $page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
    $current_page = $page_query->post_parent;
    }
    $parent_id = $page_query->ID;
    $parent_title = $page_query->post_title;
    if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) { ?>
    <?php  if($post->post_parent){ ?>
    <ul class="siblings">
    <li class="parent"><?php echo $parent_title; ?></li>
    <?php wp_list_pages('sort_column=menu_order&title_li=&child_of='. $parent_id); ?>
    </ul>
    <?php } } } ?>
    
  </div>
