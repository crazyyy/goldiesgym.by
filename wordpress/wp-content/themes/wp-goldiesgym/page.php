<?php get_header(); ?>
<section class="news">
  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="section-body">
        <div class="news__block">
          <div class="col-sm-12 news__block-descr">
            <h3 class="news__block-tittle"><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- end news__block -->
      </div><!-- end section-body -->
      <?php endwhile; else: ?>
        <div class="section-body">
          <div class="news__block">
            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- end news__block -->
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
