<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if(get_field('slider-images')): ?>
<style>
.home .mainvisual {
  height: 100vh;
}
</style>
<script>
jQuery(function($){
  $("#mainvisual").vegas({
    slides: [
      { src: "<?php the_field('slider-images') ?>" },
      <?php if(get_field('slider-images-2')): ?>{ src: "<?php the_field('slider-images-2') ?>" },<?php endif; ?>
      <?php if(get_field('slider-images-3')): ?>{ src: "<?php the_field('slider-images-3') ?>" },<?php endif; ?>
    ],
    delay: 7000,
    transitionDuration: 2000,
  });
});
</script>
<?php endif; ?>
<main role="main">
  <div class="mainvisual slide" id="mainvisual">
    <div class="copy">
      <?php the_content(); ?>
    </div>
  </div>
  <div class="col2-wrap">
    <section class="latest-article">
      <h2>最新の記事</h2>
      <?php $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        );
        $the_query = new WP_Query( $args ); 
      ?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :
        $the_query->the_post(); 
      ?>
      <a href="<?php the_permalink(); ?>">
      <article class="animated">
        <h3><?php the_title(); ?></h3>
        <p class="category"><?php $category = get_the_category();
          echo $category[0]->cat_name; ?></p>
        <p class="image"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>"></p>
      </article>
      </a> 
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </section>
    <section class="news">
      <h2>お知らせ</h2>
      <ul class="animated">
        <?php $args_news = array(
          'post_type' => 'news',
          'posts_per_page' => 3,
          );
          $the_query_news = new WP_Query( $args_news ); ?>
          <?php if ( $the_query_news->have_posts() ) : while ( $the_query_news->have_posts() ) :
            $the_query_news->the_post(); ?>
        <li><span class="date"><?php the_time('Y.n.j'); ?></span><a href="<?php
the_permalink(); ?>"><span class="title"><?php the_title(); ?></span></a></li>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </ul>
    </section>
  </div>
  <section class="recommended">
    <h2>カテゴリー別おすすめ</h2>
    <div class="article-wrap">
      <?php $terms = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => true,
      ) );
      foreach($terms as $myterm):?>
      <?php $args_reco = array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'category_name' => $myterm->slug,
          'tax_query' => array(
            array(
              'taxonomy' => 'flag',
              'field' => 'slug',
              'terms' => 'recommend'
            )
          )
        );
        $the_query_reco = new WP_Query( $args_reco ); ?>
        <?php if ( $the_query_reco->have_posts() ) : while ( $the_query_reco->have_posts() ) :
          $the_query_reco->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
      <article class="animated">
        <h3><?php the_title(); ?></h3>
        <p class="category"><?php $category = get_the_category();
          echo $category[0]->cat_name; ?></p>
        <p class="image"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>"></p>
      </article>
      </a> 
      <?php endwhile; wp_reset_postdata(); endif; ?>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="map">
    <h2>御茶ノ水周辺MAP</h2>
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12960.475158938143!2d139.7663189!3d35.6986943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe270ac5d701099e7!2z44OH44K444K_44Or44OP44Oq44Km44OD44OJIOadseS6rOacrOagoQ!5e0!3m2!1sja!2sjp!4v1638689129782!5m2!1sja!2sjp" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>
</main>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
