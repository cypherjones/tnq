<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header( ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- ============ carousel ============ -->

    <section id="frontCarousel" class="carousel slide">

      <div class="carousel-inner">
        <div class="container full">
        <?php if(have_rows('slider')) : while (have_rows('slider')) : the_row(); ?>

        <?php 

          $image      = get_sub_field('image');
          $title      = get_sub_field('title');
          $subtitle   = get_sub_field('subtitle');
          $btnText    = get_sub_field('button_text');
          $btnLink    = get_sub_field('button_link');

        ?>

          <div class="item background" style="background-image: url(<?php echo $image; ?>)">
            <div class="container">
              <div class="row">
                <div class="content">
                  <div class="title right"> 

                    <?php if(! empty($title)) : echo $title; endif; ?>
                    
                  </div>
                  <div class="subtitle right clear_right">

                    <?php if(! empty($subtitle)) : ?>
                      <p><?php echo $subtitle ?></p>
                    <?php endif; ?>
                    
                  </div>

                  <?php if (! empty($btnText)) : ?>
                  <div class="btn right clear_right">
                    <a href="<?php echo $btnLink; ?>"><?php echo $btnText; ?></a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>

      <div class="pull-center">
        <a class="carousel-control left" href="#frontCarousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#frontCarousel" data-slide="next">›</a>
      </div>
    </section>

    <!-- ============ welcome msg ============ -->

    <section id="welcomeMsg">
      <div class="container center">
        <div class="row">
          <div class="content">
            <?php 

            $welcomeMsg   = get_field('welcome_msg');

            if (! empty($welcomeMsg)) :
              echo $welcomeMsg;
            endif;
            
           ?>
          </div>
        </div> 
      </div>
    </section>

    <!-- ============ cta 1 ============ -->

    <section id="cta123">
      <div class="container no_pad center">
        <div class="row">
        <?php $ctaImg1  = get_field('cta_1_image'); if (! empty($ctaImg1)) : ?>
          <div class="col-xs-12 col-sm-12 col-md-6 background cta1" style="background-image: url(<?php echo $ctaImg1; ?>)">
        <?php endif ?>
            <div class="btn cta1_btn">
              <a href="<?php the_field('cta_1_link') ?>"><?php the_field('cta_1_text') ?> <i class="fa  fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 no_pad">
          <?php $ctaImg2  = get_field('cta_2_image'); if (! empty($ctaImg2)) : ?>
            <div class="col-xs-12 col-md-6 background" style="background-image: url(<?php echo $ctaImg2; ?>)">
          <?php endif ?>
              <div class="btn cta2_btn">
                <a href="<?php the_field('cta_2_link') ?>"><?php the_field('cta_2_text') ?><i class="fa fa-arrow"></i></a>
              </div>
            </div>
          <?php $ctaImg3  = get_field('cta_3_image'); if (! empty($ctaImg3)) : ?>
            <div class="col-xs-12 col-md-6 background" style="background-image: url(<?php echo $ctaImg3; ?>)">
          <?php endif ?>
              <div class="btn cta3_btn">
                <a href="<?php the_field('cta_3_link') ?>"><?php the_field('cta_3_text') ?><i class="fa fa-arrow"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ recent news/posts ============ -->
    
    <section id="news">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h1>Latest TNQ News</h1>   <!-- Add into acf -->
          </div>
        </div>
      </div>
      <div class="row desktop">
        <div id="newsCarousel" class="carousel slide">
          <div class="carousel-inner">

            <?php
              $args = array( 
                'posts_per_page' => 10 
                );
            
              $the_query = new WP_Query( $args );

              if ( $the_query->have_posts() ) : $i = 0;

              while ( $the_query->have_posts() ) : $the_query->the_post();
            
              $i++;
            
              if ( $i == 1 ) { echo '<div class="item active">'; }
                        
                        echo '<div class="col-xs-12 col-sm-4 col-md-4">';
                            
                        $date = get_the_date('d M Y');
                        $title   = get_the_title(); ?>
                      <a href="<?php the_permalink(); ?>">
                        <div class="post" style="background-image: url(<?php the_field('featured_image') ?>)">
                          <div class="overlay">
                          <p class="date"><?php echo $date; ?></p>
            
                          <p class="title"><?php echo $title; ?></p>
                          </div>
                        </div>
                      </a>
                        
              </div>
            
            <?php if ( $i % 3 == 0 && $i != 10 ) { echo '</div><div class="item ">'; }
            
            endwhile;
                        echo '</div>';
            
            wp_reset_postdata();
            
            endif;
            
            ?>

          </div>
        
            
          <div class="pull-center">
            <a class="carousel-control left" href="#newsCarousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#newsCarousel" data-slide="next">›</a>
          </div>
        </div>
      </div>
      <div class="row mbl">
        <?php
              $args = array( 
                'posts_per_page' => 1 
                );
            
              $the_query = new WP_Query( $args );

              if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                            
                <a href="<?php the_permalink(); ?>">
                  <div class="post" style="background-image: url(<?php the_field('featured_image') ?>)">
                    <div class="overlay">
                    <p class="date"><?php echo $date; ?></p>
      
                    <p class="title"><?php echo $title; ?></p>
                    </div>
                  </div>
                </a>
                        
              </div>
                        
           <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </section>

     <!-- ============ quote ============ -->
     
    <section id="quote" class="background" style="background-image:url(<?php the_field('quote_image'); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <?php $quote  = get_field('quote_text'); if (! empty($quote)) : ?>

           <div class="content">
             <?php echo $quote; ?>
           </div>

           <?php endif; ?>

           <?php $quoteAuth = get_field('quote_author'); if (! empty($quoteAuth)) : ?>

           <div class="author">
             <?php  echo $quoteAuth; ?>
           </div>

          <?php endif; ?>

          </div>
        </div>
      </div>
    </section> 

     <!-- ============ cta 2 ============ -->
  
    <section id="speaker">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="title">
              <?php $keyCtaTitle = get_field('key_cta_title'); if (! empty($keyCtaTitle)) : echo $keyCtaTitle; endif; ?>
            </div>
            <div class="subtitle">
              <?php $keyCtaMsg = get_field('key_cta_msg'); if (! empty($keyCtaMsg)) : echo $keyCtaMsg; endif; ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="btn">
              <a href="<?php $keyCtalink = get_field('key_cta_button_link'); if (! empty($keyCtalink)) : echo $keyCtalink; endif; ?>"><?php $keyCtaBtnTxt = get_field('key_cta_button_text'); if (! empty($keyCtaBtnTxt)) : echo $keyCtaBtnTxt; endif; ?>  <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php endwhile; endif; ?>
    <?php wp_reset_query(); rewind_posts(); ?>

      <!-- ============ meet the team ============ -->

    <?php

        global $wp_query;
        
        $args = array( 
                      'post_type' => 'tnq-members',
                      'order'     => 'ASC',
                      'orderby'   => 'date',
                      'posts_per_page'  => 20
                      );

                query_posts( $args );  
                   
      ?>

    <section id="team_carousel" style="background-image: url(<?php bloginfo('template_directory' ); ?>/assets/img/team_bg.png);">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="title">
            <h1>Meet the TNQ Team</h1>   <!-- Add into acf -->
          </div>
          <div class="subtitle">
            <p>Inventore labore, pariatur qui, iste quisquam optio dolore ipsum possimus! Pariatur dolore amet fugiat soluta doloremque nostrum quaerat atque architecto repudiandae earum!</p>
          </div>
        </div>
      </div>
        <div id="<?php echo $page_slug; ?>Carousel" class="carousel slide">
          <div class="carousel-inner">

            <?php

              if ( have_posts() ) : $i = 0;

              while ( have_posts()) : the_post();
            
              $i++;
            
              if ( $i == 1 ) { ?> 

              <div class="item active"> 

              <?php } ?>
                        
                <?php  if(is_mobile()) : ?>
                  <div class="col-xs-6">
                <?php else : ?>
                  <div class="col-xs-3 col-sm-3 col-md-3">
                <?php endif; ?>
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
                </div>
            
            <?php if(is_mobile()) : ?>
              <?php if ( $i % 2 == 0 && $i != 5 ) { ?> 

            </div>

            <div class="item">

            <?php } ?>
            <?php else : ?>
              <?php if ( $i % 4 == 0 && $i != 10 ) { ?> 

            </div>

            <div class="item">

            <?php } ?>

            <?php endif; ?>
            
            <?php endwhile; ?>
              
            </div>
            
            <?php  wp_reset_postdata(); endif; ?>

          </div>
  

          <div class="pull-center">
            <a class="carousel-control left" href="#homeCarousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#homeCarousel" data-slide="next">›</a>
          </div>
        </div>
      </div>
    </section>

  
<?php get_footer( ); ?>