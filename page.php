<?php get_header(); ?>

  <?php 

    if (is_page('about' )) : 

      get_template_part('page','about' );
      
    elseif (is_page('news' )) : 

       get_template_part('page', 'news' );

    elseif (is_page('events' )) :

    	get_template_part('page', 'events');

    elseif (is_page('support' )) :

      get_template_part('page', 'support' );

    elseif (is_page('join' )) :

      get_template_part('page', 'join' );

    else :
   
  endif;

  ?> 
	
<?php get_footer(); ?>