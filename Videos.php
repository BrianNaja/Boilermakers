<?php 

/*
Template Name: Videos
*/

get_header(); ?>

				
  				<?php  $wp_query = new WP_Query (array('post_type' => 'video',
  													   'paged' => $paged,
  													   'posts_per_page' => 12)); ?>	<!-- Displays The Video Category -->
				
				<!-- Start the Loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
			<article  <?php post_class('class-name'); ?> > <!-- This was added for the Custom Classes Plugin -->

			<!-- Display the Post's Content in a div box. -->
			<div class="video-entry">
				
				<div class="video-image">
					<?php  the_post_thumbnail('video-thumb'); ?>
					<a href="<?php the_permalink() ?>"><span></span></a>
	  			</div>	
	  			  
				<div class="title">
				
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><!-- Display the Title as a link to the Post's permalink. -->
					</h2>

				</div>	
				
				<?php the_excerpt(); ?><!-- Displays the Excerpt not the_content -->
				<div class="clear"></div><!-- For clearing the float -->
			</div>
			
			<!-- <span class="comment-count"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span> -->
	          
		</article>

		
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	<!-- Begin Pagination -->
	<?php if (function_exists("emm_paginate")) {
	    emm_paginate();
	} ?>	        	
	<!-- End Pagination -->
	
</div>
	
		</div>	

	</div>
</div>

<?php get_footer(); ?>