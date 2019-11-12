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
					<div class="form"><?php echo do_shortcode('[contact-form-7 id="162" title="Форма в футере"]')?></div>
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
			<?php echo do_shortcode('[contact-form-7 id="21" title="Модальная форма"]')?>
		</div>
	</div>
</div>
<div style="display: none;">
	<div class="box-modal box-modal_two" id="exampleModal2">
		<div class="feedback">
			<?php $modalTarget = get_field('картинка_модального_окна'); ?>
					<img src="<?php echo esc_url($modalTarget['url']); ?>"
					alt="<?php echo esc_url($modalTarget['alt']); ?>"
					class="target-modal__img">
			<p class="feedback__text">
				<?php the_field('свяжемся_с_вами'); ?>
			</p>
			<h2 class="feedback__title">
				 <?php the_field('заголовок_модального_окна_черным'); ?> <span><?php the_field('заголовок_модального_окна_красным'); ?> </span>  <?php the_field('заголовок_модального_окна_черным2'); ?> <span><?php the_field('заголовок_модального_окна_красным2'); ?> </span>
			</h2>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>