<?php get_header(); ?>
<?php if( have_posts() ) : the_post(); $actId = get_the_ID();?>	
	<div class="page single-services">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 col-xs-offset-1">
					<div class="left-part">
						<div class="h1 main-title">УСЛУГИ<br />И ЦЕНЫ</div>
						<?php $query = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => -1 ) ); ?>
						<div class="menu">
							<ul>
								<?php while ( $query->have_posts() ) : $query->the_post(); ?>
									<li class="<?php if($actId == get_the_ID()) echo 'current-menu-item'; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php endwhile; wp_reset_postdata(); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-5 col-xs-offset-1">
					<div class="content" data-stellar-offset-parent="true">
						<div class="square" data-stellar-ratio="0.95"></div>
						<div class="inner">
							<div class="row">
								<div class="col-xs-5 col-xs-pull-2 no-p">
									<img class="img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'image-350-auto' ); ?>" />
								</div>
								<div class="col-xs-7">
									<ul class="list">
										<?php if( have_rows('list') ): ?>
											<?php while ( have_rows('list') ) : the_row(); ?>		
												<li>— <?php the_sub_field('text'); ?></li>
											<?php endwhile; ?>
										<?php endif; ?>
									</ul>
									<div class="price">от <?php the_field('price'); ?> &#8381;/шт</div>
								</div>
							</div>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="bottom-form">
						<div class="h2">Рассчитать партию</div>
						<?php echo do_shortcode('[contact-form-7 id="110" title="Заявка на расчёт партии с страницы услуги" service="'.get_the_title().'"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>
