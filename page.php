<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header(); ?>

  <?php 

    if (is_page('about' )) : 

      get_template_part('page','about' );
      
    elseif (is_page('upcoming-events' )) : 

       get_template_part('page', 'events' );

    elseif (is_page('patriot-tour' )) :

    	get_template_part('page', 'tour');

    elseif (is_page('support' )) :

      get_template_part('page', 'support' );

    elseif (is_page('join' )) :

      get_template_part('page', 'join' );

    elseif (is_page('shop' )) :

      get_template_part('page', 'products' );

    elseif (is_page('patriot-tour-tickets' )) : 

      get_template_part('page', 'tickets' );

    elseif (is_page('log' )) : 
      
      get_template_part('page', 'log' );

    else : ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

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
  <?php endwhile; endif; ?>

  <!-- ============ cta 2 ============ -->

  <?php global $wp_query;
      
      $args = array( 
                    'post_type' => 'page',
                    'pagename' => 'about'
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
    <?php get_footer(); ?>
   
  <?php endif;?>
	
<?php get_footer(); ?>