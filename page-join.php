<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header( ); ?>

<!-- ============  heading ============ -->

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

<!-- ============  content ============ -->

  <section id="<?php echo $page_slug ?>_content">
    <div class="container">
      <div class="row">
        <div class="heading">
          <?php 
            $pageHeading = get_field('page_heading');
            if (!empty($pageHeading)) : 
           ?>
            <h2><?php echo $pageHeading; ?></h2>
          <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="content">
          <?php 
            $pageContent = get_field('content');
            if (!empty($pageContent)) : 
            echo $pageContent; 
            endif; ?>
        </div>
      </div>
    </div>
  </section>

<!-- ============  gravity form ============ -->

  <section id="gravity_form">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-1 col-md-4">
          <div class="grav_form">
            <?php $form = get_field('join_now_gravity_form'); if (! empty($form)) : echo do_shortcode($form ); endif; ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="welcome graphic" style="background-image: url(<?php $graphic = get_field('graphic'); if (!empty($graphic)) : echo $graphic ; endif; ?>)">
            <div class="graphic_copy">
              <?php $graphicCopy = get_field('text_on_top_of_graphic'); if (! empty($graphicCopy)) : echo $graphicCopy; endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="contact_links">
        <div class="row">
          <div class="center">
            <ul>
              <li>
                <div class="address">
                  <div class="button">
                    <div class="btn icon">
                      <i class="fa fa-location-arrow"></i>
                    </div>
                  </div>
                  <div class="meta">
                    <div class="title">
                      Address
                    </div>
                    <div class="content">
                      <?php $addy = get_field('address', 'option'); if (! empty($addy)) : echo $addy; endif; ?>
                   </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="email">
                  <div class="button">
                    <div class="btn icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                  </div>
                  <div class="meta">
                    <div class="title">
                      Email
                    </div>
                    <div class="content">
                      <?php $email = get_field('support_email', 'option'); if (! empty($email)) : echo $email; endif; ?>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="phone">
                  <div class="button">
                    <div class="btn icon">
                      <i class="fa fa-phone"></i>
                    </div>
                  </div>
                  <div class="meta">
                    <div class="title">
                      Phone Number
                    </div>
                    <div class="content">
                      <?php $number = get_field('phone_number', 'option'); if (! empty($number)) : echo $number; endif; ?>
                    </div>
                  </div>
                </div>
              </li>
            </ul>  
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ============  cta ============ -->

  <?php global $wp_query;
      
      $args = array( 
                    'post_type' => 'page',
                    'pagename' => 'join'
                    );

              query_posts( $args );  
                 
      ?>      
  <?php if( have_posts() ) : while (have_posts()) : the_post(); ?>
    <section id="page_speaker">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="title">
              <?php $keyCtaTitle = get_field('2_key_cta_title'); if (! empty($keyCtaTitle)) : echo $keyCtaTitle; endif; ?>
            </div>
            <div class="subtitle">
              <?php $keyCtaMsg = get_field('2_key_cta_msg'); if (! empty($keyCtaMsg)) : echo $keyCtaMsg; endif; ?>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
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