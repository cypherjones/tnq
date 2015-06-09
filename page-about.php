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

  <!-- ============ meet the team ============ -->

  <?php get_template_part('page', 'team' ); ?>
    
  <!-- ============ cta 2 ============ -->

  <?php 
      
      $args = array( 
                    'post_type' => 'page',
                    'pagename' => 'about'
                    );

      $the_query = new WP_Query( $args );  
                 
      ?>      
  <?php if( $the_query ->have_posts() ) : while ($the_query ->have_posts()) : $the_query ->the_post(); ?>
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
    <?php endwhile; endif; wp_reset_query(); rewind_posts(); ?>

    <section id="about_media">
      <div class="container">
        <div class="row">
          <div class="heading">
            <h2>In Their Own Words</h2>
          </div>
        </div>
        <div class="row">
          <?php if (have_rows('promo_videos')) : while (have_rows('promo_videos')) : the_row();?>
          
          <div class="col-md-4">
            <div class="video_box">
              <div class="video">
                <?php

                // get iframe HTML
                $iframe = get_sub_field('promo_video');


                // use preg_match to find iframe src
                preg_match('/src="(.+?)"/', $iframe, $matches);
                $src = $matches[1];


                // add extra params to iframe src
                $params = array(
                    'controls'    => 0,
                    'hd'        => 1,
                    'autohide'    => 1
                );

                $new_src = add_query_arg($params, $src);

                $iframe = str_replace($src, $new_src, $iframe);


                // add extra attributes to iframe html
                $attributes = 'frameborder="0"';

                $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


                // echo $iframe
                echo $iframe;

                ?>
              </div>
              <div class="video_title">
                <?php the_sub_field('promo_speaker') ?>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
    
        </div>
      </div>
    </section>
    <?php get_footer(); ?>