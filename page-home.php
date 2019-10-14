<?php
/*
Template Name: Главная
Template Post Type: post, page, product
*/

get_header();?>

	<header class="header">
		<div class="container">
			<div class="header__wrap">
				<div class="row align-items-center">
					<div class="col-10 col-sm-10 col-md-12">
						<div class="navigation">
							<div class="logo">
								<a href="index.html">
									<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" alt="logo" class="logo__img">
								</a>
								<a href="index.html"><p class="logo__text">Online</p></a>
							</div>
							<div class="navigation__wrap">
								<a href="tel:" class="navigation__number">8 999 999 99 99</a>
							</div>
							<div class="d-none d-lg-block menu-collapse">
								<nav class="menu">
									<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-header',
												'menu_id'        => 'header-menu',
												'menu_class'        => 'menu__list',
												'container'        => ''
										) );
									?>
									<!-- <ul class="menu__list">
										<li class="menu__items">
											<a href="#agents" class="go menu__item">О нас</a>
										</li>
										<li class="menu__items">
											<a href="#history" class="go menu__item">Истории успеха</a>
										</li>
										<li class="menu__items">
											<a href="#tasks" class="go menu__item">Какие задачи мы решаем?</a>
										</li>
										<li class="menu__items">
											<a href="#jobs" class="go menu__item">Этапы работы</a>
										</li>
										<li class="menu__items">
											<a href="#services" class="go menu__item">Услуги</a>
										</li>
									</ul> -->
								</nav>
							</div>
							<a href="#" class="btn d-none d-md-block navigation__btn">Оставить заявку</a>
						</div>
					</div>
					<div class="col-2 d-md-none ml-auto z-i5">
						<div class="menu-open"><span></span></div>
					</div>

				</div>	
			</div>
			<div class="row">
				<div class="col-12">
					<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-background.jpg" alt="agents" class="header__img">
				</div>
			</div>
		</div>	
	</header>
	<section id="agents" class="agents">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="agents__title">
						<span>Мы - креативное</span> агентство
					</h1>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="digit digit_one">
						<h3 class="digit__title">
							<span>3 </span>года
						</h3>
						<p class="digit__text">
							помогаем предпринимателям избавиться от головной боли с социальными сетями
						</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="digit digit_two">
						<h3 class="digit__title">
							<span>200 </span>миллионов рублей
						</h3>
						<p class="digit__text">
							получили наши клиенты, отдав нам работу с брендом в социальных сетях
						</p>
					</div>
				</div>
				<div class="col-md-12 m-md-auto col-lg-4">
					<div class="digit digit_three">
						<h3 class="digit__title">
							<span>9 </span>человек в команде
						</h3>
						<p class="digit__text">
							и каждый на вес золота
						</p>
					</div>
				</div>
				<div class="col-12">
					<div class="agents__wrap">
						<div class="agent agent_one">
							<div>
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/face1.png" alt="face" class="agent__img">
							</div>
							<div class="agent__wrap">
								<h4 class="agent__title">
									Дмитрий Линьков
								</h4>
								<p class="agent__text">
									Люблю запариться с аналитикой
								</p>
							</div>
						</div>
						<div class="agent agent_two">
							<div>
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/face2.png" alt="face" class="agent__img">
							</div>
							<div class="agent__wrap">
								<h4 class="agent__title">
									Дмитрий Волжин
								</h4>
								<p class="agent__text">
									Имею чувство вкуса и делаю так, чтобы мне самому понравился результат
								</p>
							</div>
						</div>
						<div class="agent agent_three">
							<div>
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/face3.png" alt="face" class="agent__img">
							</div>
							<div class="agent__wrap">
								<h4 class="agent__title">
									Павел Кашеваров
								</h4>
								<p class="agent__text">
									Постоянно придумываю сумасшедшие идеи для вашего бизнеса. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="history" id="history">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="history__title title-h3">
						Истории <span>успеха</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-5 offset-lg-1 offset-xl-0 col-xl-3">
					<div class="card card_one">
						<div class="card__wrap card__wrap-one card__wrap_margin-one">
							<div class="card__img_wrap">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/dodo-pizza.png" alt="dodo-pizza" class="card__img">
							</div>
							<span class="card__span">
								Работаем под NDA
							</span>
							<p class="card__text">
								Полное продвижение филиала в ВКонтакте и Instagram
							</p>
						</div>
						<div class="card__wrap card__wrap_two">
							<div class="card__wrap_wrap">
								<div>
									<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/face-mini1.png" alt="face" class="card__img-mini">
								</div>
								<div class="card__inner">
									<h6 class="card__title">
										Заказчик
									</h6>
									<p class="card__text-mini">
										Иван, франчайзи Додо Пицца в Горно-Алтайске
									</p>
								</div>
							</div>
							<a href="https://vk.com/firetosky" class="card__btn card__btn_one">
								Написать
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-5  col-xl-3">
					<div class="card">
						<div class="card__wrap card__wrap-one">
							<div class="card__img_wrap">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/tinkoff.png" alt="dodo-pizza" class="card__img">
							</div>
							<span class="card__span">
								Работали под NDA
							</span>
							<p class="card__text">
								Привлечение клиентов для регионального партнера по Республике Алтай
							</p>
						</div>
						<div class="card__wrap card__wrap_two">
							<div class="card__wrap_wrap">
								<div>
									<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/face-mini2.png" alt="face" class="card__img-mini">
								</div>
								<div class="card__inner">
									<h6 class="card__title">
										Заказчик
									</h6>
									<p class="card__text-mini">
										Артём, региональный партнер Тинькофф Банк по республике Алтай
									</p>
								</div>
							</div>
							<a href="https://vk.com/tt_zoloto_1" class="card__btn">
								Написать
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-5 offset-lg-1 offset-xl-0 col-xl-3">
					<div class="card">
						<div class="card__wrap card__wrap-one">
							<div class="card__img_wrap">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/megasport.png" alt="dodo-pizza" class="card__img">
							</div>
							<span class="card__span">
								+30.000 подписчиков<br>
								+10 млн.руб. прибыли
							</span>
							<p class="card__text">
								Полное продвижение сети в ВКонтакте
							</p>
						</div>
						<div class="card__wrap card__wrap_two">
							<div class="card__wrap_wrap">
								<div>
									<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/face-mini3.png" alt="face" class="card__img-mini">
								</div>
								<div class="card__inner">
									<h6 class="card__title">
										Заказчик
									</h6>
									<p class="card__text-mini">
										Виталий, руководитель направления e-commerce в Megasport
									</p>
								</div>
							</div>
							<a href="https://vk.com/vitaliy.dolzhenko" class="card__btn">
								Написать
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-5  col-xl-3">
					<div class="card ">
						<div class="card__wrap card__wrap-one">
							<div class="card__img_wrap">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/pizza-pizza.png" alt="dodo-pizza" class="card__img">
							</div>
							<span class="card__span">
								+18.000 подписчиков<br>
								+11 млн.руб. прибыли
							</span>
							<p class="card__text">
								Полное продвижение в ВКонтакте с нуля
							</p>
						</div>
						<div class="card__wrap card__wrap_two">
							<div class="card__wrap_wrap">
								<div>
									<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/face-mini4.png" alt="face" class="card__img-mini">
								</div>
								<div class="card__inner">
									<h6 class="card__title">
										Заказчик
									</h6>
									<p class="card__text-mini">
										Алексей, генеральный директор ПиццаПицца, <br>Омск
									</p>
								</div>
							</div>
							<a href="https://vk.com/strelkov1976" class="card__btn">
								Написать
							</a>
						</div>
					</div>
				</div>
				<div class="col-12">
					<a href="#" class="btn big-btn">Позвони мне, позвони...</a>
				</div>
			</div>
		</div>
	</section>
	<section class="tasks" id="tasks">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="tasks__title title-h3">
						С какими <span>задачами</span> к нам обращаются <span>клиенты</span>?
					</h3>
				</div>
				<div class="col-12">
					<div class="tasks__wrap">
						<div class="task task_one">
							<div class="task__wrap">
								<div>
									<img src="img/face-mini1.png" alt="" class="task__img">
								</div>
								<div class="task__inner">
									<h5 class="task__title">
										Иван К, франчайзи Додо Пицца
									</h5>
									<p class="task__text">
										У нас хороший актив, страницу ведем сами, но хотим больше новых клиентов, т.к. открыли вторую точку.
									</p>
								</div>
							</div>
							<div class="task__wrap">
								<div>
									<img src="img/face-mini6.png" alt="" class="task__img">
								</div>
								<div class="task__inner">
									<h5 class="task__title">
										Дмитрий Л, менеджер ONLINE 
									</h5>
									<p class="task__text">
										Мы снизим стоимости клиента и увеличим бюджет.
									</p>
									<p class="task__text">
										Для этого мы:   
									</p>
									<p class="task__text">
										— Проведем несколько мозговых штурмов для разработки цепляющей рекламы <br>— Запустим таргетированную рекламу
										— Найдем блогеров и дешево договоримся о рекламе вашего продукта
									</p>
								</div>
							</div>
						</div>
						<div class="task task_two">
							<div class="task__wrap">
								<div>
									<img src="img/face-mini4.png" alt="" class="task__img">
								</div>
								<div class="task__inner">
									<h5 class="task__title">
										Алексей С, ген. директор ПиццаПицца
									</h5>
									<p class="task__text">
										Открыли доставку пиццы, не знаем где взять первых клиентов. Лидеры рынка в Омске на данный момент - Додо и Русская Пицца. В нашем районе живет 30.000 потенциальных клиентов. Что можете предложить?
									</p>
								</div>
							</div>
							<div class="task__wrap">
								<div>
									<img src="img/face-mini6.png" alt="" class="task__img">
								</div>
								<div class="task__inner">
									<h5 class="task__title">
										Дмитрий Л, менеджер ONLINE 
									</h5>
									<p class="task__text">
										Лучше доверить нашей команде работу с соц.сетями. У нас есть опыт в данной нише более 3 лет. <br>
										В среднем клиент выходит
										по 77 рублей.   <br>
										Для начала мы сделаем упаковку страницы<br> и разработаем контент план. Далее запустим работающую рекламу.
									</p>
								</div>
							</div>
						</div>
						<div class="task task_three">
							<div class="task__wrap">
								<div>
									<img src="img/face-mini5.png" alt="" class="task__img">
								</div>
								<div class="task__inner">
									<h5 class="task__title">
										Евгений Р, ген. директор<br> Суши-Маг
									</h5>
									<p class="task__text">
										Доставляем роллы и пиццу по Бердску более 5 лет. В последний сезон заказы упали в 2 раза, т.к. в городе открылся филиал Додо. Вы можете помочь?
									</p>
								</div>
							</div>
							<div class="task__wrap">
								<div>
									<img src="img/face-mini6.png" alt="" class="task__img">
								</div>
								<div class="task__inner">
									<h5 class="task__title">
										Дмитрий Л, менеджер ONLINE 
									</h5>
									<p class="task__text">
										Страница не оформлена и в ней нет регулярного контента. Неудивительно, что продажи снизились. Но это поправимо.
									</p>
									<p class="task__text">
										Сначала мы сделаем упаковку страницы и придумаем для вас работающие акции. После этого нужно будет прописать контент план и можно запускать рекламу. 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<h3 class="title-h3 tasks__title-two">
						Если вы уверены в своем <span>продукте и сервисе</span>,<br> мы увеличим <span>вашу прибыль</span>
					</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="jobs" id="jobs">
		<div class="container container-fluid_plain">
			<div class="row">
				<div class="col-12">
					<h3 class="jobs__title title-h3">
						Как мы <span>работаем</span>
					</h3>
				</div>
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="job job_one">
						<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/job1.jpg" alt="analysis" class="job__img">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="job job_two">
						<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/job2.jpg" alt="customers" class="job__img">
					</div>
				</div>
				<div class="col-12 col-sm-6 m-sm-auto col-lg-4">
					<div class="job job_three">
						<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/job3.jpg" alt="creatives" class="job__img">
					</div>
				</div>
				<div class="col-12">
					<a href="#" class="btn big-btn">Позвони мне, позвони...</a>
				</div>
			</div>
		</div>
	</section>
	<section class="services" id="services">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="services__title title-h3">
						<span>Услуги </span>для вашего <span>бизнеса</span>
					</h3>
				</div>
				<div class="col-12">
					<div class="services__wrap">
						<div class="servic servic_one">
							<h5 class="servic__title">
								Полное продвижение в социальных сетях
							</h5>
							<p class="servic__text">
								<span>П</span>одходит, если вы не разбираетесь в контенте <br>и желаете избавиться от головной боли с социальными сетями
							</p>
						</div>
						<div class="servic servic_two">
							<h5 class="servic__title">
								Анализ вашего продукта и социальных сетей
							</h5>
							<p class="servic__text">
								<span>И</span>сследуем образ жизни потребителя и скажем, как сделать ваш продукт его ценностью
							</p>
						</div>
						<div class="servic">
							<h5 class="servic__title">
								Реклама в социальных сетях
							</h5>
							<p class="servic__text">
								<span>П</span>окажем ваш продукт нужным людям в нужное время
							</p>
						</div>
						<div class="servic">
							<h5 class="servic__title">
								Ведение социальных сетей
							</h5>
							<p class="servic__text">
								<span>С</span>делаем покупателей зависимыми от вашей страницы 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php wp_footer(); ?>
	<!-- <footer class="footer" id="footer">
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
							<input type="name" name="name"  placeholder="Ваше имя" class="form__input" required>
							<input type="tel" name="tel" placeholder="Номер телефона" class="form__input" required>
							<button type="" class="form__btn btn">Оставить заявку</button>
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
	Модальные окна 
		<div style="display: none;">
		    <div class="box-modal connection animated" id="exampleModal">
				<div class="contact">
					<p class="contact__text">
						Оставьте заявку и наш менеджер перезвонит вам в течении 60 минут
					</p>
					<form action="" class="form">
						<input type="name" name="name"  placeholder="Ваше имя" class="form__input" required>
						<input type="tel" name="tel" placeholder="Номер телефона" class="form__input" required>
						<button type="" class="form__btn btn">Оставить заявку</button>
					</form>
				</div>
		    </div>
		</div> -->
