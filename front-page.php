<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header( ); ?>

  <!-- ============ carousel ============ -->

    <section id="frontCarousel" class="carousel slide">

      <div class="carousel-inner">
        <?php 

          if(have_rows('slider')) : $i = 0;

          while (have_rows('slider')) : the_row(); 

          $i++;
          $image      = get_sub_field('image');
          $title      = get_sub_field('title');
          $subtitle   = get_sub_field('subtitle');
          $btnText    = get_sub_field('button_text');
          $btnLink    = get_sub_field('button_link');

          if ( $i == 1) :

        ?>

         <div class="item active background" style="background-image: url(<?php echo $image; ?>)">

      <?php else : ?>

         <div class="item background" style="background-image: url(<?php echo $image; ?>)">

      <?php endif; ?>
               
            <div class="container">
              <div class="row">
                <div class="copy">
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
   
      <div class="pull-center">
        <a class="carousel-control left" href="#frontCarousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#frontCarousel" data-slide="next">›</a>
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
              <a href="<?php $keyCtalink = get_field('key_cta_button_Link'); if (! empty($keyCtalink)) : echo $keyCtalink; endif; ?>"><?php $keyCtaBtnTxt = get_field('key_cta_button_text'); if (! empty($keyCtaBtnTxt)) : echo $keyCtaBtnTxt; endif; ?>  <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ============ meet the team ============ -->

    <?php

        
        $args = array( 
                      'post_type' => 'tnq-members',
                      'order'     => 'ASC',
                      'orderby'   => 'date',
                      'posts_per_page'  => 20
                      );

        $the_query = new WP_Query( $args );  
                   
      ?>

    <section id="team_carousel" style="background-image: url(<?php bloginfo('template_directory' ); ?>/assets/img/team_bg.png);">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="title">
            <h1>Meet the TNQ Speakers</h1>   <!-- Add into acf -->
          </div>
          <div class="subtitle">
            <p>Click on the photos to learn more about each speaker.</p>
          </div>
        </div>
      </div>
        <div id="homeCarousel" class="">
          <div class="">
            <div class="responsive"> 
            <?php

              if ( $the_query->have_posts() ) : $i = 0;

              while ( $the_query->have_posts()) : $the_query->the_post();
            
              $i++;
            
               ?> 

              

              <?php ?>
                        
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
                
            

            
            <?php endwhile; ?>
              
            </div>
            
            <?php   endif; wp_reset_postdata();?>

          </div>
  

          <!-- <div class="pull-center">
            <a class="carousel-control left" href="#homeCarousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#homeCarousel" data-slide="next">›</a>
          </div> -->
        </div>
      </div>
    </section>


    <!-- ============ welcome msg ============ -->
    
   <!--  <section id="welcomeMsg">
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
    </section> -->

    
    

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

  
<?php get_footer( ); ?>