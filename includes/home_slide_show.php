<section id="jms-slideshow" class="jms-slideshow">
				<div class="step" data-color="color-1" data-x="2000" data-y="1000" data-z="3000" data-rotate="-20">
					<div class="jms-content">
						<h3>Product1 Name...</h3>
						<p>Product description comes here.It should be pretty big.</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/1.png" />
				</div>
				<div class="step" data-color="color-2" data-x="1000" data-z="2000" data-rotate="20">
					<div class="jms-content">
						<h3>Product2 Name...</h3>
						<p>But as the riper should by time decease, his tender heir might bear his memory</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/2.png" />
				</div>
				<div class="step" data-color="color-3" data-x="2000" data-y="1500" data-z="1000" data-rotate="20">
					<div class="jms-content">
						<h3>Product3 Name...</h3>
						<p>Within thine own bud buriest thy content and, tender churl, makest waste in niggarding</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/3.png" />
				</div>
				<div class="step" data-color="color-4" data-x="3000" data-y="2000">
					<div class="jms-content">
						<h3>Supercool!</h3>
						<p>Making a famine where abundance lies, thyself thy foe, to thy sweet self too cruel</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/4.png" />
				</div>
				<div class="step" data-color="color-5" data-x="4000" data-y="1500" data-z="1000" data-rotate="-20">
					<div class="jms-content">
						<h3>Did you know that...</h3>
						<p>Thou that art now the world's fresh ornament and only herald to the gaudy spring</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/5.png" />
				</div>
			</section>




			<script type="text/javascript">
			$(function() {
			
				var jmpressOpts	= {
					animation		: { transitionDuration : '0.8s' }
				};
				
				//$( '#jms-slideshow' ).jmslideshow();

				$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
					autoplay	: true,
					bgColorSpeed: '0.8s',
					arrows		: true
				}));
				
			});
                        </script>
		
		