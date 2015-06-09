<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

 <?php get_header(); ?>
    	
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

    <!-- ============  featured media element  ============ -->

    <section id="featured_<?php echo $page_slug ?>">
      <div class="container">
        <div class="row">
          <?php 

            $mainElement = get_field('main_media_video');

            if (! empty($mainElement)) : 

           ?> 
          <div class="video">
              <?php echo $mainElement; ?>
          </div>

          <?php  endif; ?>
        </div>
      </div>
    </section>

    <!-- ============  gallery  ============ -->

    <section id="instagram">
      <div class="container">
        <div class="row">
          <!-- intagram feed -->
           <div id="mediafeed"></div>
        </div>
      </div>
    </section>
    <!-- ============ cta 2 ============ -->

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