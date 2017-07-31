<?php get_header(); 
$act_term = get_queried_object();
?>	
	<div class="page">
		<div class="archive-examples">
			<div class="container">
				<div class="row">					
					<?php if( have_posts() ) : ?>
					<div class="col-sm-8 col-sm-offset-1 col-xs-10 list">
						<div class="row">
							<?php $isfirstgroup = true; $g=0; $i=0; while ( have_posts() ) : the_post(); $i++; ?>
							<?php if($isfirstgroup == true) : 
								$properties = array(
									1 => array('open' => '<div class="col-item col-sm-4-5 col-xs-12">', 'close'=>'</div>', 'class-item' => 'type-1', 'size'=>'image-273-640'),
									2 => array('open' => '<div class="col-item col-sm-4-5 col-xs-12">', 'close'=>'</div>', 'class-item' => 'type-1', 'size'=>'image-273-640'),
									3 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'', 'class-item' => 'type-2', 'size'=>'image-179-314'),
									4 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-2', 'size'=>'image-179-314'),									
									5 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
									6 => array('open' => '<div class="col-item col-sm-4-5 col-xs-12">', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-273-250'),
								);
								viewExample($properties[$i], ($i==1) ? 'margin-top: 260px;' : '');
							?>					
							
							<?php if($i == 6) : $isfirstgroup = false; $i=0; ?></div><div class="row"><?php endif; ?>
							<?php else : ?>
								<?php if($i==1) : ?>
									</div>
									<div class="row">
								<?php endif; ?>
								<?php 
									$properties = array(
										array(
										1 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										2 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										3 => array('open' => '<div class="col-item col-sm-6 col-xs-12">', 'close'=>'</div>', 'class-item' => 'type-4', 'size'=>'image-368-510'),
										4 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										5 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										),
										array(
										1 => array('open' => '<div class="col-item col-sm-6 col-xs-12">', 'close'=>'</div>', 'class-item' => 'type-4', 'size'=>'image-368-510'),
										2 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										3 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										4 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										5 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										),
										array(
										1 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										2 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										3 => array('open' => '<div class="col-item col-sm-3 col-xs-12">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										4 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										5 => array('open' => '<div class="col-item col-sm-6 col-xs-12">', 'close'=>'</div>', 'class-item' => 'type-4', 'size'=>'image-368-510'),
										),
									);
									viewExample($properties[$g][$i], '');
								?>
								<?php if($i==5) : $i=0; $g++; if($g >= 3) $g=0; ?>
									</div>
									<div class="row">
								<?php endif; ?>
							<?php endif; ?>
							<?php endwhile; ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			
			<div class="top-part">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-sm-offset-1 col-xs-10">
							<div class="h1 main-title">Образцы продукции</div>
							<?php $categories = get_terms('category_examples'); 
							if($categories) : ?>
							<label class="btn-block">Фильтр по продукции</label>
							<select class="selectpicker-ref"  data-width="100%">
								<?php foreach($categories as $row) : ?>
								<option <?php if($act_term->term_id == $row->term_id) echo 'selected'; ?> value="<?php echo get_term_link( $row ); ?>"><?php echo $row->name; ?></option>
								<?php endforeach; ?>
							</select>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
function viewExample($properte, $style = '') { ?>
	<?php echo $properte['open']; ?>
		<a href="#example-<?php echo get_the_ID(); ?>" class="item <?php echo $properte['class-item']; ?> fancybox-full-screen" style="<?php echo $style; ?> background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), $properte['size'] ); ?>);">
		</a>
		<div style="display: none">
			<div id="example-<?php echo get_the_ID(); ?>" class="fancybox-form fancybox-full-screen-window">
				<div class="wrap-vertical-position">
					<div class="vertical-middle">
						<div class="container">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1 col-xs-12">
									<div class="row"><div class="col-xs-9"><div class="h1"><?php the_title(); ?></div></div></div>
									<div><?php the_content(); ?></div>
									<a href="#fancybox-calculate-the-lot" class="btn btn-transparent text-uppercase fancybox-full-screen">Рассчитать партию</a>
								</div>
								<div class="col-xs-4 col-xs-offset-1 example-gallery hidden-xs">
									<?php $gallery = get_field('gallery'); 
									if($gallery): ?>
									<div class="wrap-jcarousel" data-responsivecountitem="1" data-wrap="circular">
										<div class="jcarousel">
											<ul>
												<?php foreach($gallery as $row) : ?>
												<li style="background-image: url(<?php echo $row['sizes']['image-358-500']; ?>)"></li>
												<?php endforeach; ?>
											</ul>
										</div>
										<a href="#" class="jcarousel-prev"></a>
										<a href="#" class="jcarousel-next"></a>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php echo $properte['close']; ?>	
<?}?>
<?php get_footer(); ?>
