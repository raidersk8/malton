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
								$propertiesFirst = array(
									1 => array('open' => '<div class="col-item col-xs-4-5">', 'close'=>'</div>', 'class-item' => 'type-1', 'size'=>'image-273-640'),
									2 => array('open' => '<div class="col-item col-xs-4-5">', 'close'=>'</div>', 'class-item' => 'type-1', 'size'=>'image-273-640'),
									3 => array('open' => '<div class="col-item col-xs-3">', 'close'=>'', 'class-item' => 'type-2', 'size'=>'image-179-314'),
									4 => array('open' => '', 'close'=>'</div>', 'class-item' => 'type-2', 'size'=>'image-179-314'),									
									5 => array('open' => '<div class="col-item col-xs-3">', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-179-250'),
									6 => array('open' => '<div class="col-item col-xs-4-5">', 'close'=>'</div>', 'class-item' => 'type-3', 'size'=>'image-273-250'),
								);
							?>
							<?php echo $propertiesFirst[$i]['open']; ?>
								<a href="#" class="item <?php echo $propertiesFirst[$i]['class-item']; ?>" style="<?php if($i==1) echo 'margin-top: 260px;'; ?> background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), $propertiesFirst[$i]['size'] ); ?>);">
								</a>
							<?php echo $propertiesFirst[$i]['close']; ?>							
							<?php if($i == 6) { $isfirstgroup = false; $i=0; } ?>
							<?php else : ?>
							<?php endif; ?>
							<?php endwhile; ?>
						</div>
						<div class="row">
							<div class="col-item col-xs-3">
								<a href="#" class="item type-3" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/examples/7.png);">
								</a>		
								<a href="#" class="item type-3" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/examples/8.png);">
								</a>							
							</div>
							<div class="col-item col-xs-6">
								<a href="#" class="item type-4" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/examples/9.png);">
								</a>							
							</div>
							<div class="col-item col-xs-3">
								<a href="#" class="item type-3" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/examples/10.png);">
								</a>		
								<a href="#" class="item type-3" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/examples/100.png);">
								</a>						
							</div>
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
<?php get_footer(); ?>
