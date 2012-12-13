<?php 

/*
Template Name: Maps
*/

get_header(); ?>


					<!-- Start the Loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
				<!--<h2><?php the_title(); ?></h2>-->
					<!-- Display the Page's Content in a div box. -->
				<div class="entry">
					<div class="row">
						
						<div  class="four columns" id="input">
							<p class="directions-disclamer"><span>Warning!</span> The Directions page is incomplete and their could be bugs.  Always double check the directions given.</p>
							<input  id="start" type="text" placeholder=" Enter your location" onchange="calcRoute();" />
								<select  id="end" onchange="calcRoute();">
									<option>Choose a destination</option>
									<?php the_content(); ?>
								</select>
							<div id="directionsPanel">
								
							</div>
						</div>
						
						<div class="map_wraper eight columns">
							<div id="map_canvas"></div>
						</div>
									
					</div>
					
					<div class="open-maps">
						
						<a class="open-google-maps" href="url">Open in Maps</a> <!-- the url is in app.js file  -->
					</div>
					
		
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
</div>
	
		</div>	

	</div>
</div>

<?php get_footer(); ?>