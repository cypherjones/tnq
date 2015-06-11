<?php get_header( ); ?>
<div class="container">
  <div class="row">
    <?php
          $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
          $args = array(
              'paged' => $paged,
              'posts_per_page' => 8,
            );
          
          $wpex_query = new WP_Query( $args ); ?>

          <table class="table">
            <thead>
              <tr>
                <th>
                    Job
                </th>
                <th>
                  Deliverable Date
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>

          

          <?php if (have_posts()) : while (have_posts()) : the_post(); 

          $deliveryDate = get_field('job_deliverable_date');
          $todaysDate = date('j F Y');

          ?>
              <tr>
                <td>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title( ); ?>
                  </a>
                </td>
                <td>
                  <?php echo $deliveryDate; ?>
                </td>
                <td>
                  <?php if ($deliveryDate < $todaysDate | $deliveryDate = $todaysDate ) : ?>
                    Missed Target
                  <?php elseif ($deliveryDate > $todaysDate ) : ?>
                    On Target
                  <?php endif; ?>
                </td>
                <td>
                  <?php echo do_shortcode('[gform_update_post_edit_link url=6]' ); ?>
                </td>
              </tr>
              <?php endwhile; endif; ?>
            </tbody>
          </table>
        
  </div>
  <div class="paging">
    <div id="pagination">
    <?php
      if ( function_exists('wp_bootstrap_pagination') )
        wp_bootstrap_pagination($wpex_query);
    ?>

    </div>
  </div>
</div>
<?php get_footer( ); ?>

          