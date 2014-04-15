      	</div>
      </div>
    </div>
	
	<div id="footer">
	
		<div class="container">
			<div id="extra">
			
				<div id="fb">
					<h3>Das Symposium auf Facebook</h3>
			
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=214796535250344";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					
					<div class="fb-like-box" data-href="http://www.facebook.com/HeidelbergerSymposium" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
				</div>
				
				<div id="sponsoren">
				    <h3>Unsere Sponsoren</h3>
				    <div class="sponsoren-container">
						<?php
							include_once('data/sponsoren.php');
							$i = 0;
							foreach ($sponsoren as $sponsor) {
								echo '<div class="sponsoren-item '.$sponsor->klasse;
								if ($sponsor->klasse=='hauptsponsor') {
									$i++;
								}
								if ($i%3==0) {
									echo(' rowbreak');
								}
								echo '"><a href="'.$sponsor->link.'" target="_blank"><img src="/img/sponsoren/'.$sponsor->logo.'"></a></div>';
								$i++;
							}
						?>
				    </div>
				</div>

			</div>
					
			<div id="copyright">
				&copy; 2013 HCWK | <a href="/impressum">Impressum</a> | Erstellt von <a href="http://www.viwid.com" target="_blank">Nils Fischer</a> und Jonas Ott | <a href="/kontakt">Kontakt</a>
			</div>
		</div>
	</div>
    
  </body>
</html>