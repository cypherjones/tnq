<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header( ); ?>

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

    <!-- ============  events ============ -->

    <section id="<?php echo $page_slug ?>_content">
      <div class="container">
          <?php

          $query = new WP_Query( 
                      array(
                            'post_type' => 'tnq-events',
                            'order'     => 'ASC',
                            'orderby'   => 'meta_value_num',
                            'meta_key'  => 'event_date',
                            'posts_per_page'  => 48,
                            'meta_query' => array(
                                array(
                                  'value'         => date('Ymd',strtotime("today")),
                                  'compare'       => '>=',
                                  'type'          => 'DATE'
                                )
                              )
                          )
                        );              
         ?>

        <div id="<?php echo $page_slug ?>_posts" class="row">
          <div class="col-xs-12 col-md-9 img_column">

            <?php while ( $query->have_posts()) : $query->the_post(); 

              $veneuImage   = get_field('venue_image');
              $veneuName    = get_field('venue_name');
              $veneuTixUrl  = get_field('buy_tix_url');
              $eventDate    = get_field('event_date');
              $eventTime    = get_field('event_time');

            ?>

                  <div class="mix col-xs-6 col-sm-6 col-md-4">
                    <div class="taste">
                      <div class="post_thumb">

                      <?php if (! empty($veneuImage)) : ?>

                        <img class="img-responsive" src="<?php echo $veneuImage; ?>" alt="">

                      <?php endif; ?>

                      </div>
                    </div>
                    <div class="meta">
                      <div class="title">
                        <?php the_title( ); ?>
                      </div>
                      <div class="date">

                         <?php if (! empty($veneuName)) : echo $veneuName; endif; ?> / <?php if (! empty($eventDate)) : echo $eventDate; endif; ?>

                      </div>
                    </div>
                  </div>

            <?php endwhile; wp_reset_query();  ?>

        </div>
      

        <!-- ============  twitter and instagram feeds ============ -->

        <div class="col-xs-12 col-md-3">
          <div class="col-xs-4 search sidebar">
            <?php dynamic_sidebar('top' ); ?>
          </div>
          <div class="col-xs-4 twitter_block">    <!-- twitter feed -->
            <div class="twitter title">
              <h4>Twitter Feed</h4>
            </div>
            <a class="twitter-timeline" 

            href="https://twitter.com/Team_neverquit" 
            data-widget-id="569636793704648704" 
            height="300" 
            theme="transparent"
            data-chrome="noheader nofooter noborders transparent"
            data-tweet-limit="2"
            data-link-color="#cc0000"
            >

            Tweets by @Team_neverquit
            
            </a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
            <div class="all tweets">
              <a href="https://twitter.com/Team_neverquit">See all tweets</a>
            </div>
          </div>  <!-- / twitter feed -->
          <div class="col-xs-4 instagram_block">   <!-- instagram feed -->
            <div class="instagram title">
              <h4>Instagram Feed</h4>
            </div>
            <div class="instagram feed">
              <iframe src="http://www.intagme.com/in/?u=bWFyY3VzbHV0dHJlbGx8aW58MTAwfDJ8M3x8bm98MjB8dW5kZWZpbmVkfHllcw==" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:240px; height: 360px" ></iframe>
            </div>
          </div>

        </div>
        </div>  <!-- / row -->
    </div>


    </section>

<?php get_footer( ); ?>