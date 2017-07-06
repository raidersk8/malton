<?php
/*
Template Name: contacts
Template Post Type: page
*/
?>
<?php get_header(); ?>	
<?php if ( have_posts() ) : the_post(); ?>
<div class="contacts">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-1 full-window-height">
				<div class="wrap-vertical-position">
					<div class="vertical-middle">
						<h1>Контактная информация</h1>
						<div class="text">
							<p class="phone"><?php the_field('phone', 'option'); ?></p>
							<?php the_content(); ?>
						</div>
						<div class="row">
							<div class="col-xs-9"><a href="#" class="btn btn-transparent text-uppercase btn-block btn-lg">отправить тз на расчёт</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-xs-offset-1 full-window-height">
				<div id="map" lat="54.537816" lng="36.296101" placemark-width="34" placemark-height="40" placemark="<?php echo get_bloginfo('template_url'); ?>/img/placemark.png">
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php get_footer(); ?>