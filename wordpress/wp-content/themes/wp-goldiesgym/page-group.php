<?php /* Template Name: Group Page */ get_header(); ?>

  <?php $current_page_id = get_the_ID(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section class="group-classes">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2>ГРУППОВЫЕ ЗАНЯТИЯ</h2>
        </div>
        <!-- end section-tittle -->
        <div class="section-body">
          <div class="group-classes__block">
            <div class="group-classes__block-tittle">
              <h3>ПОПУЛЯРНЫЕ ПАКЕТЫ</h3>
            </div>
            <!-- end group-classes__block-tittle -->

            <?php if( have_rows('abonements') ): while ( have_rows('abonements') ) : the_row();?>
              <div class="group-classes__popuar">
                <div class="col-md-3">
                  <h3 class="group-classes__tittle"><?php the_sub_field('groupe_title'); ?></h3>
                  <p class="group-classes__date"><?php the_sub_field('group_subtitle'); ?></p>
                </div>
                <div class="col-sm-4 col-md-3 group-classes__card-wrap">
                  <div class="group-classes__card">
                    <p><?php the_sub_field('block_one_title'); ?></p>
                    <span><?php the_sub_field('block_one_price'); ?></span>
                    <button type="button" class="btn btn-inf" data-container="body" data-toggle="popover" data-placement="top" data-content="+ групповые"><i class="ic ic-info"></i></button>
                  </div>
                </div>
                <!-- end group-classes__card-wrap -->
                <div class="col-sm-4 col-md-3 group-classes__card-wrap">
                  <div class="group-classes__card">
                    <p><?php the_sub_field('block_two_title'); ?></p>
                    <span><?php the_sub_field('block_two_price'); ?></span>
                    <button type="button" class="btn btn-inf" data-container="body" data-toggle="popover" data-placement="top" data-content="+ групповые"><i class="ic ic-info"></i></button>
                  </div>
                </div>
                <!-- end group-classes__card-wrap -->
                <div class="col-sm-4 col-md-3 group-classes__card-wrap">
                  <div class="group-classes__card">
                    <p><?php the_sub_field('block_three_title'); ?></p>
                    <span><?php the_sub_field('block_three_price'); ?></span>
                    <button type="button" class="btn btn-inf" data-container="body" data-toggle="popover" data-placement="top" data-content="+ групповые"><i class="ic ic-info"></i></button>
                  </div>
                </div>
                <!-- end group-classes__card-wrap -->
                <div class="clearfix"></div>
              </div><!-- end group-classes__popuar -->
            <?php endwhile; endif; ?>

          </div>
          <!-- end group-classes__block -->
          <div class="group-classes__block">
            <div class="group-classes__block-tittle group-classes__block-tittle--all">
              <h3>ВСЕ УСЛУГИ</h3>
            </div>
            <div class="personal-classes__block">
              <div class="col-md-3">
              <h3 class="group-classes__tittle">ПЕРСОНАЛЬНЫЕ <br>ТРЕНИРОВКИ</h3>
              </div>
              <div class="col-md-9">
                <table class="all-services">
                  <tbody>
                    <?php if( have_rows('services') ): while ( have_rows('services') ) : the_row();?>
                      <tr>
                        <td><?php the_sub_field('services_title'); ?></td>
                        <td><?php the_sub_field('services_time'); ?></td>
                        <td><?php the_sub_field('services_cost'); ?></td>
                      </tr>
                    <?php endwhile; endif; ?>
                  </tbody>
                </table>
              </div>
              <div class="clearfix"></div>
            </div><!-- end personal-classes__block -->

          </div>
          <!-- end group-classes__block -->
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </section>
  <!-- end section.group-classes -->



  <?php endwhile; else: ?>
    <section>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </section>
  <?php endif; ?>

<?php get_footer(); ?>
