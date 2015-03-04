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

    <!-- ============  featured media element  ============ -->

    <section id="featured_<?php echo $page_slug ?>">
      <div class="container">
        <div class="row">
          <?php 

            $mainElement = get_field('main_media_video');

            if (! empty($mainElement)) : 

           ?>

          <div class="media">
            <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
              <a href="#">
                <span class="play">&#9658</span>
                <div class="overlay"></div>
              </a>
              <img src="http://img.youtube.com/vi/<?php echo $mainElement; ?>/maxresdefault.jpg" alt="" style="cursor:pointer" />
            </div>
            <div style="display:none">
              <iframe src="https://www.youtube.com/embed/<?php echo $mainElement; ?>?/feature=oembed" frameborder="0"></iframe>
            </div>
          </div>

          <?php  endif; ?>
        </div>
      </div>
    </section>

    <!-- ============  gallery  ============ -->

    <section id="gallery">
      <?php

            $gallery = new WP_Query( 
                        array(
                              'post_type' => 'media gallery',
                              'order'     => 'DSC',
                              'orderby'   => 'date',
                              'posts_per_page'  => 20
                            )
                          ); 
                    
          ?>


      <div class="container">
          <div class="row <?php echo $page_slug ?>"> 
            <div class="col-md-12">
              <div class="controls">
                <div class="subtitle">
                  <?php 
                    $title = get_field('page_title');
                    if (! empty($title)) : ?>
                    <h2><?php echo $title; ?></h2>
                   <?php endif; ?>
                </div>                
                <button class="filter" data-filter="all">All</button>
                <?php 
                    $terms = get_terms("category"); 
                    $count = count($terms); 
                    if ( $count > 0 ){  
                      foreach ( $terms as $term ) { 
                        echo "<button class='filter' data-filter='.".$term->slug."'>" . $term->name . "</button>";
                      }
                    } 
                  ?>
                

              </div>
            </div>
          </div>
          <div id="<?php echo $page_slug ?>_posts" class="row">
            <div class="col-xs-12 col-md-12 img_column">
              <?php while ( $gallery->have_posts()) : $gallery->the_post();
                $termsArray = get_the_terms( $post->ID, "category" );  
                $termsString = ""; 
                  foreach ( $termsArray as $term ) {  
                    $termsString .= $term->slug.' '; 
                  }
              ?> 
                    <div class="mix <?php echo $termsString; ?> item col-xs-4 col-sm-6 col-md-4">
                      <div class="taste">
                        <div class="post_thumb">
                          <?php 

                              $image = get_field('image');
                              $video = get_field('video_id');
                              $press = get_field('press_image');


                              if (! empty($image)) : ?>
                      
                                <img class="img-responsive" src="<?php echo $image ?>" alt="">

                              <?php elseif (! empty($video)) : ?>

                                <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo $video ?>/maxresdefault.jpg" alt="">

                              <?php elseif (! empty($press)) : ?>

                                <img class="img-responsive" src="<?php echo $press ?>" alt="">

                              <?php endif; 

                            ?>
                          
                        </div>
                      </div>
                      <div class="meta">
                        <div class="title">
                          <?php the_title( ); ?>
                        </div>
                        <div class="date">
                          <?php the_time('F, Y'); ?>
                        </div>
                      </div>
                    </div>
              <?php endwhile;  ?>
            </div>
          </div>
      </div>
    </section>



<?php get_footer( ); ?>