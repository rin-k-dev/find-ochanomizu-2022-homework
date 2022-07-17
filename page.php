<?php get_header(); ?>
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
    <?php _e( '申し訳ありません。ページが見つかりませんでした。' ); ?>
  </p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
