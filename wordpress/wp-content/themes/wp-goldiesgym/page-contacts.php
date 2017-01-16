<?php /* Template Name: Contacts Page */ get_header(); ?>

  <?php $current_page_id = get_the_ID(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


  <section class="contacts">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2><?php the_title(); ?></h2>
        </div>
        <!-- end section-tittle -->
        <div class="section-body">
          <div class="col-sm-5 contacts__left-wrap">
            <div class="contacts__left">
              <?php the_content(); ?>
            </div>
          </div>
          <!-- end contacts__left-wrap -->
          <div class="col-sm-7 contacts__right-wrap">
            <div class="contacts__right">
              <h3>ОСТАВИТЬ СООБЩЕНИЕ</h3>
               <?php echo do_shortcode('[contact-form-7 id="1544" title="Contact Page" html_class="f-form-help f-form-help--contacts"]'); ?>
            </div>
          </div>
          <!-- end contacts__right-wrap -->
          <div class="clearfix"></div>
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </section><!-- end section.contacts -->

  <?php endwhile; else: ?>
    <section>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </section>
  <?php endif; ?>



<?php get_footer(); ?>
