<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header( ); ?>

<!-- ============  heading ============ -->

	 <section id="<?php echo $page_slug; ?>_heading">
      <div class="container background" style="background-image: url(<?php $bgImg = get_field('header_bg_image'); if (! empty($bgImg)) : echo $bgImg; endif; ?>);">
        <div class="row">
          <div class="col-md-12">
            <div class="title">
            <?php  

              $title = get_field('title');
              if (! empty($title)) :

            ?>
              <h1><?php echo $title; ?></h1>
         

            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============  featured content ============ -->
    <section id="<?php echo $page_slug ?>_content">
      <div class="container">
          <div class="row">
            <div class="logo_box">
              <h2>
                The 2015 Tour
              </h2>
              <img src="http://c37.df0.myftpupload.com/wp-content/themes/neverquit/assets/img/patriot_tour_2015_logo.png" alt="Patriot Tour and TNQ Logo">
              <div class="button">
                <a href="http://bit.ly/1CQlekI">
                  <div class="btn">
                    Buy Your Tickets Now
                  </div>
                </a>
              </div>
              <div id="first" class="button first_responders"> 
                <a href="http://bit.ly/1IJCJag">We appreciate and honor our First Responders, Active Military & Veterans. Get your tickets here!</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="events heading">
              <h2><?php the_field('page_heading') ?></h2>
            </div>
          </div>
          <div class="row">
            <div class="featured_copy">
              <div class="col-sm-6 col-md-6">
                <div class="tour_featured">
                  <?php the_field('pt_featured_video') ?>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div id="<?php echo $page_slug ?>_copy">
                  <div class="col-md-12">
                    <?php the_field('content') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- ============  panels ============ -->
    <section id="panels">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="panel_box">
              <div class="title">
                <h2>Tickets</h2>
                <div class="content">
                  <div class="logo">
                    <img src="http://c37.df0.myftpupload.com/wp-content/themes/neverquit/assets/img/patriot_tour_2015_logo.png" alt="Patriot Tour and TNQ Logo">
                  </div>
                  <p>20 Cities to Reignite Patriotism</p>
                </div>
                <div class="button">
                  <a href="http://bit.ly/1CQlekI">
                    <div class="btn">
                      Buy Tickets
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="panel_box">
              <div class="title">
                <h2>Featured Sponsor</h2>
                <div class="content">
                  <?php 

                  $rows = get_field('pt_sponsors'); // get all the rows
                  $rand_row = $rows[ array_rand($rows) ]; // get a random row
                  $rand_row_image = $rand_row['pt_sponsors_logo' ]; // get the sub field value 

                   ?>
                  <?php if (! empty($rand_row_image)) : ?>
                  <img src="<?php echo $rand_row_image; ?>" alt="">
                  <?php endif; ?>
                </div>
                <div class="be-a-sponsor">
                  <a href="mailto:info@patriottour.com">
                    <span class="">
                      Become a Sponsor
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4"> 
            <div class="panel_box">
              <div class="title">
                <h2>VIP Tickets</h2>
                <div class="content">
                 <p>A VIP ticket includes a meet & greet and photo opportunity with each of our featured speakers and a photo opportunity with Marcus Luttrell. You will also get "Lone survivor" and "American Wife" signed by both Marcus and Taya, respectively. It is a once in a lifetime opportunity. VIP Tickets sell out quickly so buy your tickets now!.</p>
                </div>
                <div class="button">
                  <a href="http://bit.ly/1CQlekI">
                    <div class="btn">
                      Buy Tickets
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============  patriot tour speakers ============ -->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="title">
            <h2>Patriot Tour Speakers</h2>
          </div>
        </div>
        <div class="row">
          <div class="tmembers">
            <ul>
              <?php 

               $args = array( 
                          'post_type' => 'tnq-members',
                          'order'     => 'ASC',
                          'orderby'   => 'date',
                          'posts_per_page'  => 20                          );

              $the_query = new WP_Query( $args ); 

              if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

               ?>
                
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <div class="team">
                        <div class="member">
                          <div class="img">
                            <img src="<?php the_field('photo'); ?>" alt="" class="img-responsive">
                          </div>
                          <div class="meta">
                            <div class="name">
                              <?php the_title( ); ?>
                            </div>
                            <div class="position">
                              <?php the_field('position') ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                
             <?php endwhile; endif; wp_reset_query();?>
             </ul>
          </div>
        </div>
      </div>
    </section>

  <!--   <section id="map">
      <div class="container">
        <div class="row">
          <img src="http://c37.df0.myftpupload.com/wp-content/themes/neverquit/assets/img/map.png" alt="">
        </div>
      </div>
    </section> -->

    <!-- ============  sponsors ============ -->

    <section id="sponsors">
      <div class="container">
        <div class="row">
          <div class="sponsors">
            <h2>Patriot Tour Sponsors</h2>
          </div>
          <div class="links">
            <ul>
              <?php if (have_rows('pt_sponsors')) : while (have_rows('pt_sponsors')) : the_row(); ?>
                <li><a href="<?php the_sub_field('pt_sponsors_url') ?>"><img src="<?php the_sub_field('pt_sponsors_logo') ?>" alt=""></a></li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <ul class="sponsor-img-box">
              <li>
                <div class="sponsor-img">
                  <img src="http://teamneverquit.com/wp-content/uploads/2015/06/carrabbas_logo.png" alt="">
                </div>
              </li>
              <li>
                <div class="sponsor-img">
                  <img src="http://teamneverquit.com/wp-content/uploads/2015/06/250px-Texas_Roadhouse.png" alt="">
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      
    </section>
    <!-- ============  instagram feed ============ -->


    <section id="instagram">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Patriot Tour Instagram Feed</h2>
          </div>
        </div>
        <div class="row">
          <!-- intagram feed -->
           <div id="instafeed"></div>
        </div>
      </div>
    </section>

        <!-- ============  social media links ============ -->

    <section id="social">
      <div class="container">
        <div class="row">
          <div class="title">
            <h2>Social Links</h2>
          </div>
        </div>
        <div class="row">
          <div class="social_links center">
              <?php 

                $pt_fb     = get_field('pt_facebook', 'option');
                $pt_twtr   = get_field('pt_twitter', 'option');
                $pt_ig     = get_field('pt_instagram', 'option');
                $pt_yt     = get_field('pt_youtube', 'option');

              ?>

              <ul>
                <li>
                  <?php if (! empty($pt_fb)) : ?>
                    <a href="<?php echo $pt_fb; ?>"><i class="fa fa-facebook-square"></i></a>
                  <?php endif; ?>
                </li>
                <li>
                  <?php if (! empty($pt_twtr)) : ?>
                    <a href="<?php echo $pt_twtr; ?>"><i class="fa fa-twitter-square"></i></a>
                  <?php endif; ?>
                </li>
                <li>
                  <?php if (! empty($pt_ig)) : ?>
                    <a href="<?php echo $pt_ig; ?>"><i class="fa fa-instagram"></i></a>
                  <?php endif; ?>
                </li>
                <li>
                  <?php if (! empty($pt_yt)) : ?>
                    <a href="<?php echo $pt_yt; ?>"><i class="fa fa-youtube"></i></a>
                  <?php endif; ?>
                </li>
              </ul>

            </div>
        </div>
      </div>
    </section>

    <?php global $wp_query;
      
      $args = array( 
                    'post_type' => 'page',
                    'pagename' => 'media'
                    );

              query_posts( $args );  
                 
      ?>      
  <?php if( have_posts() ) : while (have_posts()) : the_post(); ?>
    <section id="page_speaker">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="title">
              <?php $keyCtaTitle = get_field('2_key_cta_title'); if (! empty($keyCtaTitle)) : echo $keyCtaTitle; endif; ?>
            </div>
            <div class="subtitle">
              <?php $keyCtaMsg = get_field('2_key_cta_msg'); if (! empty($keyCtaMsg)) : echo $keyCtaMsg; endif; ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="btn">
              <a href="<?php $keyCtalink = get_field('2_key_cta_button_link'); if (! empty($keyCtalink)) : echo $keyCtalink; endif; ?>"><?php $keyCtaBtnTxt = get_field('2_key_cta_button_text'); if (! empty($keyCtaBtnTxt)) : echo $keyCtaBtnTxt; endif; ?>  <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>

    <?php wp_reset_query(); rewind_posts(); ?>

<?php get_footer( ); ?>