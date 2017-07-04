<?php global $navigatePanelSetting; ?>
<div class="navigate-panel full-window-height">
	<div class="phone text-right table-row"><div class="vertical-bottom">+7 (910) 597-48-08</div></div>
	<div class="table-row" style="height: 83%;">
		<div class="vertical-middle left-margin">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'menu', 'menu_class' => '' ) ); ?>
		</div>
	</div>
	<div class="table-row">
		<div class="vertical-bottom left-margin">
			<div>
				<a href="" class="btn btn-transparent text-uppercase">Рассчитать партию</a>
			</div>
			<?php if(isset($navigatePanelSetting['isSupPage'])) : ?>
			<div class="fullpage-nav">
				<a class="moveSectionUp scroll-to" href="#top"></a>
			</div>
			<?php else : ?>
			<div class="fullpage-nav">
				<?php if(isset($navigatePanelSetting['isLast'])) : ?>
					<span class="moveSectionDown inactive"></span>
				<?php else : ?>
					<a class="moveSectionDown" href="#" onclick="$.fn.fullpage.moveSectionDown();return false"></a>		
				<?php endif; ?>
				<?php if(isset($navigatePanelSetting['isFirst'])) : ?>
					<span class="moveSectionUp inactive"></span>
				<?php else : ?>
					<a class="moveSectionUp" href="#" onclick="$.fn.fullpage.moveSectionUp();return false"></a>			
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="bottom-text">© Калуга, 2017<br />Сделано в <a href="http://rbc-expert.ru/">Malton Tech</a>.</div>
		</div>
	</div>
</div>
<?php $navigatePanelSetting = array(); //Онуляем переменную что бы при следующим вызове шаблона она была пустой ?>