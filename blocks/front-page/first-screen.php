<div class="first-screen full-height light-text">
	<div class="border-bottom" data-stellar-ratio="0.1"></div>
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
									<div class="left-text">
										<div class="h1">высокое<br />качество<br />пошива<br />изделий</div>
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
						<img class="center-img" data-stellar-ratio="0.5" src="<?php echo get_bloginfo('template_url'); ?>/img/front-page-first-screen-center-img.png" alt="" />
					</div>
				</div>
			</div>
			<div class="col-xs-4">
				
				<?php 
				global $navigatePanelSetting;
				$navigatePanelSetting = array();
				$navigatePanelSetting['isFirst'] = true;
				get_template_part('blocks/base/navigate-panel'); ?>
			</div>
		</div>
	</div>
</div>