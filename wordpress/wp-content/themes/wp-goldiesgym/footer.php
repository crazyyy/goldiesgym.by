  <div id="map"></div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-4 f-logo-wrap">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
          <p>Формируйте ваше тело и дух. <br> Слоган для сайта.</p>
          <div class="f-socials">
            <a href="#"><i class="ic ic-w_vk"></i></a>
            <a href="#"><i class="ic ic-w_fb"></i></a>
            <a href="#"><i class="ic ic-w_in"></i></a>
          </div>
        </div>
        <!-- end f-logo-wrap -->
        <div class="col-sm-6 col-md-4 f-form-wrap">
          <div class="f-form-content">
            <div class="f-form">
              <h2>НУЖНА ИНДИВИДУАЛЬНАЯ КОНСУЛЬТАЦИЯ?</h2>
              <?php echo do_shortcode('[contact-form-7 id="1620" title="Footer Form" html_class="f-form-help"]'); ?>
            </div>
          </div>
          <!-- end f-form-content -->
        </div>
        <!-- end f-form-wrap -->
        <div class="col-sm-3 col-md-4 f-contacts-wrap">
          <p><i class="ic ic-f_phone"></i>+375 (29) <span>365-53-57</span></p>
          <p><i class="ic ic-f_marker"></i>ул. Клары Цеткин, 51а</p>
          <p><i class="ic ic-f_email"></i>info@goldiesgym.by</p>
        </div>
        <!-- end f-contacts-wrap -->
        <div class="clearfix"></div>
      </div>
    </div>
  </footer>
</div>

  <div class="modalbg modal-program-bg">
    <div class="modal-body modal-program">
    </div><!-- /.modal-program -->
    <span class="modal-close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
  </div><!-- /.modalbg -->
  <div class="modalbg modal-programform-bg">
    <div class="modal-body modal-programform">
      <?php echo do_shortcode('[contact-form-7 id="1617" title="Order Form"]'); ?>
    </div><!-- /.modal-programform -->
    <span class="modal-close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
  </div><!-- /.modalbg -->
  <div class="modalbg modal-recall-bg">
    <div class="modal-body modal-recall">
      <?php echo do_shortcode('[contact-form-7 id="1614" title="Recall Form"]'); ?>
    </div><!-- /.modal-recall -->
    <span class="modal-close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
  </div><!-- /.modalbg -->
  <div class="modalbg modal-gift-bg">
    <div class="modal-body modal-gift">
      <?php echo do_shortcode('[contact-form-7 id="1618" title="Gift Form"]'); ?>
    </div><!-- /.modal-gift -->
    <span class="modal-close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
  </div><!-- /.modalbg -->
  <div class="modalbg modal-corporate-bg">
    <div class="modal-body modal-corporate">
      <?php echo do_shortcode('[contact-form-7 id="1619" title="Corporate Clients"]'); ?>
    </div><!-- /.modal-gift -->
    <span class="modal-close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
  </div><!-- /.modalbg -->


  <script>
    window.themefolder = "<?php echo get_template_directory_uri(); ?>"
  </script>
  <?php wp_footer(); ?>

</body>
</html>
