<?php get_header(); ?>
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="section-tittle">
          <h2>СОБЫТИЯ</h2>
        </div>
        <!-- end section-tittle -->
        <div class="section-body">

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="news__block">
              <div class="col-sm-5 news__block-img">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
              </div>
              <div class="col-sm-7 news__block-descr">
                <h3 class="news__block-tittle"><?php the_title(); ?></h3>
                <?php wpeExcerpt('wpeExcerpt40'); ?>
                <span class="news__block-date"><?php the_time('d F Y'); ?></span>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="news__block-more btn btn-contur">подробнее</a>
              </div>
              <div class="clearfix"></div>
            </div><!-- end news__block -->
          <?php endwhile; else: ?>
            <div class="news__block">
              <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
              <div class="clearfix"></div>
            </div><!-- end news__block -->
          <?php endif; ?>

        </div>
        <!-- end section-body -->

        <?php get_template_part('pagination'); ?>
        <!-- end pages-list -->
      </div>
    </div>
  </section>
  <!-- end section.news -->
<?php get_footer(); ?>
