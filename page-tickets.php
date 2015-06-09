<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>
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
    <div class="military button">
      <a href="http://bit.ly/1IJCJag" class="military btn">
        <div class="words">
          First Responders, Active Military & Veterans.
        </div>
        <div class="words">
          Get your tickets here!
        </div>
      </a>
    </div>
    <div class="message center">
      <p>** Due to unforeseen circumstances, regrettably Ft. Wayne has been removed from this year's tour. We sincerely hope to make it a stop next year. **</p>
    </div>
    <div class="content">

      <?php  $content = get_field('content'); 
        if (! empty($content)) : 
          echo $content; 
        endif; ?>

    </div> 
  </div>
</section>

<section id="<?php echo $page_slug ?>_content">
      <div class="container">
          <div class="row">
          <div id="tickets" class="tickets">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>City</th>
                  <th>Venue</th>
                  <th>Date</th>
                  <th>Tickets</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Chicago, IL</td>
                  <td>The Vic Theater</td>
                  <td>July 10, 2015</td>
                  <td><a href="http://bit.ly/1FVnq0v">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Milwaukee, WI</td>
                  <td>The Pabst</td>
                  <td>July 11, 2015</td>
                  <td><a href="http://bit.ly/1InN9w9">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Ft. Worth, TX</td>
                  <td>Casa Manana</td>
                  <td>July 24, 2015</td>
                  <td><a href="http://bit.ly/1GMFev0">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>San Antonio, TX</td>
                  <td>Empire Theatre</td>
                  <td>July 25, 2015</td>
                  <td><a href="http://bit.ly/1CQspbk">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Trenton, NJ</td>
                  <td>Patriots Theater at the War Memorial</td>
                  <td>July 31, 2015</td>
                  <td><a href="http://bit.ly/1JcD5q3">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Boston, MA</td>
                  <td>The Wilbur</td>
                  <td>August 1, 2015</td>
                  <td><a href="http://bit.ly/1PQu1w8">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Salt Lake City, UT</td>
                  <td>University of Utah Kingsbury Hall</td>
                  <td>August 14, 2015</td>
                  <td><a href="http://bit.ly/1ETFiHD">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Bozeman, MT</td>
                  <td>The Crawford at Emerson Center for Performing Arts</td>
                  <td>August 15, 2015</td>
                  <td><a href="http://bit.ly/1DsTxRD">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Salem, OR</td>
                  <td>The Historic Elsinore Theater</td>
                  <td>August 21, 2015</td>
                  <td><a href="http://bit.ly/1yxaV98">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Boise, ID</td>
                  <td>The Egyptian Theatre</td>
                  <td>August 22, 2015</td>
                  <td><a href="http://bit.ly/1DsTFR1">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Simi Valley, CA</td>
                  <td>Hosted by Ronald Reagan Presidential Library and Museum</td>
                  <td>September 18, 2015</td>
                  <td><a href="http://bit.ly/RRPF_PatriotTour">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Kansas City, MO</td>
                  <td>Folly Theater</td>
                  <td>September 25, 2015</td>
                  <td><a href="http://bit.ly/1ILbKi8">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Baltimore, MD</td>
                  <td>The Hippodrome Theatre at the France-Derrick Performing Arts Center</td>
                  <td>September 26, 2015</td>
                  <td><a href="http://bit.ly/1J9ugiR">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Atlanta, GA</td>
                  <td>Rialto Center for the Arts at Georgia State University</td>
                  <td>October 9, 2015</td>
                  <td><a href="http://bit.ly/1Ht1Rm1">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Louisville, KY</td>
                  <td>The Brown Theater at the Kentucky Center for the Performing Arts</td>
                  <td>October 10, 2015</td>
                  <td><a href="http://bit.ly/1FnRFuo">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Galveston, TX</td>
                  <td>The Grand 1894 Opera House</td>
                  <td>October 22, 2015</td>
                  <td><a href="http://bit.ly/1R3iitL">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Nashville, TN</td>
                  <td>The War Memorial Auditorium at the Tennessee Performing Arts Center</td>
                  <td>October 24, 2015</td>
                  <td><a href="http://bit.ly/1F1xEY3">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Houston, TX</td>
                  <td>Hosted by Redneck Country Club</td>
                  <td>November 13, 2015</td>
                  <td><a href="http://bit.ly/1R3c5hn">Buy Tickets</a></td>
                </tr>
                <tr>
                  <td>Shreveport, LA</td>
                  <td>The Strand</td>
                  <td>November 14, 2015</td>
                  <td><a href="http://bit.ly/1IPtE1J">Buy Tickets</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>  <!-- / row -->
    </div>


    </section>

<?php get_footer( ); ?>