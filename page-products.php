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
              
            <?php else : ?>

              <h1>Please Enter A Page Title</h1>

            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ content ============ -->

    <section id="content">
      <div class="container">
        <div class="heading">
        <?php  

          $heading = get_field('page_heading');

          if (! empty($heading)) : ?>
           <h2><?php echo $heading; ?></h2>

        <?php endif; ?>
        </div>
        <div class="content">

          <?php  $content = get_field('content'); 
            if (! empty($content)) : 
              echo $content; 
            endif; ?>

        </div>
      </div>
    </section>

  <!-- ============ Introducing ============ -->

  <section id="intro">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2><?php the_field('intro_title') ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="intro_image">
          <?php if(get_field('logo', 'option')) { ?>

            <img src="<?php the_field('logo', 'option') ?>" alt="Team Never Quit Logo" class="logo">

          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="subtitle">
          <h3>
            <?php the_field('intro_subtitle') ?>  
          </h3>
        </div>
      </div>
      <?php if (get_field('intro_description')) : ?>
      <div class="row">
        <div class="description">
           <?php the_field('intro_description'); ?> ?>
        </div>
      </div>
    <?php endif; ?>
      <div class="row">
        <div class="intro_button">
          <div class="btn">
            <a href="http://shop.teamneverquit.com">
              Shop Apparel
            </a>
          </div>
        </div>
      </div>      <div class="row">
        <div class="flexslider">
          <ul class="slides">
            <?php if (have_rows('intro_product_gallery')) : while (have_rows('intro_product_gallery')) : the_row(); ?>
              <li>
                <a href="<?php the_sub_field('product_link') ?>"><img src="<?php the_sub_field('product_image') ?>" alt="Product Image"></a>
              </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

   <!-- ============ featured/new product ============ -->

  <section id="product">
    <div class="container">
    <div class="row">
      <div class="also_feature">
        <em>Introducing</em>
      </div>
      <div class="featured_product">
        <h2>Team Never Quit Premium Ammo</h2>
      </div>
    </div>
    <div class="row">
      <div class="hero_image">
        <img src="<?php the_field('hero_image') ?>" alt="Featured Product Hero Image">
      </div>
    </div>
    <div class="row">
       <div id="featured_product">
        <?php if (have_rows('products')) : while (have_rows('products')) : the_row(); ?>
          <div class="col-md-3">
            <div class="product_title">
              <?php the_sub_field('product_title') ?>
            </div>
            <div class="product_image">
              <img src="<?php the_sub_field('product_image') ?>" alt="Ammo Product">
            </div>
            <div class="product_description">
              <?php the_sub_field('product_description') ?>
            </div>
            <div class="product_button">
              <div class="btn">
                <a href="<?php the_sub_field('product_link') ?>"><?php the_sub_field('product_button_text') ?></a>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </section>


  <!-- ============ Where to buy ============ --> 
  
  <section id="wheretobuy">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2>Where To Buy</h2>
        </div>
      </div>
      <div class="row">
        <div class="vendors">
          <ul>
            <?php if (have_rows('vendor_information')) : while (have_rows('vendor_information')) : the_row(); ?>
              <li>
                <div class="vendor_logo">
                  <?php 

                    $vLogo = get_sub_field('vendor_logo');

                    if (! empty($vLogo)) :

                  ?>
                    
                  <a href="<?php the_sub_field('vendor_link') ?>"><img src="<?php echo $vLogo ?>" alt=""></a>

                  <?php endif; ?>

                </div>
              </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- ============ cta 2 ============ -->

  <?php 
      
      $args = array( 
                    'post_type' => 'page',
                    'pagename' => 'about'
                    );

      $the_query = new WP_Query( $args );  
                 
      ?>      
  <?php if( $the_query->have_posts() ) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
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