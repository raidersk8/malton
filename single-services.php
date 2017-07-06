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
										<li>— Качественный материалы;</li>
										<li>— Точность размеров;</li>
										<li>— Модный фасон;</li>
										<li>— Высокое качество пошива;</li>
										<li>— Сам бы носил, но не поймут!</li>
									</ul>
									<div class="price">от 220 &#8381;/шт</div>
								</div>
							</div>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="bottom-form">
						<div class="h2">Рассчитать партию</div>
						<label class="btn-block">Размер партии (шт.)</label>
						<div class="form-group">
							<div class="wrap-input-slider">
								<input value="" />
								<div class="row">
									<div class="col-xs-6"><label class="btn-block">250</label></div>
									<div class="col-xs-6 text-right"><label class="max-right"><span>&nbsp;-&nbsp;</span>более 1000</label></div>
								</div>
								<label class="present-value">300</label>
								<div class="input-slider" data-min="250" data-max="1000" data-step="50"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="btn-block">Введите ваш Email</label>
							<input class="form-control" value="" />
						</div>
						<div class="form-group">
							<label class="btn-block">Введите ваш телефон</label>
							<input class="form-control" value="" />
						</div>
						<div class="row">
							<div class="col-xs-7">
								<a href="" class="btn btn-transparent text-uppercase btn-block">Отправить запрос</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>
