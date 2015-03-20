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
    
  </section>

<!-- ============  cta ============ -->


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


<?php get_footer( ); ?>