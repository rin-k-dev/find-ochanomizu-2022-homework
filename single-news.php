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
  <div class="post animated">
    <?php the_content(); ?>
  </div>
  <?php endwhile; else : ?>
  <p>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  </p>
  <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
