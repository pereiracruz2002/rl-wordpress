<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
<section id="pre_footer">
<hr />
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1 col-xs-6 col-sm-6">
                <h3>Institucional</h3>
                <ul>
                    <li><a href="#">Quem Somos</a></li>
                    <li><a href="#">Novidades</a></li>
                    <li><a href="#">Fornecedores</a></li>
                    <li><a href="#">Showroom</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <h3>Atendimento</h3>
                <p>telefones: (11) 3228-2525 | 3326-6606</p>
                <p>fax: (11) 3227-4737</p>
                <p>segunda à sexta: 8h00 ás 18h00</p>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-12">
                <h3>LOCALIZAÇÃO</h3>
                Av. Senador Queirós, 305 - Centro<br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.8119665768045!2d-46.63534418502263!3d-23.539264484693838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58579695bf15%3A0xa8974e85948b5340!2sAv.+Sen.+Queir%C3%B3s%2C+305+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01026-001!5e0!3m2!1spt-BR!2sbr!4v1491833597989" width="200" height="116" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-12">
                <h3>CADASTRE-SE</h3>
            </div>
        </div>
    </div>
</section>
 <footer class="text-center">
            <p>Todos os direitos reservados a RL Representações</p>
            <p>Desenvolvido por Aizu Consultoria Digital</p>
        </footer>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        
        
        <script>
            jQuery(document).ready(function(){
                jQuery('#myCarousel').carousel({
                    interval: 4000
                });    
            });
        </script>
        <?php wp_footer(); ?> 
    </body>
</html>

<?php /*
			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo">
				<div id="footer-row" class="row site-footer">
					<div class="col-md-6 footer-left">
						<?php 
						if (!dynamic_sidebar('footer-left')) {
							printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
							echo ' | ';
							printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://rundiz.com">Bootstrap Basic</a>');
						} 
						?> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		
	</body>
</html>
*/?>