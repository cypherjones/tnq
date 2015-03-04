<?php if(is_mobile()) : ?>
  <div id="header_nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
<?php else : ?>
  <div id="header_nav" class="navbar navbar-default" role="navigation">
<?php endif; ?>
    <div class="container menu_container">
      
      <div class="header_logo">
        <img src="<?php bloginfo('template_directory' ); ?>/assets/img/main_logo.png" alt="">
      </div>

      <div class="navbar-header">
      
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div>
          <a href="#">

          <?php if(get_field('header_logo', 'option')) { ?>

            <img src="<?php the_field('header_logo', 'option') ?>" alt="" class="header_logo">

          <?php } ?>  

          </a>
        </div>
      </div>
        <?php
          wp_nav_menu( array(
              'menu'              => 'header-menu',
              'theme_location'    => 'top-nav',
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