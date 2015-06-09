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
                  <?php if(! empty($ftrCtaLfLink)) : ?>
                  <li>
                    <div class="cta btn">
                      <a href="<?php echo $ftrCtaLfLink; ?>">
                        <?php if(! empty($ftrCtaLeft)) : echo $ftrCtaLeft; endif; ?>  <i class="fa fa-plus-square-o"></i>
                      </a>
                    </div>
                  </li>
                  <?php endif; ?>
                  <li>
                    <?php  if(! empty($ftrCtaRtLink)) : ?>
                    <div class="cta btn">
                      <a href="<?php echo $ftrCtaRtLink; ?>">
                        <?php if(! empty($ftrCtaRight)) : echo $ftrCtaRight; endif; ?>  <i class="fa fa-plus-square-o"></i>
                      </a>
                    </div>
                    <?php endif; ?>
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
          <div class="hidden-xs col-sm-5 col-md-6">
            <div class="copyright">
              <p>Copyright 2015 Team Never Quit. All Rights Reserved. Powered by <a href="http://www.beefymarketing.com">Beefy Marketing.</a></p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-7 col-md-6">
            <div class="header">
              Contact Us
            </div>
            <div class="footer_meta">
              <div class="footer_meta_left">
                <div class="address">
                  <div class="title">
                    Address
                  </div>
                  <?php $addy = get_field('address', 'option'); if (! empty($addy)) : echo $addy; endif; ?>
                </div>
                <div class="phone">
                  <div class="title">
                      Phone
                  </div>
                  <a href="tel:+<?php $number = get_field('phone_number', 'option'); if (! empty($number)) : echo $number; endif; ?>"><?php $number = get_field('phone_number', 'option'); if (! empty($number)) : echo $number; endif; ?></a>
                </div>
              </div>
              <div class="footer_meta_right">
                <div class="general_email">
                  <div class="title">
                    General Info
                  </div>
                  <a href="mailto:<?php $genEmail = get_field('general_email', 'option'); if (! empty($genEmail)) : echo $genEmail; endif; ?>"><?php $genEmail = get_field('general_email', 'option'); if (! empty($genEmail)) : echo $genEmail; endif; ?></a>
                  <a href="mailto:<?php $ptEmail = get_field('pt_email', 'option'); if (! empty($ptEmail)) : echo $ptEmail; endif; ?>"><?php $ptEmail = get_field('pt_email', 'option'); if (! empty($ptEmail)) : echo $ptEmail; endif; ?></a>
                </div>
                <div class="support_email">
                  <div class="title">
                    Support
                  </div>
                  <a href="mailto:support@beefymarketing.com?subject=Something isn't quite right...">Web Master</a> 
                </div>
              </div>
            </div>
          </div>
          <div class="visible-xs">
            <div class="copyright mobile">
              <p>Copyright 2015 Team Never Quit. All Rights Reserved. Powered by <a href="http://www.beefymarketing.com">Beefy Marketing.</a></p>
            </div>
          </div>
        </div>
      </div> 
    </footer>
    <script type="text/javascript">
      var userFeed = new Instafeed({
          get: 'user',
          userId: 1104926735,
          resolution: 'standard_resolution',
          accessToken: '1104926735.467ede5.faf92686ba074bab99c74ecfadba6e79',
          limit: 6,
          template: '<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a></div></div></div></div>'
      });
      userFeed.run();
    </script>
    <script type="text/javascript">
      var userFeed = new Instafeed({
          target: 'mediafeed',
          get: 'user',
          userId: 481180572,
          accessToken: '481180572.467ede5.e9e0bf471a174452b4a1f0fea85d0d52',
          limit: 24,
          resolution: 'standard_resolution',
          template: '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a></div></div></div></div>'
      });
      userFeed.run();
    </script>
    <script>
      $('#newsCarousel,  #aboutCarousel').carousel({
        interval: false     
         });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#owl").owlCarousel();
      });
     </script>
    <script>
      $('.responsive').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
                
    </script>
	</body>
</html>