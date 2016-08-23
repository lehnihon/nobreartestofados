<?php
get_header(); ?>

<div id="content">
	<section id="sobre-home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Impermeabilização</h1>
					<h2>Impermeabilização de Estofados na região do Tatuapé.</h2>
				</div>
			</div> <br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>
						A Nobre Arte Design realiza o serviço de tratamento para repelência de líquidos e sólidos em sofás, cadeiras, poltronas, puffs, colchões entre outros, garantindo uma maior proteção contra manchas e sujeiras e aumentando a durabilidade das mesmas.
					</p>
					<p>
						A Nobre Arte Design utiliza um impermeabilizante que age envolvendo individualmente todas as fibras do estofado, formando uma barreira protetora que impede que as manchas secas ou úmidas a base de água ou óleo penetrem o tecido.
					</p>
				</div>

			</div>
		</div>
	</section>

	<section id="fotos-sobre" class="serv-marg">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h2 class="amarelo">Impermeabilização de Estofados</h2>
					<p class="">A Impermeabilização de Estofaodos é um processo seguro e não altera as características 
originais do estofado, tais como textura e cor, por mais suaves que elas seja.<br>
					O Tratamento para Repelência também evita a impregnação de poeira, o encardimento e
aumenta a vida útil do tecido, dando mais resistência e proteção.
					</p>
					<ul>
						<li>Impede a penetração de manchas por líquidos derramados,</li>
						<li>Facilita a limpeza de sujeiras secas,</li>
						<li>Evita a impregnação de poeira e encardimento,</li>
						<li>Evita o mofo.</li>
					</ul>
				</div>
				<div class="col-md-5 text-left">
					<h4>Fotos</h4>
					
					<div class="row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto2.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto4.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>	
		</div>	
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>
<?php get_footer(); ?>