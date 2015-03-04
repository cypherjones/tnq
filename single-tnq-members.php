<?php 

 global $post;

 $page_slug  = $post->post_name;

?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section id="member_single">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h1><?php the_title( ); ?></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="thumb">
							<img src="<?php the_field('photo') ?>" alt="headshot">
						</div>
						<div class="position">
							<?php the_field('position') ?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="content">
							<?php the_field('full_bio') ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>
	

<?php get_footer( ); ?>