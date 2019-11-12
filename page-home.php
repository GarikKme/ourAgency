<?php
/*
Template Name: Главная
Template Post Type: post, page, product
*/

get_header(); ?>
<?php $background = get_field('фото_фон'); ?>
<header class="header">
	<?php if (get_field('группа_кнопок') === 'фото на десктопе / видео на телефоне') { ?>

	<style>
	header.header {
		background: url("<?php echo esc_url($background['url']); ?>") no-repeat center/cover;
	}

	.header video {
		display: none;
	}

	@media screen and (max-width: <?php the_field('брэйкпоинт') ?>px) {
		header.header {
			background: none;
		}

		.header video {
			display: block;
		}

	}
	</style>
	<?php } else if (get_field('группа_кнопок') !== 'фото на десктопе / видео на телефоне') { ?>
	<style>
	header.header {
		background: none;
	}

	.header video {
		display: block;
	}

	.header {
		padding-bottom: 9.25%;
	}

	@media screen and (max-width: <?php the_field('брэйкпоинт') ?>px) {
		header.header {
			background: url("<?php echo esc_url($background['url']); ?>") no-repeat center/cover;
		}

		.header video {
			display: none;
		}

		.header {
			padding-bottom: 40.25%;
		}
	}
	</style>
	<?php }else {?>
	<style>
	.header {
		padding-bottom: 40.25%;
	}
	</style>
	<?php } ?>
	<?php $video = get_field('видео');
				 if ($video) { ?>
	<video src="<?php the_field('видео');?>"  muted loop></video>
	<?php	} ?>
	<div class="container container-fluid_plain">
		<div class="header__wrap">
			<div class="row align-items-center">
				<div class="col-10 col-sm-10 col-md-12">
					<div class="navigation">
						<div class="logo">
							<a href="<?php the_permalink(5) ?>">
								<?php $logo = get_field('логотип'); ?>
								<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_url($logo['alt']); ?>"
									class="logo__img">
							</a>
							<a href="<?php the_permalink(5) ?>">
								<p class="logo__text"><?php the_field('текст-логотипа'); ?></p>
							</a>
						</div>
						<div class="navigation__wrap">
							<a href="tel:89835820311" class="navigation__number">8-983-582-03-11</a>
						</div>
						<div class="d-none d-lg-block menu-collapse">
							<nav class="menu">
								<?php
									wp_nav_menu(array(
											'theme_location' => 'menu-header',
											'menu_id' => 'header-menu',
											'menu_class' => 'menu__list',
											'container' => ''
									));
									?>
							</nav>
						</div>
						<a href="#" class="btn d-none d-md-block navigation__btn"><?php the_field('текст_кнопки'); ?></a>
					</div>
				</div>
				<div class="col-2 d-md-none ml-auto z-i5">
					<div class="menu-open"><span></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid_plain">

		<!--            --><?php //$background = get_field('фото_фон'); ?>
		<!--            <img src="--><?php //echo esc_url($background['url']); ?>
		<!--" alt="-->
		<?php //echo esc_url($background['url']); ?>
		<!--">-->

		<!--                <video src="-->
		<?php //the_field('видео'); ?>
		<!--" autoplay muted loop></video>-->
		<?php $image = get_field('фон'); ?>
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>"
			class="header__img img-fluid">


	</div>
</header>
<!-- <div class="target d-none d-sm-block">
      <?php $target = get_field('мишень_по_всему_сайту'); ?>
    <img src="<?php echo esc_url($target['url']); ?>" alt="<?php echo esc_url($target['alt']); ?>"
         class="target__img">
  </div> -->
