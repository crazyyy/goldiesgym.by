<?php /* Template Name: Clients Page */ get_header(); ?>

  <?php $current_page_id = get_the_ID(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section class="for-clients">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2><?php the_title(); ?></h2>
        </div><!-- end section-tittle -->
        <div class="section-body">
          <div class="for-clients__text">
            <?php the_content(); ?>
            <div class="clearfix"></div>
          </div>
          <!-- end for-clients__text -->
          <div class="for-clients__advantages">

            <?php if( have_rows('special') ): while ( have_rows('special') ) : the_row();?>
              <div class="col-xs-12 col-sm-6 for-clients__block-wrap">
                <div class="for-clients__block">
                  <i class="ic ic-aply"></i>
                  <h3><?php the_sub_field('title'); ?></h3>
                  <?php the_sub_field('content'); ?>
                </div>
              </div><!-- end for-clients__block-wrap -->
            <?php endwhile; endif; ?>

            <div class="clearfix"></div>
          </div>
          <!-- end for-clients__blocks -->
          <div class="for-clients__button">
            <a href="#" class="btn btn-solid btn-solid--romb for-clients__button">ЗАЯВКА НА КОРПОРАТИВНЫЙ ФИТНЕС<span></span></a>
            <a href="#" class="btn btn-solid btn-solid--romb btn-mobile for-clients__button-btn">ЗАЯВКА<span></span></a>
          </div>
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </section>
  <!-- end section.for-clients -->

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
