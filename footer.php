<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="img-wrapper wow zoomIn">
          <img src="<?php echo get_bloginfo('template_url') ?>/img/logo_white.svg" alt="">
        </div>
        <div class="link-footer">
          <?php $website_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>
          <a class="wow fadeIn" href="<?=$website_url?>">会社紹介</a> |
          <a class="wow fadeIn" data-wow-delay="0.2s" href="#">個人情報の保護について</a> |
          <a class="wow fadeIn" data-wow-delay="0.4s" href="#">個人情報の開示等のお申し出について</a>
        </div>
        <div class="copy wow fadeIn">
          Copyright © 2016 Motivo Inc. All Rights Reserved
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- <script src="js/scripts.min.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>