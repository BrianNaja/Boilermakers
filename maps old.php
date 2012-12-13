<div class="row">
						<div class="map_wraper ten columns centered">
							<div id="map_canvas">
							</div>
					</div>
					
					<div class="row">
					
						<div class="ten columns centered">
						  
							<div  class="row" id="input">
								<input class="eight columns" id="start" type="text" placeholder=" Enter your location" onchange="calcRoute();" />
									<select  class="four columns" id="end" onchange="calcRoute();">
									<option>Choose a destination</option>
										<?php the_content(); ?>
									</select>
							</div>
							
							<div id="directionsPanel">
								<p>Drive safe and have fun at work.<p>
							</div>
							
						</div> 
					</div>
					
					<div class="row">
						<div class="two columns map-button">
							<button>hello</button>
						</div>
					</div>
					
				</div>