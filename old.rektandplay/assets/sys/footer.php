			<!-- Footer: Start -->
			<div class="footer-section">
				<div class="container">
					<div class="footer-grids">

						<div class="col-md-3 footer-grid">
							<h4>Krátka historie</h4>
							<div class="border2"></div>
							<p>Projekt vznikl <mark class="orange">15.10.2014</mark> za účelem pomoct začínajícím Youtůberům v jejich tvorbě, nadále v tom pokračujeme.</p>
						</div>

						<div class="col-md-3 footer-grid tweet">
							<h4>Hosting</h4>
							<div class="border2"></div>
							<div class="icon-3-square">
								<mark class="orange"><i class="fa fa-bell-o fa-pull-left fa-border" aria-hidden="true"></i></mark>
							</div>
							<div class="icon-text">
								<p>Naše serverové zázemí nám poskytuje hosting <a href="http://7core.eu/" target="_blank">7core</a>!</p>
								<a href="http://7core.eu/" target="_blank"><h5>Klikni zde!</h5></a>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="col-md-3 footer-grid tweet">
							<h4>Facebook</h4>
							<div class="border2"></div>
							<div class="icon-3-square">
								<mark class="orange"><i class="fa fa-bell-o fa-pull-left fa-border" aria-hidden="true"></i></mark>
							</div>
							<div class="icon-text">
								<p>Odebírej nás i na facebooku, aby ti neunikla ani jedna novinka!</p>
								<a href="https://www.facebook.com/recandplay2014/" target="_blank"><h5>Klikni zde!</h5></a>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="col-md-3 footer-grid tweet">
							<h4>YouTube</h4>
							<div class="border2"></div>
							<div class="icon-3-square">
								<mark class="orange"><i class="fa fa-bell-o fa-pull-left fa-border" aria-hidden="true"></i></mark>
							</div>
							<div class="icon-text">
								<p>Odebírej nás i na youtube a nenech si ujít žádné nové video!</p>
								<a href="https://www.youtube.com/channel/UCUBXuk32QZ0rw20DBHvbu9Q" target="_blank"><h5>Klikni zde!</h5></a>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- Footer: End -->
			<!-- Copyright: Start -->
				<div class="copyright">
					<div class="container">
						<div class="logo2"><a href="/index.php"><img src="/assets/images/logo2.png" alt="" title="logo" /></a>&nbsp;&nbsp;<?php include('/data/web/virtuals/136905/virtual/www/counter.php'); ?></div>
						<p class="write">All rights reserved - © 2014-<?php echo date("Y") ?> <a href="/index.php">Rec & Play</a> | Kopírování obsahu a prvků z tohoto webu, pouze s písemným povolením autora!</p>
					</div>
					<div class="clearfix"></div>
				</div>
			<!-- Copyright: End -->
<!-- SKIRPT -->
<script type="text/javascript" src="/assetsjs/move-top.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
	$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#head" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>