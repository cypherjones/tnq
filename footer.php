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
            <div class="col-md-6">
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
            <div class="col-md-6 center">
              <div class="btn partner">
                <span>Our Partners</span>
              </div>
              <div class="partner logos">
                <ul>
                  <?php if( have_rows('partner','option') ): while ( have_rows('partner','option') ) : the_row(); ?>
                    <li>
                      <a href="<?php the_sub_field('partner_url', 'option') ?>">
                        <img src="<?php the_sub_field('partner_logo','option'); ?>" alt="">
                      </a>
                    </li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="copyright">
              <p>Copyright 2015 Team Never Quit. All Rights Reserved. Powered by <a href="http://www.beefymarketing.com">Beefy Marketing.</a></p>
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
    <script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 599142,
        accessToken: '599142.467ede5.1668832c8f374f579db084565b8d8dac',
        limit: 6,
        template: '<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a><div class="likes"><i class="fa fa-heart"></i> {{likes}} Likes</div></div><div class="description">{{caption}}<div class="date">{{model.date}}</div></div></div></div>'
    });
    userFeed.run();
    </script>
    <script type="text/javascript">
    var userFeed = new Instafeed({
        target: 'mediafeed',
        get: 'user',
        userId: 599142,
        accessToken: '599142.467ede5.1668832c8f374f579db084565b8d8dac',
        limit: 24,
        resolution: 'standard_resolution',
        template: '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a><div class="likes"><i class="fa fa-heart"></i> {{likes}} Likes</div></div><div class="description">{{caption}}<div class="date">{{model.date}}</div></div></div></div>'
    });
    userFeed.run();
    </script>
    <script>
        $(function(){
      $('#media_posts').mixItUp();
    });
    </script>
    <script>
      $('#newsCarousel, #homeCarousel, #aboutCarousel').carousel({
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