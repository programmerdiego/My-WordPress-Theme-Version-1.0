<?php
	get_header();

	if (have_posts()) :   /* if this condition is meet, if you have posts, the loop will put them in to the main page */
	while (have_posts()) : the_post();?> 
	
	<h2> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h2>
	<?php the_content();?>         
		
	<?php endwhile;
	
	else :
	
		echo '<p>No content was found</p>';
		
	endif;
	
   get_footer();
?>
