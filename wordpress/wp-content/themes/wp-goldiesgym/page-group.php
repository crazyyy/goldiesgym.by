<?php /* Template Name: Group Page */ get_header(); ?>

  <?php $current_page_id = get_the_ID(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section class="shedule">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2>ГРУППОВЫЕ ЗАНЯТИЯ</h2>
        </div>
        <!-- end section-tittle -->
        <div class="section-body">
          <div class="shedule__text clearfix">
            <?php the_content(); ?>
          </div>
          <!-- end shedule__text -->
          <div class="shedule__slider-nav">

            <?php if( have_rows('programs') ): while ( have_rows('programs') ) : the_row();?>
              <div class="shedule__slider-nav-block">
                <div class="slider-nav__img">
                  <i class="ic ic-apple"></i>
                </div>
                <p><?php the_sub_field('short_title'); ?></p>
              </div><!-- end shedule__slider-nav-block -->
            <?php endwhile; endif; ?>

          </div><!-- end shedule__slider-nav -->
          <div class="shedule__slider">

            <?php if( have_rows('programs') ): while ( have_rows('programs') ) : the_row();?>
              <div class="shedule__slider-block">
                <div class="col-sm-4 shedule__slider-img">
                  <?php $image = get_sub_field('program_image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="col-sm-6 col-md-4 shedule__slider-descr-wrap">
                  <div class="shedule__slider-descr">
                    <div class="shedule__slider-descr-text">
                      <h3><?php the_sub_field('title'); ?></h3>
                      <?php the_sub_field('description'); ?>
                      <div class="shedule__slider-descr-full">
                        <?php the_sub_field('full_description'); ?>
                      </div><!-- /.shedule__slider-descr-full -->
                      <a href="#" class="more shedule__slider-descr-more">подробнее о программе...</a>
                    </div>
                    <!-- end shedule__slider-descr-text -->
                    <div class="shedule__slider-descr-bot">
                      <p><i class="ic ic-b_shedule"></i><?php the_sub_field('days'); ?></p>
                      <p><i class="ic ic-b_time"></i><?php the_sub_field('time'); ?></p>
                      <div class="clearfix"></div>
                    </div>
                    <!-- end shedule__slider-descr-bot -->
                    <a href="#" class="btn btn-solid btn-solid--romb shedule__slider-btnorder" data-title="<?php the_sub_field('title'); ?>">ЗАПИСАТЬСЯ НА ПРОБНОЕ ЗАНЯТИЕ<span></span></a>
                    <a href="#" class="btn btn-solid btn-solid--romb btn-mobile shedule__slider-btnorder--mobile" data-title="<?php the_sub_field('title'); ?>">ЗАПИСАТЬСЯ<span></span></a>
                  </div>
                </div>
                <!-- end shedule__slider-descr-wrap -->
                <div class="col-sm-6 col-md-4 shedule__slider-teacher-wrap">
                  <div class="shedule__slider-teacher">
                    <div class="shedule__slider-teacher-img">
                      <?php $image = get_sub_field('teacher_photo'); ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                    <!-- end shedule__slider-teacher-img -->
                    <div class="shedule__slider-teacher-text">
                      <h3><?php the_sub_field('teacher_name'); ?></h3>
                      <p class="name"><?php the_sub_field('teacher_post'); ?></p>
                      <?php the_sub_field('teacher_description'); ?>
                    </div>
                    <!-- end shedule__slider-teacher-text -->
                  </div>
                </div>
                <!-- end shedule__slider-teacher-wrap -->
                <div class="clearfix"></div>
              </div><!-- end shedule__slider-block -->
            <?php  endwhile; endif; ?>

          </div><!-- end shedule__slider -->
          <div class="shedule__table-wrap">
            <div class="col-md-3">
              <h2>РАСПИСАНИЕ ВСЕХ ГРУППОВЫХ ЗАНЯТИЙ</h2>
            </div>
            <div class="col-md-9">
              <div class="table-responsive">
                <?php the_field('table_schedule'); ?>
              </div><!-- end table-responsive -->
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end shedule__table -->
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </section><!-- end section.shedule -->

    <?php /*
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
    */ ?>
  <?php endwhile; else: ?>
    <section>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </section>
  <?php endif; ?>


<?php get_footer(); ?>
