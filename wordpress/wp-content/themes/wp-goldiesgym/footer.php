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
              <form action="#" role="form" class="f-form-help">
                <div class="col-xs-6 form-group">
                  <input type="text" class="form-control" id="help-name2" placeholder="Ваше имя">
                </div>
                <div class="col-xs-6 form-group">
                  <input type="text" class="form-control" id="help-phone2" placeholder="Телефон">
                </div>
                <div class="col-xs-12 form-group">
                  <select class="form-control" name="help-question" id="help-question" >
                  <option value=""></option>
                    <option value="Вопрос 1">Вопрос 1</option>
                    <option value="Вопрос 2">Вопрос 2</option>
                  </select>
                </div>
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-solid">ОТПРАВИТЬ</button>
                </div>
                <div class="clearfix"></div>
              </form>
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
  <script>
    window.themefolder = "<?php echo get_template_directory_uri(); ?>"
  </script>
  <?php wp_footer(); ?>

</body>
</html>