<section id="agents" class="agents">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="agents__title">
					<span><?php the_field('2_экран_заголовок_красным'); ?></span> <?php the_field('2_экран_заголовок'); ?>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="target d-block d-sm-none">
						<?php $target = get_field('мишень_по_всему_сайту'); ?>
						<img src="<?php echo esc_url($target['url']); ?>" alt="<?php echo esc_url($target['alt']); ?>"
							class="target__img1">
					</div>
					<?php if (have_rows('2_экран_список_1')): while (have_rows('2_экран_список_1')) : the_row(); ?>
					<div class="col-md-6 col-lg-4 d-flex justify-content-start justify-content-lg-center">
						<div class="digit">
							<h3 class="digit__title">
								<span><?php the_sub_field('2_экран_список_1_цифра'); ?>
								</span><?php the_sub_field('2_экран_список_1_текст_возле_цифры'); ?>
							</h3>
							<p class="digit__text">
								<?php the_sub_field('2_экран_список_1_текст'); ?>
							</p>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="col-12">
				<div class="agents__wrap">
					<?php if (have_rows('2_экран_список_2')): while (have_rows('2_экран_список_2')) : the_row(); ?>
					<div class="agent agent_one">
						<div>
							<?php $image1 = get_sub_field('2_экран_список_2_фото'); ?>
							<img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_url($image1['alt']); ?>"
								class="agent__img">
						</div>
						<div class="agent__wrap">
							<h4 class="agent__title">
								<?php the_sub_field('2_экран_список_2_имя'); ?>
							</h4>
							<p class="agent__text">
								<?php the_sub_field('2_экран_список_2_текст'); ?>
							</p>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="history" id="history">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="history__title title-h3">
					<?php the_field('3_экран_заголовок'); ?>
					<span> <?php the_field('3_экран_заголовок_красным'); ?></span>
				</div>
			</div>
			<?php if (have_rows('3_экран_карточки')): while (have_rows('3_экран_карточки')) : the_row(); ?>
			<div class="col-12 col-sm-6 col-lg-5 col-xl-3 cardsss">
				<div class="card card_one">
					<div class="card__wrap card__wrap-one card__wrap_margin-one">
						<div class="card__wrap_mobile">
							<div class="card__img_wrap">
								<?php $image2 = get_sub_field('3_экран_карточки_фото'); ?>
								<img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_url($image2['alt']); ?>"
									class="card__img">
							</div>
							<div>
								<span class="card__span">
									<?php the_sub_field('3_экран_карточки_подзаголовок'); ?>
								</span>
								<p class="card__text">
									<?php the_sub_field('3_экран_карточки_текст'); ?>
								</p>
							</div>
						</div>
						<a href="<?php the_sub_field('3_экран_карточки_ссылка'); ?>" class="card__link" target="_blank">
							<?php the_sub_field('3_экран_карточки_ссылка_-_текст_ссылки'); ?>
						</a>
					</div>
					<div class="card__wrap card__wrap_two">
						<div class="card__wrap_wrap">
							<div>
								<?php $image3 = get_sub_field('3_экран_карточки_фото2'); ?>
								<img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_url($image3['alt']); ?>"
									class="card__img-mini">
							</div>
							<div class="card__inner">
								<h6 class="card__title">
									<?php the_sub_field('3_экран_карточки_заказчик'); ?>
								</h6>
								<p class="card__text-mini">
									<?php the_sub_field('3_экран_карточки_текст2'); ?>
								</p>
							</div>
						</div>
						<a href="<?php the_sub_field('3_экран_карточки_кнопка_ссылка'); ?>" target="_blank" class="card__btn">
							<?php the_sub_field('3_экран_карточки_кнопка_текст'); ?>
						</a>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<div class="col-12">
				<a href="#" class="btn big-btn"><?php the_field('3_экран_кнопка_текст'); ?></a>
			</div>
		</div>
	</div>
