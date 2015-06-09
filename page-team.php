<?php

        global $post;

        $page_slug  = $post->post_name;

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
            <h1>Meet the TNQ Speakers</h1>   <!-- Add into acf -->
          </div>
          <div class="subtitle">
            <p>Click on the photos to learn more about each speaker.</p>
          </div>
        </div>
      </div>
        <div id="homeCarousel" class="carousel slide">
          <div class="carousel-inner">

            <?php

              if ( have_posts() ) : $i = 0;

              while ( have_posts()) : the_post();
            
              $i++;
            
              if ( $i == 1 ) { ?> 

              <div class="item active"> 

              <?php } ?>
                        
                <?php  if(is_mobile()) : ?>
                  <div class="col-xs-12">
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
              <?php if ( $i % 1 == 0 && $i != 6 ) { ?> 

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