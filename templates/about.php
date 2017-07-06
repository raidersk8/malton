<?php
/*
Template Name: about
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
					<div class="text-content"><?php the_content(); ?></div>
					<?php if( have_rows('benefits') ): ?>
					<div class="list">						
						<div class="row">
							<?php $i=0; while ( have_rows('benefits') ) : the_row(); $i++; ?>
							<div class="col-xs-6 text-center item">
								<?php $img = get_sub_field('img'); 
								if($img) : ?>
								<div class="img">
									<div class="vertical-bottom">
										<img src="<?php echo $img['sizes']['image-80-80']; ?>" />
									</div>
								</div>
								<?php endif; ?>
								<div class="title text-uppercase"><?php the_sub_field('text'); ?></div>
							</div>
							<?php if(!($i%2)) : ?>
								</div>
								<div class="row">
							<?php endif; ?>
							<?php endwhile; ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-xs-offset-1">
					<div class="h1 main-title">Видео-экскурсия</div>
				</div>
				<div class="col-xs-5">
					<div class="text-content">
						<?php the_field('video-content'); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-xs-offset-1">
					<div class="h1 main-title">Наши партнёры</div>
				</div>
				<div class="col-xs-5">
					<div class="text-content">
						<?php the_field('partners-content'); ?>
					</div>
					<?php $partners =get_field('partners'); 
					if($partners) : ?>
					<div class="partners">
						<?php foreach($partners as $row) : ?>
						<div class="img">
							<div class="wrap-vertical-position">
								<div class="vertical-middle">
									<img src="<?php echo $row['sizes']['image-auto-63']; ?>" />
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>		
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>