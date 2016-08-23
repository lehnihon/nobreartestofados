<?php
$numbers = range(1, 8);
shuffle($numbers);
?>
<section id="fotos-sobre">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Eventos ".$numbers[0].".jpg"; ?>"/>
			</div>
			<div class="col-md-3">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Eventos ".$numbers[1].".jpg"; ?>"/>
			</div>
			<div class="col-md-3">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Eventos ".$numbers[2].".jpg"; ?>"/>
			</div>
			<div class="col-md-3">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Eventos ".$numbers[3].".jpg"; ?>"/>
			</div>
		</div>
	</div>
</section>