<?php get_header(); ?>

<section id="single_page">

	<div id="single_page_container" class="container">

			<div id="single_page_column" class="col-md-12">

				<div id="single_page_row" class="row">
		
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
							<div class="page" id="page-<?php the_ID(); ?>">
														
								<div class="post">
									<div class="title">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="thumb"><img src="<?php the_field('featured_image') ?>" alt=""></div>
	
									<div class="metahead">
										Posted on <?php the_time('F j, Y'); ?>  |  by: <?php the_author(); ?> 
									</div>
											
									<div class="post_category">
										Posted in: <?php $category = get_the_category(); echo '<a href="'.get_category_link( $category[0]->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category[0]->name ) ) . '">' . $category[0]->cat_name . '</a>' ?>
									</div>
									
									<div class="post_tags">
										<?php the_tags('Tags: ', ', ', '<br />'); ?> 
									</div>
									
									<div class="content">
										<?php the_content(); ?>
									</div>
												
								</div> <!-- end of entry -->
							
							</div> <!-- end of post -->
					
					<?php endwhile ; ?>

					<?php 

						$css_class = 'comment zero_comments';
						$number    = (int) get_comments_number( get_the_ID() );

						if ( 1 === $number )
						    $css_class = 'comment one_comment';
						elseif ( 1 < $number )
						    $css_class = 'comment multiple_comments';

						comments_popup_link( 
						    __( 'Be the first to comment', 'tnq' ), 
						    __( '1 Comment', 'tnq' ), 
						    __( '% Comments', 'tnq' ),
						    $css_class,
						    __( 'Comments are Closed', 'tnq' )
						);

					 ?>
								
					<?php else : ?>
					
					<div class="post">
					<h2><?php _e('Not Found'); ?></h2>
					</div>
					
					<?php endif; ?>

			</div>   <!-- end of main column -->

		</div> <!-- end of container -->
			
	</div> <!-- end of wrapper-->

</sction><!-- #container-wrap -->

<?php get_footer(); ?>