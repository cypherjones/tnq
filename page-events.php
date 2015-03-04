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
              
            <?php else : ?>

              <h1>Please Enter A Page Title</h1>

            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="<?php echo $page_slug ?>_copy">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php the_field('content') ?>
          </div>
        </div>
      </div>
    </section>
  
    <!-- ============  events ============ -->

    <section id="<?php echo $page_slug ?>_content">
      <div class="container">
          <?php

          $query = new WP_Query( 
                      array(
                            'post_type' => 'tnq-events',
                            'order'     => 'ASC',
                            'orderby'   => 'meta_value',
                            'meta_key'  => 'event_date',
                            'posts_per_page'  => 48,
                            'meta_query' => array(
                                array(
                                  'value'         => date('F j, Y',strtotime("today")),
                                  'compare'       => '>=',
                                  'type'          => 'NUMERIC'
                                )
                              )
                          )
                        );              
         ?>

        <div id="<?php echo $page_slug ?>_posts" class="row">
          <div class="col-xs-12 col-md-12 img_column">

            <?php while ( $query->have_posts()) : $query->the_post(); 

              $veneuImage   = get_field('venue_image');
              $veneuName    = get_field('venue_name');
              $veneuTixUrl  = get_field('buy_tix_url');
              $eventDate    = get_field('event_date');
              $eventTime    = get_field('event_time');

            ?>

                  <div class="mix col-xs-6 col-sm-6 col-md-3">
                    <div class="taste">
                      <div class="post_thumb">

                      <?php if (! empty($veneuImage)) : ?>

                        <img class="img-responsive" src="<?php echo $veneuImage; ?>" alt="">

                      <?php endif; ?>

                      </div>
                    </div>
                    <div class="meta">
                      <div class="title">
                        <?php the_title( ); ?>
                      </div>
                      <div class="date">

                         <?php if (! empty($veneuName)) : echo $veneuName; endif; ?> / <?php if (! empty($eventDate)) : echo $eventDate; endif; ?>

                      </div>
                    </div>
                  </div>

            <?php endwhile; wp_reset_query();  ?>

        </div>
      
        </div>  <!-- / row -->
    </div>


    </section>

    <section id="instagram">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Instagram Feed</h2>
          </div>
        </div>
        <div class="row">
          <!-- intagram feed -->
           <div id="instafeed"></div>
        </div>
      </div>
    </section>

    <section id="partners">
      <div class="container">
        <div class="row">
          <div class="btn partner">
                <span>Our Partners</span>
              </div>
              <div class="partner logos">
                <ul>
                  <?php if( have_rows('partner','option') ): while ( have_rows('partner','option') ) : the_row(); ?>
                    <li>
                      <a href="<?php the_sub_field('partner_url', 'option') ?>">
                        <img src="<?php the_sub_field('partner_logo','option'); ?>" alt="">
                      </a>
                    </li>
                  <?php endwhile; endif; ?>
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
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="title">
              <?php $keyCtaTitle = get_field('2_key_cta_title'); if (! empty($keyCtaTitle)) : echo $keyCtaTitle; endif; ?>
            </div>
            <div class="subtitle">
              <?php $keyCtaMsg = get_field('2_key_cta_msg'); if (! empty($keyCtaMsg)) : echo $keyCtaMsg; endif; ?>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
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