<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

 <?php get_header(); ?>


<section id="<?php echo $page_slug; ?>_heading">
      <div class="container background" style="background-image: url(<?php $bgImg = get_field('header_bg_image'); if (! empty($bgImg)) : echo $bgImg; endif; ?>)">
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

    <!-- ============ content ============ -->

    <section id="<?php echo $page_slug ?>_content">
      <div class="container">
        <div class="heading">
        <?php  

          $heading = get_field('page_heading');

          if (! empty($heading)) :

        ?>
           <h2>The <span>Team Never Quit</span> Mission</h2>
          
        <?php else : ?>

          <h2>The <span>Team Never Quit</span> Mission</h2>

        <?php endif; ?>
        </div>
        <div class="content">

          <?php  $content = get_field('content'); if (! empty($content)) :echo $content; endif; ?>

        </div>
        <div class="btns">
          <ul>
            <li>
            <?php  $ctaBtnL_Text = get_field('cta_button_left_text'); if (! empty($ctaBtnL_Text)) : ?>

              <div class="btn btnleft">
                <a href="<?php the_field('cta_button_left_link') ?>"> <?php echo $ctaBtnL_Text; ?>  <i class="fa fa-plus-square-o"></i></a>
              </div>

            <?php endif; ?>
            </li>
            <li>
            <?php  $ctaBtnR_Text = get_field('cta_button_right_text'); if (! empty($ctaBtnR_Text)) : ?>

              <div class="btn btnright">
                <a href="<?php the_field('cta_button_right_link') ?>"> <?php echo $ctaBtnR_Text; ?>  <i class="fa fa-plus-square-o"></i></a>
              </div>

            <?php endif; ?>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ============ carousel ============ -->

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
                        
                <div class="col-xs-3 col-sm-3 col-md-3">
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
                          <div class="description">

                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            
            <?php if ( $i % 4 == 0 && $i != 10 ) { ?> 

            </div>

            <div class="item">

            <?php } 
            
            endwhile; ?>
              
            </div>
            
            <?php  wp_reset_postdata(); endif; rewind_posts();?>

          </div>
   

          <div class="pull-center">
            <a class="carousel-control left" href="#aboutCarousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#aboutCarousel" data-slide="next">›</a>
          </div>
        </div>
      </div>
    </section>
  <!-- ============ cta 2 ============ -->

  <?php global $wp_query;
      
      $args = array( 
                    'post_type' => 'page',
                    'pagename' => 'about'
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
    <?php get_footer(); ?>