</section>
<section class="tasks" id="tasks">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="tasks__title title-h3">
					<?php the_field('4_экран_заголовок_черным'); ?>
					<span> <?php the_field('4_экран_заголовок_красным'); ?></span>
					<?php the_field('4_экран_заголовок_черным_2'); ?><span>
						<?php the_field('4_экран_заголовок__красным_2'); ?></span>
				</h3>
			</div>
			<div class="col-12">
				<div class="tasks__wrap  d-flex justify-content-between">
					<?php if (have_rows('4_экран')): while (have_rows('4_экран')) : the_row(); ?>
					<div class="task task_one">
						<div class="task__wrap">
							<div>
								<?php $clientFoto = get_sub_field('клиент_фото'); ?>
								<img src="<?php echo esc_url($clientFoto['url']); ?>" alt="<?php echo esc_url($clientFoto['alt']); ?>"
									class="task__img">
							</div>
							<div class="task__inner">
								<h5 class="task__title">
									<?php the_sub_field('клиент'); ?>
								</h5>
								<p class="task__text">
									<?php the_sub_field('вопрос'); ?>
								</p>
							</div>
						</div>
						<div class="task__wrap">
							<div>
								<?php $manager = get_sub_field('исполнитель_фото'); ?>
								<img src="<?php echo esc_url($manager['url']); ?>" alt="<?php echo esc_url($manager['alt']); ?>"
									class="task__img">
							</div>
							<div class="task__inner">
								<h5 class="task__title">
									<?php the_sub_field('исполнитель'); ?>
								</h5>
								<p class="task__text">
									<?php the_sub_field('ответ_первый_абзац'); ?>
								</p>
								<p class="task__text">
									<?php the_sub_field('ответ_второй_абзац'); ?>
								</p>
								<p class="task__text">
									<?php the_sub_field('ответ_третий_абзац'); ?>
								</p>
							</div>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="col-12">
				<h3 class="title-h3 tasks__title-two">
					<?php the_field('4_экран_нижний_заголовок_черным'); ?>
					<span><?php the_field('4_экран_нижний_заголовок_красным'); ?></span><br><?php the_field('4_экран_нижний_заголовок_черным_2'); ?>
					<span><?php the_field('4_экран_нижний_заголовок_красным_2'); ?></span>
				</h3>
			</div>
		</div>
		<div class="col-lg-12 text-center">

			<?php if( get_field('4_экран_ссылка_на_кейс') ): ?>
			<a href="<?php the_field('4_экран_ссылка_на_кейс'); ?>" class="card__link link-pdf"
				download=""><?php the_field('4_экран_ссылка_текст_ссылки') ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="jobs" id="jobs">
	<div class="container container-fluid_plain">
		<div class="row">
			<div class="col-12">
				<h3 class="jobs__title title-h3">
					<?php the_field('5_экран_заголовок_черным'); ?>
					<span><?php the_field('5_экран_заголовок_красным'); ?></span>
				</h3>
			</div>
			<?php if (have_rows('5_экран')): while (have_rows('5_экран')) : the_row(); ?>
			<div class="col-12 col-sm-6 col-lg-4 mode-img">
				<div class="job job_one">
					<?php $jobsImg = get_sub_field('фотография'); ?>
					<img src="<?php echo esc_url($jobsImg['url']); ?>" alt="<?php echo esc_url($jobsImg['alt']); ?>"
						class="job__img">
				</div>
			</div>
			<?php endwhile; endif; ?>
			<div class="col-12">
				<a href="#" class="btn big-btn"><?php the_field('5_экран_текст_кнопки'); ?></a>
			</div>
		</div>
	</div>
</section>
<section class="services" id="services">
	<div class="target-mobile">
		<?php $targetMobile = get_field('6_экран_мишень'); ?>
		<img src="<?php echo esc_url($targetMobile['url']); ?>" alt="<?php echo esc_url($targetMobile['alt']); ?>"
			class="target__img">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="services__title title-h3">
					<span><?php the_field('6_экран_заголовок_красным'); ?></span><?php the_field('6_экран_заголовок_черным'); ?>
					<span><?php the_field('6_экран_заголовок_красным_2'); ?></span>
				</h3>
			</div>
			<div class="col-12">
				<div class="services__wrap">
					<?php if (have_rows('6_экран')): while (have_rows('6_экран')) : the_row(); ?>
					<div class="servic servic_one">
						<h5 class="servic__title">
							<?php the_sub_field('6_экран_заголовок_карточки'); ?>
						</h5>
						<p class="servic__text">
							<span><?php the_sub_field('6_экран_первая_красная_буква_текста'); ?></span><?php the_sub_field('6_экран_текст_карточки'); ?>
						</p>
						<a href="<?php the_sub_field('6_экран_ссылка_на_pdf_файл'); ?>" class="card__link" target="_blank">
							<?php the_sub_field('6_экран_ссылка_на_pdf_файл_текст_ссылки'); ?>
						</a>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
		
	</div>
</section>
<div class="container">
<div class="col-lg-12 text-center">
			<?php if( get_field('6_экран_ссылка_на_файл') ): ?>
			<a href="<?php the_field('6_экран_ссылка_на_файл'); ?>" class="card__link link-pdf"
				download=""><?php the_field('6_экран_ссылка_на_файл_текст_ссылки') ?></a>
			<?php endif; ?>
		</div>
</div>
<?php get_footer(); ?>