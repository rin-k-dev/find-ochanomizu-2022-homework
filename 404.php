<?php get_header(); ?>
<style>
body.error404 .mainvisual {
  background-image: url("http://localhost:8888/wp-content/uploads/2022/07/大学エントランス.jpg");
  height: 280px;
}
</style>
<main role="main">
  <div class="mainvisual slide">
    <div class="copy">
      <h1>
        ページが見つかりません
      </h1>
    </div>
  </div>
  <div class="post animated">
    <p>
      <?php _e( '申し訳ありません。ページが見つかりませんでした。' ); ?>
    </p>
  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
