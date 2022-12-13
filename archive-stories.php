<?php 
 get_header();

?>
      <main class="main">
        <section class="promo-primary">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/stories.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/stories.jpg" alt="img"/>
          </picture>
          <div class="promo-primary__description"> <span>All <?php wp_title(''); ?></span></div>
          <div class="container">
            <div class="row">
              <div class="col-auto">
                <div class="align-container">
                  <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                    <h1 class="promo-primary__title"><span>Our</span> <span><?php wp_title(''); ?></span></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- stories start-->
        <section class="section stories">
          <div class="container">
            <div class="row offset-70">

              <?php 
                $count = 0;
                while (have_posts()): the_post();
                  $count++;

                  if($count%2==1):
              ?>
              <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                <div class="stories-item">
                  <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                      <div class="img-box"><img class="img--layout" src="<?php echo get_post_meta( get_the_ID(), '_stories-bg-image', true ); ?>" alt="img"/>
                        <div class="img-box__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                      <div class="heading heading--primary"><span class="heading__pre-title"><h4><?php echo $count; ?></h4></span>
                        <h2 class="heading__title"><span><a style="text-decoration:none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
                      </div>
                      <p><?php echo wp_trim_words(get_the_content(), 45, '...'); ?></p><a class="button stories-item__button button--primary" href="<?php the_permalink(); ?>"><?php echo get_post_meta( get_the_ID(), '_stories-btn-text', true ); ?></a>
                    </div>
                  </div>
                </div>
              </div>

              <?php endif; if($count%2==0): ?>

              <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                <div class="stories-item">
                  <div class="row align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 col-xl-6">
                      <div class="heading heading--primary"><span class="heading__pre-title"><h4><?php echo $count; ?></h4></span>
                        <h2 class="heading__title"><span><a style="text-decoration:none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
                      </div>
                      <p><?php echo wp_trim_words(get_the_content(), 45, '...'); ?></p><a class="button stories-item__button button--primary" href="<?php the_permalink(); ?>"><?php echo get_post_meta( get_the_ID(), '_stories-btn-text', true ); ?></a>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                      <div class="img-box"><img class="img--layout" src="<?php echo get_post_meta( get_the_ID(), '_stories-bg-image', true ); ?>" alt="img"/>
                        <div class="img-box__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php endif; endwhile; ?>

            </div>
          </div>
        </section>
        <!-- stories end-->
      </main>
<?php get_footer(); ?>