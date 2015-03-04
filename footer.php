    <footer class="bottom background" style="background-image: url(<?php the_field('ftr_bg_img', 'option'); ?>)">
      <?php 

        $ftrTitle       = get_field('footer_cta_title','option');
        $ftrSubtitle    = get_field('ftr_cta_subtitle','option');
        $ftrCtaLeft     = get_field('ftr_cta_btn_lft_txt','option');
        $ftrCtaLfLink   = get_field('ftr_cta_btn_link','option');
        $ftrCtaRight    = get_field('ftr_cta_btn_rt_txt','option');
        $ftrCtaRtLink   = get_field('ftr_cta_btn_rt_link','option');
        $ftrForm        = get_field('footer_form','option');
        $ftrFmTitle     = get_field('ftr_form_title','option');
        $ftrFmSubtitle  = get_field('ftr_form_subtitle','option');

       ?>
      <div class="container">
        <div class="row top">
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="cta title">
                <?php if(! empty($ftrTitle)) : echo $ftrTitle; endif; ?>
              </div>
              <div class="cta subtitle">
                <?php if(! empty($ftrSubtitle)) : echo $ftrSubtitle; endif; ?>
              </div>
              <div class="cta btns">
                <ul>
                  <li>
                    <div class="cta btn">
                      <a href="<?php if(! empty($ftrCtaLfLink)) : echo $ftrCtaLfLink; endif; ?>">
                        <?php if(! empty($ftrCtaLeft)) : echo $ftrCtaLeft; endif; ?>  <i class="fa fa-plus-square-o"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="cta btn">
                      <a href="<?php if(! empty($ftrCtaRtLink)) : echo $ftrCtaRtLink; endif; ?>">
                        <?php if(! empty($ftrCtaRight)) : echo $ftrCtaRight; endif; ?>  <i class="fa fa-plus-square-o"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-offset-1 col-md-7">
              <div class="form title"> 
                <?php if(! empty($ftrFmTitle)) : echo $ftrFmTitle; endif; ?>
              </div>
              <div class="form subtitle">
                <?php if(! empty($ftrFmSubtitle)) : echo $ftrFmSubtitle; endif; ?>
              </div>
              <div class="form">
                <?php if(! empty($ftrForm)) : echo $ftrForm; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row partners center">
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="btn partner">
                <span>Our Partners</span>
              </div>
            </div>
            <div class="col-md-offset-1 col-md-7">
              <div class="partner logos">
                <ul>
                  <?php if( have_rows('ftr_partners','option') ): while ( have_rows('ftr_partners','option') ) : the_row(); ?>
                    <li><img src="<?php the_sub_field('partner_logo','option'); ?>" alt=""></li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="copyright">
              <p>Copyright 2015 Team Never Quit. All Rights Reserved. Powered by <a href="">Beefy Marketing.</a></p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="footer menu">
              <ul>
                <li>
                <a href="">home</a>
                </li>
                <li>
                  <a href="">contact</a>
                </li>
                <li>
                  <a href="">Terms of use</a>
                </li>
                <li>
                  <a href="">Privacy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script>
        $(function(){
      $('#media_posts').mixItUp();
    });
    </script>
    <script>
      $('#newsCarousel').carousel({
        interval: false     
         });
    </script>
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function(){
  $("a[rel^='prettyPhoto']").prettyPhoto();
});
	</script>
	</body>
</html>