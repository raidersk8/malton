<div class="first-screen full-height light-text">
	<div class="border-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<div class="row">
					<div class="col-xs-3 text-right top-margin-logo">
						<a href="/" class="logo main-logo-light big-logo" href="#"></a>
					</div>
					<div class="col-xs-9 full-window-height top-margin-logo">
						<div class="wrap-vertical-position">
							<div class="table-row">
								<div class="vertical-top">
									<a href="/" class="logo-text text-uppercase">Калужская<br />швейная фабрика</a>
								</div>
							</div>
							<div class="table-row">
								<div class="vertical-bottom">
									<div class="left-text text-uppercase">
										высокое<br />качество<br />пошива<br />изделий
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 text-center full-window-height">
				<div class="wrap-vertical-position">
					<div class="vertical-bottom">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/front-page-first-screen-center-img.png" alt="" />
					</div>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="navigate-panel full-window-height">
					<div class="phone text-right table-row"><div class="vertical-bottom">+7 (910) 597-48-08</div></div>
					<div class="table-row" style="height: 83%;">
						<div class="vertical-middle left-margin">
							<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'menu', 'menu_class' => '' ) ); ?>
						</div>
					</div>
					<div class="table-row">
						<div class="vertical-bottom left-margin">
							<div>
								<a href="" class="btn btn-transparent text-uppercase">Рассчитать партию</a>
							</div>
							<div class="fullpage-nav">
								<a class="moveSectionDown" href="#" onclick="$.fn.fullpage.moveSectionDown();return false"></a>
								<span class="moveSectionUp inactive"></span>
							</div>
							<div class="bottom-text">© Калуга, 2017<br />Сделано в <a href="http://rbc-expert.ru/">Malton Tech</a>.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>