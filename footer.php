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
						 <?php the_field('7_экран_заголовок_черным'); ?><span> <?php the_field('7_экран_заголовок_красным'); ?></span>
					</h3>
					<p class="contact__text contact__text_one">
						<?php the_field('7_экран_текст_подзаголовком'); ?>
					</p>
				</div>
				<div class="col-12 col-sm-10 col-lg-8 col-xl-6 m-auto">
					<div class="contact">
						<p class="contact__text  contact__text_two">
							<?php the_field('7_экран_заголовок_формы'); ?>
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
