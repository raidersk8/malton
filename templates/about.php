<?php
/*
Template Name: about
Template Post Type: page
*/
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : the_post(); ?>
	<div class="page-about-bg-border hidden-xs">
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
				<div class="col-sm-4 col-sm-offset-1 col-xs-10">
					<div class="h1 main-title">Как мы работаем?</div>
				</div>
				<div class="col-md-5 col-sm-7 col-xs-10">
					<div class="right-bottom-border-img page-img">
						<?php if(has_post_thumbnail()) : ?>
							<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'image-455-auto' ); ?>" />
						<?php endif; ?>
					</div>
					<div class="text-content"><?php the_content(); ?></div>
					<?php if( have_rows('benefits') ): ?>
					<div class="list">						
						<div class="row">
							<?php $i=0; while ( have_rows('benefits') ) : the_row(); $i++; ?>
							<div class="col-sm-6 col-xs-10 text-center item">
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
				<div class="col-sm-4 col-sm-offset-1 col-xs-10">
					<div class="h1 main-title"><?php the_field('title-video-content'); ?></div>
				</div>
				<div class="col-md-5 col-sm-7 col-xs-10">
					<div class="text-content">
						<?php the_field('video-content'); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1 col-xs-10">
					<div class="h1 main-title">Наши партнёры</div>
				</div>
				<div class="col-md-5 col-sm-7 col-xs-10">
					<div class="text-content">
						<?php the_field('partners-content'); ?>
					</div>
					<?php $partners =get_field('partners'); 
					if($partners) : ?>
					<div class="partners">
						<div class="row">
							<?php $i=0; foreach($partners as $key => $row) :  $i++; 
							$class = '';
							if($i==1) $class = "col-md-4 col-sm-12 text-center-sm";
							if($i==2) $class = "col-md-4 col-sm-12 text-center";
							if($i==3) $class = "col-md-4 col-sm-12 text-right text-center-sm";
							if(($key - (count($partners) - 1)) == 0) {							
								if($i==2) $class = "col-md-6 col-sm-12 text-right text-center-sm";
							}
							if(($key - (count($partners) - 2)) == 0) {	
								if($i==1) $class = "col-md-6 col-sm-12 text-center-sm";
							}
							
							?>
								<div class="<?php echo $class; ?>">
									<div class="img">
										<div class="wrap-vertical-position">
											<div class="vertical-middle">
												<img src="<?php echo $row['sizes']['image-auto-63']; ?>" />
											</div>
										</div>
									</div>
								</div>
								<?php if($i == 3) : $i=0 ?>
									<div class="clearfix"></div>
								<?php endif;?>
							<?php endforeach; ?>
						</div>
					</div>		
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>