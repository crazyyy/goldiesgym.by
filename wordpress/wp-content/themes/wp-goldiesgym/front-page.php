<?php /* Template Name: Home Page */ get_header(); ?>

  <?php $current_page_id = get_the_ID(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="slider">

            <?php if( have_rows('home_top_slider') ): while ( have_rows('home_top_slider') ) : the_row();?>

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
            <?php the_content(); ?>
            <?php if( have_rows('about') ): while ( have_rows('about') ) : the_row();?>
              <div class="col-xs-12 col-sm-4 about-club__block">
                <div class="about-club__block-icon">
                  <i class="ic <?php the_sub_field('ico'); ?>"></i>
                </div>
                <h3><?php the_sub_field('about_small'); ?></h3>
                <p><?php the_sub_field('content'); ?></p>
              </div>
            <?php endwhile; endif; ?>
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
              <?php $i = 1; if( have_rows('classes') ): while ( have_rows('classes') ) : the_row();?>
                <?php if ($i == '1') {
                  $li = '<li class="active">';
                } else {
                  $li = '<li>';
              }?>
              <?php echo $li; ?><a href="#tab<?php echo $i; ?>" data-toggle="tab"><span class="num">0<?php echo $i; ?></span><span><?php the_sub_field('title'); ?></span></a></li>
              <?php $i++; endwhile; endif; ?>
            </ul>
          </div>

          <div class="col-sm-9 classes__block">
            <div class="tab-content">

              <?php $i = 1; if( have_rows('classes') ): while ( have_rows('classes') ) : the_row();?>
                <?php if ($i == '1') {
                  $class = 'tab-pane fade in active';
                } else {
                  $class = 'tab-pane fade';
              }?>
              <div class="<?php echo $class; ?>" id="tab<?php echo $i; ?>">
                <div class="col-sm-6 classes__descr--wrap">
                  <div class="classes__descr">
                    <h2><?php the_sub_field('title'); ?></h2>
                    <?php the_sub_field('description'); ?>
                    <a href="<?php echo home_url(); ?>/zanyatiya-i-klassy.htm" class="btn btn-solid"><i class="ic ic-shedule"></i>РАСПИСАНИЕ</a>
                  </div>
                </div>
                <!-- end classes__descr--wrap -->
                <div class="col-sm-6 classes__teacher--wrap">
                  <div class="classes__teacher">
                    <div class="classes__teacher-img">
                      <?php $image = get_sub_field('teacher_photo'); ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <div class="classes__teacher-name">
                      <p>ВЕДУЩИЙ КЛАССА</p>
                      <h3><?php the_sub_field('teacher_name'); ?></h3>
                    </div>
                    <div class="classes__teacher-info">
                      <p><i class="ic ic-time"></i><?php the_sub_field('time'); ?></p>
                      <p><i class="ic ic-map"></i><?php the_sub_field('place'); ?></p>
                      <p><i class="ic ic-check"></i><?php the_sub_field('cost'); ?></p>
                    </div>
                    <div class="classes__teacher-btn">
                      <a href="#" class="btn btn-solid btn-solid--romb shedule__slider-btnorder" data-title="<?php the_sub_field('title'); ?>">ЗАПИСАТЬСЯ<span></span></a>
                    </div>
                  </div>
                </div>
                <!-- end classes__teacher--wrap -->
                <div class="clearfix"></div>
              </div>
              <?php $i++; endwhile; endif; ?>

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
          <?php echo do_shortcode('[contact-form-7 id="1624" title="Home Small Form" html_class="form-help home-form-small"]'); ?>

        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <!-- end form-help-wrap -->
  <section class="gallery">
    <div class="gallery__images">
      <?php if( have_rows('gallery') ): while ( have_rows('gallery') ) : the_row();?>
        <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
          <div class="col-xs-6 col-md-2 gallery__images-block">
            <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="example-gallery">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
            </a>
          </div>
        <?php endif; ?>
      <?php  endwhile; endif; ?>
      <div class="clearfix"></div>
    </div><!-- end gallery__images -->
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
          <?php if( have_rows('reviews') ): while ( have_rows('reviews') ) : the_row();?>
            <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
              <div class="slider-comments__block">
                <div class="slider-comments__img">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="slider-comments__descr">
                  <?php the_sub_field('comment'); ?>
                  <span class="slider-comments__name"><?php the_sub_field('name'); ?></span>
                </div>
              </div><!-- end slider__block -->
              <?php endif; ?>
            <?php endwhile; endif; ?>
        </div><!-- end slider--comments -->
      </div>
    </div>
  </section>
  <!-- end section.comments -->

  <?php endwhile; else: ?>
    <section>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </section>
  <?php endif; ?>


<?php get_footer(); ?>
