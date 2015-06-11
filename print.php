<?php 

  $content = '[gravityform id=4 title=false description=false index=99]';

 ?>
<?php get_header(); ?>


  <section id="print">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php echo do_shortcode( $content ); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>