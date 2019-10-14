<?php
/**
 * The template for displaying the footer
 */

?>
<footer class="footer" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="services__title title-h3">
						Хотите работать <span>с нами?</span>
					</h3>
					<p class="contact__text contact__text_one">
						Оставьте заявку и наш менеджер перезвонит вам<br> в течении 60 минут
					</p>
				</div>
				<div class="col-12 col-sm-10 col-lg-8 col-xl-6 m-auto">
					<div class="contact">
						<p class="contact__text  contact__text_two">
							Оставьте заявку и наш менеджер перезвонит вам в течении 60 минут
						</p>
						<form action="" class="form">
							<?php echo do_shortcode('[contact-form-7 id="20" title="Форма в footer"]')?>
						</form>
						<div class="footer__wrap footer__wrap_two">	
						</div>
						<div class="footer__wrap footer__wrap_one">	
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</footer>
	<!-- Модальные окна  -->
		<div style="display: none;">
		    <div class="box-modal connection animated" id="exampleModal">
				<div class="contact">
					<p class="contact__text">
						Оставьте заявку и наш менеджер перезвонит вам в течении 60 минут
					</p>
					<form action="" class="form">
						<?php echo do_shortcode('[contact-form-7 id="20" title="Форма в footer"]')?>
					</form>
				</div>
		    </div>
		</div>

<?php wp_footer(); ?>

</body>
</html>
