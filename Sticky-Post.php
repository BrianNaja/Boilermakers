<?php 

/*
Template Name: Sticky-Post
*/

get_header(); ?>

<!-- Main Row -->
<div class="row">

					
				<?php 	
 				        $wp_query = new WP_Query(array('paged' => $paged,
 				        							   'post_type' => 'Sticky-Post',
                             						   'posts_per_page' => 10 )); ?>					
				<!-- Start the Loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
			<article class="quote-page">  <!--<?php post_class('class-name'); ?>   This was added for the Custom Classes Plugin -->

			<!-- Display the Post's Content in a div box. -->
			<div class="quote-entry-page">

				
				<blockquote><?php the_content(); ?></blockquote><!-- Displays the_content -->
			</div>
			
	          
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