<?php get_header(); ?>
<?php if(has_post_thumbnail()): ?>
<style>
body .mainvisual {
background-image: url(<?php the_post_thumbnail_url();
?>);
}
</style>
<?php endif; ?>
<main role="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class="mainvisual slide">
    <div class="copy">
      <h1>
        <?php the_title(); ?>
      </h1>
    </div>
  </div>
  <section class="post animated">
    <div class="section__post-info"> 
      <span> カテゴリー：
      <?php
      $category = get_the_category();
      echo $category[ 0 ]->cat_name;
      ?>
      </span> 
      <span> 記事公開日：
      <?php the_date( 'Y年n月j日' ); ?>
      </span> 
    </div>
    <?php the_content(); ?>
  </section>
  <?php
  $featured_posts = get_field( 'spot' );
  if ( $featured_posts ): ?>
  <section class="recommended">
    <h2>ここから近いスポット</h2>
    <div class="article-wrap">
      <?php
      foreach ( $featured_posts as $postId ):
        $post = get_post( $postId );
      // Setup this post for WP functions (variable must be named $post).
      setup_postdata( $post );
      ?>
      <a href="<?php the_permalink(); ?>">
      <article class="animated">
        <h3>
          <?php the_title(); ?>
        </h3>
        <p class="category">
          <?php
          $category = get_the_category();
          echo $category[ 0 ]->cat_name;
          ?>
        </p>
        <p class="image"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>"></p>
      </article>
      </a>
      <?php endforeach; ?>
    </div>
  </section>
  <?php
  // Reset the global post object so that the rest of the page works correctly.
  wp_reset_postdata();
  ?>
  <?php endif; ?>
  <section class="map">
    <h2>御茶ノ水周辺MAP</h2>
    <div id="map">
      <?php the_field('map'); ?>
    </div>
  </section>
  <?php endwhile; else : ?>
  <p>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  </p>
  <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
