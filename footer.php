  <footer class="site-footer">
    <span class="pagetop" id="pagetop"><img src="<?php
echo get_stylesheet_directory_uri(); ?>/img/pagetop.png" alt="ページ上部へ"></span>
    <div class="col3-wrap">
      <?php
        wp_nav_menu(
          array(
            'menu' => 'footer_menu',
            'menu_class' => 'fnav',
            'container' => '',
            'theme_location' => 'footer_menu'
          )
        );
      ?>
      <ul class="sns">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-twitter"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
        <li><a href=""><i class="fab fa-youtube"></i></a></li>
        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php
echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Find! Ochanomizu"></a>
    </div>
    <small class="copyright">Copyright© 2018 Find! Ochanomizu. All Rights Reserved.</small>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="<?php
echo get_stylesheet_directory_uri(); ?>/js/jquery.inview.min.js"></script>
  <script src="<?php
echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>

</html>
