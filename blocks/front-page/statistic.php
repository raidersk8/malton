<div class="statistic full-height">
	<div class="left-top-border">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 no-pl">
					<div class="inner-border">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-1 text-right top-margin-logo">
				<a href="/" class="logo main-logo-dark" href="#"></a>
			</div>
			<div class="col-xs-8 full-window-height">
				<div class="wrap-vertical-position">
					<div class="vertical-middle">
						<?php if( have_rows('statistic', 26) ): ?>
						<div class="row items">
						<?php $i=0; while ( have_rows('statistic', 26) ) : the_row(); $i++; ?>	
							<div class="col-xs-6">
								<div class="item">
									<div class="title"><div class="inner"><?php the_sub_field('title'); ?></div></div>
									<div class="text"><?php the_sub_field('text'); ?></div>
								</div>
							</div>
						<?php if(!($i%2)) : ?>
						</div>
						<div class="row items">
						<?php endif; ?>
						<?php endwhile; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-xs-3">				
				<?php get_template_part('blocks/base/navigate-panel'); ?>
			</div>
		</div>
	</div>
</div>