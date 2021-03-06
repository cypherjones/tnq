<!-- <!doctype html> -->
<html lang="en">
<head>
  

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta name="author" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="2014 (c) Company Name" />

    <meta property="og:url" content="<?php bloginfo('url'); ?>" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="http://teamneverquit.com/wp-content/themes/neverquit/assets/img/TNQ_Eagle_Lockup_Logo.jpg" />
    
    <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    

    <!-- Mobile Jazz -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSS: implied media="all" -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/style.css" type="text/css" media="screen" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>

    
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/instafeed.min.js"></script>

    <!-- Place somewhere in the <head> of your document -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.3/slick-theme.css"/>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>

    
    <!-- flexslider -->

    <script type="text/javascript" charset="utf-8">
      console.clear();
      jQuery(window).load(function($) {
        jQuery('.flexslider').flexslider({
          animation: "fade",
          pauseOnHover: false,
          directionNav: false
        });
      });
    </script>

    <script type="text/javascript" charset="utf-8">
      console.clear();
      jQuery(window).load(function($) {
        jQuery('#featured_product').flexslider({
          animation: "slide",
          animationLoop: false,
          itemWidth: 210,
          itemMargin: 5,
          directionNav: false,
          minItems: 2
        });
      });
    </script>

    <!-- type kit -->

    <script src="//use.typekit.net/bem5kjd.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- bootstrap css -->

    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.js" type='text/javascript'></script>
    <link href="<?php bloginfo('template_directory' ); ?>/css/owl.carousel.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/owl.carousel.min.js"></script>

    <script src="<?php bloginfo('template_directory' ); ?>/js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/flexslider.css" type="text/css">
   <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61760877-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>

  
<body <?php body_class(); ?>>
  
  <header>

  <?php if (is_front_page()) : ?>

    <div class="top_banner">

  <?php else : ?>

    <div class="top_banner_bg">

  <?php endif; ?>

      <!-- ============ top fixed banner ============ -->

      <div class="container banner">
        <div class="row">
          <div class="col-xs-6 col-md-6">
<!--             <div class="support left">
              <i class="fa fa-envelope"></i>
              <?php

                $email = get_field('support_email', 'option');

                if (! empty($email)) :
                  echo $email;
                endif;

               ?>
            </div> -->
            <div class="phone left">
              <i class="fa fa-phone"></i> 
              <?php

                $phone = get_field('phone_number', 'option');

                if (! empty($phone)) :
                  echo $phone;
                endif;

               ?>
            </div>
          </div>
          <div class="col-xs-6 col-md-6">
            <div class="social right">
              <?php 

                $fb     = get_field('facebook', 'option');
                $twtr   = get_field('twitter', 'option');
                $ig     = get_field('instagram', 'option');

              ?>

              <ul>
                <li>
                  <?php if (! empty($fb)) : ?>
                    <a href="<?php echo $fb; ?>"><i class="fa fa-facebook-square"></i></a>
                  <?php endif; ?>
                </li>
                <li>
                  <?php if (! empty($twtr)) : ?>
                    <a href="<?php echo $twtr; ?>"><i class="fa fa-twitter-square"></i></a>
                  <?php endif; ?>
                </li>
                <li>
                  <?php if (! empty($ig)) : ?>
                    <a href="<?php echo $ig; ?>"><i class="fa fa-instagram"></i></a>
                  <?php endif; ?>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- ============  main navigation  ============ -->
      
    <section id="nav">
      <div class="container nav_main">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="menu left">
              <?php wp_nav_menu( array( 'theme_location' => 'left-nav')); ?>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="logo">
              <a href="<?php bloginfo('url' ); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt=""></a>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="menu right">
              <?php wp_nav_menu( array( 'theme_location' => 'right-nav')); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- ============  mobile navigation  ============ -->
      
       <div class="navbar navbar-default" role="navigation"> 
        <div class="container menu_container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div>
              <a href="<?php bloginfo('url' ); ?>">

              <?php if(get_field('logo', 'option')) { ?>

                <img src="<?php the_field('logo', 'option') ?>" alt="" class="logo">

              <?php } ?>  

              </a>
            </div>
          </div>
            <?php
              wp_nav_menu( array(
                  'menu'              => 'mobile_menu',
                  'theme_location'    => 'mobile-nav',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse collapse',
                  'container_id'      => 'navbar',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>

        </div>
      </div>
      
  </header>

  