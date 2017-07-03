<div class="first-screen full-height light-text" data-stellar-offset-parent="true">
	<div class="border-bottom" data-stellar-ratio="0.1"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-1 text-right top-margin-logo">
				<a href="/" class="logo main-logo-light big-logo" href="#"></a>
			</div>
			<div class="col-xs-3 top-margin-logo">
				<a href="/" class="logo-text text-uppercase">Калужская<br />швейная фабрика</a>
			</div>
			<div class="col-xs-8">				
				<?php 
				global $navigatePanelSetting;
				$navigatePanelSetting = array();
				$navigatePanelSetting['isFirst'] = true;
				get_template_part('blocks/base/navigate-panel'); ?>
			</div>
		</div>
	</div>		
		
	<div class="slider">
		<ul>
			<li data-stellar-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-3 col-xs-offset-1 position-static">	
									<div class="left-text">
										<div class="h1">высокое<br />качество<br />пошива<br />изделий</div>
									</div>
								</div>
								<div class="col-xs-6 col-xs-pull-1 text-center">	
									<img class="center-img" src="<?php echo get_bloginfo('template_url'); ?>/img/front-page-first-screen-center-img.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>