<?php 

/* 
  Template Name: About Us
*/

?>

<?php get_header(); ?>
  <main class="main">
    <section class="promo-primary">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/about.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/about.jpg" alt="img"/>
      </picture>
      <div class="promo-primary__description"> <span>Donation</span></div>
      <div class="container">
        <div class="row">
          <div class="col-auto">
            <div class="align-container">
              <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                <h1 class="promo-primary__title"><span><?php wp_title(''); ?></span><br/><span>Charity BD</span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section start-->

    <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>

      <!-- bottom bg start-->
    <section class="bottom-background">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bottom-background__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/bottom-bg.png" alt="img"/></div>
          </div>
        </div>
      </div>
    </section>
    <!-- bottom bg end-->
  </main>

<?php get_footer(); ?>