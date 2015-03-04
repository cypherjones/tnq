<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

 <?php get_header(); ?>
    	
  <!-- ============  heading ============ -->

	 <section id="<?php echo $page_slug; ?>_heading">
      <div class="container background" style="background-image: url(<?php $bgImg = get_field('header_bg_image'); if (! empty($bgImg)) : echo $bgImg; endif; ?>);   ">
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

              <?php echo the_field('cta_title'); ?>

            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============  content/posts  ============ -->

    <section id="<?php echo $page_slug; ?>_content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php

              $paged = (get_query_var('paged' )) ? get_query_var('paged' ) : 1;
              $args = array(
                     'paged' => $paged,
                     'posts_per_page' => 3,
            );
          
              query_posts($args); ?>

              <div class="title">
                <h2>Latest News</h2>
              </div>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <div class="row post content">
                    <div class="col-sm-6 col-md-6">
                      <div class="img">
                        <?php the_post_thumbnail( ); ?>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 post">
                      <div class="date">
                        <?php the_date( ); ?>
                      </div>
                      <div class="post title">
                        <?php the_title( ); ?>
                      </div>
                      <div class="excerpt">
                        <?php the_excerpt(); ?>
                      </div>
                      <div class="read">
                        <a href="<?php the_permalink(); ?>">Read more...</a>
                      </div>
                    </div>
                  </div>

                <?php  endwhile; endif; ?>

              <?php wp_reset_postdata(); rewind_posts(); ?>
              <div class="row">
                <div id="pagination" class="row">
                  <?php
                    $previous_post = get_adjacent_post(false, '', true);
                    $next_post = get_adjacent_post(false, '', false);
                  ?>
                  <ul>
                  <?php if ($previous_post): // if there are older articles ?>
                      <li class="btn"><?php next_posts_link( '« More Great Posts'); ?></li>
                  <?php endif; ?>
                  <?php if ($next_post): // if there are newer articles ?>
                      <li class="btn"><?php previous_posts_link( 'Newer Posts »' ); ?></li>
                  <?php endif; ?>
                  </ul>
                </div>
              </div>    
          </div>
          <div class="col-md-4">

          <!-- ============  top sidebar  ============ -->

            <div class="sidebar top">
              <div class="social center">
              <?php 

                $fb     = get_field('facebook', 'option');
                $twtr   = get_field('twitter', 'option');
                $gp     = get_field('google_plus', 'option');

              ?>

              <ul>
                <li class="square">
                  <?php if (! empty($fb)) : ?>

                    <a href="<?php echo $fb; ?>"><i class="fa fa-facebook"></i></a>

                  <?php endif; ?>
                </li>
                <li class="square">
                  <?php if (! empty($twtr)) : ?>

                    <a href="<?php echo $twtr; ?>"><i class="fa fa-twitter"></i></a>

                  <?php endif; ?>
                </li>
                <li class="square">
                  <?php if (! empty($gp)) : ?>

                    <a href="<?php echo $gp; ?>"><i class="fa fa-google-plus"></i></a>

                  <?php endif; ?>
                </li>
              </ul> 

              <?php 
                    
                    global $wp_query;
                    
                    $args = array( 
                                  'post_type' => 'page',
                                  'pagename' => 'news'
                                  );

                            query_posts( $args );  
                

                if(have_posts()) : ?><?php while(have_posts()) : the_post(); 

                      $sidebar_title_top           = get_field('sidebar_title_top');
                      $sidebar_subtitle_top        = get_field('sidebar_subtitle_top');
                      $sidebar_button_text_top     = get_field('sidebar_button_text_top');
                      $sidebar_button_link_top     = get_field('sidebar_button_link_top');
                      $sidebar_subtitle_top        = get_field('sidebar_subtitle_top');
                      $sidebar_button_text_top     = get_field('sidebar_button_text_top');
                      $sidebar_button_link_top     = get_field('sidebar_button_link_top');
                      $sidebar_header_middle       = get_field('sidebar_header_middle');
                      $sidebar_subtitle_middle     = get_field('sidebar_subtitle_middle');
                      $sidebar_content_middle      = get_field('sidebar_content_middle');
                      $sidebar_button_text_middle  = get_field('sidebar_button_text_middle');
                      $sidebar_button_link_middle  = get_field('sidebar_button_link_middle');
                      $sidebar_title_bottom        = get_field('sidebar_title_bottom');
                      $sidebar_subtitle_bottom     = get_field('sidebar_subtitle_bottom');
                      $sidebar_form_content_bottom = get_field('sidebar_form/content_bottom'); 
              ?>

              <?php if (! empty($sidebar_title_top)) : ?>

                <div class="title"> <?php echo $sidebar_title_top; ?></div>

              <?php endif; ?>

              <?php if (! empty($sidebar_subtitle_top)) : ?>

                <div class="subtitle"><?php echo $sidebar_subtitle_top; ?></div>

              <?php endif; ?>

              <?php if (! empty($sidebar_button_text_top)) : ?>

               <div class="btn"><a href=""><?php echo $sidebar_button_text_top; ?></a></div>

              <?php endif; ?>

            </div>
            </div>

            <!-- ============  middle sidebar  ============ -->

            <div class="sidebar middle">
              <?php if (! empty($sidebar_header_middle)) : ?>

                <div class="title"><?php echo $sidebar_header_middle; ?></div>

              <?php endif; ?>

              <?php if (! empty($sidebar_subtitle_middle)) : ?>

                <div class="subtitle"><?php echo $sidebar_subtitle_middle; ?></div>

              <?php endif; ?>

              <?php if (! empty($sidebar_content_middle)) : ?>

                <div class="content"><?php echo $sidebar_content_middle; ?></div>

              <?php endif; ?>

               <?php if (! empty($sidebar_button_text_middle)) : ?>

              <div class="btn"><a href=""><?php echo $sidebar_button_text_middle; ?></a></div>

              <?php endif; ?>

            </div>

            <!-- ============  bottom sidebar  ============ -->

            <div class="sidebar bottom">

              <?php if (! empty($sidebar_title_bottom)) : ?>

                <div class="title"><?php echo $sidebar_title_bottom; ?></div>

              <?php endif; ?>

              <?php if (! empty($sidebar_subtitle_bottom)) : ?>

                <div class="subtitle"><?php echo $sidebar_subtitle_bottom; ?></div>

              <?php endif; ?>

              <?php if (! empty($sidebar_form_content_bottom)) : ?>

                <div class="form"><?php echo $sidebar_form_content_bottom; ?></div>

              <?php  endif; ?>
            </div>
          </div>
          <?php endwhile; else : endif; ?> 
        </div>
      </div>
    </section>

    <!-- ============  cta  ============ -->
    <?php 
          
          global $wp_query;
          
          $args = array( 
                        'post_type' => 'page',
                        'pagename' => 'home'
                        );

                  query_posts( $args );  
      

      if(have_posts()) : ?><?php while(have_posts()) : the_post(); 
    ?>
    <section id="speaker">
      <div class="container news">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="title">
              <?php $keyCtaTitle = get_field('key_cta_title'); if (! empty($keyCtaTitle)) : echo $keyCtaTitle; endif; ?>
            </div>
            <div class="subtitle">
              <?php $keyCtaMsg = get_field('key_cta_msg'); if (! empty($keyCtaMsg)) : echo $keyCtaMsg; endif; ?>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="btn">
              <a href="<?php $keyCtalink = get_field('key_cta_button_link'); if (! empty($keyCtalink)) : echo $keyCtalink; endif; ?>"><?php $keyCtaBtnTxt = get_field('key_cta_button_text'); if (! empty($keyCtaBtnTxt)) : echo $keyCtaBtnTxt; endif; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; endif; ?>

 <?php get_footer(); ?>