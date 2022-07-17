  <div class="sidebar">
    <ul class="category-list">
      <?php $terms = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => true,
) );
//print_r($terms);
foreach($terms as $myterm):?>
      <li><a href="<?php echo esc_url( home_url( '/category/' ) );
        echo $myterm->slug; ?>/"><?php echo $myterm->name; ?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="side-right-wrap">
		<?php if ( is_active_sidebar( 'content-footer' ) ) : ?>
			<ul id="widget-area">
			<?php dynamic_sidebar( 'content-footer' ); ?>
			</ul>
		<?php endif; ?>
		</div>
  </div>