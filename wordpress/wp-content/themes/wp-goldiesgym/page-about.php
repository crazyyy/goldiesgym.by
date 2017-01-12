<?php /* Template Name: About Page */ get_header(); ?>

  <?php $current_page_id = get_the_ID(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="about-us">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h2><?php the_title(); ?></h2>
          </div>
          <!-- end section-tittle -->
        </div>
      </div>
      <div class="about-us__descr">
        <div class="container">
          <div class="row">
            <div class="col-md-6 about-club__text">
              <?php the_content(); ?>
              <div class="col-xs-12 col-sm-4 about-club__block">
                <div class="about-club__block-icon">
                  <i class="ic ic-power"></i>
                </div>
                <h3>СИЛА</h3>
              </div>
              <div class="col-xs-12 col-sm-4 about-club__block">
                <div class="about-club__block-icon">
                  <i class="ic ic-energy"></i>
                </div>
                <h3>ЭНЕРГИЯ</h3>
              </div>
              <div class="col-xs-12 col-sm-4 about-club__block">
                <div class="about-club__block-icon">
                  <i class="ic ic-honor"></i>
                </div>
                <h3>СМЕЛОСЬ</h3>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <img class="bg-about-us" src="<?php echo get_template_directory_uri(); ?>/img/bg-about.png" alt="about">
      </div>
      <!-- end about-us__descr -->
      <div class="about-us__advantages">
        <div class="container">
          <div class="row">
            <div class="section-tittle--left">
              <h2>ПРЕИМУЩЕСТВА</h2>
            </div>
            <!-- end section-tittle--left -->
            <div class="about-us__advantages-wrap">

              <?php $i = 1; if( have_rows('advantages') ): while ( have_rows('advantages') ) : the_row();?>
                <div class="col-sm-6 col-md-4 about-us__advantages-block">
                  <div class="about-us__advantages-block-inner">
                    <span><?php echo $i; ?></span>
                    <h3><?php the_sub_field('advantage_title'); ?></h3>
                    <p>ss <?php the_sub_field('advantages_content'); ?></p>
                  </div>
                </div><!-- end about-us__advantages-block -->
              <?php $i++; endwhile; endif; ?>

              <div class="clearfix"></div>
            </div>
            <!-- end about-us__advantages-wrap -->
          </div>
        </div>
      </div>
      <!-- end about-us__advantages -->
    </section>
    <!-- end section.about-us -->
    <section class="about-us__gallery">
      <div class="container">
        <div class="row">
          <div class="section-tittle--left">
            <h2>ФОТОГАЛЕРЕЯ</h2>
            <ul class="nav nav-tabs nav-tabs--gallery">
              <li class="active"><a href="#interior" data-toggle="tab">ИНТЕРЬЕР</a></li>
              <li><a href="#apparatus" data-toggle="tab">ТРЕНАЖЕРЫ</a></li>
            </ul>
          </div>
          <!-- end section-tittle--left -->
        </div>
      </div>
      <!-- end container -->
      <div class="tab-content gallery">
        <div class="tab-pane fade in active" id="interior">
          <div class="gallery__images">

            <?php if( have_rows('gallery_first_block') ): while ( have_rows('gallery_first_block') ) : the_row();?>
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
        </div>
        <div class="tab-pane fade" id="apparatus">
          <div class="gallery__images">

            <?php if( have_rows('gallery_second') ): while ( have_rows('gallery_second') ) : the_row();?>
              <?php $image = get_sub_field('images'); if( !empty($image) ): ?>
                <div class="col-xs-6 col-md-2 gallery__images-block">
                  <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="example-gallery">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
                  </a>
                </div>
              <?php endif; ?>
            <?php  endwhile; endif; ?>

            <div class="clearfix"></div>
          </div>
          <!-- end gallery__images -->
        </div>
        <div class="gallery__descr-wrap"></div>
      </div>
    </section>
    <!-- end about-us__gallery -->
    <section class="about-us__personal">
      <div class="container">
        <div class="row">
          <div class="section-tittle--left">
            <h2>КОМАНДА</h2>
            <ul class="nav nav-tabs nav-tabs--gallery nav-tabs--personal">
              <li class="active"><a href="#instructors" data-toggle="tab">ИНСТРУКТОРЫ</a></li>
              <li><a href="#administration" data-toggle="tab">АДМИНИСТРАЦИЯ</a></li>
            </ul>
          </div>
          <!-- end section-tittle--left -->
          <div class="tab-content personal">
            <div class="tab-pane fade in active" id="instructors">
              <div class="slider-personal">
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shedule-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
              </div>
              <!-- end slider-personal -->
            </div>
            <div class="tab-pane fade" id="administration">
              <div class="slider-personal">
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shedule-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shedule-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
                <div class="slider-personal__block">
                  <div class="slider-personal__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/personal-img1.png" alt="personal">
                  </div>
                  <div class="slider-personal__text">
                    <h3>АЛЕКСЕЙ</h3>
                    <p>ИНДИВИДУАЛЬНЫЙ ИНСТРУКТОР ПО БОКСУ</p>
                  </div>
                </div>
                <!-- end slider-personal__block -->
              </div>
              <!-- end slider-personal -->
            </div>
          </div>
          <!-- end personal -->
        </div>
      </div>


    </section>
    <!-- end about-us__gallery -->
    <section class="partners">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h2>НАШИ ПАРТНЕРЫ</h2>
          </div>
          <!-- end section-tittle -->
          <div class="partners__slider">
            <div class="partners__block">
              <a href="#"></a>
            </div>
            <!-- end partners__block -->
            <div class="partners__block">
              <a href="#"></a>
            </div>
            <!-- end partners__block -->
            <div class="partners__block">
              <a href="#"></a>
            </div>
            <!-- end partners__block -->
            <div class="partners__block">
              <a href="#"></a>
            </div>
            <!-- end partners__block -->
            <div class="partners__block">
              <a href="#"></a>
            </div>
            <!-- end partners__block -->
          </div>
          <!-- end partners__slider -->
        </div>
      </div>
    </section><!-- end section.partners -->
  <?php endwhile; else: ?>
    <section>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </section>
  <?php endif; ?>


<?php get_footer(); ?>
