<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="title-full small"><div class="animated bounceIn">Contato</div></h1>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); } ?>
				</div>
				<div class="col-md-6 text-left ">
					<div class="videoWrapperb">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0003376679856!2d-46.56683158444546!3d-23.532490266413117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee54bb4a53b%3A0x5bfb87542ddadfac!2sR.+S%C3%A3o+Jorge%2C+86+-+Parque+S%C3%A3o+Jorge%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1463247862636" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="quadro">
						<p>
							<strong>Tatuapé</strong>
							<br>Rua São Jorge, 86 - Tatuapé, São Paulo - SP
							<br>Telefones: 11 3938-0200
						</p>

						<p>contato@nobreartedesign.com.br</p>							
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
