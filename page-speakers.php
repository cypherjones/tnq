<?php get_header( ); ?>
<section id="heading">
  <div class="container background" style="background-image: url(<?php $bgImg = get_field('header_bg_image'); if (! empty($bgImg)) : echo $bgImg; endif; ?>)">
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
<section id="speaker-page">
  <div class="container">
    <div class="row">
      <h1 class="speaker-title">Team Never Quit Speakers</h1>
    </div>
    <div class="row">
    <?php 

     $args = array( 
                'post_type' => 'tnq-members',
                'order'     => 'ASC',
                'orderby'   => 'date',
                'posts_per_page'  => 20                          
                );

    $the_query = new WP_Query( $args ); 

    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

     ?>
      
      <div class="col-md-3">
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
      
    <?php endwhile; endif; wp_reset_query();?>
    </div>
    <div class="row">
      <div class="speaker-featured-video">
        
      </div>
    </div>
    <div class="row">
      <div id="about_media">
        <div class="container">
          <div class="row">
            <div class="heading">
              <h2>In Their Own Words</h2>
            </div>
          </div>
          <?php 

            $args = array(
              'post_type' => 'page',
              'pagename'      => 'about', 
              );

            $aboutPage = new WP_Query( $args );

            if (have_posts()) : while (have_posts()) : the_post();
           ?>
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
      <?php endwhile; endif; wp_reset_query(); rewind_posts(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php get_footer( ); ?>