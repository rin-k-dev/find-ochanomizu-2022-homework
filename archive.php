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
  <div class="mainvisual slide">
    <div class="copy">
      <h1>
        <?php single_cat_title(); ?>
      </h1>
    </div>
  </div>
  <section class="recommended">
    <h2>御茶ノ水を「
      <?php single_cat_title(); ?>
      」</h2>
    <div class="article-wrap">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
      <?php endwhile; else : ?>
      <p>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
      </p>
      <?php endif; ?>
    </div>
  </section>
  <?php
  the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( '前へ', 'find-ochanomizu' ),
    'next_text' => __( '次へ', 'find-ochanomizu' ),
  ) );
  ?>
  <section class="map">
    <h2>御茶ノ水周辺MAP</h2>
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12960.475158938143!2d139.7663189!3d35.6986943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe270ac5d701099e7!2z44OH44K444K_44Or44OP44Oq44Km44OD44OJIOadseS6rOacrOagoQ!5e0!3m2!1sja!2sjp!4v1638689129782!5m2!1sja!2sjp" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
