<?php $img = get_field('bg-design', 26);?>
<div class="clothing-design light-text full-height" style="background-image: url(<?php if($img) echo $img['url']; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-xs-1 text-right top-margin-logo">
				<a href="/" class="logo main-logo-light" href="#"></a>
			</div>
			<div class="col-xs-5 full-window-height">
				<div class="wrap-vertical-position">
					<div class="vertical-middle">
						<div class="h1">дизайнер одежды</div>
						<div class="row">
							<div class="col-xs-10">
								<?php the_field('text-design', 26); ?>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="col-xs-6">				
				<?php 
				global $navigatePanelSetting;
				$navigatePanelSetting = array();
				$navigatePanelSetting['isLast'] = true;
				get_template_part('blocks/base/navigate-panel'); ?>
			</div>
		</div>
	</div>
</div>