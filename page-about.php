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

              $title = get_field('page_title');
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

    <section id="<?php echo $page_slug ?>_content">
      <div class="container">
        <div class="heading">
        <?php  

          $heading = get_field('page_heading');

          if (! empty($heading)) :

        ?>
          <h2><?php echo $heading; ?></h2>
          
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


    <section id="<?php echo $page_slug; ?>_carousel">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h1>The TNQ TEAM</h1>   <!-- Add into acf -->
          </div>
          <div class="subtitle">
            <p>Inventore labore, pariatur qui, iste quisquam optio dolore ipsum possimus! Pariatur dolore amet fugiat soluta doloremque nostrum quaerat atque architecto repudiandae earum!</p>
          </div>
        </div>
      </div>
        <div id="<?php echo $page_slug; ?>Carousel" class="carousel slide">
          <div class="carousel-inner">

            <?php

              if ( have_rows('team') ) : $i = 0;

              while ( have_rows('team') ) : the_row();
            
              $i++;
            
              if ( $i == 1 ) { ?> 

              <div class="item active team"> 

              <?php } ?>
                        
                <div class="col-xs-3 col-sm-3 col-md-3 member">

                  <div class="img">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                  </div>
                  <div class="meta">
                    <div class="name">
                      <?php the_sub_field('name'); ?>
                    </div>
                    <div class="position">
                      <?php the_sub_field('position'); ?>
                    </div>
                    <div class="description">
                      <?php the_sub_field('description'); ?>
                    </div>
                  </div>

                </div>
            
            <?php if ( $i % 5 == 0 && $i != 10 ) { ?> 

            </div>

            <div class="item ">

            <?php } 
            
            endwhile; ?>
              
            </div>
            
            <?php  wp_reset_postdata(); endif; ?>

          </div>
  

          <div class="pull-center">
            <a class="carousel-control left" href="#<?php echo $page_slug; ?>Carousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#<?php echo $page_slug; ?>Carousel" data-slide="next">›</a>
          </div>
        </div>
      </div>
    </section>

    <section id="<?php echo $page_slug; ?>_form">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="title">
              <h2>Book A Speaker</h2>
            </div>
            <div class="subtitle">
              Fill out the form below to book a TNQ Speaker
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form">
            
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>