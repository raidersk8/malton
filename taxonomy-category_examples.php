<?php get_header(); ?>	
	<div class="page">
		<div class="archive-examples">
			<div class="container">
				<div class="row">					
					<?php if( have_posts() ) : ?>
					<div class="col-xs-8 col-xs-offset-1 list">
						<div class="row">
							<?php $isfirstgroup = true; $i=0; while ( have_posts() ) : the_post(); $i++; ?>
							<?php if($isfirstgroup == true) : 
								$properties = array(
									1 => array('open' => '<div class="col-item col-xs-4-5">', 'close'=>'</div>', 'class-item' => 'type-1', 'size'=>'image-273-640'),
									2 => array('open' => '<div class="col-item col-xs-4-5">', 'close'=>'</div>', 'class-item' => 'type-1', 'size'=>'image-273-640'),
									3 => array('open' => '<div class="col-item col-xs-3">', 'close'=>'', 'class-item' => 'type-2', 'size'=>'image-179-314'),
									4 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-2', 'size'=>'image-179-314'),									
									5 => array('open' => '<div class="col-item col-xs-3">', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
									6 => array('open' => '<div class="col-item col-xs-4-5">', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-273-250'),
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
										1 => array('open' => '<div class="col-item col-xs-3">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										2 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										3 => array('open' => '<div class="col-item col-xs-6">', 'close'=>'</div>', 'class-item' => 'type-4', 'size'=>'image-368-510'),
										4 => array('open' => '<div class="col-item col-xs-3">', 'close'=>'', 'class-item' => 'type-3', 'size'=>'image-179-250'),
										5 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
									);
									viewExample($properties[$i], '');
								?>
								<?php if($i==5) : $i=0; ?>
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
						<div class="col-xs-3 col-xs-offset-1">
							<div class="h1 main-title">Образцы продукции</div>
							<?php $categories = get_terms('category_examples'); 
							if($categories) : ?>
							<label class="btn-block">Фильтр по продукции</label>
							<select class="selectpicker"  data-width="100%">
								<?php foreach($categories as $row) : ?>
								<option><?php echo $row->name; ?></option>
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
		<a href="#" class="item <?php echo $properte['class-item']; ?>" style="<?php echo $style; ?> background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), $properte['size'] ); ?>);">
		</a>
	<?php echo $properte['close']; ?>	
<?}?>
<?php get_footer(); ?>
