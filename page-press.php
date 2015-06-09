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
<!-- ============ press ============ -->
<section id="press">
  <div class="container">
    <div class="row">
      <h1><?php the_title( ); ?></h1>
    </div>
    <div class="row">
      <h4>
        Media Contacts
      </h4>
    </div>
    <div class="row">
      <div class="contact_box">
        <div class="name">
          Kala Sorenson
        </div>
        <div class="email">
          Email: bysorenson@gmail.com
        </div>
        <div class="phone">
          832-540-0207
        </div>
      </div>
      <div class="contact_box">
        <div class="name">
          Jessica Stoner
        </div>
        <div class="email">
          Email: jessica@patriottour.com
        </div>
        <div class="phone">
          832-540-0207
        </div>
      </div>
    </div>
    <div class="row">
      <div class="press_title">
        <h3>Marcus Luttrell’s 2015 Patriot Tour Presented by Team Never Quit featuring Marcus Luttrell, Taya Kyle and fellow Veterans hits the road, coming to 20 cities across the U.S.</h3>
      </div>
    </div>
  </div>
</section>
<?php get_footer( ); ?>