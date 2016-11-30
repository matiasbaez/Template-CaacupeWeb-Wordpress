

		<!-- FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row center-xs between-xs">
					<div class="col-xs-3">
					</div>
					<div class="col-xs-3"></div>
					<div class="col-xs-12 copyright">Todos los derechos reservados - &copy; Caacup&eacute; Web 2016 - Design By: Matias Baez</div>
				</div>
			</div>
		</div>
		<!-- FIN FOOTER -->

	</div> <!-- FIN CONTENEDOR -->

		<script>
		(function trackLink(url,event) {
		    event.preventDefault();
		    if (window.ga && ga.loaded) {
		         ga('send', 'event', 'outbound', 'click', url, {
		         'transport': 'beacon',
		         'hitCallback': function() { document.location = url; }
		       });
		    } else {
		        document.location = url;
		    }
		});
		</script>
		<?php include_once("analyticstracking.php") ?>

		<?php wp_footer(); ?>
	</body>
</html>