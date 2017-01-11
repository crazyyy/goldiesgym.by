<?php /* Template Name: Home Page */ get_header(); ?>

  <?php $current_page_id = get_the_ID(); ?>
  <?php echo $current_page_id; ?>

    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="slider">

            <?php if( have_rows('home_top_slider', 1064) ): while ( have_rows('home_top_slider', 1064) ) : the_row();?>

              <div class="slider__block">
                <div class="col-sm-6 col-md-5 slider__block-text">
                  <p class="stretch"><?php the_sub_field('slide_headline'); ?></p>
                  <div class="slogan">
                    <h1><?php the_sub_field('slide_title'); ?></h1>
                    <h2><?php the_sub_field('slide_description'); ?></h2>
                  </div>
                  <p><?php the_sub_field('slide_content'); ?></p>
                  <a href="<?php the_sub_field('slide_link'); ?>" class="btn btn-solid">ПОДРОБНЕЕ О ПРЕДЛОЖЕНИИ</a>
                </div>
                <div class="col-sm-6 col-md-7 slider__block-img">
                  <?php $image = get_sub_field('slide_image'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="clearfix"></div>
              </div><!-- end slider__block -->

            <?php endwhile; endif; ?>

          </div><!-- end slider -->
        </div>
      </div>
    </section>
  </div>
  <!-- end header-bg -->
  <section class="about-club">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2>О КЛУБЕ</h2>
        </div>
        <!-- end section-tittle -->
        <div class="section-body">
          <div class="col-sm-8 about-club__text">
            <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
            <p>Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
            <p>Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении текстов в массовое пользование ссылка на Яндекс.Рефераты обязательна.</p>
            <div class="col-xs-12 col-sm-4 about-club__block">
              <div class="about-club__block-icon">
                <i class="ic ic-power"></i>
              </div>
              <h3>СИЛА</h3>
              <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем.</p>
            </div>
            <div class="col-xs-12 col-sm-4 about-club__block">
              <div class="about-club__block-icon">
                <i class="ic ic-energy"></i>
              </div>
              <h3>ЭНЕРГИЯ</h3>
              <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем.</p>
            </div>
            <div class="col-xs-12 col-sm-4 about-club__block">
              <div class="about-club__block-icon">
                <i class="ic ic-honor"></i>
              </div>
              <h3>СМЕЛОСЬ</h3>
              <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем.</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <img class="about-club__img" src="<?php echo get_template_directory_uri(); ?>/img/man-img.png" alt="man">
          <div class="clearfix"></div>
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </section>
  <!-- end section.about-club -->
  <section class="classes">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2>КЛАССЫ</h2>
        </div>
        <!-- end section-tittle -->
        <div class="section-body">
          <div class="col-sm-3 classes__nav">
            <ul class="nav nav-tabs nav-tabs--classes">
              <li class="active"><a href="#tab1" data-toggle="tab"><span class="num">01</span><span>ТАЙСКИЙ <br>БОКС</span></a></li>
              <li><a href="#tab2" data-toggle="tab"><span class="num">02</span><span>DANCE <br>KIDS</span></a></li>
              <li><a href="#tab3" data-toggle="tab"><span class="num">03</span><span>STRONG <br>POWER</span></a></li>
              <li><a href="#tab4" data-toggle="tab"><span class="num">04</span><span>DANCE <br>KIDS</span></a></li>
              <li><a href="#tab5" data-toggle="tab"><span class="num">05</span><span>DANCE <br>KIDS</span></a></li>
            </ul>
          </div>
          <div class="col-sm-9 classes__block">
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                <div class="col-sm-6 classes__descr--wrap">
                  <div class="classes__descr">
                    <h2>ТАЙСКИЙ БОКС</h2>
                    <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                    <p>Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
                    <p>Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении </p>
                    <a href="" class="btn btn-solid"><i class="ic ic-shedule"></i>РАСПИСАНИЕ</a>
                  </div>
                </div>
                <!-- end classes__descr--wrap -->
                <div class="col-sm-6 classes__teacher--wrap">
                  <div class="classes__teacher">
                    <div class="classes__teacher-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/teachers-img1.jpg" alt="teachers">
                    </div>
                    <div class="classes__teacher-name">
                      <p>ВЕДУЩИЙ КЛАССА</p>
                      <h3>АЛЕКСЕЙ ПАНФИЛОВ</h3>
                    </div>
                    <div class="classes__teacher-info">
                      <p><i class="ic ic-time"></i>ПН, CБ  c  12:00 - 14:00 </p>
                      <p><i class="ic ic-map"></i>ЗАЛ N1</p>
                      <p><i class="ic ic-check"></i>230 BYN / месяц</p>
                    </div>
                    <div class="classes__teacher-btn">
                      <a href="#" class="btn btn-solid btn-solid--romb">ЗАПИСАТЬСЯ<span></span></a>
                    </div>
                  </div>
                </div>
                <!-- end classes__teacher--wrap -->
                <div class="clearfix"></div>
              </div>
              <div class="tab-pane fade" id="tab2">
                <div class="col-sm-6 classes__descr--wrap">
                  <div class="classes__descr">
                    <h2>DANCE KIDS</h2>
                    <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                    <p>Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
                    <p>Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении </p>
                    <a href="" class="btn btn-solid"><i class="ic ic-shedule"></i>РАСПИСАНИЕ</a>
                  </div>
                </div>
                <!-- end classes__descr--wrap -->
                <div class="col-sm-6 classes__teacher--wrap">
                  <div class="classes__teacher">
                    <div class="classes__teacher-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/teachers-img1.jpg" alt="teachers">
                    </div>
                    <div class="classes__teacher-name">
                      <p>ВЕДУЩИЙ КЛАССА</p>
                      <h3>АЛЕКСЕЙ ПАНФИЛОВ</h3>
                    </div>
                    <div class="classes__teacher-info">
                      <p><i class="ic ic-time"></i>ПН, CБ  c  12:00 - 14:00 </p>
                      <p><i class="ic ic-map"></i>ЗАЛ N1</p>
                      <p><i class="ic ic-check"></i>230 BYN / месяц</p>
                    </div>
                    <div class="classes__teacher-btn">
                      <a href="#" class="btn btn-solid btn-solid--romb">ЗАПИСАТЬСЯ<span></span></a>
                    </div>
                  </div>
                </div>
                <!-- end classes__teacher--wrap -->
                <div class="clearfix"></div>
              </div>
              <div class="tab-pane fade" id="tab3">
                <div class="col-sm-6 classes__descr--wrap">
                  <div class="classes__descr">
                    <h2>STRONG POWER</h2>
                    <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                    <p>Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
                    <p>Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении </p>
                    <a href="" class="btn btn-solid"><i class="ic ic-shedule"></i>РАСПИСАНИЕ</a>
                  </div>
                </div>
                <!-- end classes__descr--wrap -->
                <div class="col-sm-6 classes__teacher--wrap">
                  <div class="classes__teacher">
                    <div class="classes__teacher-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/teachers-img1.jpg" alt="teachers">
                    </div>
                    <div class="classes__teacher-name">
                      <p>ВЕДУЩИЙ КЛАССА</p>
                      <h3>АЛЕКСЕЙ ПАНФИЛОВ</h3>
                    </div>
                    <div class="classes__teacher-info">
                      <p><i class="ic ic-time"></i>ПН, CБ  c  12:00 - 14:00 </p>
                      <p><i class="ic ic-map"></i>ЗАЛ N1</p>
                      <p><i class="ic ic-check"></i>230 BYN / месяц</p>
                    </div>
                    <div class="classes__teacher-btn">
                      <a href="#" class="btn btn-solid btn-solid--romb">ЗАПИСАТЬСЯ<span></span></a>
                    </div>
                  </div>
                </div>
                <!-- end classes__teacher--wrap -->
                <div class="clearfix"></div>
              </div>
              <div class="tab-pane fade" id="tab4">
                <div class="col-sm-6 classes__descr--wrap">
                  <div class="classes__descr">
                    <h2>DANCE KIDS</h2>
                    <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                    <p>Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
                    <p>Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении </p>
                    <a href="" class="btn btn-solid"><i class="ic ic-shedule"></i>РАСПИСАНИЕ</a>
                  </div>
                </div>
                <!-- end classes__descr--wrap -->
                <div class="col-sm-6 classes__teacher--wrap">
                  <div class="classes__teacher">
                    <div class="classes__teacher-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/teachers-img1.jpg" alt="teachers">
                    </div>
                    <div class="classes__teacher-name">
                      <p>ВЕДУЩИЙ КЛАССА</p>
                      <h3>АЛЕКСЕЙ ПАНФИЛОВ</h3>
                    </div>
                    <div class="classes__teacher-info">
                      <p><i class="ic ic-time"></i>ПН, CБ  c  12:00 - 14:00 </p>
                      <p><i class="ic ic-map"></i>ЗАЛ N1</p>
                      <p><i class="ic ic-check"></i>230 BYN / месяц</p>
                    </div>
                    <div class="classes__teacher-btn">
                      <a href="#" class="btn btn-solid btn-solid--romb">ЗАПИСАТЬСЯ<span></span></a>
                    </div>
                  </div>
                </div>
                <!-- end classes__teacher--wrap -->
                <div class="clearfix"></div>
              </div>
              <div class="tab-pane fade" id="tab5">
                <div class="col-sm-6 classes__descr--wrap">
                  <div class="classes__descr">
                    <h2>STRONG POWER</h2>
                    <p>Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                    <p>Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
                    <p>Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении </p>
                    <a href="" class="btn btn-solid"><i class="ic ic-shedule"></i>РАСПИСАНИЕ</a>
                  </div>
                </div>
                <!-- end classes__descr--wrap -->
                <div class="col-sm-6 classes__teacher--wrap">
                  <div class="classes__teacher">
                    <div class="classes__teacher-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/teachers-img1.jpg" alt="teachers">
                    </div>
                    <div class="classes__teacher-name">
                      <p>ВЕДУЩИЙ КЛАССА</p>
                      <h3>АЛЕКСЕЙ ПАНФИЛОВ</h3>
                    </div>
                    <div class="classes__teacher-info">
                      <p><i class="ic ic-time"></i>ПН, CБ  c  12:00 - 14:00 </p>
                      <p><i class="ic ic-map"></i>ЗАЛ N1</p>
                      <p><i class="ic ic-check"></i>230 BYN / месяц</p>
                    </div>
                    <div class="classes__teacher-btn">
                      <a href="#" class="btn btn-solid btn-solid--romb">ЗАПИСАТЬСЯ<span></span></a>
                    </div>
                  </div>
                </div>
                <!-- end classes__teacher--wrap -->
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </section>
  <!-- end section.classes -->
  <section class="form-help-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 form-help__tittle">
          <h1>НЕ ЗНАЕТЕ ЧТО ВЫБРАТЬ?</h1>
          <p>наши специалисты проконсультируют</p>
        </div>
        <div class="col-md-6 form-help__block">
          <form action="#" role="form" class="form-help">
            <div class="col-sm-9">
              <div class="form-group">
                <input type="text" class="form-control" id="help-name" placeholder="Ваше имя">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="help-phone" placeholder="Ваш телефон">
              </div>
            </div>
            <div class="col-sm-3 form-help__btn">
              <button type="submit" class="btn btn-send"><i class="ic ic-send"></i></button>
            </div>
            <div class="clearfix"></div>
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <!-- end form-help-wrap -->
  <section class="gallery">
    <div class="gallery__images">
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img1.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img2.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img3.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img1.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img2.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img3.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img4.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img5.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img5.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img6.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img6.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img4.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img5.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img5.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-xs-6 col-md-2 gallery__images-block">
        <a href="img/gallery-img6.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img6.jpg" class="img-fluid">
        </a>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- end gallery__images -->
    <div class="gallery__descr-wrap">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h2>ФОТОГАЛЕРЕЯ</h2>
          </div>
          <!-- end section-tittle -->
          <div class="section-body">
            <div class="gallery__descr">
              <div class="gallery__descr-block">
                <h1>2</h1>
                <p>зала</p>
              </div>
              <div class="gallery__descr-block">
                <h1>18</h1>
                <p>инструкторов</p>
              </div>
              <div class="gallery__descr-block">
                <h1>34</h1>
                <p>тренажера</p>
              </div>
              <div class="gallery__descr-block">
                <h1>7</h1>
                <p>классов</p>
              </div>
            </div>
          </div>
          <!-- end section-body -->
        </div>
      </div>
    </div>
  </section>
  <!-- end section.gallery -->
  <section class="price">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2>СТОИМОСТЬ</h2>
        </div>
        <!-- end section-tittle -->
        <div class="section-body">
          <div class="price-tabs">
            <div class="col-sm-3 col-md-3">
              <h3 class="price__tittle">ТИП КАРТЫ:</h3>
            </div>
            <div class="col-sm-9 col-md-9">
              <ul class="nav nav-tabs nav-tabs--price">
                <li class="active"><a href="#unlimited" data-toggle="tab">БЕЗЛИМИТ</a></li>
                <li><a href="#abonement" data-toggle="tab">АБОНЕМЕНТ</a></li>
                <li><a href="#group_work" data-toggle="tab">ГРУППОВЫЕ ЗАНЯТИЯ</a></li>
                <li><a href="#personal" data-toggle="tab">ИНДИВИДУАЛЬНЫЕ ТРЕНИРОВКИ</a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end price-tabs -->
          <div class="price-content">
            <div class="col-xs-6 col-sm-3 col-md-3 price-content__tittle">
              <h3 class="price__tittle">СРОК ДЕЙСТВИЯ:</h3>
              <h3 class="price__tittle">ДОПОЛНИТЕЛЬНО:</h3>
            </div>
            <div class="col-sm-9 col-md-9">
              <div class="tab-content">
                <div class="tab-pane fade in active" id="unlimited">
                  <div class="price-content__left">
                    <select name="select-month" class="select">
                      <option value="12 месяцев">12 месяцев</option>
                      <option value="6 месяцев">6 месяцев</option>
                      <option value="3 месяца">3 месяца</option>
                    </select>
                    <ul>
                      <li>- 3 гостевых визита</li>
                      <li>- Возможность заморозки</li>
                      <li>- Бесплатные визиты</li>
                      <li>- 60 часов</li>
                    </ul>
                  </div>
                  <div class="price-content__right">
                    <div class="price-content__card">
                      <h3 class="price-content__card-type">БЕЗЛИМИТ</h3>
                      <div class="price-content__card-info">
                        <p>СРОК:  12 месяцев</p>
                        <p>ВРЕМЯ:  9:00-21:00</p>
                      </div>
                      <p class="price-content__card-price">216  BYN</p>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="tab-pane fade" id="abonement">
                  <div class="price-content__left">
                    <select name="select-month" class="select">
                      <option value="12 месяцев">12 месяцев</option>
                      <option value="6 месяцев">6 месяцев</option>
                      <option value="3 месяца">3 месяца</option>
                    </select>
                    <ul>
                      <li>- 3 гостевых визита</li>
                      <li>- Возможность заморозки</li>
                      <li>- Бесплатные визиты</li>
                      <li>- 60 часов</li>
                    </ul>
                  </div>
                  <div class="price-content__right">
                    <div class="price-content__card">
                      <h3 class="price-content__card-type">АБОНЕМЕНТ</h3>
                      <div class="price-content__card-info">
                        <p>СРОК:  6 месяцев</p>
                        <p>ВРЕМЯ:  9:00-21:00</p>
                      </div>
                      <p class="price-content__card-price">116  BYN</p>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="tab-pane fade" id="group_work">
                  <div class="price-content__left">
                    <select name="select-month" class="select">
                      <option value="12 месяцев">12 месяцев</option>
                      <option value="6 месяцев">6 месяцев</option>
                      <option value="3 месяца">3 месяца</option>
                    </select>
                    <ul>
                      <li>- 3 гостевых визита</li>
                      <li>- Возможность заморозки</li>
                      <li>- Бесплатные визиты</li>
                      <li>- 60 часов</li>
                    </ul>
                  </div>
                  <div class="price-content__right">
                    <div class="price-content__card">
                      <h3 class="price-content__card-type">ГУППОВЫЕ</h3>
                      <div class="price-content__card-info">
                        <p>СРОК:  2 месяцеа</p>
                        <p>ВРЕМЯ:  9:00-21:00</p>
                      </div>
                      <p class="price-content__card-price">76  BYN</p>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="tab-pane fade" id="personal">
                  <div class="price-content__left">
                    <select name="select-month" class="select">
                      <option value="12 месяцев">12 месяцев</option>
                      <option value="6 месяцев">6 месяцев</option>
                      <option value="3 месяца">3 месяца</option>
                    </select>
                    <ul>
                      <li>- 3 гостевых визита</li>
                      <li>- Возможность заморозки</li>
                      <li>- Бесплатные визиты</li>
                      <li>- 60 часов</li>
                    </ul>
                  </div>
                  <div class="price-content__right">
                    <div class="price-content__card">
                      <h3 class="price-content__card-type">ИНДИВИДУАЛЬНЫЕ</h3>
                      <div class="price-content__card-info">
                        <p>СРОК:  12 месяцев</p>
                        <p>ВРЕМЯ:  9:00-21:00</p>
                      </div>
                      <p class="price-content__card-price">316  BYN</p>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end price-content -->
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </section>
  <!-- end section.price -->
  <section class="form-help-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 form-help__tittle">
          <h1>НЕ ЗНАЕТЕ ЧТО ВЫБРАТЬ?</h1>
          <p>наши специалисты проконсультируют</p>
        </div>
        <div class="col-md-6 form-help__block">
          <form action="#" role="form" class="form-help">
            <div class="col-sm-9">
              <div class="form-group">
                <input type="text" class="form-control" id="help-name1" placeholder="Ваше имя">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="help-phone1" placeholder="Ваш телефон">
              </div>
            </div>
            <div class="col-sm-3 form-help__btn">
              <button type="submit" class="btn btn-send"><i class="ic ic-send"></i></button>
            </div>
            <div class="clearfix"></div>
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <!-- end form-help-wrap -->
  <section class="comments">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2>ОТЗЫВЫ О НАС</h2>
        </div>
        <!-- end section-tittle -->
        <div class="slider-comments">
          <div class="slider-comments__block">
            <div class="slider-comments__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/comment-img1.jpg" alt="comment">
            </div>
            <div class="slider-comments__descr">
              <p class="slider-comments__text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков. Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат </p>
              <p class="slider-comments__name">АЛЕКСЕЙ САМОЙЛОВ</p>
            </div>
          </div>
          <!-- end slider__block -->
          <div class="slider-comments__block">
            <div class="slider-comments__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/comment-img1.jpg" alt="comment">
            </div>
            <div class="slider-comments__descr">
              <p class="slider-comments__text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков. Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат </p>
              <p class="slider-comments__name">СЕРГЕЙ СЕРГЕЕВ</p>
            </div>
          </div>
          <!-- end slider__block -->
          <div class="slider-comments__block">
            <div class="slider-comments__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/comment-img1.jpg" alt="comment">
            </div>
            <div class="slider-comments__descr">
              <p class="slider-comments__text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков. Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат </p>
              <p class="slider-comments__name">ЭДУАРД СУРОВЫЙ</p>
            </div>
          </div>
          <!-- end slider__block -->
        </div>
        <!-- end slider--comments -->
      </div>
    </div>
  </section>
  <!-- end section.comments -->




<?php get_footer(); ?>
