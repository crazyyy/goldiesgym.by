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
              <p>
                <i class="ic ic-f_phone"></i>
                +375 (29) <span>365-53-57</span><br>
                +375 (29) <span>512-44-52</span><br>
                +375 (17) <span>902-34-32</span>
              </p>
              <p><i class="ic ic-f_marker"></i>ул. Клары Цеткин, 51а</p>
              <p><i class="ic ic-f_email"></i>info@goldiesgym.by</p>
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
