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
    <section class="section__sitemap-content">
      <ul class="section__sitemap-category">
        <?php 
          $categories = get_terms('category');
          //print_r($categories);
          foreach($categories as $mycategory):
        ?>
          <li>
            <a href="<?php echo esc_url( home_url( '/category/' ) ); ?><?php echo $mycategory->slug; ?>/">
            <?php echo $mycategory->name; ?>
            </a>
            
            <ul class="section__sitemap-post">
              <?php
                $args = array(
                  'post_type' => 'post',
                  'category_name' => $mycategory->slug,
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC'
                );
              $the_query = new WP_Query( $args );
              //print_r($the_query);
              if( $the_query->have_posts() ) :
                while( $the_query->have_posts() ) :
                  $the_query->the_post();?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile;endif; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          </li>
        <?php endforeach; ?>
      </ul>
      
      <ul class="section__sitemap-page">
        <?php
          $args = array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
          );
          $the_query = new WP_Query( $args );
          if( $the_query->have_posts() ) :
            while( $the_query->have_posts() ) :
              $the_query->the_post();?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile;endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </section>
  </div>
  <?php endwhile; else : ?>
  <p>
    <?php _e( '申し訳ありません。ページが見つかりませんでした。' ); ?>
  </p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
