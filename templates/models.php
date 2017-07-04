<?php
/*
Template Name: models
Template Post Type: page
*/
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : the_post(); ?>
	<div class="page-about-bg-border">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 no-pl">
					<div class="inner-border"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="page page-about">
		<div class="container">
			<div class="row top-block">
				<div class="col-xs-3 col-xs-offset-1">
					<div class="h1 main-title">Как мы работаем?</div>
				</div>
				<div class="col-xs-5">
					<div class="right-bottom-border-img page-img">
						<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'image-455-auto' ); ?>" />
					</div>
					<div class="text-content">Мы выполняем заказы по пошиву одежды (платья, юбки, брюки, сарафаны, кардиганы, блузки, рубашки, трикотажные изделия, одежда для беременных) любой сложности и гарантируем:</div>
					<div class="list">
						<div class="row">
							<div class="col-xs-6 text-center item">
								<div class="img">
									<div class="vertical-bottom">
										<img src="<?php echo get_bloginfo('template_url'); ?>/img/about-list/1.png" />
									</div>
								</div>
								<div class="title text-uppercase">высокое качество пошива изделий</div>
							</div>
							<div class="col-xs-6 text-center item">
								<div class="img">
									<div class="vertical-bottom">
										<img src="<?php echo get_bloginfo('template_url'); ?>/img/about-list/2.png" />
									</div>
								</div>
								<div class="title text-uppercase">доступную ценовую политику без предоплаты</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 text-center item">
								<div class="img">
									<div class="vertical-bottom">
										<img src="<?php echo get_bloginfo('template_url'); ?>/img/about-list/3.png" />
									</div>
								</div>
								<div class="title text-uppercase">отсрочку платежа сроком до 30 дней</div>
							</div>
							<div class="col-xs-6 text-center item">
								<div class="img">
									<div class="vertical-bottom">
										<img src="<?php echo get_bloginfo('template_url'); ?>/img/about-list/4.png" />
									</div>
								</div>
								<div class="title text-uppercase">помощь в подборе материалов</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 text-center item">
								<div class="img">
									<div class="vertical-bottom">
										<img src="<?php echo get_bloginfo('template_url'); ?>/img/about-list/5.png" />
									</div>
								</div>
								<div class="title text-uppercase">бесплатную фотосъемку коллекции, создание лукбуков</div>
							</div>
							<div class="col-xs-6 text-center item">
								<div class="img">
									<div class="vertical-bottom">
										<img src="<?php echo get_bloginfo('template_url'); ?>/img/about-list/6.png" />
									</div>
								</div>
								<div class="title text-uppercase">гарантии<br />возврата брака</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-xs-offset-1">
					<div class="h1 main-title">Наши партнёры</div>
				</div>
				<div class="col-xs-5">
					<div class="text-content">
						Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.
					</div>
					<div class="partners">
						<div class="img">
							<div class="wrap-vertical-position">
								<div class="vertical-middle">
									<img src="<?php echo get_bloginfo('template_url'); ?>/img/partners/1.png" />
								</div>
							</div>
						</div>
						<div class="img">
							<div class="wrap-vertical-position">
								<div class="vertical-middle">
									<img src="<?php echo get_bloginfo('template_url'); ?>/img/partners/2.png" />
								</div>
							</div>
						</div>
						<div class="img">
							<div class="wrap-vertical-position">
								<div class="vertical-middle">
									<img src="<?php echo get_bloginfo('template_url'); ?>/img/partners/3.png" />
								</div>
							</div>
						</div>
						<div class="img">
							<div class="wrap-vertical-position">
								<div class="vertical-middle">
									<img src="<?php echo get_bloginfo('template_url'); ?>/img/partners/4.png" />
								</div>
							</div>
						</div>
						<div class="img">
							<div class="wrap-vertical-position">
								<div class="vertical-middle">
									<img src="<?php echo get_bloginfo('template_url'); ?>/img/partners/5.png" />
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>